#!/bin/sh
# wrapper to generate documentation
#

ME_ABOUT='wrapper to peform generate documentation'
ME_USAGE='[<...OPTIONS>] [[--]<...passthru args>]'
ME_COPYRIGHT='Copyright (c) 2018, Doug Bird. All Rights Reserved.'
ME_NAME='phpdox.sh'
ME_DIR="/$0"; ME_DIR=${ME_DIR%/*}; ME_DIR=${ME_DIR:-.}; ME_DIR=${ME_DIR#/}/; ME_DIR=$(cd "$ME_DIR"; pwd)

#
# paths
#
HTML_ROOT=$ME_DIR/web
DOC_ROOT=$ME_DIR/docs
PHPDOX_ROOT=$DOC_ROOT/.phpdox
PHPDOX_HTML_ROOT=$PHPDOX_ROOT/html
PHPDOX_SYMLINK=$HTML_ROOT/.phpdox
APP_DIR=$ME_DIR

print_hint() {
   echo "  Hint, try: $ME_NAME --usage"
}

sedescape() {
   echo "$@" | sed 's/\([[\/.*]\|\]\)/\\&/g'
}

SKIP_PHPDOX=0
OPTION_STATUS=0
while getopts :?qhua-: arg; do { case $arg in
   h|u|a) HELP_MODE=1;;
   -) LONG_OPTARG="${OPTARG#*=}"; case $OPTARG in
      help|usage|about) HELP_MODE=1;;
      skip-phpdox) SKIP_PHPDOX=1;;
      generate-md) GENERATE_MD=1;;
      *) >&2 echo "$ME_NAME: unrecognized long option --$OPTARG"; OPTION_STATUS=2;;
   esac ;; 
   *) >&2 echo "$ME_NAME: unrecognized option -$OPTARG"; OPTION_STATUS=2;;
esac } done
shift $((OPTIND-1)) # remove parsed options and args from $@ list
[ "$OPTION_STATUS" != "0" ] && { >&2 echo "$ME_NAME: (FATAL) one or more invalid options"; >&2 print_hint; exit $OPTION_STATUS; }

if [ "$HELP_MODE" ]; then
   echo "$ME_NAME"
   echo "$ME_ABOUT"
   echo "$ME_COPYRIGHT"
   echo ""
   echo "Usage:"
   echo "  $ME_NAME $ME_USAGE"
   echo ""
   echo "Options:"
   echo "  --generate-md"
   echo "   Use 'html2markdown' to generate a markdown (.md) file from the HTML."
   exit 0
fi

if [ "$SKIP_PHPDOX" = "0" ]; then
   phpdox --version > /dev/null 2>&1 || {
      >&2 echo "$ME_NAME: (FATAL) system is missing the 'phpdox' command"
      exit 1 
   }
fi

if [ "$ME_DIR" != "$(pwd)" ]; then
  cd $ME_DIR || {
     >&2 echo "$ME_NAME: failed to change to app root directory"
     exit 1
  }
fi

REFORMAT_HTML_STATUS=0
reformat_html_status() {
   local message="$1"
   if [ -z "$message" ]; then return $REFORMAT_HTML_STATUS; fi
   local output=
   output="$ME_NAME: error during reformat of HTML"
   if [ ! -z "$message" ]; then
      output="$output: $message"
   fi
   >&2 echo "$output"
   REFORMAT_HTML_STATUS=$ME_ERROR_HTML_COVERAGE_REFORMAT_FAILED
   return $REFORMAT_HTML_STATUS
}

reformat_html() {
   local temp_PHPDOX_HTML_ROOT=
   echo "$ME_NAME: reformat HTML: started"
   [ -d "$PHPDOX_HTML_ROOT" ] || {
      reformat_html_status "directory not found: $PHPDOX_HTML_ROOT"; return $?
   }
   temp_PHPDOX_HTML_ROOT=$(cd "$PHPDOX_HTML_ROOT/../" && pwd) || {
      reformat_html_status "cannot stat parent directory: $PHPDOX_HTML_ROOT"; return $?
   }
   temp_PHPDOX_HTML_ROOT="$temp_PHPDOX_HTML_ROOT/.$(basename $PHPDOX_HTML_ROOT)"
   rm -rf $temp_PHPDOX_HTML_ROOT
   mkdir -p $temp_PHPDOX_HTML_ROOT || {
      reformat_html_status "failed to create temp dir: $temp_PHPDOX_HTML_ROOT"; return $?
   }
   rm -rf $temp_PHPDOX_HTML_ROOT/.html-files
   find $PHPDOX_HTML_ROOT -type f -name '*.*html' > $temp_PHPDOX_HTML_ROOT/.html-files || {
      reformat_html_status "failed to find HTML coverage files, 'find' terminated with exit status $?"; return $?
   }
   cp -Rp $PHPDOX_HTML_ROOT/. $temp_PHPDOX_HTML_ROOT/ || {
      reformat_html_status "failed to copy to temp dir: $temp_PHPDOX_HTML_ROOT"; return $?
   }
   local temp_filename=
   while read filename; do
      temp_filename=$(echo $filename | sed "s|$PHPDOX_HTML_ROOT|\\$temp_PHPDOX_HTML_ROOT|")
      sed "s|$APP_DIR/||g" $filename | sed "s|branch: devel||g" | sed "s|branch: master||g" | sed "s|-dirty||g" > $temp_filename
   done < $temp_PHPDOX_HTML_ROOT/.html-files

   local backup_dir=
   for i in $(seq 1 5); do
      backup_dir="$(dirname $PHPDOX_HTML_ROOT)/.$(basename $PHPDOX_HTML_ROOT)-"$(date "+%Y%m%d%H%M%S")
      [ ! -d "$backup_dir" ] && break
      sleep 1
   done
   mv $PHPDOX_HTML_ROOT $backup_dir || {
      reformat_html_status "failed to create backup coverage, 'mv' terminated with exit status $?"; return $?
   }
   mv $temp_PHPDOX_HTML_ROOT $PHPDOX_HTML_ROOT || {
      reformat_html_status "failed to replace coverage, 'mv' terminated with exit status $?"; return $?
   }
   echo "$ME_NAME: reformat HTML: complete"
}

if [ "$SKIP_PHPDOX" = "0" ]; then
   phpdox "$@" || exit
fi

reformat_html

if [ -d "$PHPDOX_HTML_ROOT" ]; then
   rm -f $PHPDOX_SYMLINK
   ln -s $PHPDOX_HTML_ROOT $PHPDOX_SYMLINK
fi 

reformat_html_status || exit

if [ "$GENERATE_MD" = "1" ]; then
   
   html2markdown --version > /dev/null 2>&1 || {
      >&2 echo "$ME_NAME: --generate-md failed because the command 'html2markdown' is missing"
      exit 1
   }
   
   echo "$ME_NAME: generate-md: started"
   
   #
   # start new phpdox.md temp file
   rm -rf $DOC_ROOT/.phpdox.md
   rm -rf $DOC_ROOT/..phpdox.md
   touch "$DOC_ROOT/.phpdox.md" || exit
   
   #
   # copy phpdox/html to temp dir
   rm -rf $DOC_ROOT/.md-html
   cp -rp $PHPDOX_HTML_ROOT $DOC_ROOT/.md-html || exit
   
   #
   # remove 'css' dir from temp dir
   rm -rf $DOC_ROOT/.md-html/css
   
   #
   # remove 'source' dir from temp dir
   rm -rf $DOC_ROOT/.md-html/source
   
   #
   # ensure temp files do not exist in temp fir
   rm -rf $DOC_ROOT/.md-html/.html-files
   rm -rf $DOC_ROOT/.md-html/.html2markdown-write
   
   html2markdown_write() {
      local filename="$1"
      if ( [ -n "$filename" ] && [ -f "$filename" ] ); then
         if grep -F "$filename" $DOC_ROOT/.md-html/.html2markdown-write > /dev/null 2>&1; then
            return 0
         fi
         html2markdown --asterisk-emphasis --pad-tables --body-width=0 --ignore-links "$filename" >> "$DOC_ROOT/.phpdox.md"
         local status=$?
         [ $status = "0" ] && {
            echo $filename >> $DOC_ROOT/.md-html/.html2markdown-write
         }
         return $status
      fi
      return 1
   }
   
   #
   # find html files that were generated by phpdox
   find $DOC_ROOT/.md-html -type f -name "*.*html" > $DOC_ROOT/.md-html/.html-files || exit
   
   #
   # heading of phpdox.md
   echo "# $(basename $APP_DIR) PHP docs" >> "$DOC_ROOT/.phpdox.md"
   echo "Automatically generated PHP documentation" >> "$DOC_ROOT/.phpdox.md"
   echo "" >> "$DOC_ROOT/.phpdox.md"
   echo "----" >> "$DOC_ROOT/.phpdox.md"
   
   #
   # skip index.xhtml
   echo "$DOC_ROOT/.md-html/index.xhtml" >> $DOC_ROOT/.md-html/.html2markdown-write
   
   #
   # convert 'namespaces.xhtml' (ensuring it toward top of phpdox.md)
   html2markdown_write "$DOC_ROOT/.md-html/namespaces.xhtml" || exit
   #
   # ensure 'classes.xhtml' (ensuring it toward top of phpdox.md)
   html2markdown_write "$DOC_ROOT/.md-html/classes.xhtml" || exit
   #
   # ensure 'interfaces.xhtml' (ensuring it toward top of phpdox.md)
   html2markdown_write "$DOC_ROOT/.md-html/interfaces.xhtml" || exit
   #
   # ensure 'traits.xhtml' (ensuring it toward top of phpdox.md)
   html2markdown_write "$DOC_ROOT/.md-html/traits.xhtml" || exit
   
   #
   # convert remaining html files that were generated by phpdox
   while read filename; do
      [ -e "$filename" ] || continue
      html2markdown_write $filename || exit
   done < $DOC_ROOT/.md-html/.html-files
   
   #
   # save 'Generated using phpDox' message
   GEN_USING_PHPDOX="$(grep '^Generated using phpDox' "$DOC_ROOT/.phpdox.md" | head -1)"
   
   #
   # remove menus
   #sed '/^  \*/d' "$DOC_ROOT/.phpdox.md" > "$DOC_ROOT/..phpdox.md" || exit
   #mv "$DOC_ROOT/..phpdox.md" "$DOC_ROOT/.phpdox.md" || exit
   MENU_STARTWITH=$(sedescape '  * /**phpDox')
   MENU_ENDWITH=$(sedescape '# ')
   sed "/^$MENU_STARTWITH/,/^$MENU_ENDWITH/{/^$MENU_STARTWITH/!{/^$MENU_ENDWITH/!d}}" "$DOC_ROOT/.phpdox.md" > "$DOC_ROOT/..phpdox.md"
   mv "$DOC_ROOT/..phpdox.md" "$DOC_ROOT/.phpdox.md" || exit
   sed "s/^$MENU_STARTWITH//" "$DOC_ROOT/.phpdox.md" > "$DOC_ROOT/..phpdox.md"
   mv "$DOC_ROOT/..phpdox.md" "$DOC_ROOT/.phpdox.md" || exit
   
   #
   # remove repeated 'Generated using phpDox' lines
   sed '/^Generated using phpDox/d' "$DOC_ROOT/.phpdox.md" > "$DOC_ROOT/..phpdox.md" || exit
   mv "$DOC_ROOT/..phpdox.md" "$DOC_ROOT/.phpdox.md" || exit
   
   #
   # add 'Generated using phpDox' one time using placeholder
   #sed "s/--Generated using phpDox--/$(sedescape $GEN_USING_PHPDOX)/" "$DOC_ROOT/.phpdox.md" > "$DOC_ROOT/..phpdox.md" || exit
   #mv "$DOC_ROOT/..phpdox.md" "$DOC_ROOT/.phpdox.md" || exit
   
   #
   # use '-' for blank table headings
   sed 's/|  [[:space:]]/| -/g' "$DOC_ROOT/.phpdox.md" > "$DOC_ROOT/..phpdox.md" || exit
   mv "$DOC_ROOT/..phpdox.md" "$DOC_ROOT/.phpdox.md" || exit
   
   #
   # trim multi newlines in phpdox.md
   sed '/^$/N;/^\n$/D' "$DOC_ROOT/.phpdox.md" > "$DOC_ROOT/..phpdox.md" || exit
   mv "$DOC_ROOT/..phpdox.md" "$DOC_ROOT/.phpdox.md" || exit
   sed '1{/^$/d}' "$DOC_ROOT/.phpdox.md" > "$DOC_ROOT/..phpdox.md" || exit
   mv "$DOC_ROOT/..phpdox.md" "$DOC_ROOT/.phpdox.md" || exit
   
   #
   # append footer
   echo "" >> "$DOC_ROOT/.phpdox.md"
   echo "----" >> "$DOC_ROOT/.phpdox.md"
   echo "# Legal" >> "$DOC_ROOT/.phpdox.md"
   echo "$ME_COPYRIGHT" >> "$DOC_ROOT/.phpdox.md"
   echo "" >> "$DOC_ROOT/.phpdox.md"
   echo "$(basename $ME_DIR) is copyrighted free software and is distributed under the terms of the MIT license or the GPLv3 license." >> "$DOC_ROOT/.phpdox.md"
   echo "" >> "$DOC_ROOT/.phpdox.md"
   echo "This document was automatically generated by the following:" >> "$DOC_ROOT/.phpdox.md"
   echo " * $(basename $ME_DIR)/$ME_NAME" >> "$DOC_ROOT/.phpdox.md"
   echo " * $(html2markdown --version)" >> "$DOC_ROOT/.phpdox.md"
   echo "$GEN_USING_PHPDOX" | sed 's/Generated using / * /' >> "$DOC_ROOT/.phpdox.md"
   echo "" >> "$DOC_ROOT/.phpdox.md"
   
   #
   # copy temp file to phpdox.md
   mv "$DOC_ROOT/.phpdox.md" "$DOC_ROOT/phpdox.md" || exit
   
   echo "$ME_NAME: generate-md: complete"
   echo "$ME_NAME: generated '$DOC_ROOT/phpdox.md'"
   
   #
   # cleanup
   rm -rf $DOC_ROOT/.md-html
fi




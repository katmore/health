<?php
/*
 * host-sanity endpoint configuration
 */
$config = [];

/*
 * @var array[] $config['bin'] - sanity script configuration:
 * Assoc array of scripts localted in the dir 'healthsvc/bin/sanity'
 *    (and any arguments to pass) that will be executed.
 * The array key is the "label" unique to the test.
 */
$config['bin'] = [];

/*
 * @var array[] $config['exec'] - sanity script configuration:
 * Assoc array of system commands
 *    (and any arguments to pass) that will be executed.
 * The array key is the "label" unique to the test.
 */
$config['exec'] = [];

/*
 * @var int|int[] $config['warn-exit-status'] - sanity script configuration:
 * Assoc array of exit status codes that should be considered a "warning" instead of failure
 *    for any 'exec' or 'bin' configured tests.
 * Multiple exit status codes that should be considered warnings can be defined for a single 
 *    test by using an array value consisting of integers; using integer value alone will define 
 *    only one exit status code to be considered a warning. 
 * The array key is the "label" unique to the test.
 */
$config['warn-exit-status'] = [];

/*
 * @var string $config['exec']['sample-test'] - 'sample-test' test configuration:
 * Defines the 'sample-test' test.
 *    Example: 'echo "sample test"'
 * The example above executes the 'echo' command on the local system.
 *    The text "sample test" is piped to "stdout".
 */
$config['exec']['sample-test'] = 'echo "sample test"';

/*
 * @var string $config['exec']['sample-warning'] - 'sample-warning' test configuration:
 * Defines the 'sample-warning' test. 
 *    Example: '>&2 echo "sample warning"; exit 3'
 * The example above executes the 'echo' and 'exit' commands on the local system.
 *    The "sample warning" text is piped to "stderr" (due to the '>&2' redirection syntax).
 *    The test ends with exit status 3 due to the 'exit 3' command.
 */
$config['exec']['sample-warning'] = '>&2 echo "sample warning"; exit 3';

/*
 * $config['warn-exit-status']['sample-warning'] - 'sample-warning' exit status configuration:
 * Defines the exit status codes that will cause the test to be considered a "warning".
 *    Example: 3
 * When defined with the example value above, and with the test defined with the command 
 *    '>&2 echo "sample warning"; exit 3', this test will always result in a warning because the 
 *    exit status is always set to 3 with the 'exit 3' command. 
 */
$config['warn-exit-status']['sample-warning'] = 3;

/*
 * @var string $config['bin']['tmp-space'] - 'tmp-space' test configuration:
 * Defines the 'tmp-space' test to execute the 'bin/sanity/free-space-check' on the local system.
 *    Example: 'free-space-check --min-percent-free=30 /tmp'
 * According to 'free-space-check --help', in the example above:
 *    The <PATH> argument specified is "/tmp".
 *    The "--min-percent-free" option defines the minimum percent that should exist on the <PATH>
 *    for the test to be considered a success. 
 */
$config['bin']['tmp-space'] = 'free-space-check --min-percent-free=30 /tmp';

/*
 * @var string $config['bin']['ram-usage'] - 'ram-usage' test configuration:
 * Defines the 'ram-usage' test to execute the 'bin/sanity/avg-ram-check' on the local system.
 *    Example: 'avg-ram-check 75'
 * According to 'avg-ram-check --help', in the example above:
 *    The <MAX-PERCENT> argument specified is "75".
 *    This specifies the maximum amount of average ram usage on the local system for the test to 
 *       be considered a "success". 
 *    The "--warn-percent" option defines the maximum amount of average ram usage on the local 
 *    system for the test to be considered a "warning" and terminate with the exit code 5.
 */
$config['bin']['ram-usage'] = 'avg-ram-check 75 --warn-percent=50';

/*
 * $config['warn-exit-status']['ram-usage'] - 'ram-usage' exit status configuration:
 * Defines the exit status codes that will cause the test to be considered a "warning"
 *    rather than a "failure".
 *    Example: [5,8,9]
 * According to 'avg-ram-check --help' these exit status codes have the following meanings:
 *    5: average ram usage above warning threshold
 *    7: system is missing the "sar" command
 *    8: parse error while processing "sar" command output
 */
$config['warn-exit-status']['ram-usage'] = [5,7,8];

/*
 * @var string $config['bin']['reboot-required'] - 'reboot-required' test configuration:
 * Defines the 'reboot-required' test to execute the 'bin/sanity/reboot-required-check' on the local system.
 *    Example: 'reboot-required-check'
 */
$config['bin']['reboot-required'] = 'reboot-required-check';

/*
 * $config['warn-exit-status']['reboot-required'] - 'reboot-required' exit status configuration:
 * Defines the exit status codes that will cause the test to be considered a "warning"
 *    rather than a "failure".
 *    Example: 7
 * According to 'reboot-required-check --help' this exit status code has the following meaning:
 *    7: unable to determine if reboot is required on this system
 */
$config['warn-exit-status']['reboot-required'] = 7;

/*
 * @var string $config['bin']['security-updates'] - 'security-updates' test configuration:
 * Defines the 'security-updates' test to execute the 'bin/sanity/security-updates-check' on the local system.
 *    Example: 'security-updates-check'
 */
$config['bin']['security-updates'] = 'security-updates-check';

/*
 * $config['warn-exit-status']['security-updates'] - 'security-updates' exit status configuration:
 * Defines the exit status codes that will cause the test to be considered a "warning"
 *    rather than a "failure".
 *    Example: 7
 * According to 'security-updates --help' this exit status code has the following meaning:
 *    7: unable to determine if security updates are available on this system
 */
$config['warn-exit-status']['security-updates'] = 7;

/*
 * @var string $config['bin']['php-cli-timezone'] - 'php-cli-timezone' test configuration:
 * Defines the 'php-cli-timezone' test to execute the 'bin/sanity/timezone-check.php' on the local system.
 *    Example: 'timezone-check.php --same-offset-ok America/Los_Angeles'
 * According to 'timezone-check.php --help', in the example above:
 *    The "America/Los_Angeles" is the "<EXPECTED-TIMEZONE>" which is the imezone name of the local php configuration.
 *    The option "--same-offset-ok" checks if php's timezone has the same UTC offset as the 
 *       <EXPECTED-TIMEZONE> when its timezone name does not match.
 */
$config['bin']['php-cli-timezone'] = 'timezone-check.php --same-offset-ok America/Los_Angeles';

/*
 * @var string $config['bin']['system-timezone'] - 'system-timezone' test configuration:
 * Defines the 'system-timezone' test to execute the 'bin/sanity/timezone-check' on the local system.
 *    Example: 'timezone-check --same-offset-ok America/Los_Angeles'
 * According to 'timezone-check --help', in the example above:
 *    The "America/Los_Angeles" is the "<EXPECTED-TIMEZONE>" which is the imezone name of the local php configuration.
 *    The option "--same-offset-ok" checks if system's timezone has the same UTC offset as the
 *       <EXPECTED-TIMEZONE> when its timezone name does not match.
 */
$config['bin']['system-timezone'] = 'timezone-check --same-offset-ok America/Los_Angeles';

/*
 * @var string $config['bin']['unattended-upgrades'] - 'unattended-upgrades' test configuration:
 * Defines the 'unattended-upgrades' test to execute the 'bin/sanity/unattended-upgrades-check' on the local system.
 *    Example: 'unattended-upgrades-check --autoclean-interval-max=1 --reboot-off'
 * According to 'unattended-upgrades-check --help', in the example above:
 *    The option "--autoclean-interval-max=1" enforces that the apt config value 
 *       "APT::Periodic::AutocleanInterval" is 1 or lower.
 *    The option "--reboot-off" enforces that the apt config value 
 *       "Unattended-Upgrade::Automatic-Reboot" is "true".
 */
$config['bin']['unattended-upgrades'] = 'unattended-upgrades-check --autoclean-interval-max=1 --reboot-on';

/*
 * $config['warn-exit-status']['unattended-upgrades'] - 'unattended-upgrades' exit status configuration:
 * Defines the exit status codes that will cause the test to be considered a "warning"
 *    rather than a "failure".
 *    Example: [5,7,10]
 * According to 'unattended-upgrades-check --help' these exit status codes have the following meanings:
 *    5: AutocleanInterval is not enabled
 *    7: unable to determine if security updates are available on this system
 *   10: AutocleanInterval exceeds the --autoclean-interval-max value
 */
$config['warn-exit-status']['unattended-upgrades'] = [5,7,10];

return $config;




















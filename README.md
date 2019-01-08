# Healthsvc
health webservice

Healthsvc is a system health status service with a RESTful API interface.
It can be used stand-alone or be integrated into existing projects. It is intended to be used conjunction with devops workflows, functional testing, monitoring software, etc.

## Usage as Standalone Service
 * Download *healthsvc*:
    ```sh
    git clone https://github.com/katmore/healthsvc.git
    ```

 * Update using *Composer*:
    ```sh
    cd healthsvc
    composer update
    ```

 * Print list of available "host-sanity" tests using the `host-sanity-config.php` command-line utility
    ```sh
    bin/host-sanity-config.php --print-bin-list
    ```

 * Add a "host-sanity" test with the label "free-space" using the `host-sanity-config.php` command-line utility
    ```sh
    bin/host-sanity-config.php --bin free-space free-space-check /tmp
    ```

 * Configure endpoint for use with HTTP server:
     * **Dev use only** 
        * start the [`webservice`](./bin/webservice) command-line utility
        ```sh
        bin/webservice
        ```
        
     * **Production or Dev**
        * create a symlink to [`healthsvc/web`](./web) dir in existing http root
        ```sh
        ln -s /var/www/healthsvc/web /var/www/html/healthsvc
        ```
        * **--OR--**
        * use the [`healthsvc/web`](./web) dir as the http root:
        ```ini
        # nginx example
        server {
        ...
            root   /var/www/healthsvc/web;
        ...
        }
        ```

 * Test the [`web/host-sanity.php`](./web/host-sanity.php) webservice endpoint
   * For example, using `curl` command-line utility
     ```sh
     curl http://localhost:8000/host-sanity.php
     ```
  * Example `web/host-sanity.php` response body when tests in "success" status (*200/OK* response code)
     ```json
     {
      "hostname": "my-host",
      "exec_exit_status": [],
      "health_status_time": "2018-12-11T21:51:36-08:00",
      "health_status_ttl": 0,
      "message": "total success",
      "health_info": {
          "free-space": {
              "stdout": [
                  "ok: '\/tmp' has 81% free disk space"
              ]
          }
      },
      "health_success": [
          "free-space"
      ],
      "health_warn": [],
      "health_failure": []
     }
     ```
  * Example `web/host-sanity.php` response body when one or more tests has "failure" status (*500/Internal Server Error* response code)
     ```json
     {
      "hostname": "my-host",
      "exec_exit_status": {
          "free-space": 3
      },
      "health_status_time": "2018-12-11T21:58:45-08:00",
      "health_status_ttl": 0,
      "message": "one or more failures",
      "health_info": [],
      "health_success": [],
      "health_warn": [],
      "health_failure": {
          "free-space": {
              "stdout": [
                  "'\/tmp' has only 10% free disk space (20% is minimum required)"
              ]
          }
      }
     }
     ```
     
## Usage in Existing Projects
 * See [PHP usage documentation](./docs/phpdox.md) for more details.

 * Use *Composer* to add to an existing project.
    ```sh
    composer require katmore/healthsvc
    ```

## Unit Tests
 * [`docs/coverage.txt`](./docs/coverage.txt): unit test coverage report
 * [`phpunit.xml.dist`](./phpunit.xml.dist): PHPUnit configuration file
 * [`tests/phpunit`](./tests/phpunit): source code for unit tests

To perform unit tests, execute phpunit located in the `vendor/bin` directory.
```sh
vendor/bin/phpunit
```

The [`tests.sh`](./tests.sh) wrapper script is provided for convenience.
```sh
./tests.sh
```

## Legal
"Healthsvc" is distributed under the terms of the [MIT license](LICENSE) or the [GPLv3](GPLv3) license.

Copyright (c) 2018-2019, Doug Bird. All rights reserved.

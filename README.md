# Healthsvc
health webservice

Healthsvc is a library that facilitates creation of a RESTful health status API.
It is designed to integrate into existing projects to provide webservice endpoints which can be used conjunction with devops workflows, functional tests, monitoring software, etc.

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

Copyright (c) 2018, Doug Bird. All rights reserved.

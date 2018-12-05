<?php

/*
 *
 * assoc array of commands to execute from the test_dir
 */
$config['bin'] = [];
$config['bin']['tmp-space'] = 'free-space-check --min-percent-free=30 /tmp';
$config['bin']['ram-usage'] = 'avg-ram-check 75';
$config['warn-exit-status']['ram-usage'] = [5,8,9];

$config['bin']['reboot-required'] = 'reboot-required-check';
$config['warn-exit-status']['reboot-required'] = 3;

$config['bin']['security-updates'] = 'security-updates-check';
$config['warn-exit-status']['security-updates'] = 3;

$config['bin']['php-cli-timezone'] = 'timezone-check.php --same-offset-ok America/Los_Angeles';
$config['bin']['system-timezone'] = 'timezone-check --same-offset-ok America/Los_Angeles';

$config['bin']['unattended-upgrades'] = 'unattended-upgrades-check --autoclean-interval-max=1 --reboot-off';
$config['warn-exit-status']['unattended-upgrades'] = [5,10];





































return $config;
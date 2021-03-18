<?php

$databases['default']['default'] = [
  'database' => $_ENV['DATABASE_NAME'] ?? '',
  'username' => $_ENV['DATABASE_USERNAME'] ?? '',
  'password' => $_ENV['DATABASE_PASSWORD'] ?? '',
  'prefix' => $_ENV['DATABASE_PREFIX'] ?? '',
  'host' => $_ENV['DATABASE_HOSTNAME'] ?? 'localhost',
  'port' => $_ENV['DATABASE_PORT'] ?? '3306',
  'namespace' => $_ENV['DATABASE_NAMESPACE'] ?? 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => $_ENV['DATABASE_DRIVER'] ?? 'mysql',
];

$settings['config_sync_directory'] = '../config';
$settings['file_private_path'] = '../private-files';
$settings["file_temp_path"] = '../tmp';
$databases['default']['default'] = array (
  'database' => 'drush_fix',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'YPxf-OzDA3Do8tJ53zAot2pof0-iIAntGG5RJAoQImzl3Ttf8HaacyaPlMaq5LVxkcyhOm4Vpw';

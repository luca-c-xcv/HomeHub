<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => '',
  'overwriteprotocol' => 'https',
  'overwritehost' => '',
  'overwritewebroot' => '/boxhub',
  'overwritecondaddr' => '',
  'passwordsalt' => '',
  'secret' => '',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => '',
    2 => '*.homehub_frontend',
    3 => '',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '',
  'overwrite.cli.url' => '',
  'dbname' => '',
  'dbhost' => 'homehub_sql_1',
  'dbport' => '',
  'dbtableprefix' => '',
  'mysql.utf8mb4' => true,
  'dbuser' => '',
  'dbpassword' => '',
  'installed' => true,
  'twofactor_enforced' => 'true',
  'twofactor_enforced_groups' => 
  array (
  ),
  'twofactor_enforced_excluded_groups' => 
  array (
  ),
  'maintenance' => false,
  'theme' => '',
  'default_language' => 'it',
  'remember_login_cookie_lifetime' => 604800,
  'session_lifetime' => 86400,
  'auto_logout' => true,
  'skeletondirectory' => '',
  'appcodechecker' => true,
  'config_is_read_only' => true,
  'mail_smtpmode' => 'smtp',
  'mail_from_address' => '',
  'mail_domain' => '',
  'mail_smtpport' => '',
  'mail_smtpsecure' => 'ssl',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => 1,
  'mail_smtphost' => '',
  'mail_smtpname' => '',
  'mail_smtppassword' => '',
  'mail_sendmailmode' => 'pipe',
  'loglevel' => 2,
  'default_phone_region' => 'IT',
);

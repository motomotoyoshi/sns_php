<?php

  init_set('display_errors', 1);

  define('DSN', 'mysql:dbhost=localhost;dbname=sns_php');
  define('DB_USERNAME', 'dbuser');
  define('DB_PASSWORD', 'okipo121');

  require_once(__DIR__ . '/../lib/functions.php');
  require_once(__DIR__ . '/../autoload.php');

  session_start();
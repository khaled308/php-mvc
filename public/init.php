<?php

require_once '../app/config/database.php';
require_once '../app/helpers/functions.php';

spl_autoload_register(function ($class) {
  $path = __DIR__ . '/../app/' . $class . '.php';
  require_once $path;
});
<?php

namespace helpers;

use PDO;
use PDOException;

final class DB
{

  private static $instance = null;
  private static $connection;

  private function __construct()
  {
  }
  private function __clone()
  {
  }

  public static function getInstance(): DB
  {
    if (is_null(self::$instance)) {
      self::$instance = new DB;
    }
    return self::$instance;
  }

  public static function connect()
  {
    try {
      $dsn = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
      self::$connection = new PDO($dsn, DB_USER, DB_PASSWORD);
      self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public static function getConnection(): PDO
  {
    return self::$connection;
  }
}
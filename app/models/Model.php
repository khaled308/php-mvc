<?php

use helpers\DB;

class Model
{
  public static function all(string $table)
  {
    $connection = DB::getConnection();
    $query = "SELECT * FROM ${table}";

    $stmt = $connection->query($query);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }
}
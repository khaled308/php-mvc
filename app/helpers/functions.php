<?php

function dd($data = null)
{
  echo "<pre>";
  print_r($data);
  echo "</pre>";
  die();
}

function view(string $path)
{
  require_once __DIR__ . '/../views/' . $path . '.php';
}
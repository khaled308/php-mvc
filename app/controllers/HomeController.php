<?php

namespace controllers;

class HomeController
{
  static function index()
  {
    return function () {
      view('home');
    };
  }
}
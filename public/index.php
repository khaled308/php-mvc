<?php

session_start();
require_once './init.php';

use helpers\DB;

DB::connect();

App::start();
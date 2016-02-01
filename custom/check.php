<?php

include 'vendor/autoload.php';

use App\Login;
use App\Requered;

$obj = new Login();
$obj->index($_POST);


<?php
include '../vendor/autoload.php';
use App\Phonebook;
use App\Requered;

$obj = new Phonebook();
$obj->store($_POST,$_FILES);



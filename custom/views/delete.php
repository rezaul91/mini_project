<?php
include '../vendor/autoload.php';
use App\Phonebook;
use App\Requered;

$obj = new Phonebook();
$obj->delete($_REQUEST['id']);


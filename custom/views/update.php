<?php
include '../vendor/autoload.php';
use App\Phonebook;
use App\Requered;

$obj = new Phonebook();
$obj->update($_POST,$_FILES);


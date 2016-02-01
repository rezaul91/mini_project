<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

session_start();

/**
 * Description of Requerment
 *
 * @author sonjoy
 */
class Requered {

    //put your code here
    static public function debug($data = null) {
        echo '<pre>';
        print_r($data);
        exit();
    }

    static public function redirect($url = "/custom/views/index.php") {
        header("Location:" . $url);
    }

    static public function redirect1($url = "/custom/index.php") {
        header("Location:" . $url);
    }

    static public function connection() {
        $con = mysql_connect("localhost", "root", "") or die(mysql_error());
        $db = mysql_select_db("phonebook") or die("Database is not established");
    }

    static public function success_message($msg = null) {

        if (is_null($msg)) {
            $_message = $_SESSION['message'];
            $_SESSION['message'] = null;
            return $_message;
        } else {
            $_SESSION['message'] = $msg;
//            Requered::$_SESSION['message'];
        }
    }

    static public function unsuccess_message($msg = null) {
        if (is_null($msg)) {
            $_message = $_SESSION['message'];
            $_SESSION['message'] = null;
            return $_message;
        } else {
            $_SESSION['message'] = $msg;
        }
    }

}

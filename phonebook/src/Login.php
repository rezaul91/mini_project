<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

include 'vendor/autoload.php';

use App\Requered;
use App\Phonebook;

class Login {

    public function __construct() {
        session_start();
    }

    public function index($data = null) {
//        Requered::debug($data);
//        Requered::connection();
        //$id = $data['login_id'];
        $email = $data['email_address'];
        $password = $data['password'];

        if ($email && $password) {
            Requered::connection();
            $query = "SELECT * FROM `tbl_login` WHERE `email_address`='" . $email . "'";
            $result = mysql_query($query);
//            Requered::debug($result);

            $numrows = mysql_num_rows($result);
//            Requered::debug($numrows);
            if ($numrows != 0) {
                while ($row = mysql_fetch_assoc($result)) {
                    $dbemail = $row['email_address'];
                    $dbpassword = $row['password'];
                    $dbid = $row['login_id'];
                }
                $_SESSION['email_address'] = $dbemail;
                $_SESSION['password'] = $dbpassword;
                $_SESSION['login_id'] = $dbid;
                if ($email == $dbemail && $password == $dbpassword) {

//                    if($id==NULL){
//                        Requered::unsuccess_message("Email/password is incorrect");
//                        Requered::redirect();
//                    }
                    $_SESSION['status'] = "logged";
                    Requered::success_message("You are successfully logged in!!");
                    Requered::redirect();
                } else {
                    Requered::success_message("Email/password is incorrect");
                    Requered::redirect1();
                }
            } else {
                Requered::success_message("This user isn't exists!!");
                Requered::redirect1();
            }
        } else {
            Requered::success_message("Please enter Email and password");
            Requered::redirect1();
        }
    }

    public function checklog() {
        //echo $_SESSION['status'];
        //die();
        if ($_SESSION['status'] == "logged") {
            Requered::success_message("You are already logged in!!");
            Requered::redirect();
        }
    }

}

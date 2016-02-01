<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Phonebook
 *
 * @author sonjoy
 */

namespace App;

//include '/vendor/autoload.php';

use App\Requered;
use App\Login;

class Phonebook {

//put your code here
    public $id;
    Public $fname;
    public $lname;
    public $nname;
    public $image;
    public $mobile;
    public $home_phone;
    public $work_phone;
    public $address;
    public $city;
    public $country;
    public $zip_code;

    public function __construct() {
        Requered::connection();
        if (isset($_SESSION['login_id']) && !empty($_SESSION['login_id'])) {
            $this->index();
        } else {
            $obj = new Login();
            $obj->index();
        }
    }

    public function index($search = array(), $paging = null) {
        $data = array();
        $num = $paging['page_id'];
//        Requered::debug($paging);
//        if (is_array($search) && count($search) > 0) {
//            // 
//            $searchq = $search['search'];
//
//            $query = "SELECT * FROM `tbl_info` WHERE `fname` LIKE '%$searchq%' OR `lname` LIKE '%$searchq%' OR `nname` LIKE '%$searchq%' OR `mobile` LIKE '%$searchq%' OR `home_phone` LIKE '%$searchq%' OR `work_phone` LIKE '%$searchq%'";
//
//            $result = mysql_query($query);
//
//            $count = mysql_num_rows($result);
//
//            if ($count == 0) {
//                echo "Nothing Found";
//            } else {
//                while ($row = mysql_fetch_object($result)) {
//                    $data[] = $row;
////                    
//                }
//                return $data;
//            }
//        } else if (isset($paging)) {
//            if ($num == 0 || $num == 1) {
//                $page = 0;
//            } else {
//                $page = ($num * 10) - 10;
//            }
//            $query = "SELECT * FROM `tbl_info` LIMIT $page,10";
//            $result = mysql_query($query);
////            echo $result;
//            while ($row = mysql_fetch_object($result)) {
//                $data[] = $row;
//            }
//            return $data;
//        } else {
            $query = "SELECT * FROM `tbl_info`";
//        Requered::debug($query);
            $result = mysql_query($query);
            while ($row = mysql_fetch_object($result)) {
                $data[] = $row;
            }

            return $data;
//        }
    }

    public function store($data = null, $file = null) {
      //Requered::debug($data);
        if (empty($data) && empty($file)) {
            Requered::unsuccess_message("Please fill up the fields !!");
            Requered::redirect();
        }
        $fname = $data['fname'];
        $lname = $data['lname'];
//        $nname = $data['nname'];
        $gender = $data['gender'];
        $mobile = $data['mobile'];
        $home_phone = $data['home_phone'];
        $work_phone = $data['work_phone'];
        $address = $data['address'];
        $city = $data['city'];
        $country = $data['country'];
        $zip_code = $data['zip_code'];
        $check = $data['check'];




        if (isset($data['upload'])) {
            $image_name = $file['image_name']['name'];
            $image_type = $file['image_name']['type'];
            $image_size = $file['image_name']['size'];
            $image_temp_file = $file['image_name']['tmp_name'];
            $error = $file['image_name']['error'];

            $chk = move_uploaded_file($image_temp_file, "images/$image_name");

            if ($error > 0) {
                echo "Error";
            } else if (file_exists("upload/$image_name")) {
                echo "$image_name.File already exists";
            } else if ($chk) {
                $image = $image_name;

//                    
            }
        }
        $query = "INSERT INTO `tbl_info`(`fname`, `lname`,`gender`, `image_name`,`mobile`, `home_phone`, `work_phone`, `address`, `city`, `country`, `zip_code`) VALUES ('" . $fname . "','" . $lname  . "','" . $gender . "','" . $image . "','" . $mobile . "','" . $home_phone . "','" . $work_phone . "','" . $address . "','" . $city . "','" . $country . "','" . $zip_code . "')";
        $result = mysql_query($query);
//        Requered::debug($result);
        if ($result) {
            Requered::success_message("Your Information is successfully Saved !!");
        } else {
            Requered::unsuccess_message("Your Information is not Saved !!");
        }
        Requered::redirect();
    }

    public function update($data = null, $file = null) {
//        Requered::debug($data);

        $id = $data['info_id'];
        $fname = $data['fname'];
        $lname = $data['lname'];
//        $nname = $data['nname'];
        $gender = $data['gender'];
        $mobile = $data['mobile'];
        $home_phone = $data['home_phone'];
        $work_phone = $data['work_phone'];
        $address = $data['address'];
        $city = $data['city'];
        $country = $data['country'];
        $zip_code = $data['zip_code'];




        if (isset($data['upload'])) {
            $image_name = $file['image_name']['name'];
            $image_type = $file['image_name']['type'];
            $image_size = $file['image_name']['size'];
            $image_temp_file = $file['image_name']['tmp_name'];
            $error = $file['image_name']['error'];

            $chk = move_uploaded_file($image_temp_file, "images/$image_name");

            if ($error > 0) {

                $query = "UPDATE `tbl_info` SET `info_id`='" . $id . "',`fname`='" . $fname . "',`lname`='" . $lname . "',`gender`='" . $gender . "',`mobile`='" . $mobile . "',`home_phone`='" . $home_phone . "',`work_phone`='" . $work_phone . "',`address`='" . $address . "',`city`='" . $city . "',`country`='" . $country . "',`zip_code`='" . $zip_code . "' WHERE `info_id`=" . $id;
                $result = mysql_query($query);
                if ($result) {
                    Requered::success_message("Your Information is successfully Updated !!");
                } else {
                    Requered::unsuccess_message("Your Information is not Updated !!");
                }
                Requered::redirect();
            } else if (file_exists("upload/$image_name")) {
                echo "$image_name.File already exists";
            } else if ($chk) {
                $image = $image_name;

                $query = "UPDATE `tbl_info` SET `info_id`='" . $id . "',`fname`='" . $fname . "',`lname`='" . $lname . "',`image_name`='" . $image . "',`mobile`='" . $mobile . "',`home_phone`='" . $home_phone . "',`work_phone`='" . $work_phone . "',`address`='" . $address . "',`city`='" . $city . "',`country`='" . $country . "',`zip_code`='" . $zip_code . "' WHERE `info_id`=" . $id;
//        Requered::debug($query);
                $result = mysql_query($query);

                if ($result) {
                    Requered::success_message("Your Information is successfully Updated !!");
                } else {
                    Requered::unsuccess_message("Your Information is not Updated !!");
                }
//                   
            }
        }

        Requered::redirect();
    }

    public function show($info_id = null) {
        $query = "SELECT * FROM `tbl_info` WHERE `info_id` =$info_id";
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;
    }

    public function delete($info_id = null) {
        $query = "DELETE FROM `tbl_info` WHERE `tbl_info`.`info_id` =" . $info_id;
        $result = mysql_query($query);
//       
        if ($result) {
            Requered::success_message("Your information is successfully Removed!!");
        } else {
            Requered::unsuccess_message("Unable to Delete!!");
        }
        Requered::redirect();
    }

    public function pagination() {
        $query = "SELECT * FROM `tbl_info`";
        $result = mysql_query($query);
        $row = mysql_num_rows($result);
        $a = $row / 10;
        $a = ceil($a);
        return $a;
    }

//    public function search($data = null) {
//        $new = array();
//
//
//        Requered::redirect();
//    }

    public function logout() {
        session_destroy();
        Requered::unsuccess_message("You are successfully logged out!");

        Requered::redirect1();
    }

}

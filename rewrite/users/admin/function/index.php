<?php
// session_start();
// // include("../includes/db-config.php");
//
// require_once '../../../configs/paths.php';
//

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../../configs/paths.php';
require_once DB_CONFIG_PATH;
date_default_timezone_set('Asia/Kolkata');
// add

if (isset($_POST['save'])) {

    $add_objcet = json_decode($_POST['add_objcet'], true);

    $name = $add_objcet['name'];

    $phone_number = $add_objcet['phone_number'];
    $whatsapp = $add_objcet['whatsapp'];
    $email = $add_objcet['email'];
    $address = $add_objcet['address'];
    $state = $add_objcet['state'];
    $city = $add_objcet['city'];
    $pincode = $add_objcet['pincode'];
    $aadhaar_number = $add_objcet['aadhaar_number'];
    $pan_number = $add_objcet['pan_number'];
    $benificiary_name = $add_objcet['benificiary_name'];
    $benificiary_account_number = $add_objcet['benificiary_account_number'];
    $bank_name = $add_objcet['bank_name'];
    $ifsc = $add_objcet['ifsc'];
    $shop_name = $add_objcet['shop_name'];
    $pass = $add_objcet['pass'];
    $dob = $add_objcet['dob'];


    $registration_date = date('d F Y, h:i:s A');





    $sql = "INSERT INTO `agent` (`name`, `mobile`, `whatsapp`, `email`, `address`, `state`, `city`, `pincode`, `aadhar_number`, `pan_number`, `benificiary_name`, `benificiary_account_number`, `bank_name`, `ifsc`,`shop_name`,`password`,`registration_date`,`dob`)
    VALUES ('$name', '$phone_number', '$whatsapp', '$email', '$address', '$state', '$city', '$pincode', '$aadhaar_number', '$pan_number', '$benificiary_name', '$benificiary_account_number', '$bank_name', '$ifsc','$shop_name','$pass','$registration_date','$dob')";
    mysqli_query($conn, $sql);

    $sql1 = "SELECT id FROM agent WHERE `mobile`='$phone_number'";
    $res1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($res1);
    $agent_id = $row['id'];



    if (isset($_FILES['profile_img'])) {
        $profile_img = $_FILES['profile_img'];
        $profileImgFilename = $agent_id . "_profile_img." . pathinfo($profile_img['name'], PATHINFO_EXTENSION);
        $profileImgPath = "../../../data/user_images/" . $profileImgFilename;
        move_uploaded_file($profile_img['tmp_name'], $profileImgPath);
        $sql2 = "UPDATE agent SET `profile_img`='$profileImgFilename' WHERE id=$agent_id";
        mysqli_query($conn, $sql2);
    }


    if (isset($_FILES['aadhaar_front_img'])) {
        $aadhaar_front_img = $_FILES['aadhaar_front_img'];
        $aadhaar_front_img_filename = $agent_id . "_aadhaar_front_img." . pathinfo($aadhaar_front_img['name'], PATHINFO_EXTENSION);
        $aadhaar_front_img_path = "../../../data/user_images/" . $aadhaar_front_img_filename;
        move_uploaded_file($aadhaar_front_img['tmp_name'], $aadhaar_front_img_path);
        $sql2 = "UPDATE agent SET `aadhaar_front_img`='$aadhaar_front_img_filename' WHERE id=$agent_id";
        mysqli_query($conn, $sql2);
    }

    if (isset($_FILES['aadhaar_back_img'])) {
        $aadhaar_back_img = $_FILES['aadhaar_back_img'];
        $aadhaar_back_img_filename = $agent_id . "_aadhaar_back_img." . pathinfo($aadhaar_back_img['name'], PATHINFO_EXTENSION);
        $aadhaar_back_img_path = "../../../data/user_images/" . $aadhaar_back_img_filename;
        move_uploaded_file($aadhaar_back_img['tmp_name'], $aadhaar_back_img_path);
        $sql2 = "UPDATE agent SET `aadhaar_back_img`='$aadhaar_back_img_filename' WHERE id=$agent_id";
        mysqli_query($conn, $sql2);
    }

    if (isset($_FILES['pan_img'])) {
        $pan_img = $_FILES['pan_img'];
        $pan_img_filename = $agent_id . "_pan_img." . pathinfo($pan_img['name'], PATHINFO_EXTENSION);
        $pan_img_path = "../../../data/user_images/" . $pan_img_filename;
        move_uploaded_file($pan_img['tmp_name'], $pan_img_path);
        $sql2 = "UPDATE agent SET `pan_img`='$pan_img_filename' WHERE id=$agent_id";
        mysqli_query($conn, $sql2);
    }

    echo 1;



}
//update

if (isset($_POST['update'])) {

    $add_objcet = json_decode($_POST['add_objcet'], true);

    $name = $add_objcet['name'];

    $phone_number = $add_objcet['phone_number'];
    $whatsapp = $add_objcet['whatsapp'];
    $email = $add_objcet['email'];
    $address = $add_objcet['address'];
    $state = $add_objcet['state'];
    $city = $add_objcet['city'];
    $pincode = $add_objcet['pincode'];
    $aadhaar_number = $add_objcet['aadhaar_number'];
    $pan_number = $add_objcet['pan_number'];
    $benificiary_name = $add_objcet['benificiary_name'];
    $benificiary_account_number = $add_objcet['benificiary_account_number'];
    $bank_name = $add_objcet['bank_name'];
    $ifsc = $add_objcet['ifsc'];
    $shop_name = $add_objcet['shop_name'];
    $pass = $add_objcet['pass'];
    $dob = $add_objcet['dob'];
    $agent_id = $add_objcet['id'];






    $sql2 = "UPDATE `agent`
            SET `mobile` = '$phone_number',
                `name` = '$name',
                `whatsapp` = '$whatsapp',
                `email` = '$email',
                `address` = '$address',
                `state` = '$state',
                `city` = '$city',
                `pincode` = '$pincode',
                `aadhar_number` = '$aadhaar_number',
                `pan_number` = '$pan_number',
                `benificiary_name` = '$benificiary_name',
                `benificiary_account_number` = '$benificiary_account_number',
                `bank_name` = '$bank_name',
                `ifsc` = '$ifsc',
                `shop_name` = '$shop_name',
                `password` = '$pass',
                `dob` = '$dob'
            WHERE `id` = $agent_id";
    mysqli_query($conn, $sql2);






    if (isset($_FILES['profile_img'])) {
        $profile_img = $_FILES['profile_img'];
        $profileImgFilename = $agent_id . "_profile_img." . pathinfo($profile_img['name'], PATHINFO_EXTENSION);
        $profileImgPath = "../../../data/user_images/" . $profileImgFilename;
        move_uploaded_file($profile_img['tmp_name'], $profileImgPath);
        $sql2 = "UPDATE agent SET `profile_img`='$profileImgFilename' WHERE id=$agent_id";
        mysqli_query($conn, $sql2);
    }


    if (isset($_FILES['aadhaar_front_img'])) {
        $aadhaar_front_img = $_FILES['aadhaar_front_img'];
        $aadhaar_front_img_filename = $agent_id . "_aadhaar_front_img." . pathinfo($aadhaar_front_img['name'], PATHINFO_EXTENSION);
        $aadhaar_front_img_path = "../../../data/user_images/" . $aadhaar_front_img_filename;
        move_uploaded_file($aadhaar_front_img['tmp_name'], $aadhaar_front_img_path);
        $sql2 = "UPDATE agent SET `aadhaar_front_img`='$aadhaar_front_img_filename' WHERE id=$agent_id";
        mysqli_query($conn, $sql2);
    }

    if (isset($_FILES['aadhaar_back_img'])) {
        $aadhaar_back_img = $_FILES['aadhaar_back_img'];
        $aadhaar_back_img_filename = $agent_id . "_aadhaar_back_img." . pathinfo($aadhaar_back_img['name'], PATHINFO_EXTENSION);
        $aadhaar_back_img_path = "../../../data/user_images/" . $aadhaar_back_img_filename;
        move_uploaded_file($aadhaar_back_img['tmp_name'], $aadhaar_back_img_path);
        $sql2 = "UPDATE agent SET `aadhaar_back_img`='$aadhaar_back_img_filename' WHERE id=$agent_id";
        mysqli_query($conn, $sql2);
    }

    if (isset($_FILES['pan_img'])) {
        $pan_img = $_FILES['pan_img'];
        $pan_img_filename = $agent_id . "_pan_img." . pathinfo($pan_img['name'], PATHINFO_EXTENSION);
        $pan_img_path = "../../../data/user_images/" . $pan_img_filename;
        move_uploaded_file($pan_img['tmp_name'], $pan_img_path);
        $sql2 = "UPDATE agent SET `pan_img`='$pan_img_filename' WHERE id=$agent_id";
        mysqli_query($conn, $sql2);
    }

    echo 1;



}

if (isset($_POST['update_status'])) {
    $status = $_POST['status'];
    $agent_id = $_POST['agent_id'];

    $sql = "UPDATE agent SET `status` = $status WHERE `id`=$agent_id";
    // echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }

}
//login

if (isset($_POST['login'])) {
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $sql = "SELECT `id`, `password` FROM admin WHERE mobile = '$mobile' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['admin_id'] = $row['id'];
        echo 1;

    } else {
        echo 0;
    }

}


?>

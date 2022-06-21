<?php

session_start();

$id = $_SESSION["id"];

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$gender = $_POST["rad1"];
$country = $_POST["country"];
$email = $_POST["email"];
$setpw = $_POST["password1"];
$confirmpw = $_POST["password2"];

$path = $_FILES["propic"];

$temp_path = $path["tmp_name"];

$newpth = ("user_pic/" . time() . ".png");

move_uploaded_file($temp_path, $newpth);

if ($setpw == $confirmpw) {

    $con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

    $con->query("UPDATE user_details SET `pro_pic`='" . $newpth . "',`first_name`='" . $firstname . "',`last_name`='" . $lastname . "',`username`='" . $username . "',`gender`='" . $gender . "',`country`='" . $country . "',`email`='" . $email . "',`set_password`='" . $setpw . "',`confirm_password`='" . $confirmpw . "' WHERE `id`='" . $id . "'");

    header("location:Home.php");
} else {
    header("location:update.php");
}
?>

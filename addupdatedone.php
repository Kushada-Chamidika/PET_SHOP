<?php

session_start();

$addid = $_POST["id"];
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$location = $_POST["location"];
$model = $_POST["model"];
$breed = $_POST["breed"];
$bdy = $_POST["birthdate"];
$gender = $_POST["gender"];
$price = $_POST["price"];
$description = $_POST["description"];

$path = $_FILES["image"];

$temp_path = $path["tmp_name"];

$newpth = ("pet_pictures/" . time() . ".png");

move_uploaded_file($temp_path, $newpth);

$con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

if (isset($addid)) {

    $con->query("UPDATE pet_details SET `name`='" . $name . "',`mobile`='" . $mobile . "',`location`='" . $location . "',`pict_path`='" . $newpth . "',`model`='" . $model . "',`breed`='" . $breed . "',`birthdate`='" . $bdy . "',`gender`='" . $gender . "',`price`='" . $price . "',`description`='" . $description . "' WHERE `add_id`='" . $addid . "'");

    header("location:myadd.php");
} else {
    header("location:addupdate.php");
}
?>


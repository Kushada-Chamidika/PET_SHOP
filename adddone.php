<?php

session_start();
$id = $_SESSION["id"];

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$location = $_POST["location"];
$password = $_POST["password"];
$model = $_POST["model"];
$breed = $_POST["breed"];
$bdy = $_POST["birthdate"];
$gender = $_POST["gender"];
$price = $_POST["price"];
$description = $_POST["description"];
$status = "available";

$path = $_FILES["image"];

$temp_path = $path["tmp_name"];

$newpth = ("pet_pictures/" . time() . ".png");

move_uploaded_file($temp_path, $newpth);

$con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

$result = $con->query("SELECT `confirm_password` FROM user_details WHERE `id`='" . $id . "'");

$rowre1 = mysqli_fetch_assoc($result);

$cnpw = $rowre1["confirm_password"];

if ($cnpw == $password) {

    $con->query("INSERT INTO `pet_details`(`name`,`mobile`,`location`,`password`,`pict_path`,`model`,`breed`,`birthdate`,`gender`,`price`,`description`,`user_id`,`status`) VALUES('" . $name . "','" . $mobile . "','" . $location . "','" . $password . "','" . $newpth . "','" . $model . "','" . $breed . "','" . $bdy . "','" . $gender . "','" . $price . "','" . $description . "','" . $id . "','" . $status . "')");

    header("location:petview.php");
} else {
    header("location:addyourpet.php");
}
?>

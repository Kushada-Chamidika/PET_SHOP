<?php

session_start();

$email = $_POST["email"];
$password = $_POST["paword"];

$con = new mysqli("localhost", "root", "kushada", "petshop", 3307);


$res = $con->query("SELECT * FROM user_details WHERE `email`='" . $email . "' AND `confirm_password`='" . $password . "'");

$count = mysqli_num_rows($res);

$ro = mysqli_fetch_assoc($res);

$id = $ro["id"];


if ($count == 1) {

    $con->query("DELETE FROM user_details WHERE `id`='" . $id . "'");
    header("location:index.php");
} else {

    header("location:delete.php");
}
?>

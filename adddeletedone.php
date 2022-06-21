<?php

session_start();

$id = $_POST["id"];
$password = $_POST["paword"];

$con = new mysqli("localhost", "root", "kushada", "petshop", 3307);


$res = $con->query("SELECT * FROM pet_details WHERE `add_id`='" . $id . "' AND `password`='" . $password . "'");

$count = mysqli_num_rows($res);

$ro = mysqli_fetch_assoc($res);

if ($count == 1) {

    $con->query("DELETE FROM pet_details WHERE `add_id`='" . $id . "'");
    header("location:myadd.php");
} else {

    header("location:myadd.php");
}
?>

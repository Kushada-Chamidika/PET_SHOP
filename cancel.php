<?php

session_start();

$add_id = $_POST["id"];

$status = "available";

$con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

$con->query("DELETE FROM selling_details WHERE `add_id`='" . $add_id . "'");

$con->query("UPDATE pet_details SET `status`='" . $status . "' WHERE `add_id`='" . $add_id . "'");

header("location:petview.php");
?>

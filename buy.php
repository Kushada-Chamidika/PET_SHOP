<?php

session_start();

$add_id = $_POST["id"];

$buyer_id = $_SESSION["id"];

$status = "sold";

$con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

$con->query("INSERT INTO selling_details(`add_id`,`buyer_id`) VALUES('" . $add_id . "','" . $buyer_id . "')");

$con->query("UPDATE pet_details SET `status`='" . $status . "' WHERE `add_id`='" . $add_id . "'");

header("location:petview.php");
?>

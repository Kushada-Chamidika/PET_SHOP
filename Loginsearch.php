<?php

$username = $_POST["usname"];
$password = $_POST["paword"];

$con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

$result_set = $con->query("SELECT * FROM user_details WHERE `username`='" . $username . "' AND `confirm_password`='" . $password . "'");

$row_count = mysqli_num_rows($result_set);

if ($row_count > 0) {

    $row = mysqli_fetch_assoc($result_set);
    $id = $row["id"];

    session_start();
    $_SESSION["id"] = $id;
    header("location:Home.php");
} else {
    header("location:Loginentry.php");
}
?>

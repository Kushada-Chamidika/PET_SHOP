<?php

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

    $con->query("INSERT INTO `user_details`(`pro_pic`,`first_name`,`last_name`,`username`,`gender`,`country`,`email`,`set_password`,`confirm_password`) VALUES('" . $newpth . "','" . $firstname . "','" . $lastname . "','" . $username . "','" . $gender . "','" . $country . "','" . $email . "','" . $setpw . "','" . $confirmpw . "')");

    header("location:Loginentry.php");
}
else{
    header("location:index.php");
    
}

?>

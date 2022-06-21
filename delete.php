<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["id"])) {

    $id = $_SESSION["id"];

    $con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

    $result_set = $con->query("SELECT * FROM user_details WHERE `id`='" . $id . "'");

    $row1 = mysqli_fetch_assoc($result_set);
} else {
    header("location:Loginentry.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete-Petmart</title>
        <link type="text/css" rel="stylesheet" href="delete.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~Delete Your Profile~</h1>

    </center>
    <div class="divup">
        <img class="img1" src="icons8-dog-64.png"/>
        <span class="tit1">PetMart - Find Your Pet Today...</span>

        <h1 class="username"><?php
            echo $row1["first_name"] . " " . $row1["last_name"];
            ?></h1>
        <a href="contact.php">
            <span class="tit1 tit9 titx">Contact Us</span>
        </a>

        <a href="Home.php">
            <span class="tit1 tit7 titx">Home</span>
        </a>

    </div>

    <div class="div1">

        <form method="POST" action="deletedone.php">

            <span class="span">Email :</span>
            <input type="text" placeholder="Enter Your Email" name="email" class="inp" required="true"/>
            <br/>
            <br/>
            <span class="span">Password :</span>
            <input type="password" placeholder="Enter Your Password" name="paword" id="inp" class="inp" required="true"/>
            <span class="show" id="span"  onclick="showpass();"></span>
            <br/>
            <br/>
            <input class="btn" type="submit" value="DELETE"/>
        </form>

    </div>
    <script type="text/javascript" src="delete.js"></script>

</body>

</html>


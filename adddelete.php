<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["id"])) {

    $id = $_SESSION["id"];
    $nu = $_GET["asdfg"];
    
    $con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

    $result_set = $con->query("SELECT * FROM user_details WHERE `id`='" . $id . "'");

    $row1 = mysqli_fetch_assoc($result_set);

    $result_lk = $con->query("SELECT * FROM pet_details WHERE `user_id`='" . $id . "'");

    $rwcount = mysqli_num_rows($result_lk);
} else {
    header("location:Loginentry.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Add-Petmart</title>
        <link type="text/css" rel="stylesheet" href="adddelete.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~Delete Your Add~</h1>

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

        <a href="petview.php">
            <span class="tit1 titlk titx">Pet Mart</span>
        </a>
        <a href="myadd.php">
            <span class="tit1 titls titx">My Adds</span>
        </a>

    </div>

    <div class="div1">

        <form method="POST" action="adddeletedone.php">

            <input style="display: none;" name="id" value="<?php echo $nu?>"/>
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


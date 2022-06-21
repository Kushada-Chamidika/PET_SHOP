<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["id"])) {

    $id = $_SESSION["id"];

    $add = $_POST["asdfg"];

    $con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

    $result_set = $con->query("SELECT * FROM user_details WHERE `id`='" . $id . "'");

    $row1 = mysqli_fetch_assoc($result_set);

    $result_s = $con->query("SELECT * FROM user_details WHERE `id`='" . $add . "'");

    $nu = mysqli_num_rows($result_s);
} else {
    header("location:Loginentry.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit-Petmart</title>
        <link type="text/css" rel="stylesheet" href="update.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~Buyers Details~</h1>

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
    <?php
    if ($nu > 0) {
        while ($rowlk = mysqli_fetch_assoc($result_s)) {
            ?>
            <div class="detaildiv">
                <div class="imgdiv">
                    <img class="imdd" src="<?php echo $rowlk["pro_pic"] ?>"/>
                </div>
                <span class="deta"> - First Name :</span>
                <span class="detai"><?php echo $rowlk["first_name"] ?></span>
                </br>
                </br>
                <span class="deta"> - Last Name :</span>
                <span class="detai"><?php echo $rowlk["last_name"] ?></span>
                </br>
                </br>
                <span class="deta"> - Username :</span>
                <span class="detai"><?php echo $rowlk["username"] ?></span>
                </br>
                </br>
                <span class="deta"> - Gender :</span>
                <span class="detai"><?php echo $rowlk["gender"] ?></span>
                </br>
                </br>
                <span class="deta"> - Country :</span>
                <span class="detai"><?php echo $rowlk["country"] ?></span>
                </br>
                </br>
                <span class="deta"> - Email :</span>
                <span class="detai"><?php echo $rowlk["email"] ?></span>
                </br>
                </br>

            </div>
            </br>
            </br>
            <?php
        }
    }
    ?>
    </br>
    </br>
    </br>

    <center>
        <span class="span1">All Rights Reserved &COPY; 2019</span>
    </center>
    <script type="text/javascript" src="update.js"></script>

</body>

</html>

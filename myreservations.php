<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION["id"])) {

    $id = $_SESSION["id"];

    $con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

    $result_set = $con->query("SELECT * FROM user_details WHERE `id`='" . $id . "'");

    $row1 = mysqli_fetch_assoc($result_set);

    $result_lk = $con->query("SELECT * FROM pet_details NATURAL JOIN selling_details WHERE `buyer_id`='" . $id . "'");

    $rwcount = mysqli_num_rows($result_lk);
} else {
    header("location:Loginentry.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Reservations-Petmart</title>
        <link type="text/css" rel="stylesheet" href="petview.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~ My Reservations ~</h1>

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

        <a href="addyourpet.php">
            <span class="tit1 tit5 titx">Add Your Pet</span>
        </a>
        <a href="myadd.php">
            <span class="tit1 titp titx">My Adds</span>
        </a>
        <a href="petview.php">
            <span class="tit1 titm titx">Pet Mart</span>
        </a>
        <form action="logout.php" method="POST">
            <input class="tit1 tit15 titx tp" value="Log Out" type="submit"/>
        </form>
    </div>
    <?php
    if ($rwcount > 0) {
        while ($rowlk = mysqli_fetch_assoc($result_lk)) {
            ?>
            <div class="detaildiv" >
                <div class="imgdiv">
                    <img class="imdd" src="<?php echo $rowlk["pict_path"] ?>"/>
                </div>
                <span class="deta"> - Owner Name :</span>
                <span class="detai"><?php echo $rowlk["name"] ?></span>
                </br>
                </br>
                <span class="deta"> - Mobile :</span>
                <span class="detai"><?php echo $rowlk["mobile"] ?></span>
                </br>
                </br>
                <span class="deta"> - Location :</span>
                <span class="detai"><?php echo $rowlk["location"] ?></span>
                </br>
                </br>
                <span class="deta"> - Model :</span>
                <span class="detai"><?php echo $rowlk["model"] ?></span>
                </br>
                </br>
                <span class="deta"> - Breed :</span>
                <span class="detai"><?php echo $rowlk["breed"] ?></span>
                </br>
                </br>
                <span class="deta"> - Birthdate :</span>
                <span class="detai"><?php echo $rowlk["birthdate"] ?></span>
                </br>
                </br>
                <span class="deta sl"> - Gender :</span>
                <span class="detai sl sl1"><?php echo $rowlk["gender"] ?></span>
                </br>
                </br>
                <span class="deta sl"> - Description :</span>
                <p class="detai sl sl1"><?php echo $rowlk["description"] ?></p>
                </br>
                </br>
                <span class="deta sl"> - Price :</span>
                <span class="detai sl sl1"><?php echo $rowlk["price"] ?></span>
                </br>
                </br>
                

                <form action="cancel.php" method="POST">
                    <input style="display: none;" name="id" value="<?php echo $rowlk["add_id"]; ?>"/>
                    <input type="submit" value="Cancel" class="buy" />
                </form>

            </div>
            </br>
            </br>
            <?php
        }
    }
    ?>
    </br>
    </br>
    <center>
        <span class="span1">All Rights Reserved &COPY; 2019</span>
    </center>
    <script type="text/javascript" src="petview.js"></script>
</body>

</html>


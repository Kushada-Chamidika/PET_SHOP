<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["id"])) {

    $id = $_SESSION["id"];

    $con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

    $result_set = $con->query("SELECT * FROM user_details WHERE `id`='" . $id . "'");

    $row1 = mysqli_fetch_assoc($result_set);

    $result_lk = $con->query("SELECT * FROM pet_details WHERE `user_id`='" . $id . "' AND `status`='sold'");

    $rwcount = mysqli_num_rows($result_lk);
} else {
    header("location:Loginentry.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sold-Petmart</title>
        <link type="text/css" rel="stylesheet" href="myadd.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~ Sold ~</h1>

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
        <a href="petview.php">
            <span class="tit1 titp titx">Pet Mart</span>
        </a>
        <a href="myadd.php">
            <span class="tit1 titg titx">My Add</span>
        </a>
        <form action="logout.php" method="POST">
            <input class="tit1 tit15 titx tp" value="Log Out" type="submit"/>
        </form>
    </div>
    <?php
    if ($rwcount > 0) {
        while ($rowlk = mysqli_fetch_assoc($result_lk)) {
            ?>
            <div class="detaildiv">
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


                <form action="details.php" method="POST">

                    <input style="display: none" value="<?php $re = $con->query("SELECT * FROM selling_details WHERE `add_id`='" . $rowlk["add_id"] . "'"); $jk = mysqli_fetch_assoc($re); echo $jk["buyer_id"];?>" name="asdfg" />
                    <input type="submit" value="Details" class="bedi"/>
                </form>
                </br>
                </br>
                </br>
                <form action="adddelete.php" method="GET">

                    <input style="display: none" value="<?php echo $rowlk["add_id"] ?>" name="asdfg" />
                    <input type="submit" value="Delete" class="bedi bgs"/>
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
    </br>
    <center>
        <span class="span1">All Rights Reserved &COPY; 2019</span>
    </center>

</body>

</html>


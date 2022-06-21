<!DOCTYPE html>
<?php
$con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

$result_set = $con->query("SELECT * FROM pet_details");

$row1 = mysqli_fetch_assoc($result_set);

$rwcount = mysqli_num_rows($result_set);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pet View-Petmart</title>
        <link type="text/css" rel="stylesheet" href="myadd.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~ Pet View ~</h1>

    </center>
    <div class="divup">
        <img class="img1" src="icons8-dog-64.png"/>
        <span class="tit1">PetMart - Find Your Pet Today...</span>

        <a href="contact.php">
            <span class="tit1 titghj titx">Contact Us</span>
        </a>
        <a href="Loginentry.php">
            <span class="tit1 titjj titx">Log In</span>
        </a>
        <a href="index.php">
            <span class="tit1 titpoi titx">Sign In</span>
        </a>

    </div>
<?php
if ($rwcount > 0) {
    while ($row1 = mysqli_fetch_assoc($result_set)) {
        ?>
            <div class="detaildiv">
                <div class="imgdiv">
                    <img class="imdd" src="<?php echo $row1["pict_path"] ?>"/>
                </div>
                <span class="deta"> - Owner Name :</span>
                <span class="detai"><?php echo $row1["name"] ?></span>
                </br>
                </br>
                <span class="deta"> - Mobile :</span>
                <span class="detai"><?php echo $row1["mobile"] ?></span>
                </br>
                </br>
                <span class="deta"> - Location :</span>
                <span class="detai"><?php echo $row1["location"] ?></span>
                </br>
                </br>
                <span class="deta"> - Model :</span>
                <span class="detai"><?php echo $row1["model"] ?></span>
                </br>
                </br>
                <span class="deta"> - Breed :</span>
                <span class="detai"><?php echo $row1["breed"] ?></span>
                </br>
                </br>
                <span class="deta"> - Birthdate :</span>
                <span class="detai"><?php echo $row1["birthdate"] ?></span>
                </br>
                </br>
                <span class="deta sl"> - Gender :</span>
                <span class="detai sl sl1"><?php echo $row1["gender"] ?></span>
                </br>
                </br>
                <span class="deta sl"> - Description :</span>
                <p class="detai sl sl1"><?php echo $row1["description"] ?></p>
                </br>
                </br>
                <span class="deta sl"> - Price :</span>
                <span class="detai sl sl1"><?php echo $row1["price"] ?></span>


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




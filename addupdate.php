<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["id"])) {

    $id = $_SESSION["id"];

    $nu = $_GET["asdfg"];


    $con = new mysqli("localhost", "root", "kushada", "petshop", 3307);

    $result_set = $con->query("SELECT * FROM user_details WHERE `id`='" . $id . "'");

    $row1 = mysqli_fetch_assoc($result_set);

    $result_lk = $con->query("SELECT * FROM pet_details WHERE `add_id`='" . $nu . "'");

    $rwcount = mysqli_num_rows($result_lk);
    
} else {
    header("location:Loginentry.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Add-Petmart</title>
        <link type="text/css" rel="stylesheet" href="addyourpet.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~Edit Your Add~</h1>

    </center>
    <div class="divup">
        <img class="img1" src="icons8-dog-64.png"/>

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
            <span class="tit1 tit11 titx">Pet Mart</span>
        </a>
        <a href="myadd.php">
            <span class="tit1 titu titx">My Adds</span>
        </a>
    </div>


    <?php
    if ($rwcount > 0) {
        while ($rowlk = mysqli_fetch_assoc($result_lk)) {
            ?>
            <div class="dew">
                <form action="addupdatedone.php" method="POST" enctype="multipart/form-data">
                    </br>
                    </br>
                    <input style="display: none;" name="id" value="<?php echo $nu ?>"/>

                    <br/><br/>
                    <span class="s2">Name :</span>
                    </br>
                    <input class="tf" type="text" placeholder="Enter Your Name" name="name" required="true" value="<?php echo $rowlk["name"];?>"/>
                    <br/><br/>
                    <span class="s2">Mobile Number :</span>
                    </br>
                    <input class="tf" type="text" placeholder="Enter Your Mobile Number" name="mobile" required="true" value="<?php echo $rowlk["mobile"];?>"/>
                    <br/><br/>
                    <span class="s2">Location :</span>
                    </br>
                    <input class="tf" type="text" placeholder="Enter Your Location" name="location" required="true" value="<?php echo $rowlk["location"];?>"/>
                    <br/><br/>
                    <span class="s2">Pet's Image :</span>
                    <input type="file" name="image" required="true"/>
                    <br/><br/>
                    <span class="s2">Pet's Model :</span>
                    </br>
                    <select class="tf" required="true" name="model">
                        <option>Dog</option>
                        <option>Cat</option>
                        <option>Rabbits</option>
                        <option>Bird</option>
                        <option>Fish</option>
                        <option>Butterflies</option>
                        <option>Squeral</option>
                        <option>Other</option>
                    </select>
                    <br/>
                    <br/>
                    <span class="s2">Pet's Breed :</span>
                    </br>
                    <select class="tf" required="true" name="breed">
                        <optgroup label="Dogs">
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                        </optgroup>
                        <optgroup label="Cats">
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                        </optgroup>
                        <optgroup label="Rabbits">
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                        </optgroup>
                        <optgroup label="Birds">
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                        </optgroup>
                        <optgroup label="Fish">
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                        </optgroup>
                        <optgroup label="Butterflies">
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                        </optgroup>
                        <optgroup label="Squerals">
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                            <option>Lion German Shepard</option>
                        </optgroup>
                        <option>Other</option>
                    </select>
                    </br>
                    </br>
                    <span class="s2">Pet's Birthdate :</span>
                    </br>
                    <input class="tf" type="date" placeholder="Enter Pet's Birthdate" name="birthdate" required="true" value="<?php echo $rowlk["birthdate"];?>"/>
                    <br/><br/>
                    <span class="s2">Gender :</span>
                    <input type="radio" name="gender" value="Male" required="true" class="rad"/>
                    <span class="splk">Male</span>
                    <input type="radio" name="gender" value="Female" required="true" class="rad"/>
                    <span class="splk">Female</span>
                    <br/><br/>
                    <span class="s2">Price :</span>
                    </br>
                    <input class="tf" type="number" placeholder="Enter Your Price(LKR)" name="price" required="true" value="<?php echo $rowlk["price"];?>"/>
                    <br/><br/>
                    <span class="s2">Description :</span>
                    </br>
                    <textarea class="tf" placeholder="Description about your pet" name="description" required="true"></textarea>
                    <br/><br/>
                    <input class="addBtn" type="submit" value="Edit Details"/>
                    </br>
                    </br>
                    </br>
                </form>
            </div>
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



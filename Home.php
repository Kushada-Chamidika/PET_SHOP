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
        <title>Home-Petmart</title>
        <link type="text/css" rel="stylesheet" href="Home.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~Home~</h1>

    </center>
    <div class="divup">
        <img class="img1" src="icons8-dog-64.png"/>
        <span class="tit1">PetMart - Find Your Pet Today...</span>
        <span id="set" class="text3 spw" onclick="display()"></span>


        <a href="contact.php">
            <span class="tit1 tit9 titx">Contact Us</span>
        </a>
        <a href="addyourpet.php">
            <span class="tit1 tit9 titx tp">Add Your Pet</span>
        </a>
        <a href="petview.php">
            <span class="tit1 tit12 titx tp">Pet Mart</span>
        </a>
        <form action="logout.php" method="POST">
            <input class="tit1 tit15 titx tp" value="Log Out" type="submit"/>
        </form>
        <h1 class="username"><?php
            echo $row1["first_name"] . " " . $row1["last_name"];
            ?></h1>
    </div>

    <div class="div1" id="div1">
        <div class="div2">
            <img class="im"
                 src="<?php echo $row1["pro_pic"]; ?>"
                 >
        </div>

        <div class="div4">

            <span class="text1">-<?php echo $row1["first_name"] . " " . $row1["last_name"]; ?>
            </span>
            <br/>
            <span class="text1 t2">-<?php echo $row1["email"]; ?></span>
            <br/>
        </div>


        <div  class="div5">

            <div onmouseover="m('a1');" onmouseout="n('a1');" class="div6">
                <span class="text te">First Name:</span>
                </br>
                <span id="a1" class="text3"></span>
                <span class="sp"><?php echo $row1["first_name"]; ?></span>

            </div>
            <br/>

            <div onmouseover="m('a2');" onmouseout="n('a2');" class="div6">
                <span class="text te">Last Name:</span>
                </br>
                <span id="a2"  class="text3"></span>
                <span class="sp"><?php echo $row1["last_name"]; ?></span>
            </div>
            <br/>
            <div onmouseover="m('a3');" onmouseout="n('a3');" class="div6">
                <span class="text te">Username:</span>
                </br>
                <span id="a3"  class="text3"></span>
                <span class="sp"><?php echo $row1["username"]; ?></span>
            </div>
            <br/>
            <div onmouseover="m('a4');" onmouseout="n('a4');" class="div6">
                <span class="text te">Gender:</span>
                </br>
                <span id="a4"  class="text3"></span>
                <span class="sp"><?php echo $row1["gender"]; ?></span>
            </div>
            <br/>

            <div onmouseover="m('a5');" onmouseout="n('a5');" class="div6">
                <span class="text te">Country:</span>
                </br>
                <span id="a5"  class="text3"></span>
                <span class="sp"><?php echo $row1["country"]; ?></span>

            </div>
            <div onmouseover="m('a6');" onmouseout="n('a6');" class="div6">
                <span class="text te">Email:</span>
                </br>
                <span id="a6"  class="text3"></span>
                <span class="sp"><?php echo $row1["email"]; ?></span>
            </div>
            </br>
            <a href="update.php">
                <button class="btn b1">Edit Your Profile</button>
            </a>
            <br/>
            <br/>
            <a href="delete.php">
                <button class="btn b1 b2">Delete Your Profile</button>
            </a>

        </div>         
        <br/>

    </div>

    <h2 class="title">~ OUR VALUES , MISSION AND VISION .</h2>

    <h2 class="to">OUR VALUES .</h2>

    <p class="pq">Everything we do at Pet Universe – from the way we greet you on the phone, to the way
        </br>
        we introduce a new service or train a new team member, is underpinned by the following seven 
        </br>
        core values:</p>

    <ul class="ul"> - Excellence</ul>
    <ul class="ul"> - Care</ul>
    <ul class="ul"> - Innovation</ul>
    <ul class="ul"> - Professionalism</ul>
    <ul class="ul"> - Consistency</ul>
    <ul class="ul"> - Enjoyment</ul>
    <ul class="ul"> - Value for money</ul>

    <h2 class="to">OUR MISSION .</h2>

    <p class="pq">To provide innovative, high-quality, consistent, value-for-money, pet friendly health care that
        </br>
        will make your pet want to come back again…and again.</p>

    <h2 class="to">Our Motto .</h2>

    <p class="pq">…is “Health care from your pet’s point of view.”</p>

    <h2 class="to">Our Vision .</h2>

    <p class="pq">
        5 years from now, Pet Universe will be the ultimate professional veterinary practice that combines 
        </br>
        excellent healthcare delivered in a consistent, innovative, enjoyable, caring and
        </br>
        pet-friendly way to create a value-for-money yet profitable and unforgettable service
        </br>
        experience from our: 
    </p>

    <ul class="ul"> - Pet’s Point of View</ul>
    <ul class="ul"> - Client’s Point of View</ul>
    <ul class="ul"> - Staff’s point of view</ul>
    <ul class="ul"> - Platinum Partner’s Point Of View</ul>
    <ul class="ul"> - Owner’s Point of View</ul>
    </br>
    </br>
    </br>
    </br>
    <center>
        <span class="span1">All Rights Reserved &COPY; 2019</span>
    </center>
    <script type="text/javascript" src="home.js" ></script>

</body>

</html>


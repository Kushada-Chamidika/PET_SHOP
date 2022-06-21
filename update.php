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
        <title>Edit-Petmart</title>
        <link type="text/css" rel="stylesheet" href="update.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~Edit Your Profile~</h1>

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
    <div class="div1lk">

        <form method="POST" action="updatedone.php" enctype="multipart/form-data">

            <span class="spankl">Edit Profile Picture :</span>
            <input type="file" class="inplk" name="propic" required="true"/>
            <br/>
            <br/>

            <span class="spankl">Edit First Name :</span>
            <input type="text" placeholder="Enter First Name" value="<?php echo $row1["first_name"]?>"  name="firstname" class="inplk" required="true"/>
            <br/>
            <br/>

            <span class="spankl">Edit Last Name :</span>
            <input type="text" placeholder="Enter Last Name" value="<?php echo $row1["last_name"]?>" name="lastname" class="inplk" required="true"/>
            <br/>
            <br/>

            <span class="spankl">Edit Username :</span>
            <input type="text" placeholder="Enter Username" name="username" value="<?php echo $row1["username"]?>"  class="inplk" required="true"/>
            <br/>
            <br/>

            <span class="spankl">Edit Gender :</span>
            <span class="spankl">Male</span>
            <input type="radio" value="Male" name="rad1" required="true"/>
            <span class="spankl">Female</span>
            <input type="radio" value="Female" name="rad1" required="true"/>
            <br/>
            <br/>

            <span class="spankl">Edit Country :</span>
            <select name="country" class="inplk" required="true">
                <option></option>
                <option>Sri Lanka</option>
                <option>Australia</option>
                <option>New Zealand</option>
                <option>India</option>
                <option>China</option>
                <option>America</option>
                <option>England</option>
                <option>Switzerland</option>
                <option>Canada</option>
                <option>Brazil</option>
                <option>Italy</option>
                <option>Oman</option>
                <option>Singapore</option>
                <option>Japan</option>
                <option>Russia</option>
                <option>None Of Above</option>
            </select>
            <br/>
            <br/>

            <span class="spankl">Edit Email :</span>
            <input type="email" placeholder="Enter Your Email " value="<?php echo $row1["email"]?>"  name="email" class="inplk" required="true"/>
            <br/>
            <br/>

            <span class="spankl">Edit Password Or Enter Old :</span>
            </br>
            </br>
            <input type="Password" placeholder="Enter Your Password " id="password1"  name="password1"  class="inplk idjk" required="true"/>   
            <span class="indivshow" id="span1"  onclick="showpasswordslk();"></span>
            <br/>
            <br/>

            <span class="spankl">Confirm Password :</span>
            <input type="Password" placeholder="Enter Your Password" id="password2"  name="password2"  class="inplk" required="true"/>
            <span class="indivshow" id="span2" onclick="showpasswordslo();"></span>
            <br/>
            <br/>

            <input type="submit" value="Edit Details" class="bt1"/>

        </form>
    </div>
    
    </br>
    </br>
    </br>
    
    <center>
        <span class="span1">All Rights Reserved &COPY; 2019</span>
    </center>
    <script type="text/javascript" src="update.js"></script>

</body>

</html>

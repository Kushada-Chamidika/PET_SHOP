<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In-Petmart</title>
        <link type="text/css" rel="stylesheet" href="Loginentry.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>
        <h1 class="head">~Log In~</h1>

    </center>
    <div class="divup">
        <img class="img1" src="icons8-dog-64.png"/>
        <span class="tit1">PetMart - Find Your Pet Today...</span>
        
        <a href="contact.php">
            <span class="tit1 tit7 titx">Contact Us</span>
        </a>
        
        <a href="index.php">
            <span class="tit1 tit9 titx">Sign In</span>
        </a>

    </div>

    <div class="div1">

        <form method="POST" action="Loginsearch.php">

            <span class="span">Username :</span>
            <input type="text" placeholder="Enter Your Username" name="usname" class="inp" required="true"/>
            <br/>
            <br/>
            <span class="span">Password :</span>
            <input type="password" placeholder="Enter Your Password" name="paword" id="inp" class="inp" required="true"/>
            <span class="show" id="span"  onclick="showpassword();"></span>
            <br/>
            <br/>
            <input class="btn" type="submit" value="Log In"/>
        </form>

    </div>
    <script type="text/javascript" src="Loginentry.js"></script>
</body>

</html>

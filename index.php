
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign In-Petmart</title>
        <link type="text/css" rel="stylesheet" href="index.css"/>
        <link rel="sortcut icon" href="icons8-dog-64.png"/>
    </head>
    <body class="body">
    <center>

        <h1 class="head1">~Welcome to Petmart~</h1>
    </center>

    <div class="divup">
        <img class="img1" src="icons8-dog-64.png"/>
        <span class="tit1">PetMart - Find Your Pet Today...</span>
        
        <a href="contact.php">
            <span class="tit1 tit7 titx">Contact Us</span>
        </a>
        
        <a href="signpetview.php">
            <span class="tit1 titfg titx">Pet View</span>
        </a>
        
        <a href="Loginentry.php">
            <span class="tit1 tit9 titx">Log In</span>
        </a>

    </div>

    <div class="div1">
        <h3 class="h3">Sign Up Today...</h3>

        <form method="POST" action="Signup1.php" enctype="multipart/form-data">

            <span class="span">Profile Picture :</span>
            <input type="file" class="inp" name="propic" required="true"/>
            <br/>
            <br/>

            <span class="span">First Name :</span>
            <input type="text" placeholder="Enter First Name" name="firstname" class="inp" required="true"/>
            <br/>
            <br/>

            <span class="span">Last Name :</span>
            <input type="text" placeholder="Enter Last Name" name="lastname" class="inp" required="true"/>
            <br/>
            <br/>

            <span class="span">Username :</span>
            <input type="text" placeholder="Enter Username" name="username" class="inp" required="true"/>
            <br/>
            <br/>

            <span class="span">Gender :</span>
            <span class="span">Male</span>
            <input type="radio" value="Male" name="rad1" required="true"/>
            <span class="span">Female</span>
            <input type="radio" value="Female" name="rad1" required="true"/>
            <br/>
            <br/>

            <span class="span">Country :</span>
            <select name="country" class="inp" required="true">
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
            </select>
            <br/>
            <br/>

            <span class="span">Email :</span>
            <input type="email" placeholder="Enter Your Email " name="email" class="inp" required="true"/>
            <br/>
            <br/>

            <span class="span"> Set Password :</span>
            <input type="Password" placeholder="Enter Your Password " id="password1"  name="password1"  class="inp" required="true"/>   
            <span class="indivshow" id="span1"  onclick="showpassworda();"></span>
            <br/>
            <br/>

            <span class="span">Confirm Password :</span>
            <input type="Password" placeholder="Enter Your Password" id="password2"  name="password2"  class="inp" required="true"/>
            <span class="indivshow" id="span2"  onclick="showpasswordb();"></span>
            <br/>
            <br/>

            <input type="submit" value="Sign In" class="bt1"/>

        </form>

        <h3 class="h3">Already have an account :</h3>
        <a href="Loginentry.php">
            <button class="bt1">Log In</button>
        </a>
        <br/>
        <br/>
    </div>
    <br/>
    <br/>
    <center>
        <span class="span1">All Rights Reserved &COPY; 2019</span>
    </center>


    <script type="text/javascript" src="Signup1.js"></script>
</body>
</html>

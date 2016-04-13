<?php
require_once('connect.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>
    <link rel="icon" type="image/png" href="http://icons8.com/wp-content/uploads/2013/07/german_hat-128.png">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<style>

</style>

<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo">HatBox</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="#"><?php
                if(@$_SESSION['user']['id']){
                    echo '<a href="logout.php">Logout</a>';
                }
                else{
                    echo '<a href="signin.php">Sign In</a>';
                }?></a></li>
<li><a href="subscribe.php">Subscribe</a></li>
<li><a href="signup.php">Sign Up</a></li>

</ul>

<ul id="nav-mobile" class="side-nav">
    <li><a href="#">Navbar Link</a></li>
</ul>
<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
</div>
</nav>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">HatBox Subscription Box</h1>
            <div class="row center">
                <h5 class="header col s12 light">A great way to get new appearal and have something to look forward to!</h5>
            </div>
            <div class="row center">
                <a href="subscribe.php" id="download-button"
                   class="btn-large waves-effect waves-light teal lighten-1">Subscribe</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Fast Shipping</h5>

                    <p class="light">We ship all of our products so that they will be in your mailbox on the exact date that you asked for them. We take in account for all weather and shipping problems that may occur and guarantee that you won't open your mail with a frown when your getting your new hat from HatBox!</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                    <h4 class="center brown-text">Beta</h4>
                    <h5 class="center">Group Packages</h5>

                    <p class="light">We are offering a group package deal so you can look fly with your friends. Or, worst comes to worst, cover up that ugly mug that your friend calls hair and get some sick deals!</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">Easy to Sign Up</h5>

                    <p class="light">Sign up is easy! All we need is your social security, your mothers maiden name, your address, phone number, your will, all of your forms of payment, and of course your firstborn child!</p>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">Don't just act the coolest, look the coolest to be the coolest</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Contact Us</h4>
                <p class="left-align light">We are located in Phoenix, Arizona and we have offices open 10 hours a day. You can contact us by phone, email, or go old fashion and mail us back or fax us. All of our information is located down below in our footer. If you're having problems with shipping, don't be shy! Contact us! We will examine the problem and if it is our fault will send you a new hat free!</p>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">The best choice out of all subscription boxes available</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
</div>

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">I am a lone coder and businessman who has built this project from
                    the ground up. I wanted to offer people an exciting new experience to look forward to so they can
                    make new memories and still look fresh.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Contact And</h5>
                <ul>
                    <li><a class="white-text" >Phone:</a></li>
                    <li><a class="white-text" >Fax:</a></li>
                    <li><a class="white-text" >Email:</a></li>
                    <li><a class="white-text" >Mail:</a></li>
                </ul>
            </div>

            <div class="col l3 s12">
                <h5 class="white-text">Connect With Us</h5>
                <ul>
                    <li><a class="white-text" >623.986.0198</a></li>
                    <li><a class="white-text" >623.535.3849</a></li>
                    <li><a class="white-text" >daucen.osborn@west-mec.org</a></li>
                    <li><a class="white-text" >N. 99th Ave., Glendale, AZ 85305</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright <a class="brown-text text-lighten-3" href="index.php">HatBox Subscriptions 2016</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>

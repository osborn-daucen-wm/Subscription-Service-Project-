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
    .card{
        width: 30em;
    }
</style>

<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo">HatBox</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="#"><?php
                    if (@$_SESSION['user']['id']) {
                        echo '<a class="mdl-navigation__link" href="logout.php">Logout</a>';
                    } else {
                        echo '<a class="mdl-navigation__link" href="signin.php">Sign In</a>';
                    } ?></a></li>
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

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://cdn.shopify.com/s/files/1/0719/7579/products/hat_trucker_king_kamehameha_clark_grande.jpg?v=1441227987">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Flatbill<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Flatbill<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="http://mtnweekly.com/wp-content/uploads/2010/12/Elm-Beanie-Product-Review-Kevin-Krill-Photo-3.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Beanie<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Beanie<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://s-media-cache-ak0.pinimg.com/736x/26/c5/00/26c500ef99d3c39f20603fc04e13a36a.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Baseball<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Baseball<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Winter<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Winter<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Cowboy<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Cowboy<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Exotic<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Exotic<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/office.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Fedora<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Fedora<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">I am a lone coder and businessman who has built this project
                    from
                    the ground up. I wanted to offer people an exciting new experience to look forward to so
                    they can
                    make new memories and still look fresh.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Contact And</h5>
                <ul>
                    <li><a class="white-text">Phone:</a></li>
                    <li><a class="white-text">Fax:</a></li>
                    <li><a class="white-text">Email:</a></li>
                    <li><a class="white-text">Mail:</a></li>
                </ul>
            </div>

            <div class="col l3 s12">
                <h5 class="white-text">Connect With Us</h5>
                <ul>
                    <li><a class="white-text">623.986.0198</a></li>
                    <li><a class="white-text">623.535.3849</a></li>
                    <li><a class="white-text">daucen.osborn@west-mec.org</a></li>
                    <li><a class="white-text">N. 99th Ave., Glendale, AZ 85305</a></li>
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

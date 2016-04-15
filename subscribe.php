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
    <link rel="stylesheet" type="text/css" href="styles.css">
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
            <li><a href="userFeed.php">User Feed</a></li>
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
                    <p class="picDesc">You get a series of flatbill hats with this package that can be chosen to display brands or patterns.</p>
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
                    <p class="picDesc">Keep your head warm and choose between a billed beanie or a normal beanie. Also, decide if you want to where it all year long or during the winter by choosing material thickness.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="http://www.strictlyfitteds.com/sites/default/files/wp-content/uploads/2010/05/zephyr-fitted-baseball-cap-hat-XXL-3.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Baseball<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Baseball<i class="material-icons right">close</i></span>
                    <p class="picDesc">Pick out your favorite sports teams and we will send in custom designed sports hats that will match both your fashion style and favorite teams.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="http://38.media.tumblr.com/tumblr_lv7accy0sK1qcdtb1.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Winter<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Winter<i class="material-icons right">close</i></span>
                    <p class="picDesc">Keep your head warm during the winter months with our fur hats, thick beanies, and other types of cold-weather headgear.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="http://demo.chimerathemes.com/captivate/files/2012/01/Cowboy-Hat1.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Cowboy<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Cowboy<i class="material-icons right">close</i></span>
                    <p class="picDesc">Whether your making your way down to Country Thunder or just trying to match your fashion, cowboy works for you anytime.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="http://38.media.tumblr.com/tumblr_ma7tfcBYnV1qg3l28.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Exotic<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Exotic<i class="material-icons right">close</i></span>
                    <p class="picDesc">In his box you can get anything from bucket hats to detective hats to even spinner hats. It's really the luck of the draw but the hats will always be unique.</p>
                </div>
            </div>

            <!-- http://www.menstylefashion.com/wp-content/uploads/2014/02/Fedora-Hat-for-Men-3.jpg -->

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://i.ytimg.com/vi/VIIpoteiYjw/maxresdefault.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Fedora<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Fedora<i class="material-icons right">close</i></span>
                    <p class="picDesc">Neckbeards rejoice! Get all of your fedoras every month here.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="http://cdn.shopify.com/s/files/1/0199/4554/products/mystery_hat_grande_726fe7ef-8f24-4d14-9023-a354a1654625_1024x1024.png?v=1424018777">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Random<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Select</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Random<i class="material-icons right">close</i></span>
                    <p class="picDesc">For the adventurous, you get a random hat that doesn't have to be part of our current categories. WARNING! THIS OFFER DOESN'T FOLLOW OUR REFUND POLICIES!!!</p>
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

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
    header, main, footer {
        padding-left: 240px;
    }

    @media only screen and (max-width : 992px) {
        header, main, footer {
            padding-left: 0;
        }
    }
    #logo-container {
        left: 2em;
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
            <div id="sideNav">
                <ul id="slide-out" class="side-nav fixed">
                    <h4 class="sideNavHead sideNavCon">Upload Your Own!</h4>
                    <p class="sideNavDesc sideNavCon">We love to see happy customers! So, feel free to click on the button below and post your own photos!</p>
                    <a class="waves-effect waves-light btn" id="sideNavBut" href="addPhoto.php"><i class="material-icons right">send</i>Submit</a>
                </ul>
            </div>

            <?php
            require_once('appvars.php');
            require_once('connect.php');

            // Retrieve the score data from MySQL
            $query = "SELECT * FROM hatbox WHERE approved = 1";

            $stmt = $dbh->prepare($query);
            $stmt->execute();
            $score = $stmt->fetchall();

            // Loop through the array of score data, formatting it as HTML
            echo '<table>';
            foreach ($score as $row) {
                //Localize the file path
                $filepath = GW_UPLOADPATH . $row['screenshot'];

                // Display the score data
                echo '<tr><td class="scoreinfo">';
                echo '<div class="row">';
                echo '<div class="col s12 m7">';
                echo    '<div class="card">';
                echo        '<div class="card-image">';
                echo             '<img src="">';
                echo                    '</div>';
                echo                        '<div class="card-content imgUser">';
                echo                        '<p>Posted By</p>';
                echo                    '<h5>Ozzie</h5>';
                echo                '</div>';
                echo            '</div>';
                echo        '</div>';
                echo    '</div>';
                echo '</td>';

                if (is_file($filepath) && filesize($filepath) > 0) {
                    echo '<td><img src="' .$filepath. '" alt="Score image" /></td></tr>';
                }
                else {
                    echo '<td><img src="images/unverified.gif" alt="Unverified score" /></td></tr>';
                }
            }
            echo '</table>';
            ?>

            </div>
        </div>
    </div>
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
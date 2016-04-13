<?php
require_once('connect.php');
$error = false;
$success = false;

session_start();

if (@isset($_SESSION['user']['id'])) {
    header('Location: index.php');
}

$error = false;
$success = false;

if (@$_POST['login']) {
    if (!$_POST['username']) {
    }
    if (!$_POST['password']) {
    }

    $query = $dbh->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $result = $query->execute(
        array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        )
    );
    $userinfo = $query->fetch();
    if ($userinfo) {

        $success = "User, " . $_POST['username'] . " was successfully logged in.";

        $_SESSION['user'] = $userinfo;

        header("Location: index.php");
    } else {
        $success = "There was an error logging into the account.";
    }
}
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
    .signUpButton {
        color: white;
        text-decoration: none;
    }
    .input-field {
        color: #2f3a3a;
    }
    .page-footer {
        position: absolute;
        bottom: 0%;
        width: 100%;
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
            <div><h1 class="header center teal-text text-lighten-2">Sign Up</h1></div>
            <form class="col s12" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="username" name="username" type="text" class="validate" required>
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>

                <button class="waves-effect waves-light btn-large" type="submit" name="login" value="1"><a class="signUpButton"></a>Sign In</button>
            </form>
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

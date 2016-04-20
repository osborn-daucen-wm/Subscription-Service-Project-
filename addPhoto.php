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
                    if(@$_SESSION['user']['id']){
                        echo '<a href="logout.php">Logout</a>';
                    }
                    else{
                        echo '<a href="signin.php">Sign In</a>';
                    }?></a></li>
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

  <?php
  require_once('connect.php');
  require_once('appvars.php');

  if (isset($_POST['submit'])) {

      // Grab the score data from the POST

      $screenshot = $_FILES['screenshot']['name'];

      $screenshot_type = $_FILES['screenshot']['type'];
      $screenshot_size = $_FILES['screenshot']['size'];

      if (!empty($screenshot)) {

          if ((($screenshot_type == 'image/gif') || ($screenshot_type == 'image/jpeg') ||
                  ($screenshot_type == 'image/pjpeg') || ($screenshot_type == 'image/png')) &&
              ($screenshot_size > 0) && ($screenshot_size <= GW_MAXFILESIZE)
          ) {

              if ($_FILES['file']['error'] == 0) {

                  $target = GW_UPLOADPATH . $screenshot;

                  if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)) {

                          $query = "INSERT INTO feed VALUES (0, NOW(), NULL, :screenshot, 0)";

                          $stmt = $dbh->prepare($query);

                          $stmt->execute(

                              array(
                                  'screenshot' => $screenshot,
                              ));

                          // Confirm success with the user
                          echo '<p>Thanks for adding your new high score!</p>';
                      header("Location: userFeed.php");
                      // Clear the score data to clear the form
                      }
                      else {
                          echo '<p class="error">Sorry, there was a problem uploading your screen shot image.</p>';

                      }
                  }
                  else{
                      echo '<p class="error">A file with that name already exists.</p>';
                  }
                  @unlink($_FILES['screenshot']['tmp_name']);
              }
          }
          else {
              echo '<p class="error">The screen shot must be a GIF, JPEG or PNG image file no ' .
                  'greater than ' . (GW_MAXFILESIZE / 1024) . ' KB IN SIZE. </p>';
          }
      }

  ?>

<h2 id="picPostTitle">Post Your Own Photos!</h2>

<form class="col s12" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000000000000000" />

    <div class="file-field input-field">
        <div class="btn">
            <span>Your Picture</span>
            <input type="file" id="screenshot" name="screenshot">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
    </div>

    <button class="waves-effect waves-light btn-large" type="submit" name="submit" value="Add" id="picPost"><a class="signUpButton">Submit</a></button>
</form>


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
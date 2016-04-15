<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - Add Your High Score</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - Add Your High Score</h2>

  <?php
  require_once('connect.php');
  require_once('appvars.php');

  if (isset($_POST['submit'])) {

      // Grab the score data from the POST

      $name = $_POST['name'];
      $screenshot = $_FILES['screenshot']['name'];

      $screenshot_type = $_FILES['screenshot']['type'];
      $screenshot_size = $_FILES['screenshot']['size'];

      if (!empty($name) && !empty($screenshot)) {

          if ((($screenshot_type == 'image/gif') || ($screenshot_type == 'image/jpeg') ||
                  ($screenshot_type == 'image/pjpeg') || ($screenshot_type == 'image/png')) &&
              ($screenshot_size > 0) && ($screenshot_size <= GW_MAXFILESIZE)
          ) {

              if ($_FILES['file']['error'] == 0) {

                  $target = GW_UPLOADPATH . $screenshot;

                  if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)) {

                      $name = $_POST['name'];

                      if (!empty($name)) {

                          // Write the data to the database

                          $query = "INSERT INTO feed VALUES (0, NOW(), :name, :screenshot)";

                          $stmt = $dbh->prepare($query);

                          $stmt->execute(

                              array(
                                  'name' => $name,
                                  'screenshot' => $screenshot,
                              ));

                          // Confirm success with the user
                          echo '<p>Thanks for adding your new high score!</p>';
                          echo '<p><strong>Name:</strong> ' . $name . '<br />';
                          echo '<p><a href="Posting.php">&lt;&lt; Back to high scores</a></p>';
                          // Clear the score data to clear the form
                          $name = "";
                          $description = "";
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
      else {
          echo '<p class="error">Please enter all of the information to add your high score.</p>';
      }
  }


  ?>

<hr />
<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000000000000000" />
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name; ?>" />
    <br />
    <label for="screenshot">Screen shot:</label>
    <input type="file" id="screenshot" name="screenshot" />
    <hr />
    <input type="submit" value="Add" name="submit" />
</form>
</body>
</html>
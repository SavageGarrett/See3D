<?php
// DB Connection Vars
include_once("constants.php");

// Get post variables
$date = date('m/d/Y h:i:s a', time());
$completed = 0;
$name = $_POST['usr'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$checkbox = $_POST['checkbox'];
$stlLink =  $_POST['stlUpload'];
$modelSize = $_POST['modelSize'];
$considerations = $_POST['considerations'];
$understand = $_POST['understand'];
$publicity = $_POST['publicity'];

// Convert Input
$address = $address1 . " " . $address2 . " " . $city . " " .
$state . " " . $zipcode;
$braille = 0; //checkbox
if(strcmp($checkbox,"on") == 0) {
  $braille = 1;
}

// Establish MySql Connection
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$link){
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

// Insert into Working Table
if($submit = $link -> prepare("INSERT INTO form_submits
  (date, completed, name, email, address, label, stl_file,
  model_size, considerations, understand, how_found)
  VALUES(?,?,?,?,?,?,?,?,?,?,?)")) {
  $submit -> bind_param("sisssisssss", $date, $completed,
    $name, $email, $address, $braille, $stlLink, $modelSize,
    $considerations, $understand, $publicity);
  $submit -> execute();
}

// Insert into Permanent Table
if($submit = $link -> prepare("INSERT INTO form_submits_permanent
  (date, completed, name, email, address, label, stl_file,
  model_size, considerations, understand, how_found)
  VALUES(?,?,?,?,?,?,?,?,?,?,?)")) {
  $submit -> bind_param("sisssisssss", $date, $completed,
    $name, $email, $address, $braille, $stlLink, $modelSize,
    $considerations, $understand, $publicity);
  $submit -> execute();
}

// Close Link
$link->close();
?>

<?php
// TODO Submitted Message

// Get post variables
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
$link = mysqli_connect("localhost", "see3d_bot", 
"b0t34l98hgBrn", "see3d_formSubmits");
if(!$link){
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

// Send Post Variables to Database
$insert = "INSERT INTO form_submits 
  (name, email, address, braille_label, stl_file, 
  size, considerations, understand, how_found)
  VALUES
  ('".$name."', '".$email."', '".$address."', '".$braille."', 
  '".$stlLink."', '".$modelSize."', '".$considerations."', 
  '".$understand."', '".$publicity."')";

if(mysqli_query($link, $insert)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($link);
}

// Close Link
mysqli_close($link);
?>

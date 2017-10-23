<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $msgErr = $emailErr = "";
$fname = $lname = $msg = $email = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["inputFirstName"])) {
    $fnameErr = "First name is required";
  } else {
    $fname = test_input($_POST["inputFirstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["inputLastName"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["inputLastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["inputEmail"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["inputEmail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["inputContact"])) {
    $msg = "";
  } else {
    $msg = test_input($_POST["inputContact"]);
  }

    $msg = "Mail from: " . $fname . " " . $lname . " at " . $email . ".\n\n" . $msg;

    mail("cs.sculley@gmail.com","NEGITOROMAKI",$msg);

    echo "Mail sent, thanks " . $fname . "!";
}
?>
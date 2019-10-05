<?php

$first_name = $_POST['c_fname'];
$last_name = $_POST['c_lname'];
$email = $_POST['c_email'];
$subject = $_POST['c_subject'];
$message = $_POST['c_message'];
if (!empty($first_name) || !empty($last_name) || !empty($email) || !empty($subject) || !empty($message)) {
    $host = "localhost";
    $dbUsername = "dwayne";
    $dbPassword = "DRFJFKD8080";
    $dbname = "sportz";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
     // echo "theres an error";
    } else {
     $INSERT = "INSERT Into contact (first_name, last_name, email, subject, message) values('$first_name', '$last_name', '$email', '$subject', '$message')";
      $stmt = $conn->prepare($INSERT);
      $stmt->execute();
     $stmt->close();
     $conn->close();
    }
} else {
 // echo "All field are required";
 die();
}
?>
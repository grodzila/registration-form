<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

//create connection
$conn = mysqli_connect("localhost","root","","registrationform");
$q="inset into registration value(NULL,'$firstname','$lastname','$email','$password')";

//check connection
if (!$conn) {
    die("connection failed: " .mysql_connect_error());
}
echo "registration successful";
?>
<?php

$conn = mysqli_connect("localhost","root","nep@l1262","validation");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validation

if(strlen($fullname) > 40)
{
    die("Full Name should be maximum 40 characters.");
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    die("Invalid Email Address.");
}

if(!preg_match("/^[A-Za-z]+[0-9]+$/", $username))
{
    die("Username must start with letters followed by numbers.");
}

if(strlen($password) <= 8)
{
    die("Password must be more than 8 characters.");
}

// Insert Data

$sql = "INSERT INTO users(fullname,email,username,password)
VALUES('$fullname','$email','$username','$password')";

if(mysqli_query($conn,$sql))
{
    echo "Data Inserted Successfully.";
}
else
{
    echo "Error";
}

mysqli_close($conn);

?>
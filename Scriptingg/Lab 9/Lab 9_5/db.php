<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "nep@l1262",
    "student_db"
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
<?php

include "db.php";

$name = trim($_POST['name'] ?? '');
$roll = trim($_POST['roll'] ?? '');
$course = trim($_POST['course'] ?? '');
$semester = trim($_POST['semester'] ?? '');

if ($name == '' || $roll == '' || $course == '' || $semester == '') {

    echo "All fields are required.";
    exit;

}

$sql = "INSERT INTO students
        (name, roll_no, course, semester)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssi",
    $name,
    $roll,
    $course,
    $semester
);

if (mysqli_stmt_execute($stmt)) {

    echo "Student added successfully.";

} else {

    echo "Error adding student.";

}

?>
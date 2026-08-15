<?php

include "db.php";

$id = $_POST['id'] ?? '';
$name = trim($_POST['name'] ?? '');
$roll = trim($_POST['roll'] ?? '');
$course = trim($_POST['course'] ?? '');
$semester = trim($_POST['semester'] ?? '');

if ($id == '' || $name == '' || $roll == '' ||
    $course == '' || $semester == '') {

    echo "All fields are required.";
    exit;
}

$sql = "UPDATE students
        SET name = ?, roll_no = ?, course = ?, semester = ?
        WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssii",
    $name,
    $roll,
    $course,
    $semester,
    $id
);

if (mysqli_stmt_execute($stmt)) {

    echo "Student updated successfully.";

} else {

    echo "Error updating student.";

}

?>
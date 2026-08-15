<?php

include "db.php";

$id = $_POST['id'] ?? '';

if ($id == '') {
    echo "Invalid student ID.";
    exit;
}

$sql = "DELETE FROM students WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {

    echo "Student deleted successfully.";

} else {

    echo "Error deleting student.";

}

?>
<?php

include "db.php";

$name = trim($_POST['name'] ?? '');

$sql = "SELECT * FROM students
        WHERE name LIKE ?
        ORDER BY id DESC";

$stmt = mysqli_prepare($conn, $sql);

$search = "%" . $name . "%";

mysqli_stmt_bind_param($stmt, "s", $search);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['roll_no']) . "</td>";
        echo "<td>" . htmlspecialchars($row['course']) . "</td>";
        echo "<td>" . htmlspecialchars($row['semester']) . "</td>";

        echo "<td>";

        echo "<button onclick='editStudent(" .
            $row['id'] .
            ")'>Edit</button> ";

        echo "<button onclick='deleteStudent(" .
            $row['id'] .
            ")'>Delete</button>";

        echo "</td>";

        echo "</tr>";
    }

} else {

    echo "<tr><td colspan='6'>No students found.</td></tr>";

}

?>
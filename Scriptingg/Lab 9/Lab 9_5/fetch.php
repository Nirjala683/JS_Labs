<?php

include "db.php";

$sql = "SELECT * FROM students ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

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
            ")'>Edit</button>";

        echo " ";

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
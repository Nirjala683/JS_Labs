<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"] ?? "";
    $roll = $_POST["roll"] ?? "";
    $course = $_POST["course"] ?? "";
    $semester = $_POST["semester"] ?? "";

    if ($name == "" || $roll == "" || $course == "" || $semester == "") {

        echo "Error: All fields are required.";

    } 
    elseif (!is_numeric($semester)) {

        echo "Error: Semester must be a number.";

    } 
    elseif ($semester < 1 || $semester > 8) {

        echo "Error: Semester must be between 1 and 8.";

    } 
    else {

        echo "Student registered successfully!";

    }

} else {

    echo "Invalid request.";

}

?>
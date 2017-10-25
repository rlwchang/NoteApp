<?php
    // Connect to MySQL database
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "project_note_app";

    $link = new mysqli($host, $user, $password, $database);

    if (mysqli_connect_error()) {
        echo $link->connect_error;
        echo "<br>";
        exit;
    }

    // Set up filepath names
    define("ROOT_PATH", dirname(__DIR__));
 ?>

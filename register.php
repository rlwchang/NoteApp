<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'project_note_app';

    $link  = mysqli_connect($host, $user, $password, $database);

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }

    $query = "SELECT * FROM user";

    $result = mysqli_query($link, $query);

    print_r(mysqli_fetch_assoc($result));
    print_r(mysqli_fetch_array($result));


 ?>

<?php include "partials/header.php" ?>

<h2>Create a New User Account</h2>

<form method="post">
    <label for="username">Username</label>
    <input id="username" type="text" name="username">
    <label for="password">Password</label>
    <input id="password" type="password" name="" value="">
    <button name="button" value="submit">Submit</button>
</form>

<p>Don't have an account?<a href="register.php"> Sign Up!</a></p>

<?php include "partials/footer.php" ?>

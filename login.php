<?php
print_r($_POST);
 ?>

<?php include "partials/header.php" ?>

<h2>Login!</h2>

<form method="post">
    <label for="username">Username</label>
    <input id="username" type="text" name="username">
    <label for="password">Password</label>
    <input id="password" type="password" name="" value="">
    <button name="button" value="submit">Submit</button>
</form>

<p>Don't have an account?<a href="register.php"> Sign Up!</a></p>

<?php include "partials/footer.php" ?>

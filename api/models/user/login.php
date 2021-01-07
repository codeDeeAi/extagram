<?php
session_start();

// Get Login details from front end
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

// Create DB connection
include('../../config/database.php');

// user check
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($mysqli, $query) or die($mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);



//======== Authetication Validation ========
if ($num_row >= 1) {

    if (password_verify($password, $row['password'])) {

        $_SESSION['login'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        echo 'true';

        // Redirect from backend 
        // header('');
    }
    else {
        echo 'false';
    }

} else {
    echo 'false';
}



?>
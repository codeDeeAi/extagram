<?php
// Connect to db
include('../../config/database.php');

// recieved data
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$nickname = mysqli_real_escape_string($mysqli, $_POST['nickname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
$dob = mysqli_real_escape_string($mysqli, $_POST['dob']);
$country = mysqli_real_escape_string($mysqli, $_POST['country']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);
$password2 = mysqli_real_escape_string($mysqli, $_POST['password2']);


//VALIDATION
if (strlen($name) <= 3) {
    echo 'name';
} elseif (strlen($nickname) <= 3) {
    echo 'nickname';
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($phone) <= 8) {
    echo 'phone';
}elseif (strlen($gender) <= 1) {
    echo 'gender';
} elseif (strlen($country) <= 1) {
    echo 'country';
} elseif (strlen($password) <= 5) {
    echo 'pshort';
} elseif (empty($password2)) {
    echo 'password2';
} elseif ($password != $password2) {
    echo 'passworderror';
	
} else {

    // Encrypt password
        $bpassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        
    // Insert in Database
   
        $insert_row = $mysqli->query("INSERT INTO users (name, nickname, email, phone, gender, date_of_birth, country, password) VALUES ('$name','$nickname', '$email', '$phone', '$gender', '$dob', '$country', '$bpassword')");

        if ($insert_row) {
	
            echo 'true';     

        } else{

            echo 'false';
    }

}

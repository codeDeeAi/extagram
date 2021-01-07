<?php 
    // Include all required files
    include('../api/config/routes.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../resources/css/style1.css">
</head>

<body>
    <div class="signup-container">

        <div class="intro-img">
            <img src="../resources/images/undraw_into_the_night_vumi.svg" alt="">
        </div>
        <div class="intro-content">

            <div class="form" id="login-f">
                <h1>Reset password</h1>
                <p>A pin has been sent to your email address</p>
                <form action="signup.php">
                    <div class="control">
                        <input type="text" name="username" placeholder="Enter your verification pin">
                    </div>



                </form>
                <div class="res">
                    <a class="submit" href="./Changepassword.html">Change Your Password</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
    // Include all required files
    include('../api/config/routes.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose a new password</title>
    <link rel="stylesheet" href="../resources/css/style1.css">
</head>

<body>
    <div class="signup-container">

        <div class="intro-img">
            <img src="../resources/images/undraw_into_the_night_vumi.svg" alt="">
        </div>
        <div class="intro-content">

            <div class="form" id="login-f">
                <h5>Choose your password</h5>

                <form action="signup.php">
                    <div class="control">
                        <input type="password" name="username" placeholder="Choose a new password">
                        <input type="password" name="username" placeholder="Retype new password">
                    </div>        
                </form>
                <div class="res">
                    <a class="submit" href="#">Change Your Password</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
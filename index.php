<?php

// Include all required files
include('./api/config/routes.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/style1.css"> 
    <title>Extagram</title>
</head>
<body>

    <header>
        <nav class="nav">
          <img src="resources/images/logo.svg" class="logo" alt="">
            <ul class="navbar">
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="#">Discover</a></li>
                <!-- <li class="nav-item"><a href="#">Catalogue</a></li> -->
                <li class="nav-item"><a href="#">About</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="content">
                <h1>Become an <span>Extagram</span> Person </h1>
                <p>The first social media plattform made <b>Uniquely</b> for Africans</p>
               <div class="btn-group">
                <a  class="sign-up" href="<?php echo $signup_path ?>">Sign Up</a>
                <a href="<?php echo $login_path ?>" class="login">Login</a>
               </div>
            </div>
      
            
        </div>
    </header>
</body>
</html>
<?php
?>
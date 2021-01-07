<?php
// Include all required files
include('../api/config/routes.php');
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../resources/css/style1.css">
  <link rel="stylesheet" href="../api/models/user/login.php">
  <title>Login</title>
  <!-- JQuery -->
  <script type="text/javascript" src="../resources/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $("#login").click(function() {

        email = $("#email").val();
        password = $("#password").val();
        $.ajax({
          type: "POST",
          url: "../api/models/user/login.php",
          data: "email=" + email + "&password=" + password,
          success: function(html) {
            if (html == 'true') {
              
              $("#add_err2").html(`<div class="">
													<strong>Authenticated</strong>
												</div>`);

              // Redirect with JavaScript (Optional)
              // window.location.href = "";

            } else if (html == 'false') {
              $("#add_err2").html(`<div class="">
													<strong>Error! Incorrect user details</strong>
												</div>`);

            } else {
              $("#add_err2").html(`<div class="">
													<strong>Error! Something went wrong</strong>
												</div>`);
            }
          },
          beforeSend: function() {
            $("#add_err2").html(`<div class="">
													<strong>Loading ....</strong>
												</div>`);
          }
        });
        return false;
      });
    });
  </script>
</head>

<body>
  <div class="signup-container">

    <div class="intro-img">
      <img src="../resources/images/undraw_into_the_night_vumi.svg" alt="">
    </div>
    <div class="intro-content">

    <!-- Error Messages (Alert) -->

      <div id="add_err2"></div>

    <!-- Error Messages (Alert) Ends -->

      <div class="form" id="login-form">
        <h1>Login</h1>
        <form>
          <div class="control">
            <input type="email" id="email" maxlength="50" name="email" placeholder="email@mail.com">
          </div>

          <div class="control">
            <label for="password"></label>
            <input type="password" id="password" name="password" maxlength="25" placeholder="Password">

          </div>

        </form>
        <a class="submit" href="#" id="login" >Login</a>
        <a class="password-renew" href="<?php echo '.' . $changepassword_path ?>">Forgot password ?</a>
      </div>
    </div>
  </div>

</body>

</html>
<?php

?>
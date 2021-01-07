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
    <title>SignUp</title>
    <!-- JQuery -->
    <script type="text/javascript" src="../resources/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#signup").click(function() {

                name = $("#name").val();
                nickname = $("#nickname").val();
                email = $("#email").val();
                phone = $("#phone").val();
                gender = $("#gender").val();
                dob = $("#dob").val();
                country = $("#country").val();
                password = $("#password").val();
                password2 = $("#password2").val();
                $.ajax({
                    type: "POST",
                    url: "../api/models/user/register.php",
                    data: "name=" + name + "&nickname=" + nickname + "&email=" + email + "&phone=" + phone + "&gender=" +
                        gender + "&dob=" + dob + "&country=" + country + "&password=" + password + "&password2=" + password2,
                    success: function(html) {
                        if (html == 'true') {

                            $("#add_err2").html(`<div class="">
													<strong>Registeration Successful</strong>
												</div>`);
                            // Then Perform an action (Optional) or redirect


                        } else if (html == 'name') {
                            $("#add_err2").html(`<div class="">
													<strong>Kindly input your name !</strong>
												</div>`);

                        } else if (html == 'nickname') {
                            $("#add_err2").html(`<div class="">
													<strong>Kindly input your nickname !</strong>
												</div>`);

                        } else if (html == 'eshort') {
                            $("#add_err2").html(`<div class="">
													<strong>Email too short !</strong>
												</div>`);

                        } else if (html == 'eformat') {
                            $("#add_err2").html(`<div class="">
													<strong>Incorrect email format !</strong>
												</div>`);

                        } else if (html == 'phone') {
                            $("#add_err2").html(`<div class="">
													<strong>Phone cannot be less than 8 digits !</strong>
												</div>`);

                        } else if (html == 'gender') {
                            $("#add_err2").html(`<div class="">
													<strong>Select your gender !</strong>
												</div>`);

                        } else if (html == 'country') {
                            $("#add_err2").html(`<div class="">
													<strong>Select a country !</strong>
												</div>`);

                        } else if (html == 'pshort') {
                            $("#add_err2").html(`<div class="">
													<strong>Minimum password value is 6 !</strong>
												</div>`);

                        } else if (html == 'password2') {
                            $("#add_err2").html(`<div class="">
													<strong>Kindly confirm password !</strong>
												</div>`);

                        } else if (html == 'passworderror') {
                            $("#add_err2").html(`<div class="">
													<strong>Password do not match !</strong>
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
            <img src="../resources/images/undraw_young_and_happy_hfpe.svg" alt="">
        </div>
        <div class="intro-content">
            <!-- Error Messages (Alert) -->

            <div id="add_err2"></div>

            <!-- Error Messages (Alert) Ends -->
            <div class="form">
                <h1>Sign Up</h1>
                <form action="signup.php">
                    <div class="control">
                        <label>Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="control">
                        <label>Nickname</label>
                        <input type="text" id="nickname" name="nickname" placeholder="Username/ nickname">
                    </div>
                    <div class="control">
                        <label>Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="+2*******">
                    </div>
                    <div class="control">
                        <label>Email</label>
                        <input type="email" id="email" name="email" placeholder="email@mail.com">
                    </div>
                    <div class="control">
                        <label>Choose a gender</label>
                        <select id="gender" placeholder="Choose an option">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="control">
                        <label>Date of Birth</label>
                        <input type="date" id="dob" placeholder="Date of birth">
                    </div>
                    <div class="control">
                        <label>Country</label>
                        <input type="text" id="country" placeholder="Country">
                    </div>
                    <div class="control">
                        <label>Password</label>
                        <input type="password" id="password" name="password" placeholder="password">
                    </div>
                    <div class="control">
                        <label>Confirm Password</label>
                        <input type="password" id="password2" name="password" placeholder="confirm password">
                    </div>
                </form>
                <a href="#" class="submit" id="signup">Create Account</a>
            </div>
        </div>
    </div>

</body>

</html>
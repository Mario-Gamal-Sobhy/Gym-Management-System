<?php
session_start();
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($mysqli, $email);

    $Fname = stripslashes($_REQUEST['Fname']);
    $Fname = mysqli_real_escape_string($mysqli, $Fname);

    $Lname = stripslashes($_REQUEST['Lname']);
    $Lname = mysqli_real_escape_string($mysqli, $Lname);

    $Gender = $_REQUEST['gender'];

    $password = $_REQUEST['password'];
    $password = mysqli_real_escape_string($mysqli, $password);

    $Phone = stripslashes($_REQUEST['number']);
    $Phone = mysqli_real_escape_string($mysqli, $Phone);

    $Cpassword = $_REQUEST['Cpassword'];
    $Cpassword = mysqli_real_escape_string($mysqli, $Cpassword);


    $date_of_birth = $_REQUEST['date'];

    $phoneRegex = '/^01[0125]\d{8}$/i';
    $nameRegex = '/^[A-Za-z]{2,20}$/i';
    $emailRegex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i';
    $passwordRegex = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?\d)(?=.*?[!@#$%^&*()_+]).{8,}$/i';

    if (!preg_match($passwordRegex, $password)) {
        header("Refresh: 0; url=register.php");
        die;
    }

    if (!preg_match($phoneRegex, $Phone)) {
        header("Refresh: 0; url=register.php");
        die;
    } elseif (isPhoneExists($mysqli, "Accounts", $Phone)) {
        header("Refresh: 0; url=register.php");
        alert("Phone Number Already Registered");
        die;
    }

    if (!preg_match($nameRegex, $Fname) && !preg_match($nameRegex, $Lname)) {
        header("Refresh: 0; url=register.php");
        die;
    }

    if (!preg_match($passwordRegex, $password) && $password != $Cpassword) {
        header("Refresh: 0; url=register.php");
        die;
    }

    if (!preg_match($emailRegex, $email)) {
        header("Refresh: 0; url=register.php");
        die;
    } elseif (isEmailExists($mysqli, "Accounts", $email)) {
        header("Refresh: 0; url=register.php");
        alert("Email Already Registered");
        die;
    }

    $query = "INSERT into Accounts (Fname, Lname, Email, Password, Phone_Number, Gender, Date)
                     VALUES ('$Fname','$Lname','$email', '" . md5($password) . "'
                     , '$Phone', '$Gender','$date_of_birth')";

    $result = mysqli_query($mysqli, $query);
    header("Location: login.php");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign up</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="Login.php">Log <span style="color: #c11325">in</span></a>
                <a href="index.php" style="margin-left: 450px;" class="bullshirt">Phive <span>Gym</span></a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#service">Services</a></li>
                    <li><a href="index.php#schedule">Schedule</a></li>
                    <li><a href="Trainers.php">Coaches</a></li>
                    <li><a href="Plans.php">Plans</a></li>
                    <li><a href="Shop.php">Shop</a></li>
                    <li><a href="Register.php">Sign up</a></li>
                    <li><a href="index.php#about">About</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section>
        <form action="Register.php" class="container4" method="post" name="form" id="form">
            <table border="0" class="signup" cellspacing="15">
                <tr>
                    <th colspan="2">
                        <h1>Register</h1>
                    </th>
                </tr>
                <tr>
                    <td>
                        <div class="form-element">
                            <input type="text" name="Fname" id="fname" required />
                            <label class="floating-label" for="fname">First Name</label>
                        </div>
                    </td>
                    <td style="width: 50%">
                        <div class="form-element">
                            <input type="text" name="Lname" id="lname" required />
                            <label class="floating-label" for="lname">Last Name</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-element">
                            <input type="text" name="email" id="email" class="formEmail" required /> <label
                                class="floating-label" for="email">Email</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-element">
                            <input type="text" name="number" id="number" required />
                            <label class="floating-label" for="number">Phone Number</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-element">
                            <input type="password" name="password" id="password" minlength="8" required />
                            <label class="floating-label" for="password">Password</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-element">
                            <input type="password" name="Cpassword" id="Cpassword" minlength="8" required />
                            <label class="floating-label" for="Cpassword">Confirm Password</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-element1" style="font-size: 24px;">
                            <input type="radio" name="gender" id="male" value="Male" required />
                            <label for="male">Male</label>
                        </div>
                        <br>
                        <div class="form-element1" style="font-size: 24px;">
                            <input type="radio" name="gender" id="female" value="Female" required />
                            <label for="female">Female</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 24px;">
                        Date of birth: <input type="date" name="date" id="date" min="1950-01-01" max="2012-01-1"
                            style="width: 150px; height: 50px;">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="submitButton" class="btn3" style="width: 30%; margin-left: 330px;"
                            onclick="ValidateForm(this.form)">Register</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="color: black; text-align: center;">
                        Already have an account? <a href="Login.php" style="text-decoration: none;color: red;">Log
                            In</a>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <script src="assets/js/validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".ham-burger, .nav ul li a").click(function () {

                $(".nav").toggleClass("open")

                $(".ham-burger").toggleClass("active");
            })
            $(".accordian-container").click(function () {
                $(".accordian-container").children(".body").slideUp();
                $(".accordian-container").removeClass("active")
                $(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
                $(this).children(".body").slideDown();
                $(this).addClass("active")
                $(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
            })

            $(".nav ul li a, .go-down").click(function (event) {
                if (this.hash !== "") {

                    var hash = this.hash;

                    $('html,body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {
                        window.location.hash = hash;
                    });

                    // add active class in navigation
                    $(".nav ul li a").removeClass("active")
                    $(this).addClass("active")
                }
            })
        })
    </script>



</body>

</html>
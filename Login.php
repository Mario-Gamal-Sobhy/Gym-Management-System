<?php
session_start();
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emailorphone = $_POST['emailorphone'];
    $password = $_POST['password'];
    $error = "Email/Phone or password incorrect";
    if (!empty($emailorphone) && !empty($password)) {
        $emailorphone = stripslashes($_REQUEST['emailorphone']);
        $emailorphone = mysqli_real_escape_string($mysqli, $emailorphone);

        $password = $_REQUEST['password'];
        $password = mysqli_real_escape_string($mysqli, $password);

        $query = "";
        $phoneRegex = '/^01[0125]\d{8}$/i';
        $emailRegex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i';
        if (
            (preg_match($emailRegex, $emailorphone)) ||
            (preg_match($phoneRegex, $emailorphone))
        ) {
            $login = $_REQUEST['emailorphone'];
            $query = "SELECT * FROM Accounts WHERE (Email='$emailorphone' OR
             Phone_Number = '$emailorphone') AND Password='" . md5($password) . "'";
        }

        if ($query != "") {
            $run = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($run) > 0) {
                $row = mysqli_fetch_assoc($run);
                if (md5($password) == $row['Password']) {
                    $_SESSION['Fname'] = $row['Fname'];
                    header("Location:index.php");
                } else {
                    $_SESSION["error"] = "Password is incorrect.";
                }
            } else {
                $_SESSION["error"] = $error;
            }
        } else {
            $_SESSION["error"] = $error;
        }

    }
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
    <title>Login</title>
</head>

<body style="background-image: url(assets/images/background1.jpg);">
    <header>
        <div class="container">
            <div class="logo">
                <a href="Register.php">Sign <span style="color: #c11325">up</span></a>
                <a href="index.php" style="margin-left: 450px;" class="bullshirt">Phive <span>Gym</span></a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.html#service">Services</a></li>
                    <li><a href="index.html#schedule">Schedule</a></li>
                    <li><a href="Trainers.php">Coaches</a></li>
                    <li><a href="Plans.php">Plans</a></li>
                    <li><a href="Shop.php">Shop</a></li>
                    <li><a href="Register.php">Sign up</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section style="margin-top: 200px;">
        <table border="0" class="signup" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <td style="width:60%;">
                    <div>
                        <img class="slide" src="assets/images/signup.jpg" alt="" srcset=""
                            style="width:100%; height: 519px;border-top-left-radius: 25px;border-bottom-left-radius: 25px;padding-top:5px;margin-left:5px;">
                        <img class="slide" src="assets/images/coaches.jpeg" alt="" srcset=""
                            style="width:100%; height: 519px;border-top-left-radius: 25px;border-bottom-left-radius: 25px;padding-top:5px;margin-left:5px;">
                        <img class="slide" src="assets/images/gallery3.jpg" alt="" srcset=""
                            style="width:100%; height: 519px;border-top-left-radius: 25px;border-bottom-left-radius: 25px;padding-top:5px;margin-left:5px;">
                    </div>
                    <script>
                        var index = 0;
                        slideshow();
                        function slideshow() {
                            var x = document.getElementsByClassName("slide");
                            for (var i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            x[index].style.display = "block";
                            index++;
                            if (index >= x.length) {
                                index = 0;
                            }
                            setTimeout(slideshow, 2000);
                        }
                    </script>
                    <!-- <img src="assets/images/signup.jpg" alt=""
                        style="width: 100%; height: 519px;border-top-left-radius: 25px;border-bottom-left-radius: 25px;padding-top:5px;margin-left:5px;"> -->
                </td>
                <td>
                    <form action="#" class="container3" name="form" method="post">
                        <br>
                        <br>
                        <br>
                        <h1>Log In</h1>
                        <?php
                        if (isset($_SESSION["error"])) {
                            $error = $_SESSION["error"];
                            echo "<span>$error</span>";
                        }
                        ?>
                        <div class="form-element">
                            <input type="text" name="emailorphone" id="emailorphone" required />
                            <label class="floating-label" for="emailorphone">Email or Phone Number</label>
                        </div>
                        <div class="form-element">
                            <input type="password" name="password" id="password" required />
                            <label class="floating-label" for="password">Password</label>
                        </div>
                        <button class="btn3">Log In</button>
                        <div style="color: black;">
                            <br>
                            Dont have an account? <a href="Register.php"
                                style="text-decoration: none;color: red;">Register
                                here</a>
                        </div>

                    </form>
                </td>
            </tr>
        </table>
    </section>


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

<?php
unset($_SESSION["error"]);
?>
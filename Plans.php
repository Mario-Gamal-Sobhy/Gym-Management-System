<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .columns {
            float: left;
            width: 30%;
            padding: 8px;
            margin-top: 70px;
            margin-left: 40px;
        }

        .price {
            list-style-type: none;
            border: 1px solid #eee;
            margin: 0;
            padding: 0;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .price:hover {
            box-shadow: 16px 24px 16px 0 rgba(193, 19, 37);
            transform: scale(1.05);
            transition: 1s;
        }

        .price .header {
            background-color: #111;
            color: white;
            font-size: 25px;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .price li {
            border-bottom: 1px solid #eee;
            padding: 20px;
            text-align: center;
            background-color: white;
        }

        .price .grey {
            background-color: #eee;
            font-size: 20px;
        }

        .button1 {
            background-color: #c11325;
            filter: grayscale(70%);
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
        }

        .button2 {
            background-color: #c11325;
            filter: grayscale(30%);
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
        }

        .button3 {
            background-color: #c11325;
            filter: grayscale(0%);
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .columns {
                width: 100%;
            }
        }
    .bullshirt{
    position: relative;
    text-align: center;
    font-size: 8vmin;
    background: repeating-linear-gradient(135deg, #c11325 60%,#ffffff , #212121);
    background-size: 80% 100%;
    background-repeat: no-repeat;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shineText 1.8s alternate infinite;
  }
  @keyframes shineText {
    0%{
      background-position-x: -140%;
    }
    100%{
      background-position-x: 300%;
    }
  }
    </style>
</head>

<body
    style="background-image: url(assets/images/background1.jpg); background-color: #404040; background-blend-mode: overlay;">
    <header>
        <div class="container">
            <div class="logo">
            <?php
                session_start();
                if (isset($_SESSION['Fname'])) {
                    $Fname = $_SESSION['Fname'];
                    echo "<a>Hello,</a><a style=\"color: #c11325\"> $Fname</a>";
                } else {
                    echo "<a href=\"Login.php\">Log <span style=\"color: #c11325\">in</span></a>";
                }
                ?>
                <a href="index.php" style="margin-left: 450px;"class="bullshirt">Phive <span>Gym</span></a>
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
                    <?php
                    if (isset($_SESSION['Fname'])) {
                        echo "<li><a href=\"logout.php\">Log Out</a></li>";
                    } else {
                        echo "<li><a href=\"Register.php\">Sign up</a></li>";
                    }
                    ?>
                    <li><a href="index.php#about">About</a></li>
                </ul>
            </div>
        </div>
    </header>
    <h1 style="text-align: center; color: white; margin-top: 100px; font-size: 50px; background-color: #c11325; width: 25%; margin-left: 575px;">PLANS</h1>
    <div class="columns">
        <ul class="price">
            <li class="header" style="background-color: #c11325; filter: grayscale(70%);">Basic</li>
            <li class="grey">$ 9.99 / month</li>
            <li>24-Hour Access</li>
            <li>Strength and Cardio Machines</li>
            <li>Free Personal Training Assessment</li>
            <li>Locker And Shower Facilites</li>
            <li class="grey" style="color:  rgba(193, 19, 37);"><a href="Payment.html" class="button1">Subscribe</a></li>
        </ul>
    </div>

    <div class="columns">
        <ul class="price">
            <li class="header" style="background-color: #c11325; filter: grayscale(30%)">Pro</li>
            <li class="grey">$ 24.99 / month</li>
            <li>Basic plans and more</li>
            <li>Group Fitness Classes</li>
            <li>Free Personal Trainer</li>
            <li>Hydro Massage Beds</li>
            <li class="grey"><a href="Payment.html" class="button2">Subscribe</a></li>
        </ul>
    </div>

    <div class="columns">
        <ul class="price">
            <li class="header" style="background-color: rgb(210, 0, 0); filter: grayscale(0%)">PREMIUM</li>
            <li class=" grey">$ 49.99 / month</li>
            <li>Pro plans and more</li>
            <li>Dry Sauna Access</li>
            <li>Unlimited Tanning</li>
            <li>Group Fitness Classes</li>
            <li class="grey"><a href="Payment.html" class="button3">Subscribe</a></li>
        </ul>
    </div>

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
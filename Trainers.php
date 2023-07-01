<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/trainers.css">
    <link rel="icon" href="assets/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Coaches</title>
</head>

<body>
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
    <h1 style="text-align: center; color: white; margin-top: 100px; font-size: 50px; background-color: rgb(170, 11, 11); width: 25%; margin-left: 600px;">COACHES</h1>
    <section class="about" id="about" style="margin-top: 50px;">
        <div class="container">
            <div class="content">
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            
                            <img src="assets/images/1.png" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Atef Gomaa</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/2.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Sameh Absalam</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/3.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Laila Abdelrazek</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="content">
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/4.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>2Pac</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/5.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Kanye West</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/6.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Jessy Ayman</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <div class="content">
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/7.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Tyler1</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/8.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Riley Gomez</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/9.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Darlene Alderson</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
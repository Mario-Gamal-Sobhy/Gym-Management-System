<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <title>Home</title>
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
                
                <!-- <a href="Login.php">Login</a> -->
                <a href="#" style="margin-left: 400px;" class="bullshirt">Phive <span style="color: #c11325;" class="gym">Gym</span></a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#schedule">Schedule</a></li>
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
                    <li><a href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <h1 style="color: white; text-align: center; margin-top: 250px; font-size: 50px;">
            “We are what we repeatedly do.
            <br>
            <span style="color: #ff0000; font-size: larger;">Excellence</span>
            then is not an act but a
            <span style="color: #f00; font-size: larger;">habit.</span>
            ”
        </h1>
    </section>

    <section class="about" id="about" style="background-color: white;">
        <div class="container">
            <div class="content">
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/about1.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Free Consultation</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not
                                only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/about2.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Best Training</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not
                                only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img">
                            <img src="assets/images/about3.jpg" alt="about" />
                        </div>
                        <div class="text">
                            <h4>Build Perfect Body</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not
                                only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service" id="service">
        <div class="container">
            <div class="content">
                <div class="text box wow slideInLeft">
                    <h2>Services</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                    <a href="" class="btn">Start Now</a>
                </div>
                <div class="accordian box wow slideInRight">
                    <div class="accordian-container active">
                        <div class="head">
                            <h4>Cardiovascular Equipment</h4>
                            <span class="fa fa-angle-down"></span>
                        </div>
                        <div class="body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not
                                only
                                five
                                centuries</p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Strength Training Equipment</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not
                                only
                                five
                                centuries</p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Group Fitness Class</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not
                                only
                                five
                                centuries</p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Other Services</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not
                                only
                                five
                                centuries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Schedule -->
    <section class="schedule" id="schedule">
        <div class="container">
            <div class="content">
                <div class="box text wow slideInLeft">
                    <h2>Classes Schedule</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <img src="assets/images/schedule1.png" alt="schedule" />
                </div>
                <div class="box timing wow slideInRight">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="day">Monday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Tuesday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Wednesday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Thursday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Friday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Saturday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End Schedule -->
    <!-- Start Gallery -->

    <section class="gallery" id="gallery">
        <div style="background-color: white; height: 1px;">
        </div>
        <h2>Workout Gallery</h2>
        <div class="content">
            <div class="box wow slideInLeft">
                <img src="assets/images/gallery1.jpg" alt="gallery" />
            </div>
            <div class="box wow slideInRight">
                <img src="assets/images/gallery2.jpg" alt="gallery" />
            </div>
            <div class="box wow slideInLeft">
                <img src="assets/images/gallery3.jpg" alt="gallery" />
            </div>
            <div class="box wow slideInRight">
                <img src="assets/images/gallery4.jpg" alt="gallery" />
            </div>
        </div>
    </section>
    <!-- End Gallery -->


    <!-- Start Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="content">
                <div class="box form wow slideInLeft">
                    <form>
                        <input type="text" placeholder="Enter Name">
                        <input type="text" placeholder="Enter Email">
                        <input type="text" placeholder="Enter Mobile">
                        <textarea placeholder="Enter Message"></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
                <div class="box text wow slideInRight">
                    <h2>Get Connected with Gym</h2>
                    <p class="title-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="info">
                        <ul>
                            <li><span class="fa fa-map-marker"></span> Gali no 11, House no 11, Lahore</li>
                            <li><span class="fa fa-phone"></span> 69 9999999999</li>
                            <li><span class="fa fa-envelope"></span> info@gym.com</li>
                        </ul>
                    </div>
                    <div class="social">
                        <a href=""><span class="fa fa-facebook"></span></a>
                        <a href=""><span class="fa fa-linkedin"></span></a>
                        <a href=""><span class="fa fa-skype"></span></a>
                        <a href=""><span class="fa fa-youtube-play"></span></a>
                    </div>

                    <div class="copy">
                        PowerBy &copy; Phive Gym
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->
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

                    event.preventDefault();

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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Med</title>
    <!--contact style start-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!--contact style end-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <!-- Topbar Starts-->
    <div class="topbar-outer">
        <div class="topbar">
            <div class="info" id="navbar">
                <ul>
                    <li>
                        <a href="/"><img src="images/care.svg" class="toplogo" alt=""></a>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i> 01681046437
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i> mail.kawsar12@gmail.com
                    </li>
                    <li>
                        <i class="fas fa-globe"></i> www.yetfix.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Topbar Ends -->


    <!--Navbar starts-->
    <div class="box">
        <div class="contain">
            <div class="navbar">

                <div class="navul">
                    <ul>
                        <li><a href="">Equipements</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Biomedical</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Medical Tools</a></li>
                    </ul>
                    <ul>
                        <li><a href="#services">Our Services</a></li>
                    </ul>
                    <ul>
                        <li><a href="#products">Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="get-a-quote">
                <a href="#contact">
                    <button class="quote">Get a Quote</button>
                </a>
            </div>
        </div>
    </div>
    <!--Navbar Ends-->


    <!--hero section stats-->

    <div class="hero">
        <div class="hero-txt">
            <h1>There’s a better way to get deals done.</h1>
            <p> Marketing, sales, and service software that helps your business grow without compromise. Because “good
                for
                the business” should also mean “good for the customer.”</p>
            <a href="#contact"> <button class="quote" id="quote1">Contact With Us</button></a>
        </div>
    </div>

    <!--hero section ends-->

    <!--Services section starts-->
    <div id="services">
        <h1 class="title ser">Our Servcies</h1>
    </div>
    <div class="contain">
        <div class="service-cards">
            <div class="service card1">
                <img src="images/services/heart.svg" alt="">
                <h4>Medical Equipements</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, molestias?</p>
            </div>
            <div class=" service card2">
                <img src="images/services/blood-pressure.svg" alt="">
                <h4>Medical Equipements</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, molestias?</p>
            </div>
            <div class=" service card3">
                <img src="images/services/first-aid-kit.svg" alt="">
                <h4>Medical Equipements</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, molestias?</p>
            </div>
            <div class=" service card1">
                <img src="images/services/pulse-oximeter.svg" alt="">
                <h4>Medical Equipements</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, molestias?</p>
            </div>
            <div class=" service card2">
                <img src="images/services/adjustment.png" alt="">
                <h4>Medical Equipements</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, molestias?</p>
            </div>
            <div class=" service card3">
                <img src="images/services/rubber-gloves.svg" alt="">
                <h4>Medical Equipements</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, molestias?</p>
            </div>
        </div>
    </div>
    <!--Services Section ends-->

    <!--Support section starts-->


    <!--Support Section ends-->

    <!--Products Section starts-->
    <div id="products">
        <h1 class="title ser">Our products</h1>
    </div>
    <!--Products Section ends-->


    <!--contact section starts-->
    <div id="contact">
        <h1 class="title">CONTACT US</h1>
    </div>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Send Us A Message
                </span>

                <label class="label-input100" for="first-name">Tell us your name *</label>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                    <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                    <input class="input100" type="text" name="last-name" placeholder="Last name">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="email">Enter your email *</label>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="phone">Enter phone number</label>
                <div class="wrap-input100">
                    <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="message">Message *</label>
                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Send Message
                    </button>
                </div>
            </form>

            <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
                <div class="flex-w size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-map-marker"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Address
                        </span>

                        <span class="txt3">
                            kha-225,Century Tower,Merul Badda, Dhaka-1212.
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Lets Talk
                        </span>

                        <span class="txt3">
                            +880 1681046437
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-envelope"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            General Support
                        </span>

                        <span class="txt3">
                            mail.kawsar12@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <!--contact section ends-->

    <!--footer section starts-->

    <div id="footer">
        <p>Design and Developed By <a href="https://yetfix.com/">YetFix Ltd.</a></p>
    </div>
    <!--footer section endss-->






    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>


    <!-- Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
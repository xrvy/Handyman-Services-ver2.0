<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handyman Services | Home Repair</title>
    <link rel="icon" href="images\favicon.png">
    <link rel="stylesheet" href="CSS\main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500&family=Poppins:ital,wght@0,400;0,500;1,400;1,500&family=Roboto:ital,wght@1,700&family=Rowdies&family=Ubuntu:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2e6c203cf8.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="main-container">
        <!--  HEADER  -->
        <span id="home"></span>
        <div class="homepage">
            <div class="bg-vid">
                <span id="about"></span>
                <video id="banner-vid" autoplay loop muted>
                    <source src="videos\banner.mp4" type="video/mp4">
                </video>
            </div>
            <div id="cover-for-banner-vid"></div>
            <div id="triangular-side"></div>
            <h1 class="title">HANDYMAN</h1>
            <p class="slogan">You break it, we fix it</p>
            <div class="homepage-button">
                <button onclick="location.href='services.php'" class="btn-marginized">
                  <span class="btn__inner">
                    <span class="btn__slide"></span>
                    <span class="btn__content">Request Service</span>
                  </span>
                </button>
            </div>
        </div>
        <!--  SECTION 1 // ABOUT US  -->
        <div class="section-about-us">
            <article class="about-us">
                <img id="about-us-background-img" src="images\WE ARE.png" alt="">
                <h2 class="section-title reveal">What we do</h2>
                <div class="about-line-1"></div>
                <div class="about-line-2"></div>
                <div class="about-line-3"></div>
                <p class="section-content">
                    Welcome to Handyman Services' website! We are a team of skilled professionals 
                    dedicated to providing top-quality home repair and maintenance services to our clients.
                    With years of experience in the industry, we have honed our skills and expertise to 
                    deliver exceptional service and excellent results. Our goal is to make your life 
                    easier by taking care of all your household needs, from fixing leaky faucets to 
                    painting walls and everything in between. We pride ourselves on our commitment to 
                    customer satisfaction and our attention to detail, and we look forward to serving you 
                    and exceeding your expectations. Thank you for choosing us as your trusted handyman 
                    services provider!
                </p>
                <video class="section-video" autoplay muted loop>
                    <source src="videos\video-1.mp4" type="video/mp4">
                </video>

            </article>
        </div>
        <!--  SECTION 2 // SERVICES  -->
        <div class="section-services">
            <article>
                <div class="section-services-content">
                    <h1 class="services-content-1 reveal">Services</h1>
                    <div class="services-line-1"></div>
                    <div class="services-line-2"></div>
                    <p class="services-content-2">We offer a comprehensive range of services designed to
                        tackle all your home repair and maintenance needs. Our team of skilled 
                        professionals is well-equipped to handle a variety of projects, both big and small.
                    </p>
                    <div class="homepage-services-section-btn">
                        <button onclick="location.href='services.php'" class="btn-marginized">
                          <span class="btn__inner">
                            <span class="btn__slide"></span>
                            <span class="btn__content">View Services</span>
                          </span>
                        </button>
                        <div>
                            <img class="services-bg-img" src="images\bale.png" alt="">
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <!--  SECTION 3 // PROMO CODE  -->
        <div class="section-promo-code">
            <article>
                <div class="section-promo-code-content">
                    <h1 class="promo-code-content-1">35% Discount for Newcomers!</h1>
                    <p class="promo-code-content-2">Use the code:</p>
                    <span class="border-line"></span>
                    <div class="promo-code">RENSPOGI123xD</div> <!--ANABALINGxD-->
                </div>
            </article>
            <div id="promo-triangle-botleft"></div>
        </div>
        <div id="promo-triangle-topright"></div>
        <!--  SECTION 4 // HANDYMAN  -->
        <div class="section-handymen">
            <article>
                <div class="section-handymen-content">
                    <div class="handymen-line-1"></div>
                    <h1 class="handymen-content-1 reveal">Handymen</h1>
                    <h3 class="handymen-content-2">Coolest Crew in Town</h3>
                    <p class="handymen-content-3">
                        Comprised of skilled professionals with years of experience, they are 
                        dedicated to providing exceptional service and craftsmanship. Equipped 
                        with a toolbox of skills and a passion for craftsmanship—the masters
                        of home repair and improvement!
                    </p>
                    <div>
                        <img class="handymen-bg-img" src="images\plumber 3.png" alt="">
                    </div>
                    <div class="homepage-handymen-section-btn">
                        <button onclick="location.href='handymen.php'" class="btn-marginized">
                            <span class="btn__inner">
                            <span class="btn__slide"></span>
                            <span class="btn__content">Meet the Handymen</span>
                            </span>
                        </button>
                    </div>
                </div>
            </article>
        </div>

        <a href="#home" class="to-top">
            <i class="fa fa-chevron-up"></i>
          </a>
        <!-- FOOTER -->
        <footer>
            <div class="footer-container">
                <div class="flex-container">
                    <a href="https://www.facebook.com/profile.php?id=100083662747852"><img id="facebook" src="images\facebook.png" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=100083662747852"><img id="twitter" src="images\twitter.png" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=100083662747852"><img id="insta" src="images\instagram.png" alt=""></a>
                </div>
                <div class="footer-content">
                    <a href="#home"><img id="logo"src="images\favicon.png" alt=""></a>
                    <a href="devs.php"><img id="logo2"src="images\company logo.png" alt=""></a>
                    <p class="footer-context">&copy; 2023 Araa Company, Inc. Araa Company, HANDYMAN, and any associated logos are tradmarks, service marks, and/or registered trademarks of Araa Company, Inc.</p>
                    <a href="devs.php" class="devs">The Devs</a>
                </div>
            </div>
        </footer>




        <!-- NAVIGATION BAR SA HULI DAPAT NAKALAGAY AMPOTA -->
        <div class="nav-pane">
            <a id="section-1" href="#home"><img id="logo1" src="images\favicon.png" alt=""></a>
            <a id="section-0" href="devs.php"><img id="logo1" src="images\company logo-white.png" alt=""></a>
            <a id="section-0" href=""></a>
            <a id="section-0" href=""></a>
            <a id="section-0" href=""></a>
            <a id="section-0" href=""></a>
            <a id="section-0" href=""></a>
            <a id="section-2" href="#home">Home</a>
            <a id="section-3" href="#about">About</a>
            <a id="section-4" href="services.php">Services</a>
            <a id="section-5" href="handymen.php">Handymen</a>
            <a id="section-6" href="appoint.php">Appoint</a>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
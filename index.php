<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAR</title>
    <link rel="stylesheet" href="style-main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- Navbar  Section Start -->
    <header>
        <div class="header-image">
            <img src="bar-logo.png" alt="">
        </div>
        <a href="#" class="logo"><span> BAR</span>
            <span1>Technologies</span1>
        </a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About-Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login_page.php">Login</a></li>

        </ul>
    </header>
    <!-- Navbar Section End -->
    <hr>
    <!-- Home Section Start -->
    <section class="home" id="home">
        <div class="social">
            <!-- <a href=""><i class='bx bxl-twitter'></i></a>
        <a href="https://instagram.com"><i class='bx bxl-instagram'></i></a>
        <a href="https://facebook.com"><i class='bx bxl-facebook'></i></a> -->
        </div>

        <div class="home-img">
            <img src="logo4.png" alt="">
        </div>

        <div class="home-text">
            <h1>B A R</h1>
            <h2>Technologies</h2>
            <p>. Delivering technology solutions</br>
                . Connecting people and technology</br>
                . Innovate, connect, inspire</br>
                . Leveraging tech to drive a better IT experience</br>
                . Ready for the future</br>
                . We do IT
            </p>
            <label for="">Apply For JOB</label>
            <button class="contact-button"><a href="applicant.php" class="contact-button">Apply Here..!</a></button>
            <!-- <button><input type="button" value="" class="">
            <a href="applicant.php">Apply Here..!</a></button> -->
            
        </div>
    </section>
    <!-- Home Section End -->
    <hr>

    <!-- Services Section Start -->
    <section class="services" id="services">
        <div class="heading">
            <h2>Services</h2>
            <span>Our Services</span>
        </div>
        <div class="services-content">

            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <a href="#">Learn More</a>
            </div>

            <div class="services-box">
                <i class='bx bx-server'></i>
                <h3>Backend Development</h3>
                <a href="#">Learn More</a>
            </div>
            <div class="services-box">
                <i class='bx bx-brush'></i>
                <h3>UI/UX Design</h3>
                <a href="#">Learn More</a>
            </div>

            <div class="services-box">
                <i class='bx bxl-android'></i>
                <h3>App Development</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <hr>

    <!-- About Section Start -->

    <section class="about" id="about">
        <div class="heading">
            <h2>About Us</h2>
            <span>Introduction</span>
        </div>

        <div class="about-container">
            <div class="about-img">
                <img src="main.jpg" alt="">
            </div>
            <div class="about-text">
                <div class="information">
                    <div class="info-box">
                        <i class='bx bxs-user'></i>
                        <span>BAR Technologies, Morbi-Rajkot Highway, Gujarat, India</br>360003</span>
                    </div>

                    <div class="info-box">
                        <i class='bx bxs-phone'></i>
                        <span>+0281 98251 98702</span>
                    </div>

                    <div class="info-box">
                        <i class='bx bxs-envelope'></i>
                        <span>bartechnologies@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    <!-- Contact Section Start -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact</h2>
            <span>Connect With Us</span>
        </div>
        <div class="contact-form">
            <form action="">
                <input type="text" placeholder="Your Name">
                <input type="email" name="" id="" placeholder="Your Email">
                <input type="number" name="" id="" placeholder="contact">
                <input type="text" name="" id="" placeholder="Query">

                <textare name="" id="" cols="30" rows="10" placeholder="Write Message Here..."></textare>
                <input type="button" value="Send" class="contact-button">
            </form>
        </div>
    </section>
    <!-- Contact Section End -->
    <div class="footer">
        <h2>Follow Us</h2>
        <div class="footer-social">
            <a href="https://facebook.com"><i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com"><i class='bx bxl-twitter'></i></a>
            <a href="https://instagram.com"><i class='bx bxl-instagram'></i></a>
            <a href="https://youtube.com"><i class='bx bxl-youtube'></i></a>
        </div>
    </div>
    <!-- Javascript -->
    <script src="script.js"></script>
</body>

</html>
<?php
include 'php_includes/connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Dimple Star Transport</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="icon" href="images/icon.ico" type="image/x-con">
    <script src="slide/js/jquery.js"></script>
    <script src="slide/js/amazingslider.js"></script>
    <script src="slide/js/initslider-1.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Dimple St★r Transport</h1>
            <p class="hero-subtitle">Your trusted partner for safe and comfortable bus travel</p>
            <a href="book.php" class="cta-button">Book Your Journey</a>
        </div>
    </div>

    <div class="main-container" style="margin-top: 1rem;">
        <div class="content-section">
            <div class="login-status">
                <?php
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    echo "Welcome, " . $email . "!";
                    echo "<a href='logout.php'>Logout</a>";
                } else {
                    echo "Ready to travel? <a href='signlog.php'>Sign Up / Login</a>";
                }
                ?>
            </div>

            <div class="slider-container">
                <div class="slider">
                    <div id="amazingslider-1">
                        <ul class="amazingslider-slides" style="display:none;">
                            <li><img src="slide/images/b1.png" alt="Bus Service 1" /></li>
                            <li><img src="slide/images/b2.png" alt="Bus Service 2" /></li>
                            <li><img src="slide/images/b3.png" alt="Bus Service 3" /></li>
                            <li><img src="slide/images/b4.png" alt="Bus Service 4" /></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><img src="images/icon/bus.png"></div>
                    <h3 class="feature-title">Comfortable Buses</h3>
                    <p class="feature-description">Modern, well-maintained buses with comfortable seating and air conditioning for your journey.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="images/icon/clock.png"></div>
                    <h3 class="feature-title">On-Time Service</h3>
                    <p class="feature-description">Reliable schedules and punctual departures to get you to your destination on time.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="images/icon/protect.png"></div>
                    <h3 class="feature-title">Safe Travel</h3>
                    <p class="feature-description">Experienced drivers and regular vehicle maintenance ensure your safety throughout the journey.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="images/icon/money.png"></div>
                    <h3 class="feature-title">Affordable Rates</h3>
                    <p class="feature-description">Competitive pricing without compromising on quality and comfort of service.</p>
                </div>
            </div>

            <div class="contact-info">
                <h2 class="contact-title">Contact Us</h2>
                <div class="phone-number">0929 209 0712</div>
                <div class="address">
                    Block 1 lot 10, Southpoint Subdivision<br>
                    Brgy Banay-Banay, Cabuyao, Laguna
                </div>
                <div class="datetime-display">
                    <?php include_once("php_includes/date_time.php"); ?>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="copyright">© Dimple Star Transport</div>
</footer>
</html>
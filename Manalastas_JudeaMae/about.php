<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Dimple Star Transport</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="icon" href="images/icon.ico" type="image/x-con">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="main-container">
        <div class="content-section">
            <h1 class="content-title">ABOUT US</h1>
            
            <div class="historical-image-container">
                <img src="images/oldbus.jpg" alt="Historical Bus" class="historical-image">
                <div class="image-caption">
                    Photo taken on October 16, 1993. Napat Transit (now Dimple Star Transport) NVR-963<br>
                    (fleet No 800) going to Alabang and jeepneys under the Light Rail Line in Taft Ave near<br>
                    United Nations Avenue, Ermita, Manila, Philippines.
                </div>
            </div>

            <div class="highlight-box">
                <p class="highlight-text">
                    Year 2004 of May changes has been made, Napat Transit became Dimple Star Transport.
                </p>
            </div>

            <div class="features-grid about-features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><img src="images/icon/target.png"></div>
                    <h3 class="feature-title">Mission</h3>
                    <p class="feature-description">To provide superior transport service to Metro Manila and Mindoro Province commuters.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="images/icon/eye.png"></div>
                    <h3 class="feature-title">Vision</h3>
                    <p class="feature-description">To lead the bus transport industry through its innovation service to the riding public.</p>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="copyright">© Dimple Star Transport</div>
</footer>
</html>
<?php
include 'php_includes/connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Contact Us - Dimple Star Transport</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="style/contact.css" />
    <link rel="icon" href="images/icon.ico" type="image/x-con">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="main-container">
        <div class="content-section">
            <h1 class="content-title">CONTACT US</h1>
            
            <div class="contact-form-container">
                <div class="contact-info">
                    <h3>Company Information</h3>
                    <p>
                        <strong>Dimple Star Transport</strong><br>
                        Block 1 lot 10, Southpoint Subd.<br>
                        Brgy Banay-Banay, Cabuyao, Laguna<br>
                        Phone: 0929 209 0712
                    </p>
                    <div class="datetime-display" style="margin-top: 20px;">
                        <?php include_once("php_includes/date_time.php"); ?>
                    </div>
                </div>
                
                <div class="message-form">
                    <h3 class="form-title">Message Form</h3>
                    <form class="validate" action="messageexec.php" method="POST">
                        <div class="form-group">
                            <label for="name" class="form-label">Name:</label>
                            <input id="name" class="form-input" type="text" name="name" required />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email:</label>
                            <input id="email" class="form-input" placeholder="Example: aaron@gwaps.com" type="email" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject:</label>
                            <input id="subject" class="form-input" type="text" name="subject" required />
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message:</label>
                            <textarea id="message" class="form-textarea" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input class="submit-button" id="submit-button" type="submit" name="Submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="copyright">© Dimple Star Transport</div>
</footer>
</html>
<?php
include 'php_includes/connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Route Schedule - Dimple Star Transport</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="style/routeschedule.css" />
    <link rel="icon" href="images/icon.ico" type="image/x-con">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="main-container">
        <div class="content-section">

            <h1 class="content-title">ROUTE SCHEDULE</h1>
            
            <div style="text-align: center; margin-bottom: 40px;">
                <img src="images/route.png" alt="Route Map" class="route-map">
                <h2 class="route-note">(All trips are vice versa)</h2>
            </div>

            <div class="schedule-table-container">
                <table class="schedule-table">
                    <tr>
                        <th><h3>Origin</h3></th>
                        <th><h3>Regular Schedule</h3></th>
                        <th><h3>Destination</h3></th>
                    </tr>
                    <tr>
                        <td class="terminal-name">Ali Mall Cubao Terminal</td>
                        <td>9:00 am / 10:00 am / 1:00 pm / 4:00pm</td>
                        <td class="destination-name">San Jose</td>
                    </tr>
                    <tr>
                        <td class="terminal-name">Alabang Terminal</td>
                        <td>6:00 am / 7:00 am / 2:00 pm / 6:00 pm / 10:00 pm</td>
                        <td class="destination-name">San Jose</td>
                    </tr>
                    <tr>
                        <td class="terminal-name">Cabuyao Terminal</td>
                        <td>8:00 am / 9:00 am / 4:00 pm / 8:00 pm</td>
                        <td class="destination-name">San Jose</td>
                    </tr>
                    <tr>
                        <td class="terminal-name">Espana Terminal</td>
                        <td>4:30 am / 5:30 am / 12:00 am / 4:00 pm / 8:00 pm</td>
                        <td class="destination-name">San Jose</td>
                    </tr>
                    <tr>
                        <td class="terminal-name">San Lazaro Terminal</td>
                        <td>3:00 am / 4:30 am / 11:00 am / 3:00 pm / 7:00 pm</td>
                        <td class="destination-name">San Jose</td>
                    </tr>
                    <tr>
                        <td class="terminal-name">Pasay Terminal</td>
                        <td>5:00 am / 6:00 am / 1:00 pm / 3:00pm</td>
                        <td class="destination-name">San Jose</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="copyright">© Dimple Star Transport</div>
</footer>
</html>
<!DOCTYPE html>
<?php
include 'php_includes/connection.php';
include 'php_includes/book.php';
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Book Now - Dimple Star Transport</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/book.css" />
    <link rel="icon" href="images/icon.ico" type="image/x-con">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="main-container">
        <div class="content-section">
            <h1 class="content-title">BOOK NOW!</h1>
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="booking-form">
                <div class="form-row">
                    <div class="form-label">Trip Type:</div>
                    <div class="form-inputs">
                        <div class="form-radio-group">
                            <div class="radio-option">
                                <input type="radio" name="way" value="2" id="two-way" onclick="document.getElementById('datepick2').disabled=false">
                                <label for="two-way">Two Way</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" name="way" value="1" id="one-way" checked onclick="document.getElementById('datepick2').disabled=true">
                                <label for="one-way">One Way</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label">Origin:</div>
                    <div class="form-inputs">
                        <select name="Origin" class="form-select" required>
                            <option value="0">Select Origin</option>
                            <option value="San Lazaro">San Lazaro</option>
                            <option value="Espana">Espana</option>
                            <option value="Alabang">Alabang</option>
                            <option value="Cabuyao">Cabuyao</option>
                            <option value="Naujan">Naujan</option>
                            <option value="Victoria">Victoria</option>
                            <option value="Pinamalayan">Pinamalayan</option>
                            <option value="Gloria">Gloria</option>
                            <option value="Bongabong">Bongabong</option>
                            <option value="Roxas">Roxas</option>
                            <option value="Mansalay">Mansalay</option>
                            <option value="Bulalacao">Bulalacao</option>
                            <option value="Magsaysay">Magsaysay</option>
                            <option value="San Jose">San Jose</option>
                            <option value="Pola">Pola</option>
                            <option value="Soccoro">Soccoro</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label">Destination:</div>
                    <div class="form-inputs">
                        <select name="Destination" class="form-select" required>
                            <option value="0">Select Destination</option>
                            <option value="San Lazaro">San Lazaro</option>
                            <option value="Espana">Espana</option>
                            <option value="Alabang">Alabang</option>
                            <option value="Cabuyao">Cabuyao</option>
                            <option value="Naujan">Naujan</option>
                            <option value="Victoria">Victoria</option>
                            <option value="Pinamalayan">Pinamalayan</option>
                            <option value="Gloria">Gloria</option>
                            <option value="Bongabong">Bongabong</option>
                            <option value="Roxas">Roxas</option>
                            <option value="Mansalay">Mansalay</option>
                            <option value="Bulalacao">Bulalacao</option>
                            <option value="Magsaysay">Magsaysay</option>
                            <option value="San Jose">San Jose</option>
                            <option value="Pola">Pola</option>
                            <option value="Soccoro">Soccoro</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label">No. Of Passengers:</div>
                    <div class="form-inputs">
                        <input type="number" name="no_of_pass" class="form-number" min="1" max="10" required />
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label">Departure:</div>
                    <div class="form-inputs">
                        <input id="datepick1" class="form-input" name="Departure" required />
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label">Return:</div>
                    <div class="form-inputs">
                        <input id="datepick2" class="form-input" name="Return" disabled />
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label">Bus Type:</div>
                    <div class="form-inputs">
                        <select name="bustype" class="form-select" required>
                            <option value="0">Select Bus Type</option>
                            <option value="Air Conditioned">Air Conditioned</option>
                            <option value="Ordinary">Ordinary</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label"></div>
                    <div class="form-inputs">
                        <input type="submit" name="submit" id="submit" value="Book Now" class="form-submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="copyright">© Dimple Star Transport</div>
</footer>

<script type="text/javascript" src="js/datepickr.js"></script>
<script type="text/javascript">
    new datepickr('datepick1', {
        'dateFormat': '20y-m-d'
    });

    new datepickr('datepick2', {
        'dateFormat': '20y-m-d'
    });
</script>

</html>
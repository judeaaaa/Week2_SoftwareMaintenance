<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<link rel="stylesheet" type="text/css" href="style/navbar.css">
<nav class="modern-navbar">
    <div class="nav-container">
        <!-- Left Side -->
        <div class="nav-logo">
            <a href="index.php">
                <img src="images/logo.png" alt="Dimple Star Transport" class="logo-img">
            </a>
        </div>

        <!-- Middle -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                    HOME
                </a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                    ABOUT US
                </a>
            </li>
            <li class="nav-item">
                <a href="terminal.php"
                    class="nav-link <?php echo ($current_page == 'terminal.php') ? 'active' : ''; ?>">
                    TERMINALS
                </a>
            </li>
            <li class="nav-item">
                <a href="routeschedule.php"
                    class="nav-link <?php echo ($current_page == 'routeschedule.php') ? 'active' : ''; ?>">
                    ROUTES/SCHEDULES
                </a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                    CONTACT
                </a>
            </li>
            <li class="nav-item">
                <a href="book.php" class="nav-link <?php echo ($current_page == 'book.php') ? 'active' : ''; ?>">
                    BOOK NOW
                </a>
            </li>
        </ul>

        <!-- Right Side -->
        <div class="nav-book">
            <?php if (isset($_SESSION['email'])): ?>
                <a href="logout.php" class="book-btn">LOGOUT</a>
            <?php else: ?>
                <a href="signlog.php" class="book-btn <?php echo ($current_page == 'signlog.php') ? 'active' : ''; ?>">
                    SIGN UP / LOGIN
                </a>
            <?php endif; ?>
        </div>

        <!-- Mobile -->
        <div class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>

<!-- Mobile -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay">
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <img src="images/logo.png" alt="Dimple Star Transport" class="mobile-logo">
            <button class="close-btn" id="closeBtn">&times;</button>
        </div>
        <ul class="mobile-nav-list">
            <li><a href="index.php"
                    class="mobile-nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">HOME</a></li>
            <li><a href="about.php"
                    class="mobile-nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">ABOUT US</a>
            </li>
            <li><a href="terminal.php"
                    class="mobile-nav-link <?php echo ($current_page == 'terminal.php') ? 'active' : ''; ?>">TERMINALS</a>
            </li>
            <li><a href="routeschedule.php"
                    class="mobile-nav-link <?php echo ($current_page == 'routeschedule.php') ? 'active' : ''; ?>">ROUTES/SCHEDULES</a>
            </li>
            <li><a href="contact.php"
                    class="mobile-nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">CONTACT</a>
            </li>
            <li><a href="book.php"
                    class="mobile-nav-link <?php echo ($current_page == 'book.php') ? 'active' : ''; ?>">BOOK NOW</a>
            </li>
        </ul>
        <?php if (isset($_SESSION['email'])): ?>
            <a href="logout.php" class="book-btn-mobile">LOGOUT</a>
        <?php else: ?>
            <a href="signlog.php"
                class="book-btn-mobile <?php echo ($current_page == 'signlog.php') ? 'active' : ''; ?>">SIGN UP /
                LOGIN</a>
        <?php endif; ?>
    </div>
</div>

<script src="js/navbar.js"></script>
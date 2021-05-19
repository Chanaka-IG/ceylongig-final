

<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>



<!DOCTYPE html>

    <head>
        <title>NavBar</title>
        <link rel="stylesheet" href="../../assets/css/admin/header.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>  <!--Copy and Paste this within Head Tag-->
    </head>

    <body>

        <!--copy this whole thing (nav and script) on top of your body-->
        <nav>
            <div>
                <a href="#"><img src="../../assets/other/CeylonGig_logo.svg" alt="CeylonGig Logo" ></a>
            </div>
                <ul class="nav-links">
                    <li><a href="admin_home.php">Home</a></li>
                    <li><a href="admin_dashboard.php">Dashboard</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="card.php">Hi <?php  echo  $_SESSION['name']?></a></li>
                        <li><a href="../../../model/logout.php" class="log-in" style="color: #fbfbfb;">Logout</a></li>
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
        </nav>

        <script src="../../assets/js/navbar.js"></script>

    </body>

</html>
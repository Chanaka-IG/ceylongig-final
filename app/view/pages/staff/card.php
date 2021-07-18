

<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}


?>





<html>
    <head>
        <title>Card</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/staff/card.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

        <script> 
            $(function(){
            $("#includedContent").load("header.php"); 
            });
        </script> 
    </head>


    <body>
    <header>
        <div id="includedContent"></div>
    </header>
        
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

        <div class="wrapper">
            <div class="left">
                <img src="../../assets/img/card.png" alt="user" width="100">
                <h4><?php echo  $_SESSION['name'] ?></h4>
                <p>CeylonGig Team</p>
                
            </div>
            <div class="right">
                <div class="info">
                    <h3>Information</h3>
                    <div class="info_data">
                        <div class="data">
                            <h4>Name</h4>
                            <p><?php echo  $_SESSION['name'] ?></p>
                        </div>
                        <div class="data">
                            <h4>Email</h4>
                            <p><?php echo  $_SESSION['email'] ?></p>
                        </div>
                        <div class="data">
                            <h4>Address</h4>
                            <p><?php echo  $_SESSION['address'] ?></p>
                        </div>
                        <div class="data">
                            <h4>Gender</h4>
                            <p><?php echo  $_SESSION['gender'] ?></p>
                        </div>
                        <div class="data">
                            <h4>Gender</h4>
                            <p><?php echo  $_SESSION['gender'] ?></p>
                        </div>
                        <div class="data">
                            <h4>Role</h4>
                            <p><?php echo  $_SESSION['role'] ?></p>
                            
                        </div>
                    </div>
                </div>
            
                <div class="social_media">
                    <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="button1">
                <form method="POST" action="change_staff_details.php">
                <button type="submit" name="register" value=<?php echo  $_SESSION['email'] ?> >Update details</button><br>
                </form>
            </div>

            </div>
        </div>



    </body>





</html>


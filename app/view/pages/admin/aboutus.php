
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
        <title>About us</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin/about_us.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
            <script> 
                $(function(){
                $("#includedContent").load("header.php"); 
                });
            </script> 

            <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
            <script> 
                $(function(){
                $("#includedContent1").load("footer.php"); 
                });
            </script> 



    </head>

    <body>


        <header>
            <div id="includedContent"></div>
        </header>
        
        <div class="container">
            <div class="about">
                <div class="text">
                    <h1>About us</h1>
                    <div class="line"></div>
                </div>
            </div>
            <div class="content">
                <p> <b>CeylonGig</b> is established with a motive of creating a web-based platform for all self-employed workers, also known as freelancers,
                    to deliver their service efficiently to the customers who are seeking them.
                    <b>CeylonGig</b> will be targeting to assist freelancers such as home-food makers, tailors, beauticians, plumbers, mechanics and also other online freelancers to get connected with their customers.
                <br> It also acts as a platform for the customers to post a job which needs to be done for them and the system will help them find the freelancers
                    who are capable of offering them goods/services required.<br>
                    The ultimate goal of the project is to deliver a safe and novel platform for Sri Lankan freelancers to find a job and for the customers who live in Sri Lanka to get their jobs done.
                </p>
            </div>
        </div>

                <footer>
                <div id="includedContent1"></div>

                </footer>

    </body>

</html>
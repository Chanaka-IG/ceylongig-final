

<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin setting</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/staff/advertise_operations.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script> 
            $(function(){
            $("#includedContent").load("header.php"); 
            });
        </script> 

       <script> 
            $(function(){
            $("#includedContent1").load('footer.php'); 
            });
        </script> 

        <script> 
            $(function(){
            $("#includedContent2").load('navigation.php'); 
            });
        </script> 

    
    </head>

    <body>

        <header>
           <div id="includedContent"></div>

        </header>

        <!-- Siddebar-->
        <div id="includedContent2"></div>
            

                <section>
                        <div class="box1">
                            <h2>Rejected adds</h2>
                            <p>You can find rejected ads and refund them </p>
                            <a href="rejected_advertise_details.php">Click here</a>
                        </div>
                    
                        <div class="box1">
                            <h2>Current Adds</h2>
                            <p>You can view current ads details using this</p>
                            <a href="current_advertise_details.php">Click here</a>
                            
                        </div>
                        <div class="box1">
                            <h2>Adds Requests</h2>
                            <p>You can find ads requests and add them </p>
                            <a href="request_advertise_details.php">Click here</a>
                        </div>

                       
                </section>
                
            </div>

                    
        <footer>
            <div id="includedContent1"></div>
        </footer>

    </body>

</html>
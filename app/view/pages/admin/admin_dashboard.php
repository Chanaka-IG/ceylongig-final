
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
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin/admin_dashboard.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin/admindash.css" />
       

       <link rel="stylesheet" href="../../assets/css/navbar.css" />

       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

           <script src="https://kit.fontawesome.com/a076d05399.js"></script>
           
           <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



        <script src="https://kit.fontawesome.com/a076d05399.js"></script>


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



    

    </head>

    <body>

        <header>


         <div id="includedContent"></div>


        </header>

                
        <div class="header-small">

            <div class="items">
                <h1 class="subhead"> Admin Dashboard</h1>
            </div>
        </div>    
                <section>

               
                    
                    <div class="box1">
                        
                           <i class="fas fa-users"></i>
                        
                        <h2>Staff</h2>
                       <p>You can view the records of Staff</p>
                        <a href="staff_dashboard.php">Click here</a>
                    </div>
                    <div class="box1">
                    <i class="fas fa-child"></i>

                        <h2>Freelancer</h2>
                        <p>You can view the records of Freelancer</p>
                        <a href="freelancer_dashboard.php">Click here</a>
                        
                    </div>

                    <div class="box1">
                    <i class="fas fa-audio-description"></i>
                        <h2>Advertiser</h2>
                        <p>You can view the records of Advertiser</p>
                        <a href="advertiser_dashboard.php">Click here</a>
                        
                    </div>

                    <div class="box1">
                    <i class="fas fa-list-alt"></i>
                        <h2>Order</h2>
                        <p>You can view the records of Order</p>
                        <a href="order_dashboard.php">Click here</a>
                        
                    </div>

                    <div class="box1">
                    <i class="fas fa-envelope-open"></i>
                        <h2>Complaint</h2>
                        <p>You can view the records of Complaint</p>
                        <a href="complaint_dashboard.php">Click here</a>
                        
                    </div>

                    <div class="box1">
                    <i class="fas fa-address-card"></i>
                        <h2>Customers</h2>
                        <p>You can view the records of Customers</p>
                        <a href="customer_dashboard.php">Click here</a>
                        
                    </div>

		          
                </section>
            
        
    </body>

</html>
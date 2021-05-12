
<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

    <head>
            <meta charset="="UTF-8">
            <title>CeylonGig</title>
            <link rel="stylesheet" href="../../assets/css/admin/admin_home.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/admin/pure-responsive-min.css" />
            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
        <div class="box-area">
        
            <div class="banner-area">
                <div class="container1">
                    <div class="outer">
                        <div class="details">
                            <h1>Welcome to Admin Panel <span class="username"> <span class="username"><?php echo  $_SESSION['name'] ?>!</span></h1>
                            <h2> deliver a safe and novel platform for Sri Lankan freelancers to find a job and for the customers who live in Sri Lanka to get their jobs done. 
                            </h2>
                        </div>
                    </div>
                </div>
                    
            </div>
                <div class="content-area">
                    <div class="container">
                        <div class="card">
                            <div class="face face1">
                                <div class="cont">
                                    <img src="../../assets/img//group.png">
                                    <h3>User setting</h3>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="cont">
                                    <p>Click below to add user, remove user, update user</p>
                                    <a href="admin_crud.php">Click here</a>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="card">
                            <div class="face face1">
                                <div class="cont">
                                    <img src="../../assets/img/woman.png">
                                    <h3>Priviledge setting</h3>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="cont">
                                    <p>Click below to set priviledges to users</p>
                                    <a href="privilege_set_view.php">Click here</a>
                                </div>
                                
                            </div>
                            
                        </div>
                
                    
                    </div>             
                </div>
                
                
            
        </div>


            <footer>
                <div id="includedContent1"></div>
            </footer>
    


    
    </body>


</html>




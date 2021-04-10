
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
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin/admin_crud.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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



    

    </head>

    <body>

        <header>


         <div id="includedContent"></div>


        </header>
                <section>

               
                    <div class="box1">
                        <h2>Chat</h2>
                        <p>You can chat with staff members from using this</p>
                        <a href="chatapp.php">Click here</a>
                        
                    </div>
                    
                    <div class="box1">
                        <h2>View users</h2>
                        <p>You can view staff and find block users</p>
                        <a href="user_manage.php">Click here</a>
                    </div>
                    <div class="box1">
                        <h2>Add staff</h2>
                        <p>You can add a staff member using this</p>
                        <a href="user_add.php">Click here</a>
                        
                    </div>
                   

		          
                </section>
                

            <footer>
                <div id="includedContent1"></div>
            </footer>
        
    </body>

</html>
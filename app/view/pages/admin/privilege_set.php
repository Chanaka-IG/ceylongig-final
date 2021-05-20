<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<?php 
include ('../../../model/staff/set_privilege.php');

?>




<html>
    <heaad>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="../../assets/css/admin/user_add.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script> 
    $(function(){
    $("#includedContent").load("header.php"); 
    });
</script> 

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
            <div class="header">
                <h2>Privilege Set</h2>
            </div>

            
            <form id="form" class="form" action="privilege_set.php" method="POST">

          
                <div class="form-control">
                    <label for="username">Name</label>
                    <input type="text" value="<?php echo $row['name']; ?>"  id="username" name="name" />
                   
                </div>
                <div class="form-control">
                    <label for="username">User Id</label>
                    <input type="text" value="<?php echo $row['staffID']; ?>"  id="userid" name="userid" />
                  
                </div>
              

                  <div class="form-control">
                    <label for="username">Email</label>
                    <input type="email" value="<?php echo $row['email']; ?>" id="email" name="email" />
                   
                </div>

              

                <div class="form-control">
                    <label for = "username" id="role">U-Role</label>
                   
                    <label class="radio">
                    <input type="radio"  name="role" value="Admin"  class="username " <?php if ($row['role']== 'Admin') { echo "checked";} ?>>Admin
                        
                        <br>
                    </label>    
                       
                    <label class="radio">
                        <input type="radio"  name="role" value="Staff" class="username"  <?php if ($row['role']== 'Staff') { echo "checked";} ?> >Staff
                        
                    <br>
                    </label>
                
                </div>

          

            <button type="submit" name="register" >Check and submit</button><br> 
            
            </form>
        </div>
     
     
        <footer>

<div id="includedContent1"></div>

</footer>


    </body>
</html>



<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>


<?php

include ('../../../model/staff/add_user.php');

?>



<html>
    <heaad>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="../../assets/css/admin/user_add.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
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
    $("#includedContent1").load("footer.php"); 
    });
</script> 


    </heaad>
    <body>
    <header>

<div id="includedContent"></div>

</header>

        <div class="container">
            <div class="header">
                <h2>Add User</h2>
            </div>
            <form id="form" class="form" action="user_add.php" method="POST">
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" placeholder="abcd" id="username" name="name" />
                     
                </div>
                <div class="form-control">
                    <label for="username">Email</label>
                    <input type="text" placeholder="abc@gmail.com" id="email" name="email" />
                    
                </div>
                <div class="form-control">
                    <label for="username">Password</label>
                    <input type="password" placeholder="Password" name="password"/>
                   
                </div>
                <div class="form-control">
                    <label for="username">Password check</label>
                    <input type="password" placeholder="Re-Enter password" id="password2" name="repassword"/>
        
                </div>


              <div class="form-control">
                    <label for="username">Address</label>
                    <input type="text" placeholder="Address"  name="address"/>
                   
                </div>

                <div class="form-control">
                    <label for="username">Date Of birth</label>
                    <input type="date" placeholder="Date of birth" id="dob" name="dob"/>
                   
                </div>

               <div class="form-control">
                    <label for ="username" id ="gender">Gender</label>
            
                  <label class="radio">
                    <input type="radio"  name="gender" value="Female" class="username"  >Female
                        
                        <br>
                    </label>
                    <label class="radio">
                        <input type="radio"  name="gender" value="Male" class="username" >Male
                        
                        <br>
                    </label>

                     <label class="radio">
                        <input type="radio"  name="gender" value="Non_binary" class="username" >Non
                        
                        <br>
                    </label>

                    <label class="radio">
                        <input type="radio"  name="gender" value="Not_to_say" class="username" >Not to say
                        
                        <br>
                    </label>

                    
                    

                   
                </div>

                <div class="form-control">
                    <label for = "username" id="role">U-Role</label>
                  
                    <label class="radio">
                    <input type="radio"  name="role" value="Admin"  class="username " required>Admin
                        
                        <br>
                    </label>    
                       
                    <label class="radio">
                        <input type="radio"  name="role" value="Staff" class="username"  required>Staff
                        
                    <br>
                    </label>
                
                </div>

          

            <button type="submit" name="register" >Check and submit</button><br> 
            <div class = "links">
            <a href="view_user.php">View user</a><br>
            </div> 
            </form>
        </div>
     
        <script src="../../assets/js/staff/user_add.js"></script>
      
      
        <footer>

<div id="includedContent1"></div>

</footer>


    </body>
</html>
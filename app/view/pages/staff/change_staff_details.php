
<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>


<?php 
include ('../../../model/staff/change_staff_details.php');

?>



<html>
    <heaad>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="../../assets/css/admin/change_details.css">
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
                <h2>User Update</h2>
            </div>
            <form id="form" class="form" action="change_staff_details.php" method="POST">
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" value="<?php echo $row['name']; ?>"  id="username" name="name" />
                   
                </div>
                <div class="form-control">
                    <label for="username">Email</label>
                    <input type="email" value="<?php echo $row['email']; ?>" id="email" name="email" readonly/>
                
                </div>
                <div class="form-control">
                    <label for="username">Password</label>
                    <input type="password" value="<?php echo $row['password']; ?>"  id="password" name="password" />
                   
                </div>
                <div class="form-control">
                    <label for="username">Password check</label>
                    <input type="password"value="<?php echo $row['repassword']; ?>" id="password2" name="repassword" />
                    
                </div>

                  <div class="form-control">
                    <label for="username">User Id</label>
                    <input type="text" value="<?php echo $row['staffID']; ?>" id="userid" name="staffID" readonly />
                   
                </div>

              <div class="form-control">
                    <label for="username">Address</label>
                    <input type="text" value="<?php echo $row['address']; ?>" id="address" name="address" />
                   
                </div>

                <div class="form-control">
                    <label for="username">Date Of Birth</label>
                    <input type="date" value="<?php echo $row['dob']; ?>" id="dob" name="dob" />
                   
                </div>


               

          

            <button type="submit" name="updateB" >Submit</button><br> 
           
            </form>
        </div>
     
     
      
        <footer>

<div id="includedContent1"></div>

</footer>


    </body>
</html>
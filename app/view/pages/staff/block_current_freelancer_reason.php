



<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>


<?php 
include ('../../../model/staff/to_be_block_freelancer.php');
include ('../../../model/staff/delete_freelancer.php');

?>



<html>
    <heaad>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="../../assets/css/admin/user_update.css">
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
                <h2>Send Email</h2>
            </div>
            <form id="form" class="form" action="block_current_freelancer_reason.php" method="POST">
                <div class="form-control">
                    <label for="username">Freelancer-NIC</label>
                    <input type="text" value="<?php echo $row1['freelancerNIC']; ?>"  name="freelancerid" readonly/>
                   
                </div>
                <div class="form-control">
                    <label for="username">Email</label>
                    <input type="email" value="<?php echo $row1['freelancerEmail']; ?>"  name="email" readonly/>
                
                </div>

                  <div class="form-control">
                    <label for="username">Reason</label>
                    <input type="text" placeholder="Type the reason...."  name="reason" required/>
                   
                </div>
          

            <button type="submit" name="send" >Send</button><br> 
           
            </form>
        </div>
     
     
      
        <footer>

<div id="includedContent1"></div>

</footer>


    </body>
</html>
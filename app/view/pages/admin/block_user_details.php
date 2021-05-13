

<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<?php

include ('../../../model/staff/block_user_details.php');

?>


<!DOCTYPE html>

<html>

<head>


<link rel="stylesheet" href="../../assets/css/admin/view_user.css " type="text/css">
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


       

    

    <table>
        
        

 
        <tr>
            <th colspan=4 class="headline"><h2>Staff Information</h2></th>
        </tr>

        <tr>    
           
            <th>Reason</th>
            <th>UserId</th>
            <th>Email</th>
            <th>Role</th>
            
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
       
				<td><?php echo $row['reason'] ?></td>
        <td><?php echo $row['userID'] ?></td>
				<td><?php echo $row['email'] ?></td>
        <td><?php echo $row['role'] ?></td>
                    
				
        </tr>
        
       
       
       
        <?php
    }
    
  
    ?>

 
    </table>
        
     

<footer>

    <div id="includedContent1"></div>

  </footer>
   

</body>

</html>
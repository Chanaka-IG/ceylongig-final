
<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<?php

include ('../../../model/staff/view_user.php');

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
            <th colspan=9 class="headline"><h2>Staff Information</h2><th>
        </tr>

        <tr>    
            <th>UserId</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Role</th>
            <th>Date of Birth</th>
            <th>Status</th>
            <th>Update</th>
            <th>delete</th>
            
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
        <td><?php echo $row['staffID'] ?></td>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['address'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['role'] ?></td>
        <td><?php echo $row['dob'] ?></td>
        <td><?php echo $row['status'] ?></td>

        <?php echo "<td><a href =user_update.php?email='".$row['email']."' > update </a> </td>"?>
        <?php echo "<td><a href =block_user_reason.php?email=".$row['email']." onclick='return checkdelete()' > delete </a> </td>"?>
                

                
				
        </tr>
        
       
       
       
        <?php
    }
    
  
    ?>

 
    </table>
        
      <script>

          function checkdelete(){
            return confirm('Are you sure delete this record');
          }

      </script>

<footer>

    <div id="includedContent1"></div>

  </footer>
   

</body>

</html>
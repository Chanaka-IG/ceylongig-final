
<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<?php

include ('../../../model/staff/privilege_set_view.php');

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
            <th colspan=4 class="headline"><h2>Staff Information</h2><th>
        </tr>

        <tr>    
           
            <th>Name</th>
            <th>UserId</th>
            <th>Email</th>
            <th>Role</th>
            <th>Request</th>
             <th>Set privilege</th>
       
            
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
       
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['staffID'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['role'] ?></td>
        <td><?php echo $row['request'] ?></td>
       

        <?php echo "<td><a href =privilege_set.php?email='".$row['email']."' > Set </a> </td>"?>
       
                
				
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
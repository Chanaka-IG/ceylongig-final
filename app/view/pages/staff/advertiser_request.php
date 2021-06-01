
<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<?php

include ('../../../model/staff/advertiser_request.php');


?>



<!DOCTYPE html>

<html>

  <head>

    <link rel="stylesheet" type="text/css" href="../../assets/css/staff/advertiser_request.css">
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

    <script> 
      $(function(){
        $("#includedContent2").load('navigation.php'); 
      });
    </script> 



  </head>

  <body>

    <header>
        <div id="includedContent"></div>
      
    </header>

    <!-- Siddebar-->

    <div id="includedContent2"></div>


      <table>
                      
         <tr>

            <th colspan=7><h2>Advertiser Requests</h2></th>

        </tr>  
        <tr>

          <th>Company Name</th>
          <th>Email</th>
          <th>Register Name</th>
          <th>View More</th>
          <th>Add</th>
          <th>Remove</th>
          
            
        </tr>

        
       
        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
        <td><?php echo $row['companyName'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['registererName'] ?></td>
      
        <?php echo "<td><a href =view_full_advertiser_request.php?email='".$row['email']."' > View </a> </td>"?>
        <?php echo "<td><a href =../../../model/staff/add_advertiser.php?email='".$row['email']."' onclick='return checkadd()' > Add </a> </td>"?>
        <?php echo "<td><a href =delete_advertiser_request_reason.php?email=".$row['email']." onclick='return checkdelete()' > Remove </a> </td>"?>
       
				
        </tr>
        
       
       
       
        <?php
    }
    
  
    ?>
      </table>

      <script>

          function checkadd(){
            return confirm('Are you want to add this record?');
          }

      </script>

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
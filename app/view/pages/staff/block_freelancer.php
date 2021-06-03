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


    <link rel="stylesheet" href="../../assets/css/staff/block_freelancer.css " type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <script src="https://code.jquery.com/jquery-3.5.0.js">
    </script>
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

      <th colspan=8><h2>Current Freelancer Details</h2></th>

    <tr> 

        <tr>
            <th>Freelancer  Name</th>
            <th>User name</th>
            <th>User Id</th>
            <th>NIC</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Block</th>
          
            
            
        </tr>

      
        <tr>
              <td>ABC</td>
              <td>CM1</td>
              <td>abc@w</td>
              <td>2000-01-01</td>
              <td>000000000V</td>
              <td>abc@gmail.com</td>
              <td>+9447-0000000</td>
              <td><a href="#">Block</a></td>
            
        
        </tr>

        <tr>
              <td>ABC</td>
              <td>CM1</td>
              <td>abc@w</td>
              <td>2000-01-01</td>
              <td>000000000V</td>
              <td>abc@gmail.com</td>
              <td>+9447-0000000</td>
              <td><a href="#">Block</a></td>
            
        </tr>

        <tr>
              <td>ABC</td>
              <td>CM1</td>
              <td>abc@w</td>
              <td>2000-01-01</td>
              <td>000000000V</td>
              <td>abc@gmail.com</td>
              <td>+9447-0000000</td>
              <td><a href="#">Block</a></td>
            
            
        
        </tr>
    
        
      </table>

      <footer>
          <div id="includedContent1"></div>
      </footer>   
  </body>

</html>


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
    <link rel="stylesheet" type="text/css" href="../../assets/css/staff/category_manage.css">
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
 
        <section>
            
          <div class="box1">
              <h2>View Categories</h2>
              <p>You can view vurrent category list</p>
              <a href="delete_category.php">Click here</a>
              
          </div>

        
        </section>
        
    </div>
    <footer>
    <div id="includedContent1"></div>
  
  </footer>
  
</body>

</html>
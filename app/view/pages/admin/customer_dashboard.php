<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<?php 
//include model file

include ('../../../model/staff/customer_dashboard.php');

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin/admindash.css" />
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

        <link rel="stylesheet" href="../../assets/css/navbar.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

            <script src="https://kit.fontawesome.com/a076d05399.js"></script>


        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
            <script> 
                $(function(){
                $("#includedContent").load("header.php"); 
                });
            </script> 

        
        <title>Document</title>
        

    </head>
    <body>

        <!-- <div id="includedContent1"></div> -->
        <div id="includedContent"></div>

        <div class="content">
            <div class="header-small">

                <div class="items">
                    <h1 class="subhead"> Admin Dashboard</h1>
                </div>
            </div>    
                <div class="pure-g">

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-success">
                                <h2>Number of Active Customers</h2>
                                <span class="column-block-info"><?php  echo $numb1; ?> </span>
                            </div>
                            <ul class="column-block-list">
                                <li>Male <span class="buble-success button-small pull-right"><?php  echo $numb2; ?></span></li>
                                <li>Female <span class="buble-secondary button-small pull-right"><?php  echo $numb3; ?></span></li>
                            
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-warning">
                                <h2>Number of Deactive Customers</h2>
                                <span class="column-block-info"><?php  echo $numb4; ?></span>
                            </div>
                            <ul class="column-block-list">
                                <li>Male <span class="buble-success button-small pull-right"><?php  echo $numb5; ?></span></li>
                                <li>Female <span class="buble-secondary button-small pull-right"><?php  echo $numb6; ?></span></li>
                            
                            </ul>
                        </div>
                    </div>

                  

                  

                </div>

            </div>       
    

    <table>
        
        

 
        <tr>
            <th colspan=7 class="headline"><h2>Customer Information</h2><th>
        </tr>

        <tr>    
            <th>Customer Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Status</th>
        
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
        <td><?php echo $row['customerID'] ?></td>
        <td><?php echo $row['fName'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['status'] ?></td>
     

                
				
        </tr>
        
       
       
       
        <?php
    }
    
  
    ?>
                 
    </table>

                      <form method="post">  
                        <button type="submit" name="generate_pdf" >Create a PDF</button><br> 

                     </form>  

                  

                <script src="../../assets/js/navbar.js"></script>

    
    </body>
</html>
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

include ('../../../model/staff/order_dashboard.php');

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin/admindash.css" />
       

        <link rel="stylesheet" href="../../assets/css/navbar.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
                                <h2>Number of pending orders</h2>
                                <span class="column-block-info"><?php  echo $numb1; ?> </span>
                            </div>
                          
                        </div>
                    </div>

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-warning">
                                <h2>Number of upcoming orders</h2>
                                <span class="column-block-info"><?php  echo $numb2; ?></span>
                            </div>
                           
                        </div>
                    </div>
                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-success">
                                <h2>Number of ongoing orders</h2>
                                <span class="column-block-info"><?php  echo $numb3; ?> </span>
                            </div>
                          
                        </div>
                    </div>
                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-warning">
                                <h2>Number of finished orders</h2>
                                <span class="column-block-info"><?php  echo $numb4; ?></span>
                            </div>
                           
                        </div>
                    </div>
                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-success">
                                <h2>Number of rejected orders</h2>
                                <span class="column-block-info"><?php  echo $numb5; ?> </span>
                            </div>
                          
                        </div>
                    </div>
                  
                    

                </div>

            </div>       
    

    <table>
        
        

 
        <tr>
            <th colspan=6 class="headline"><h2>Order Information</h2><th>
        </tr>

        <tr>    
            <th>OrderId</th>
            <th>Order Name</th>
            <th>FreelancerID</th>
            <th>CustomerID</th>
            <th>Price</th>
            <th>Status</th>
            <th>Description</th>
        
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
        <td><?php echo $row['orderID'] ?></td>
        <td><?php echo $row['orderName'] ?></td>
        <td><?php echo $row['freelancerID'] ?></td>
        <td><?php echo $row['customerID'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['orderStatus'] ?></td>
        <td><?php echo $row['orderDescription'] ?></td>
     

                
				
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
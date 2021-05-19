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

include ('../../../model/staff/freelancer_dashboard.php');

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
              

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header ">
                                <h2>Number of Freelancer Requests</h2>
                                <span class="column-block-info"><?php  echo $numb1; ?> </span>
                            </div>
                           
                        </div>
                    </div>

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header">
                                <h2>Number of Current Freelancers</h2>
                                <span class="column-block-info"><?php  echo $numb4; ?></span>
                            </div>
                          
                        </div>
                    </div>

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header">
                                <h2>Number of Block Freelancers</h2>
                                <span class="column-block-info"><?php  echo $numb7; ?></span>
                            </div>
                           
                        </div>
                    </div>

                  

                </div>

           
    

    <table>
        
        

 
        <tr>
            <th colspan=6 class="headline"><h2>Freelancer Information</h2><th>
        </tr>

        <tr>    
            <th>Freelancer Name</th>
            <th>NIC</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Status</th>
         
        
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
        <td><?php echo $row['fName'] ?></td>
        <td><?php echo $row['freelancerNIC'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['freelancerEmail'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['gender'] ?></td>
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
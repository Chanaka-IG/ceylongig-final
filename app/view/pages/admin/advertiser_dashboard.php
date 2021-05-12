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

include ('../../../model/staff/advertiser_dashboard.php');

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
                                <h2>Number of Advertiser Requests</h2>
                                <span class="column-block-info"><?php  echo $numb1; ?> </span>
                            </div>
                          
                        </div>
                    </div>

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-warning">
                                <h2>Number of Current Advertisers</h2>
                                <span class="column-block-info"><?php  echo $numb2; ?></span>
                            </div>
                          
                        </div>
                    </div>

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-warning">
                                <h2>Number of advertisments requests</h2>
                                <span class="column-block-info"><?php  echo $numb3; ?></span>
                            </div>
                           
                        </div>
                    </div>

                    <div class="box">
                        <div class="column-block">
                            <div class="column-block-header column-success">
                                <h2>Number of Current advertisments</h2>
                                <span class="column-block-info"><?php  echo $numb4; ?></span>
                            </div>
                          
                        </div>
                    </div>

                  

                </div>

            </div>       
    

    <table>
        
        

 
        <tr>
            <th colspan=4 class="headline"><h2>Advertiser Information</h2><th>
        </tr>

        <tr>    
            <th>AdvertiserId</th>
            <th>Company Name</th>
            <th>Phone No</th>
            <th>Email</th>
           
            <th>Registered By</th>
        
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
        <td><?php echo $row['advertiserID'] ?></td>
        <td><?php echo $row['companyName'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['email'] ?></td>
      
        <td><?php echo $row['approvedStaffName'] ?></td>
     

                
				
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
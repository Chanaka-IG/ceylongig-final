

<?php

session_start();

?>
<?php
  
    
    require '../../model/config.php';

    if(isset($_POST['reset'])){
        
        $email2=$_SESSION['email'];

        $password=$_POST['password'];
        $hash_password = md5($password);
        $re_password=$_POST['re_password'];
      
     
        //take values that relevent for email. its chack the role of the user

            $query="SELECT * FROM `loginuser` WHERE email='$email2'";
            $result1=mysqli_query($conn,$query);
            $ret_array=mysqli_fetch_assoc($result1);
            $email1=$ret_array['email'];
    
           
                if($password==$re_password){

                //Update data according to the role   
                    
                    if($ret_array['role']=="Admin" || $ret_array['role']=="Staff"){
                   
                    $update_query1="UPDATE loginuser SET password='$hash_password' WHERE email='$email2' ";
                    $update_result1=mysqli_query($conn,$update_query1);
    
                    $update_query="UPDATE `staff` SET `password`='$hash_password',`repassword`='$hash_password' WHERE email='$email2' ";
    
                 
                    $update_result=mysqli_query($conn,$update_query);
                    if(mysqli_affected_rows($conn)>0){
                        echo"<script> alert('Password resset successfully') </script>";
                       
                        echo"<script> location.href='login.php.' </script>";
                        
                    }
                    else{
                        echo"<script> alert('Failed to reset the password.Please try again.') </script>";
                    }
                   
                }

                    elseif($ret_array['role']=="Freelancer"){
                        $update_query1="UPDATE loginuser SET password='$hash_password' WHERE email='$email2' ";
                        $update_result1=mysqli_query($conn,$update_query1);
        
                        $update_query="UPDATE `freelancer` SET `freelancerPassword`='$hash_password' WHERE freelacerEmail='$email2' ";
                        $result = mysqli_query($conn,$update_query1);
                        if($result)
                        {
                            echo"<script> alert('Password resset successfully') </script>";
                        
                            echo"<script> location.href='login.php.' </script>";
                            
                        }
                        else{
                            echo"<script> alert('Failed to reset the password.Please try again.') </script>";
                        }
                       

                    }

                        if($ret_array['role']=="customer"){
                            $update_query1="UPDATE loginuser SET password='$hash_password' WHERE email='$email2' ";
                            $update_result1=mysqli_query($conn,$update_query1);
            
                            $update_query="UPDATE `customer` SET `password`='$hash_password' WHERE email='$email2' ";
            
                        
                            $update_query="UPDATE `customer` SET `password`='$hash_password' WHERE email='$email2' ";
                            $result = mysqli_query($conn,$update_query);
                            if($result)
                            {
                                echo"<script> alert('Password resset successfully') </script>";
                            
                                echo"<script> location.href='login.php.' </script>";
                                
                            }
                            else{
                                echo"<script> alert('Failed to reset the password.Please try again.') </script>";
                            }
                        }

                 
                }
                else{
                    echo"<script> alert('Password does not matched.') </script>";
                }
               
            

            
   

       
            
        }

    
?>


<!DOCTYPE html>

<head>
    <title>Login - CeylonGig</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/admin/header.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




</head>


<body>


    <header>


    </header>

   
    <form class="loginform" method="POST" action="">
        <h1>Password Reset</h1>

        <div class="textbox">
            <input type="password" name="password" required>
            <span data-placeholder="Password"></span>
        </div>
       
        <div class="textbox">
            <input type="password" name="re_password" required>
            <span data-placeholder="Re enter password"></span>
        </div>

        <input class="loginbutton" type="submit" name="reset" value="Reset">



    </form>

    <script type="text/javascript">
        $(".textbox input").on("focus",function(){
            $(this).addClass("focus");
        });

        $(".textbox input").on("blur",function(){
            if($(this).val() == "")
            $(this).removeClass("focus");
        });
    </script>

</body>

</html>

<?php

session_start();

?>


<?php

require_once ('../../model/staff/config.php');


if(isset($_POST["login"])) {
    $email =  mysqli_real_escape_string($conn,  $_POST["email"] );
    $password = mysqli_real_escape_string($conn,  $_POST["password"] );
    $hash_password = md5($password);

    $query = "SELECT * FROM loginuser WHERE email = '$email' AND
     password = '$hash_password'";

     $result = mysqli_query($conn, $query);

     if(mysqli_num_rows($result) > 0){
         while ($row = mysqli_fetch_assoc($result)){
            if($row["role"] == "Admin"){
               

                header ('Location:admin/admin_home.php');
                $query1 = "SELECT * FROM staff WHERE email = '$email'";
           
                $result1 = mysqli_query($conn, $query1);  
                $row1 = mysqli_fetch_assoc($result1);

                $_SESSION['name'] = $row1["name"];
                $_SESSION['email'] = $row1["email"];
                $_SESSION['staffID'] = $row1["staffID"];
                $_SESSION['password'] = $row1["password"];
                $_SESSION['address'] = $row1["address"];
                $_SESSION['gender'] = $row1["gender"];
                $_SESSION['role'] = $row1["role"];
               
            }
            elseif($row["role"] == "Staff"){

                header ('Location:staff/staff_home.php');

                $query2 = "SELECT * FROM staff WHERE email = '$email'";
           
                $result2 = mysqli_query($conn, $query2);  
                $row2 = mysqli_fetch_assoc($result2);

                $_SESSION['name'] = $row2["name"];
                $_SESSION['email'] = $row2["email"];
                $_SESSION['staffID'] = $row2["staffID"];
                $_SESSION['password'] = $row2["password"];
                $_SESSION['address'] = $row2["address"];
                $_SESSION['gender'] = $row2["gender"];
                $_SESSION['role'] = $row2["role"];
               
            }
            elseif($row["role"] == "Freelancer"){

                header ('Location:freelancer/freelancerDash.php');

                $query2 = "SELECT * FROM freelancer WHERE freelancerEmail = '$email'";
           
                $result2 = mysqli_query($conn, $query2);  
            
                $row2 = mysqli_fetch_assoc($result2);

                $_SESSION['fName'] = $row2["fName"];
                $_SESSION['lName'] = $row2["lName"];
                $_SESSION['freelancerEmail'] = $row2["freelancerEmail"];
                $_SESSION['freelancerID'] = $row2["freelancerID"];
                $_SESSION['address'] = $row2["address"];
                $_SESSION['gender'] = $row2["gender"];
                $_SESSION['phone'] = $row2["phone"];
            }
            elseif($row["role"] == "customer"){

                $query1 = "SELECT * FROM customer WHERE email = '$email' AND
                password = '$hash_password'";
           
                $result1 = mysqli_query($conn, $query1);  
                $row1 = mysqli_fetch_assoc($result1);

                $_SESSION['customerID'] = $row1["customerID"];
                $_SESSION['email'] = $row1["email"];
                $_SESSION['phone'] = $row1["phone"];
                $_SESSION['fName'] = $row1["fName"];
                $_SESSION['lName'] = $row1["lName"];
                $_SESSION['NIC'] = $row1["NIC"];
                $_SESSION['address'] = $row1["address"];
                $_SESSION['dOB'] = $row1["dOB"];
                $_SESSION['profilePicture'] = $row1["profilePicture"];
                $_SESSION['gender'] = $row1["gender"];
                $_SESSION['role'] = $row["role"];
                header('Location: ./customer/customerdashboard.php');
                
            }
            elseif($row["role"] == "Advertiser"){

            /*    header ('Location:staff/staff_home.php');

                $query2 = "SELECT * FROM staff WHERE email = '$email' AND
                password = '$hash_password'";
           
                $result2 = mysqli_query($conn, $query2);  
                $row2 = mysqli_fetch_assoc($result2);

                $_SESSION['name'] = $row2["name"];
                $_SESSION['email'] = $row2["email"];
                $_SESSION['staffID'] = $row2["staffID"];
                $_SESSION['password'] = $row2["password"];
                $_SESSION['address'] = $row2["address"];
                $_SESSION['gender'] = $row2["gender"];
                $_SESSION['role'] = $row2["role"];
               */
            }
         }
        
     }
     else{
        
         
        echo"<script> alert('UserId or password is incorrect') </script>";
        echo"<script> location.href='login.php' </script>";
        
     }
}


?>

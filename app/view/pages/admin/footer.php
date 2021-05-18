
<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="../../assets/css/admin/footer1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

<footer>
      <div class="main-content">
        <div class="left box">
          <h2>
About us</h2>
<div class="content1">
            <p>
            CeylonGig is established with a motive of creating a web-based platform for all self-employed workers, also known as freelancers,
                to deliver their service efficiently to the customers who are seeking them.</p>
<div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
</div>
</div>
<div class="center box">
          <h2>
Address</h2>
<div class="content1">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">-----------------</span>
            </div>
<div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+094-0000000</span>
            </div>
<div class="email1">
              <span class="fas fa-envelope"></span>
              <span class="text">abc@example.com</span>
            </div>
</div>
</div>
<div class="right box">
          <h2>
Contact us<span> (not relevent to you)</span></h2>
<div class="content1">
            <form action="#">
              <div class="email1">
                <div class="text">
Email *</div>
<input type="email" readonly>
              </div>
<div class="msg">
                <div class="text">
Message *</div>

<textarea id=".msgForm" rows="2" cols="25" readonly></textarea> 
              
              <br />
<div class="btn1">
<button type="submit">Send</button1>
              </div>
<div class="bottom">
<center>
         
          <span class="far fa-copyright"></span> 2020 All rights reserved.
        </center>
</div>

</footer>


</html>
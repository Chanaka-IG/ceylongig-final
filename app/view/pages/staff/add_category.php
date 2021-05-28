<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>




<html>
    <heaad>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="../../assets/css/staff/add_category.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script> 
    $(function(){
    $("#includedContent").load("header.php"); 
    });
</script> 

<script> 
    $(function(){
    $("#includedContent1").load("footer.php"); 
    });
</script> 

<script> 
    $(function(){
    $("#includedContent2").load("navigation.php"); 
    });
</script> 



    </head>
    <body>
    <header>

<div id="includedContent"></div>


</header>

<div id="includedContent2"></div>
        <div class="container">
            <div class="header">
                <h2>Add Category</h2>
            </div>

            
            <form id="form" class="form" method="POST" action="new_category_table.php">

          
                <div class="form-control">
                    <label for="username">Category Name</label>
                    <input type="text" placeholder="abcd" id="name" name="name" />
                  
                </div>
                <div class="form-control">
                    <label for="username">Number of rows</label>
                    <input type="text" placeholder="0000" id="cid" name="row" />
                   
                </div>
               <a href= "new_category_table.php">

                    <button type ="submit" name="submit">click</button>

                </a>

        
            </form>
        </div>
     
    
        <footer>

<div id="includedContent1"></div>

</footer>


    </body>
</html>

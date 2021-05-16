

<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../../assets/css/admin/chatappAdmin.css " type="text/css">
    
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
        var from = null, start=0, url = 'http://localhost/ceylongig/app/model/staff/chat.php';
        $(document).ready(function(){

            <?php
            $name = $_SESSION['name'];

            ?>
           // from = prompt("please enter your name :");
           from = "<?php echo $name ?>";
            load();
            
             $('form').submit(function(e){
                 $.post(url, {
                     message: $('#message').val(),
                     from: from
                 });
                 $('#message').val('')
                 return false;
             })

        });

        function load(){
            $.get(url + '?start=' + start, function(result){
                if(result.items){
                    result.items.forEach(item =>{
                        start = item.id;
                       
                        $('#messages').append(renderMessage(item));
                    });
                   $('#messages').animate({scrollTop: $('#messages')[0].scrollHeight});
                };
                load();
            });
        }
        function renderMessage(item){
            let time = new Date(item.created);
            time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
            return `<div class="msg"><p>${item.from}</p>${item.message}</div>`;
        }
    </script>

  
    
</head>
<body>

        
       <header>

<div id="includedContent"></div>

</header>
    <div id="messages"></div>
        <form>
           <input type="text" id="message" autocomplete="off" autofocus placeholder="Type Message..">
           <input type="submit" value="send"> 
        
        

          <?php echo "<a href ='../../../model/staff/chat_delete.php?' onclick='return checkdelete()' > delete </a>"?>
        
        </form>>

        <script>

        function checkdelete(){
        return confirm('Are you sure delete this chat');
        }

</script>
    
</body>
</html>
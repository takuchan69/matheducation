<?php
include_once('config.php');
include_once('send_method.php');

 ?>
 <!DOCTYPE html>
 <html lang='ja'>
        <head>
               <meta charset='UTF-8'>
               <meta name='viewport' content='width=device-width'>
               <meta name='description' content='display of finishing contact request'>
               <title>finish page</title>
               <link rel='stylesheet' href='styles.css'>
        </head>
        <body>
               <h3>You have successfully done !</h3>

               <?php if(isset($_SESSION['contact_data'])):?>
               <?php session_destroy();?>
               <?php endif;?>
               <?php exit('I will send a message to you later');?>

        </body>
 </html>

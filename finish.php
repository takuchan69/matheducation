<?php
include_once('config.php');
$_SESSION['contact_data'] = [];
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

               <?php if($_SESSION['contact_data'] === []):?>
               <?php exit('I will send q message to you later');?>
               <?php elseif($_SESSION['contact_data'] !== []):?>
               <?php $_SESSION['contact_data'] === [];?>
               <?php else:?>
               <p><?='please input contact data again '?></p>
               <?php endif;?>
        </body>
 </html>

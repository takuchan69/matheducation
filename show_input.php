<?php
include_once('config.php');
if($_SESSION['contact_data'] === []){
  exit('please try input again');
}
$_contact_data = $_SESSION['contact_data'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   if($_POST['confirm'] === 'MODORU'){
     header('Location:trial.php');
   }else if($_POST['confirm'] === 'CONFIRM'){
     header('Location:finish.php');
   }else{

   }
}
 ?>
 <!DOCTYPE html>
 <html la='ja'>
     <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width'>
            <meta name='description' content='confirm page for input data of form'>
            <title>confirm</title>
            <link rel='stylesheet' href='styles.css'>
     </head>
     <body>
        <h2>are you sure to confirm inputted data ?</h2>
     <table width='400' height='400' class='confirm_table' >
            <tr>
                <td>onamae</td><td><?=$_contact_data[0];?></td>
            </tr>
            <tr>
                <td>tel</td><td><?=$_contact_data[1];?></td>
            </tr>
            <tr>
                <td>mail</td><td><?=$_contact_data[2];?></td>
            </tr>
            <tr>
                <td>reason</td><td><?=$_contact_data[3];?></td>
            </tr>
            <tr>
                <td>grade</td><td><?=$_contact_data[4];?></td>
            </tr>

     </table>
             <form action='' method='post'>
                    <input type='submit' value='MODORU' name='confirm'>
                    <input type='submit' value='CONFIRM' name='confirm'>
             </form>

     </body>

 </html>

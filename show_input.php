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
                <td>お名前</td><td><?=$_contact_data["お名前"];?></td>
            </tr>
            <tr>
                <td>お電話番号</td><td><?=$_contact_data["お電話番号"];?></td>
            </tr>
            <tr>
                <td>メールアドレス</td><td><?=$_contact_data["メールアドレス"];?></td>
            </tr>
            <tr>
                <td>受講目的</td><td><?=$_contact_data["受講目的"];?></td>
            </tr>
            <tr>
                <td>学年</td><td><?=$_contact_data["学年"];?></td>
            </tr>
            <tr>
                <td>第1候補日程</td><td><?=$_contact_data["requestno1"];?></td>
            </tr>
            <tr>
                <td>第2候補日程e</td><td><?=$_contact_data["requestno2"];?></td>
            </tr>
     </table>
             <form action='' method='post'>
                    <input type='submit' value='MODORU' name='confirm'>
                    <input type='submit' value='CONFIRM' name='confirm'>
             </form>

     </body>

 </html>

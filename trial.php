<?php
?>
<!DOCTYPE html>
<html lang='ja'>
       <head>
           <meta charset='UTF-8'>
           <meta name='viewport' content='width=device-width'>
           <meta name='keywords' content='数学、医学部、大学受験、難関大学、プログラミング教育'>
           <title>体験授業</title>
           <link rel='stylesheet' href='styles.css'>
       </head>
       <body>
         <header>
               <h1> How to try lesson</h1>
         </header>
         <section id='container'>
                <ul>
                    <li class='list'>mail or phone for trial day</li>
                    <li class='list'>trial lesson</li>
                    <li class='list'>pass a plan to consider</li>
                </ul>
                <form method='post' action='trial_post.php' >
                    <label>Input day you want to try.<strong>must</strong>
                      <input type='date' placeholder='2020/08/23'>
                    </label><br><br>
                    <label>Input your name.<strong>must</strong>
                      <input type='text' placeholder='ex)Yamada Taro'>
                    </label><br><br>
                    <label>input your grade.<strong>must</strong>
                      <input type='number' placeholder='ex) grade 2'>
                    </label><br><br>
                    <label>phone number or email address(for later contact).<strong>must</strong>
                      <input type='text' placeholder='****@abc.jp'>
                    </label><br><br>
                    <input type='submit' value='send'>
                </form>
         </section>
         <footer>
         </footer>

       </body>
</html>

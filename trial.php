<?php

include_once('');
$this_month = new DateTime('today');
$next_month = new DateTime('next month');

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
               <h1>体験授業のお申し込みの流れ</h1>
         </header>
         <div id='toolbar'>
                <section class='toolbar_name'><a href='lessonstyle.php'>講座の受講style</a></section>
                <section class='toolbar_name'><a href='syllabus.php'>講座の内容</a></section>
                <section class='toolbar_name'><a href='trial.php'>体験授業</a></section>
         </div>
         <section id='container'>
                
                <ul>
                    <li class='list'>お電話にて「体験授業を希望」とお伝え下さい(今年度は３年生は募集しておりません）。</li>
                    <li class='list'>お電話にて日程を決めさせてさせて頂きます（下記のカレンダーにてご都合の良い日程を決めておいてください)。</li>
                    <li class='list'>受講後にご検討の上、受講をご希望される場合ご連絡をいただきます。</li>
                </ul>
                <section >
                    <label>受講希望日程を以下より選択してください<strong>必須</strong>
                           <h3><?=$this_month->format('Y').'年'.$this_month->format('m').'月';?></h3>
                           <h3><?=$next_month->format('Y').'年'.$next_month->format('m').'月';?></h3>

                </section>
                <h3 class='goto_index.php'><a href='index.php'>トップページに戻る</a></h3>
         </section>
         <footer>
                <h3>学習舎の数学講座 &lt; &copy; &gt;</h3>
         </footer>

       </body>
</html>

<?php

include_once('');
$today = new DateTime('today');

$this_month = new DatePeriod(new DateTime('first day of this month'),
                             new DateInterval('P1D'),
                             new DateTime('first day of next month'));
$next_month = new DatePeriod(new DateTime('first day of next month'),
                             new DateInterval('P1D'),
                             new DateTime('first day of next month +1 month'));
foreach($this_month as $day){
   echo $day->format('Y-m-d').'    ';
}

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
         <div id='toolbar'>
                <section class='toolbar_name'><a href='lessonstyle.php'>講座の受講style</a></section>
                <section class='toolbar_name'><a href='syllabus.php'>講座の内容</a></section>
                <section class='toolbar_name'><a href='trial.php'>体験授業</a></section>
         </div>
         <section id='container'>
                <ul>
                    <li class='list'>以下の欄にご希望日時と学年をご記入ください(今年度は３年生は募集しておりません）</li>
                    <li class='list'>折返し電話にて日程を再確認させて頂きます</li>
                    <li class='list'>受講後に改めて継続受講をご希望の場合ご連絡をいただきます。</li>
                </ul>
                <form method='post' action='trial_post.php' >
                    <label>受講希望日程を以下より選択してください<strong>必須</strong>
                           <h3><?=$today->format('Y').'year'.$today->format('m').'月';?></h3>
                           <table class='trial_table'>
                                  <thead>
                                         <th class='sunday'>日</th>
                                         <th class='weekday'>月</th>
                                         <th class='weekday'>火</th>
                                         <th class='weekday'>水</th>
                                         <th class='weekday'>木</th>
                                         <th class='weekday'>金</th>
                                         <th class='saturday'>土</th>
                                  </thead>
                                  <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>3</td>
                                  </tr>
                                  <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                  </tr>
                                  <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                  </tr>
                                  <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                  </tr>
                                  <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                  </tr>
                           </table>
                      <input type='date' placeholder='８月２２日'>
                      <input type='time' placeholder='17:00~'>
                    </label><br><br>
                    <label>お名前<strong>必須</strong>
                      <input type='text' placeholder='ex)山田　太郎'>
                    </label><br><br>
                    <label>学年<strong>必須</strong>
                      <input type='number' placeholder='高校２年'>
                    </label><br><br>
                    <label>電話番号（ご連絡先)<strong>必須</strong>
                      <input type='text' placeholder='03-2345-＊＊＊＊'>
                    </label><br><br>
                    <label>e-mail（ご連絡先)<strong>必須</strong>
                      <input type='text' placeholder='gakushusha@email.com'>
                    </label><br><br>
                    <input type='submit' value='send'>
                </form>
                <h3 class='goto_index.php'><a href='index.php'>トップページに戻る</a></h3>
         </section>
         <footer>
                <h3>学習舎の数学講座 &lt; &copy; &gt;</h3>
         </footer>

       </body>
</html>

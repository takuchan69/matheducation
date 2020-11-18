<?php

include_once('');
$this_month = new DateTime('today');
$next_month = new DateTime('next month');
$this_month_period = new DatePeriod(new DateTime('first day of this month'),new DateInterval('P1D'),new DateTime('first day of next month'));
$next_month_period = new DatePeriod(new DateTime('first day of next month'),new DateInterval('P1D'),new DateTime('first day of next month +1 month'));
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
                    <li class='list'><strong>お電話にて日程を決めさせてさせて頂きます（他所との兼務がある関係にてお受けできる時間に制約があるため、<br>
                           下記のカレンダーにてご都合の良い日程を決めておいてください)。</strong></li>
                       <li class='list'><strong>お電話にて「体験授業を希望」とお伝え下さい(今年度は３年生は募集しておりません）。</strong></li>
                       <li class='list'><strong>受講後にご検討の上、受講をご希望される場合のみ連絡下さい。</strong></li>
                </ul>
                <section >
                    <label>受講希望日程を以下より選択してください<strong>必須</strong>
                           <h3 class='title'><?=$this_month->format('Y').'年'.$this_month->format('m').'月';?></h3>
                           <form action='show_input.php' method='post'>
                                  <label>お名前：<span class='must'>必須</span>
                                  <input type='text'>
                                  </label>
                                  <label>ご連絡先電話番号：<span class='must'>必須</span>
                                  <input type='tel' placeholder='03-3345-＊＊＊＊'>
                                  </label>
                                  <label>ご連絡先メールアドレス：<span class='must'>必須</span>
                                  <input type='email' palceholder='example@gmail.com'>
                                  </label>
                                  <label>受講目的：
                                         <input type='radio' name='reason_for__lesson'>学校の数学の定期試験対策
                                         <input type='radio' name='reason_for__lesson'>受験数学の対策
                                         <input type='radio' name='reason_for__lesson'>難関大学や医学部対策
                                         <input type='radio' name='reason_for__lesson'>苦手分野対策
                                         <input type='radio' name='reason_for__lesson'>その玉
                                  </label>
                                  <label>学年：
                                         <select name='grade' >
                                                <option value='chugaku1'>1</option>
                                         </select>
                                         
                           </form>
                       <table width='300' height='250' class='calendar'>
                         <thead>
                              <tr>
                                 <td class='sunday'>Sun</td> <td class='weekday'>Mon</td> <td class='weekday'>Tue</td>
                                 <td class='weekday'>Wed</td> <td class='weekday'>Thu</td> <td class='weekday'>Fri</td> <td class='saturday'>Sat</td>
                              </tr>
                         </thead>
                         <tr>
                           <?php foreach($this_month_period as $this_month_day):?>
                                 <?php if($this_month_day->format('w') === '0'):?>
                                 <tr><td class='sunday'><?=$this_month_day->format('d');?></td>
                                 <?php elseif($this_month_day->format('w') ==='6'):?>
                                 <td class='saturday'><?=$this_month_day->format('d');?></td></tr>
                                 <?php else:?>
                                 <td class='weekday'><?=$this_month_day->format('d');?><br>
                                   <ul class='vacant'>
                                       <li>15:00~16:00</li>
                                       <li>16:10~17:10</li>
                                   </ul>
                                 </td>
                                <?php endif;?>
                          <?php endforeach;?>
                      </table>
                      <!-- calendar of next month -->
                          <br>
                          <h3 class='title'><?=$next_month->format('Y').'年'.$next_month->format('m').'月';?></h3>
                          <table width='300' height='250' class='calendar'>
                            <thead>
                                 <tr>
                                    <td class='sunday'>Sun</td> <td class='weekday'>Mon</td>  <td class='weekday'>Tue</td>
                                    <td class='weekday'>Wed</td> <td class='weekday'>Thu</td> <td class='weekday'>Fri</td> <td class='saturday'>Sat</td>
                                 </tr>
                            </thead>
                            <tr>
                              <?php foreach($next_month_period as $next_month_day):?>
                                    <?php if($next_month_day->format('w') === '0'):?>
                                    <tr><td class='sunday'><?=$next_month_day->format('d');?></td>
                                    <?php elseif($next_month_day->format('w') ==='6'):?>
                                    <td class='saturday'><?=$next_month_day->format('d');?></td></tr>
                                    <?php else:?>
                                    <td class='weekday'><?=$next_month_day->format('d');?><br>
                                      <ul class='vacant'>
                                          <li>15:00~16:00</li>
                                          <li>16:10~17:10</li>
                                      </ul>
                                    </td>
                                    <?php endif;?>
                             <?php endforeach;?>
                         </table>

                </section>
                <h3 class='goto_index.php'><a href='index.php'>トップページに戻る</a></h3>
         </section>
         <footer>
                <h3>学習舎の数学講座 &lt; &copy; &gt;</h3>
         </footer>

       </body>
</html>

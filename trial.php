<?php
include_once('config.php');
include_once('send_method.php');
date_default_timezone_set('UTC');
if(!isset($_SESSION['contact_data'])){
  $message = '受講希望日程を以下より選択してください';
}else{
  $_contact_data = $_SESSION['contact_data'];
}
$send = new send_message\Send();
$err_message = $send->_send_check();
$today = new DateTime('today');
$week_later = new DateTime('today + 7 days');
var_dump($today->format('Y-m-d'));
var_dump($week_later->format('Y-m-d'));
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

<!--                <ul>
                    <li class='list'>直接お電話にて体験授業の日程を決めて頂く場合は<strong>月〜金の9:00〜13:00にてお電話ください。
                      今年度は高校３年生はお引き受けしておりませんのでご注意ください。</strong></li>
                       <li class='list'>当方よりお電話差し上げる場合は、以下のフォーム欄にご都合の良いご連絡先日時をお送りください。
                  　　　後日当方よりお電話差し上げます。</strong></li>

                       <li class='list'><strong>体験授業を受講後にご検討の上、受講をご希望される場合のみ連絡下さい。</strong></li>
                </ul>
-->
                <section >
                    <h2><?=$message;?></h2>
                           <?php if($err_message !== ''):?>
                           <p style='color:red;font-size:30px;background:#888;'><?=$err_message;?></p>
                           <?php $err_message = '';?>
                          <?php endif;?>
                          <form action='' method='post' class='input_form'>
                                  <label>お名前：<span class='must'>必須</span>
                                  <input type='text' name='name' placeholder='onamae'>
                                  </label><br>
                                  <label>ご連絡先電話番号：<span class='must'>必須</span>
                                  <input type='tel' placeholder='03-3345-＊＊＊＊' name='tel'>
                                  </label><br>
                                  <label>ご連絡先メールアドレス：<span class='must'>必須</span>
                                  <input type='email' palceholder='example@gmail.com' name='mail'>
                                  </label><br>
                                  <label>受講目的：
                                         <input type='radio' value='school_math' name='reason'>学校の数学の定期試験対策<br>
                                    　　　<input type='radio' value='school_follow' name='reason'>学校の補修<br>
                                         <input type='radio' value='exam_math' name='reason'>大学受験の数学対策<br>
                                         <input type='radio' value='height_level' name='reason'>難関大学や医学部対策<br>
                                         <input type='radio' value='better_learning' name='reason'>苦手分野対策<br>
                                         <input type='radio' value='other' name='reason'>その他資格対策など<br>
                                  </label><br>
                                  <label>学年：
                                         <select name='grade' >
                                                <option value='title'>select</option>
                                                <option value='chugaku1'>中学１年</option>
                                                <option value='chugaku2'>中学２年</option>
                                                <option value='chugaku3'>中学３年</option>
                                                <option value='koukou1'>高校１年</option>
                                                <option value='koukou2'>高校２年</option>
                                                <option value='koukou3'>高校３年</option>
                                                <option value='rounin'>浪人生</option>
                                                <option value='shakaijin'>社会人</option>
                                         </select><br>
                                  </label>
                                  <label>contact date:<span class='must'>必須</span>
                                       <h4 class='must'>please select at 12:00~15:00 weekday upto one week</h4>
                                       <h4>第1候補日程  (本日より１週間以内でお願いします)</h4>
                                       <label>日付：
                                       <input type='date' name='requestno1' min='<?=$today->format('Y-m-d');?>' max='<?=$week_later->format('Y-m-d');?>' required>
                                       </label>
                                       <label>時間帯：
                                       <select>
                                         　　　<option value='9:00~'>9:00~</option>
                                              <option value='9:30~'>9:30~</option>
                                              <option value='10:00~'>10:00~</option>
                                              <option value='10:30~'>10:30~</option>
                                              <option value='11:00~'>11:00~</option>
                                              <option value='11:30~'>11:30~</option>
                                              <option value='12:00~'>12:00~</option>
                                             <option value='12:30~'>12:30~</option>
                                             <option value='13:00~'>13:00~</option>
                                             <option value='13:30~'>13:30~</option>
                                       </select>
                                       </label>
                                       <h4>第2候補日程  (本日より1週間以内でお願いします)</h4>
                                       <label>日付：
                                       <input type='date' name='requestno2' min='<?=$today->format('Y-m-d');?>' max='<?=$week_later->format('Y-m-d');?>' required>
                                       </label>
                                       <label>時間帯：
                                       <select>
                                              <option value='9:00~'>9:00~</option>
                                              <option value='9:30~'>9:30~</option>
                                              <option value='10:00~'>10:00~</option>
                                              <option value='10:30~'>10:30~</option>
                                              <option value='11:00~'>11:00~</option>
                                              <option value='11:30~'>11:30~</option>
                                              <option value='12:00~'>12:00~</option>
                                             <option value='12:30~'>12:30~</option>
                                             <option value='13:00~'>13:00~</option>
                                             <option value='13:30~'>13:30~</option>

                                       </select>
                                         </label><br>
　　　　　　　　　　　　　　　　　　　　<input type='hidden' value='<?=date(' l jS \of F Y h:i:s A');?>' name='date'>

                                         <input type='submit' value='送信'>
                           </form>
                         </section>
                </section>
                <h3 class='goto_index'><a href='index.php'>トップページに戻る</a></h3>
         <footer>
                <h3>学習舎の数学講座 &lt; &copy; &gt;</h3>
         </footer>

       </body>
</html>

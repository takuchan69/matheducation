<?php
namespace send_message;

 class Send{
  function  __construct(){

  }

  function _send_check(){
       if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $this->_name = $_POST['name'];
        $this->_tel = $_POST['tel'];
        $this->_mail = $_POST['mail'];
        if(isset($_POST['reason'])){
          $this->_reason = $_POST['reason'];
        }else{
          $this->_reason = 'no content';
        }
        $this->_grade = $_POST['grade'];
        $this->_contact1 = $_POST['requestno1'];
         $this->_contact2 = $_POST['requestno2'];
         if($this->_name === '' || $this->_tel === '' || $this->_mail === ''|| $this->_grade ==='title'){
           return  '「必須」項目に未記入の項目があります';
         }else{
           $this->_date = $_POST['date'];
           $_SESSION['contact_data'] = ["お名前"=>$this->_name,"お電話番号"=>$this->_tel,"メールアドレス"=>$this->_mail,"受講目的"=>$this->_reason,"学年"=>$this->_grade,"送信日時"=>$this->_date,"第1候補日程"=>$this->_contact1,"第2候補日程"=>$this->_contact2];
           header('Location:show_input.php');

         }
      };
  }

  function _request_over(){

  }
}


 ?>

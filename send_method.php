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
        $this->_reason = $_POST['reason'];
        $this->_grade = $_POST['grade'];
         if($this->_name === '' || $this->_tel === '' || $this->_mail === ''){
           return $this->err_message = 'name of must should not be empty';
         }else{
           $this->_date = $_POST['date'];
           $_SESSION['contact_data'] = [$this->_name,$this->_tel,$this->_mail,$this->_reason,$this->_grade,$this->_date];
           header('Location:show_input.php');

         }
      };
      echo $this->_name;
  }
}


 ?>

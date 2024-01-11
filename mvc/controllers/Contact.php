<?php
class Contact extends Controller{
 public $CategoryModel;
 public $ProductModel;
 public $Auser_model;
 public function __Construct(){
    $this->CategoryModel= $this->model("CategoryModel");
    $this->ProductModel = $this ->model("ProductModel");
    $this->Auser_model = $this->model("Auser_model");
 }
 public function show(){
    $this->view("master_home",[
        "page"=>"view_contact",
        "category"=>$this->CategoryModel->show_category()
    ]);
 }
 public function sendMail(){
    if(isset($_POST["btn_send"])){
        $name = $_POST["name"];
        $email =$_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
    }
    $to ="tamthanh20092001@gmail.com";
    $sender ="From:từ khách hàng có username:".$name;

    if(mail($to,$subject,$message,$sender)){
        $success="Gửi thành công chúng tôi sẽ trả lời lại bạn trong khoảng thời gian sớm nhất ";
        $this->view("master_home",[
            "page"=>"view_contact",
            "category"=>$this->CategoryModel->show_category(),
            "success"=>$success,
        ]);
    }

 }
}
?>
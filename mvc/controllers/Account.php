<?php
class Account extends Controller{
    public $CategoryModel;
   
    public $Auser_model;
    public function __Construct(){
      
        $this->CategoryModel= $this->model("CategoryModel");
        
    }
    function show(){
       
        $this->view("master_home",[
            "page"=>"view_taikhoan",
            "category"=>$this->CategoryModel->show_category()
          
        ]);

}
 public function update(){
    $date=date("Y").":".date("m").":".date("d");
    if(isset($_POST['btn_save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number= $_POST['SDT'];
        $address = $_POST['Diachi'];

    }
    $this->Auser_model-> update2($name,$email,$phone_number,$address,$date);
    header("Refresh: 0.001;url=http://localhost/PHPMVC/Account/show");

 }
 public function update1(){
    $date=date("Y").":".date("m").":".date("d");
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['Matkhau'];
        $password1 =$_POST['MatKhauMoi'];
    }
 }
}
?>
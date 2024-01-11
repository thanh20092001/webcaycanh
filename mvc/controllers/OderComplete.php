<?php
class OderComplete extends Controller{
   public $CategoryModel;
   public $OderModel;
   public function __construct(){
    $this->CategoryModel= $this->model("CategoryModel");
    $this->OderModel = $this->model("OderModel");

   }
   public function show(){
    $id_user= $_SESSION['login']['id'];
    $customer = $this->OderModel->show_customer($id_user);
    $bill = $this->OderModel->show_bill($id_user);


    $this ->view("master_home",[
        "page" =>"view_OderComplete",
        "category"=> $this->CategoryModel->show_category(),
        "customer"=>$customer,
        "bill"=>$bill,

        
    ]
    );

   }
}
?>
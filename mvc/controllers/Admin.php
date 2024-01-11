<?php 
class Admin extends Controller{
  public  $Auser_model;
  public $ProductModel;
  public $OderModel;
  public function __construct(){
    $this->Auser_model= $this->model("Auser_model");
    $this->ProductModel= $this->model("ProductModel");
    $this->OderModel= $this->model("OderModel");

  }
    function show(){
        $num = $this->Auser_model->show_user();
        $count = count($num)-1;
        $num2 = $this->ProductModel->show_product();
        $count2 = count($num2);
        $num3 = $this->OderModel->show_oder();
        $count3= count($num3);
        $this->view("master_admin",[
            "Page"=>"admin_index",
            "customer"=>$count,
            "product"=>$count2,
            "oder"=>$count3,

        ]);
    }
}
?>
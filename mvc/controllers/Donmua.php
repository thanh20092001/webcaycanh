<?php
class Donmua extends Controller{
    public $CategoryModel;
    public $OderModel;
    public $Auser_model;
   
    public function __Construct(){
      
        $this->CategoryModel= $this->model("CategoryModel");
      
        $this->OderModel = $this->model("OderModel");
    }
    public function show(){
        $id_user= $_SESSION['login']['id'];
        $this->view("master_home",[
            "page"=>"view_donhang",
            "category"=>$this->CategoryModel->show_category(),
            "donmua"=>$this->OderModel->show_all($id_user)
          
        ]);
    }
}
?>
<?php
class add_category extends Controller{
    public $CategoryModel;
    public function __construct(){
        $this ->CategoryModel = $this ->model("CategoryModel");
    }
  public  function show(){
        $this->view("master_admin2",[
            "Page"=> "view_add_category"
           
        ]);
    }
    public function insert(){
        //get data admin nhập
        if(isset($_POST["btn_insert"])){
            $id = $_POST["id"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $created_update = $_POST["date"];
            
        }
        // insert database bảng category
        $this ->CategoryModel->insert_category($id,$name,$description, $created_update);
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_category");
       
        ;
    }
}

?>
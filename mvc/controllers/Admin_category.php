<?php 
class Admin_category extends Controller{
    public $CategoryModel;
    public function __construct(){
        $this ->CategoryModel = $this ->model("CategoryModel");
    }
 public   function show(){
        $this->view("master_admin",[
            "Page"=> "admin_category",
            "category"=>$this->CategoryModel->show_category()
            
        ]);
    }
    public function delete($id){
         
      /*  if(isset($_GET['id'])){
            $id = $_GET['id'];
        }*/
        // thực hiện câu lệnh truy vấn 
        $this ->CategoryModel->delete_category($id);
       header("Refresh:0.01; url=http://localhost/PHPMVC/Admin_category")
    ;
    }
    
    public function insert_category(){
        $this->view("master_admin2",[
            "Page"=> "view_add_category"
           
        ]);
    }
    
    public function insert(){
        
        //get data admin nhập
        if(isset($_POST["btn_insert"])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $created_date = $_POST['date'];
            
        }
        // insert database bảng category
        $this ->CategoryModel->insert_category($id,$name,$description, $created_date);
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_category");
       
        ;
        /*
        if(isset($_POST["btn_insert"])){
            $result = $this ->CategoryModel ->insert_category($_POST['id'],$_POST['name'],$_POST['description'],$_POST['date']);
            if($result){
                header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_category");
                
            }
        }*/

    }
    public function update($id){
       // $acategory = $this->CategoryModel->show_detailcategory($id);
      
        $this->view("master_admin",[
            "Page"=> "view_update_category",
            "acategory"=>$this->CategoryModel->show_detailcategory($id)
            
        ]);

    }
    public function update2($id){
        if(isset($_POST["btn_update"])){
       
            $name = $_POST['name'];
            $description = $_POST['description'];
           
            $update_date = $_POST['update_date'];
            
        }
        $this->CategoryModel->update_category($id,$name,$description,$update_date);
      
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_category");
       /* if(isset($_POST["btn_update"])){

            $update = $this->CategoryModel->update_category($id,$_POST['name'],$_POST['description'],$created_update,$_POST['update_date']);
            if($update){
                header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_category");
            }
            else{
                echo "update thất bại!";
            }
        }
*/
    }
}
?>
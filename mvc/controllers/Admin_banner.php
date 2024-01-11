<?php
class Admin_banner extends Controller{
    public $BannerModel;
    public function __construct(){
        $this ->BannerModel = $this ->model("BannerModel");
    }
    public function show(){
        $this ->view("master_admin",[
            "Page"=>"admin_banner",
            "banner"=>$this ->BannerModel->show_banner()
        ]);
    }
    public function insert_banner(){
        $this ->view("master_admin",[
            "Page"=>"view_add_banner"
            
        ]);

    }
    public function insert(){
        //get data admin nhập
        if(isset($_POST["btn_insert"])){
            $id = $_POST['id'];
            $fileimage =$_FILES['fileimage']['name'];
            $created_date =$_POST['date'];
        }
        //insert database
        $this ->BannerModel->insert_banner($id,$fileimage,$created_date);
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_banner");   

    }
    public function delete($id){
        $this->BannerModel->delete_banner($id);
          header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_banner");  
        

    }
    public function update($id){
        $this ->view("master_admin",[
            "Page"=>"view_update_banner",
            "banner"=>$this->BannerModel->show_abanner($id)
            
        ]);

    }
    public function update2($id){
        if(isset($_POST["btn_update"])){
           
            $fileimage =$_FILES['fileimage']['name'];
            $update_date =$_POST['date'];
        }
        $this->BannerModel->update_banner($id,$fileimage,$update_date);
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_banner"); 
    }

}
?>
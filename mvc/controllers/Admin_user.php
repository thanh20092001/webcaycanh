<?php 
class Admin_user extends Controller{
    public $Auser_model;
    public function __construct(){
        $this ->Auser_model = $this->model("Auser_model");
    }
   public function show(){
        $this->view("master_admin",[
            "Page"=> "admin_user",
            "user"=> $this->Auser_model->show_user()

        ]);
    }
    public function delete($id){
        $this->Auser_model->delete($id);
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_user");
    }
    public function update($id){
        $this->view("master_admin",[
            "Page"=>"view_update_user",
            "user"=>$this->Auser_model->show_auser($id)
        ]);
    }
    public function update2($id){
        $date=date("Y").":".date("m").":".date("d");
        if(isset($_POST['btn_update'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $address = $_POST['address'];
            $role = $_POST['role'];
            $status = $_POST['status'];
        }
        $this->Auser_model->update($id,$name,$email,$phone_number,$address,$role,$status,$date);
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_user");
    }
}
?>
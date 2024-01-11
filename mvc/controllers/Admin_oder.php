<?php
class Admin_oder extends Controller{
    public $OderModel;
    public function __construct(){
        $this->OderModel =$this->model("OderModel");
    }
    public function show(){
        $this->view("master_admin",[
            "Page"=> "view_admin_oder",
            
            "oder"=>$this->OderModel->show_oder()
        ]);
    }
    public function show_detail($id){
        $this->view("master_admin",[
            "Page"=> "view_admin_detailoder",
            
            "oder_detail"=>$this->OderModel->show_detail($id)
        ]);
    }
    public function delete_oder($id){
        $this->OderModel ->delete_oder($id);
        header("Refresh:0.01; url=http://localhost/PHPMVC/Admin_oder/show");

    }
    public function update($id){
        $this->view("master_admin",[
            "Page"=> "view_updateoder",
            
            "oder"=>$this->OderModel->show_aoder($id)
        ]);
    }
    public function update2($id){
        $update_date=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
        if(isset($_POST["btn_update"])){
            $id =$_POST['id'];
            $name_customer = $_POST['name_customer'];
            $phone_number =$_POST['phone_number'];
            $address_shipping = $_POST['address_shipping'];
            $note =$_POST['note'];
            $status = $_POST['dropdown'];
        }
        $this->OderModel->update_oder($id,$name_customer,$phone_number, $address_shipping, $note,$status,$update_date);
        header("Refresh:0.01; url=http://localhost/PHPMVC/Admin_oder/show");
    }
}
?>
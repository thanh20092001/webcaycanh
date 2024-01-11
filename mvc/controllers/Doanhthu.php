<?php
class Doanhthu extends Controller{
    public $ThongkeModel;
    public function __construct(){
        $this->ThongkeModel = $this->model("ThongkeModel");
    }
    public function show(){
        $this->view("master_admin",[
            "Page"=> "thongke_doanhthu"
            
            
        ]);
    }
    public function thongke(){
        if(isset($_POST['btn_thongke'])){
          
            $date = $_POST['date'];
            $thang = $_POST['thang'];
            
            $nam = $_POST['nam'];
            
        }
        $this->view("master_admin",[
            "Page"=> "thongke_doanhthu",
            "tk"=> $this ->ThongkeModel->thongke($date,$thang,$nam)
            
        ]);
       
    }
}
?>
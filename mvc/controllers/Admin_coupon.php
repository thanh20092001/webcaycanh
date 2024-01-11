<?php
class Admin_coupon extends Controller{
    public $CouponModel;
    public function __construct(){
        $this ->CouponModel = $this ->model("CouponModel");
    }
    public   function show(){
        $this->view("master_admin",[
            "Page"=> "admin_coupon",
            "coupon"=>$this->CouponModel->show()
            
        ]);
    }
    public function delete($id){
         
        
          $this ->CouponModel->delete_coupon($id);
         header("Refresh:0.01; url=http://localhost/PHPMVC/Admin_coupon")
      ;
      }
      public function insert_coupon(){
        $this->view("master_admin",[
            "Page"=> "view_add_coupon"
           
        ]);
    }
    public function insert(){
        $date=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
        //get data admin nhập
        if(isset($_POST["btn_insert"])){
           
            $name = $_POST['name'];
            $code = $_POST['code'];
            $discount = $_POST['discount'];

            $created_date = $date;
            $status = $_POST['status'];
            $expiry_date = $_POST['date'];
            
        }
       
        $this ->CouponModel->insert_coupon($name,$code,$discount,$created_date,$expiry_date,$status);
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_coupon/show");
       
        
        

    }
    public function update($id){
        $this->view("master_admin",[
            "Page"=> "view_update_coupon",
           
            "coupon"=>$this->CouponModel->show_detail($id)
        ]);
        
    }
    public function update2($id){
        if(isset($_POST['btn_update'])){
            
            $name=$_POST['name'];
            $code =$_POST['code'];
            $discount=$_POST['discount'];
            $status= $_POST['status'];
            $expiry_date = $_POST['date'];

            
          
        $this->CouponModel->update_coupon($id,$name,$code,$discount,$expiry_date,$status);
       // header("Refresh:0.001; url=http://localhost/PHPMVC/Admin_coupon");
    }
    }
    
}
?>
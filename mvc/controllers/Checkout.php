<?php
class Checkout extends Controller{
   public $CategoryModel;
   public $CheckoutModel;
   public $CouponModel;
   public function __Construct(){
    $this->CategoryModel= $this->model("CategoryModel");
    $this->CheckoutModel= $this->model("CheckoutModel");
    $this->CouponModel=$this->model("CouponModel");
   }
   public function show(){
   
      //  $code = $_POST['code'];
    
    
    //$total = $_POST['total'];
    //$discount = $this->CouponModel->get_coupon($code);
    $count = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $value) {
                $count += $value['Thanhtien'];
            }
        }
        if(isset($_SESSION['login'])){
            $this->view("master_home",[
                "page"=>"view_checkout",
                "category"=>$this->CategoryModel->show_category(),
                "total_price"=>$count,
                //"coupon"=> $discount,
            ]);
        }else{
            header("Refresh: 0.001;url=http://localhost/PHPMVC/Login");
        }
   
   }
   public function save(){
    if(isset($_POST['checkout'])){
        $name_customer = $_POST['name_customer'];
        $phone_number = $_POST['phone_number'];
        $address_shipping =$_POST['address_shipping'];
        $note = $_POST['note'];
        //$total_money = $_POST['total'];
       
    }
    
    $id_user =$_SESSION['login']['id'];
    $rand=mt_rand();
    $mahd= $rand;
    $oder_date=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
   $count = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $value) {
                $count += $value['Thanhtien'];
            }
            if(isset($_SESSION['coupon'])){
                $count = $count -($count*($_SESSION['coupon']['discount'])/100);
            }
        }
       
      
        $this->CheckoutModel->save($mahd,$id_user,$name_customer,$phone_number,$address_shipping,$note,$oder_date,$count);
        $this->CheckoutModel->saveoder($mahd);
        unset($_SESSION['cart']);
        unset($_SESSION['coupon']);
        header("Refresh: 0.001;url=http://localhost/PHPMVC/OderComplete/show");
    
   }
   
}
?>
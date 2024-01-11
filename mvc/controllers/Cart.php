<?php

class Cart extends Controller{
  public  $ProductModel;
  public $CategoryModel;
  public $Auser_model;
  public $CouponModel;
  public function __Construct(){
    $this->ProductModel=$this->model("ProductModel");
    $this->CategoryModel=$this->model("CategoryModel");
    $this->CouponModel=$this->model("CouponModel");

  }
  public function show(){
    //$coupon = getdiscount();
   $count = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $value) {
                $count += $value['Thanhtien'];
            }
        }
    $this->view("master_home",[
      "page"=>"view_cart",
      "category"=>$this->CategoryModel->show_category(),
      "total_price"=>$count,
      //"coupon"=>$coupon,

  ]);
  }
  public function addtocart($id){
    
    $data= $this->ProductModel->detail_sp($id);
   // var_dump($data);
   $count=0;
    if(isset($_SESSION['login'])){
      if(isset($_SESSION['cart'][$id])){
         
        $_SESSION['cart'][$id]['qty'] += 1;
        $_SESSION['cart'][$id]['Thanhtien'] = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['export_price'];
            
        }else{
          $_SESSION['cart'][$id]['id'] = $data['id'];
          $_SESSION['cart'][$id]['name'] = $data['name'];
          $_SESSION['cart'][$id]['export_price'] = $data['export_price'];
          $_SESSION['cart'][$id]['qty'] = 1; 
          $_SESSION['cart'][$id]['Thanhtien'] = $data['export_price'];
          $_SESSION['cart'][$id]['image'] = $data['image'];
          
        } 
            
      
      
      //var_dump($_SESSION['cart']);
      
      header("Refresh: 0.001;url=http://localhost/PHPMVC/Cart/show");
    }
    else{
      header("Refresh: 0.001;url=http://localhost/PHPMVC/Login");
    }
    
      
    
    
  
  }
  public function delete($id){
    if(array_key_exists($id,$_SESSION['cart'])){
      if($_SESSION['cart'][$id]['qty']==1){
        unset($_SESSION['cart'][$id]);
      }else{
        $_SESSION['cart'][$id]['qty'] = $_SESSION['cart'][$id]['qty'] -1;
        $_SESSION['cart'][$id]['Thanhtien'] = $_SESSION['cart'][$id]['qty'] *$_SESSION['cart'][$id]['export_price'];
      }
      
  }
    header("Refresh: 0.001;url=http://localhost/PHPMVC/Cart/show");
  }
  public function insert($id){
    if(array_key_exists($id,$_SESSION['cart'])){
      
        $_SESSION['cart'][$id]['qty'] = $_SESSION['cart'][$id]['qty'] +1;
        $_SESSION['cart'][$id]['Thanhtien'] = $_SESSION['cart'][$id]['qty'] *$_SESSION['cart'][$id]['export_price'];
      }
      header("Refresh: 0.001;url=http://localhost/PHPMVC/Cart/show");
  }
    
  
  
  public function delete_all($id){
    if(array_key_exists($id,$_SESSION['cart'])){
      unset($_SESSION['cart'][$id]);
  }
  header("Refresh: 0.001;url=http://localhost/PHPMVC/Cart/show");
  }

  public function getdiscount(){
    
   
    $code = $_POST['code'];

   $coupon = $this->CouponModel->get_coupon($code);
   if( $coupon==true){
    $_SESSION['coupon']= $coupon;

   }
    
    $count = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $value) {
                $count += $value['Thanhtien'];
            }
        }
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Cart/show");
     
      
      

 

  }

}
?>
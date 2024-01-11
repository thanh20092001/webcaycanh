<?php
class Shop extends Controller{
    public $BannerModel;
    public $CategoryModel;
    public $ProductModel;
    public $Auser_model;
    public function __Construct(){
        $this->BannerModel= $this->model("BannerModel");
        $this->CategoryModel= $this->model("CategoryModel");
        $this->ProductModel = $this->model("ProductModel");
    }
    function show(){
        $product_all = $this->ProductModel->show_product();
    $count ;
        if($product_all ==null){
            $count=0;  
        }else{
            $count= count($product_all);
        }
        
        $page = ceil($count/9);
       // $sp_tungtrang =9;*/
        

        $this->view("master_home",[
            "page"=>"view_shop",
            "category"=>$this->CategoryModel->show_category(),
            "product"=> $product_all,
            "product_all"=> $count,
           // "nums" =>$page,
        ]);
}
public function show_list($id){
    $category_id= $id;
    $product =$this->ProductModel->category_product($category_id);
    if($product !=null){
        $count = count($product);
    }
    else{
        $count = null;
    }
    
    $this->view("master_home",[
        "page"=>"view_shop",
        "category"=>$this->CategoryModel->show_category(),
        "product"=>$product ,
        "product_all"=> $count,
       // "nums" =>$page,
    ]);
}
public function search(){
   if(isset($_POST['search'])){
    $key = $_POST['keyword'];
   }
        
    
    $product_search = $this->ProductModel ->search($key);
    if($product_search !=null){
        $count = count($product_search);
    }
    else{
        $count = null;
    }
    $this->view("master_home",[
        "page"=>"view_shop",
        "category"=>$this->CategoryModel->show_category(),
        "product"=>$product_search ,
        "product_all"=>$count,
       // "nums" =>$page,
    ]);
}
}
?>
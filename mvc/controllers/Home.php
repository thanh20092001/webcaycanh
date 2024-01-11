<?php 
class Home extends Controller{
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
        $this->view("master_home",[
            "page"=>"home",
            "category"=>$this->CategoryModel->show_category(),
            "banner"=>$this->BannerModel->show_banner(),
            "product1"=>$this->ProductModel->show_product2(0,4),
            "product2"=>$this->ProductModel->show_product2(4,4),
            "product3"=>$this->ProductModel->show_product2(8,4),
            "ProductRadom1"=>$this->ProductModel->show_product_radom(1),
            "ProductRadom2"=>$this->ProductModel->show_product_radom(1),
            "newProduct"=>$this->ProductModel->show_new_product(4)



        ]);
    }
}
?>
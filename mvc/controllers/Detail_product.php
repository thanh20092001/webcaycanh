<?php 
class Detail_product extends Controller{
    
    public $CategoryModel;
    public $ProductModel;
    public function __Construct(){
        
        $this->CategoryModel= $this->model("CategoryModel");
        $this->ProductModel = $this->model("ProductModel");
    }
    function show($id){
       
            $product_detail=$this->ProductModel->show_detailproduct($id);
            $category = $this->ProductModel->select_category($id);
           $a= implode('',$category[0]);
           
               $data_lq = $this->ProductModel->show_same_product(0,4,$a);
            
      
        
        
        
        
        $this->view("master_home",[
            "page"=>"detail_product",
            "category"=>$this->CategoryModel->show_category(),
            "product_detail"=>$product_detail,
            "data_lq"=>$data_lq

            


        ]);
    }
}
?>
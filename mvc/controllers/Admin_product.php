<?php 
class Admin_product extends Controller{
    public $ProductModel;
    public $CategoryModel;
    public function __construct(){
        $this ->ProductModel = $this ->model("ProductModel");
        $this ->CategoryModel = $this ->model("CategoryModel");
    }
    function show(){
        $this->view("master_admin",[
            "Page"=> "admin_product",
            "product"=>$this->ProductModel->show_product()
        ]);
    }
    function insert_product()  {
        $this->view("master_admin2",[
            "Page"=> "view_add_product",
            "data1"=>$this->CategoryModel->show_category()
           
           
        ]); 
        
    }
    public function insert(){
        // lấy data
        $created_date=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
        if(isset($_POST['btn_insert'])){

            $id = $_POST['masp'];
            $category_id=$_POST['dropdown'];
            $name=$_POST['name'];
            $fileimage =$_FILES['fileimage']['name'];
            $quantity =$_POST['soluong'];
            $entry_price =$_POST['gianhap'];
            $export_price =$_POST['giaxuat'];
            $description =$_POST['mota'];
            //$created_date =$_POST['date'];
            $status =$_POST['status'];

        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $sp = [
                'id' => $_POST['masp'],
                'category_id' =>$_POST['dropdown'],
                'name' => $_POST['name'],
                'quantity' => $_POST['soluong'],
                'fileimage' => $_FILES['fileimage']['name'],
                'entry_price' => $_POST['gianhap'],
                'export_price' => $_POST['giaxuat'],
                'description' =>$_POST['mota'],
                'status' => $_POST['status'],
                
                // Thêm các trường dữ liệu của form...
            ];
        }
        $validation = $this -> ProductModel->validation_product($sp);
        if(empty($validation['errors'])){
             //insert database
            $this->ProductModel->insert_product($id,$category_id,$name,$quantity,$fileimage,$entry_price,$export_price,$description,$created_date,$status);
            echo "
            <script lang='javascript'>
                alert('thêm sản phẩm   thành công!');
                window.open('http://localhost/PHPMVC/Admin_product','_self',1);
            </script>
         " ;
        }
       else{
        $this->view("master_admin2",[
            "Page"=> "view_add_product",
            "data1"=>$this->CategoryModel->show_category(),
            "error"=>$validation['errors'],
           
           
        ]); 
       }
        
      // header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_product");
    }
    public function delete($id) {
     $a =   $this->ProductModel->delete_product($id);
     if($a){
       $_SESSION['success_message']="xoá sản phẩm thành công !";
     } else{
        $_SESSION['error_message']="không xoá được sản phẩm  !";
     }
     header('location:http://localhost/PHPMVC/Admin_product');
     exit;
       //header("Refresh:0.001; url=http://localhost/PHPMVC/Admin_product");
        
    }
    public function update($id)  {
        $this->view("master_admin",[
            "Page"=> "view_update_product",
            "data1"=>$this->CategoryModel->show_category(),
            "product"=>$this->ProductModel->show_detailproduct($id)
        ]);
        
    }
    public function update2($id)  {
        $update_date=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
        $sp = $this->ProductModel->detail_sp($id);
        if(isset($_POST['btn_update'])){
            $category_id=$_POST['dropdown'];
            $name=$_POST['name'];
            //$fileimage =$_FILES['fileimage']['name'];
            $quantity =$_POST['soluong'];
            $entry_price =$_POST['gianhap'];
            $export_price =$_POST['giaxuat'];
            $description =$_POST['mota'];
           //$update_date =$_POST['date'];
            $status =$_POST['status'];
            if($_FILES['fileimage']['name']==""){
                $fileimage =$sp['image'];
            }
            else{
                $fileimage =$_FILES['fileimage']['name'];
                $file_tmp = $_FILES['fileimage']['tmp_name'];
            }

        }
       
       
        
            $this->ProductModel->update_product($id,$category_id,$name,$fileimage,$quantity,$entry_price, $export_price, $description,$update_date,$status);
           
            header("Refresh: 0.001;url=http://localhost/PHPMVC/Admin_product");
       
    }
}


?>
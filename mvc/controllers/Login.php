<?php
class Login extends Controller{
    public $CategoryModel;
    public $Auser_model;
    public $ProductModel; 
    public $BannerModel;
    public function __Construct(){
      
        $this->BannerModel= $this->model("BannerModel");
        $this->CategoryModel= $this->model("CategoryModel");
        $this->ProductModel = $this->model("ProductModel");
        $this->Auser_model = $this->model("Auser_model");
     
    }
    public function show(){
        $this->view("master_home",[
            "page"=>"login",
            "category"=>$this->CategoryModel->show_category()
        ]);
    }
    public function dangky(){
        if(isset($_POST['dangky'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $address = $_POST['address'];
            $password = $_POST['password'];
            $password = password_hash($password,PASSWORD_DEFAULT);
            $ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userData = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone_number' => $_POST['phone_number'],
                'address' => $_POST['address'],
                'password' => $_POST['password'],
                // Thêm các trường dữ liệu của form...
            ];
        } 
        $validationResult =$this-> Auser_model->validateUserData($userData);

        if (empty($validationResult['errors'])) {
            // Nếu không có lỗi, tiếp tục xử lý đăng ký
            // ...
            $this->Auser_model->dangky($name,$email,$phone_number,$address,$password,$ngay);
      
        
           
        
            $validationResult['success'] = 'Đăng ký thành công!';
            $this->view("master_home",[
                "page"=>"login",
                "category"=>$this->CategoryModel->show_category(),
                "success"=>$validationResult['success'],
            ]);
        }
        else{
            $this->view("master_home",[
                "page"=>"login",
                "category"=>$this->CategoryModel->show_category(),
                "errors"=>$validationResult['errors'],
            ]);
          
        }

      
     
    
      

    }
    public function login(){
       
        if(isset($_POST["submit"])){
            $name_input = $_POST['name'];
            $password_input=$_POST['password'];
           
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = [
                'name' => $_POST['name'],
                'password' => $_POST['password'],
                // Thêm các trường dữ liệu của form...
            ];
        }
        $validae =$this-> Auser_model->validate($user);
        if(empty($validate['error']) ==false){
            $this->view("master_home",[
                "page"=>"login",
                "category"=>$this->CategoryModel->show_category(),
                "error"=>$validate['error'],
            ]);}
            else{
                $reusult=   $this->Auser_model->login($name_input);   
                
                if($reusult== true){
                    $password = $reusult['password'];
                    $role = $reusult['role'];
                    
                    
                    if($reusult['status']==1){
                        if(password_verify($password_input,$password)){
                            if($role==1){
                                $_SESSION['is_Admin']= true;
                                $_SESSION['login']= $reusult;
                    
                            }else{
                                $_SESSION['is_Regester']= true;
                                $_SESSION['login']= $reusult;
                            }
                            echo "
                        <script lang='javascript'>
                            alert('Đăng nhập  thành công!');
                            window.open('http://localhost/PHPMVC/Home','_self',1);
                        </script>
                     " ;
                           // header("Refresh: 0.001;url=http://localhost/PHPMVC/Home");
                        }
                        
                        else{
                            $validate['false'] = 'username hặc mật khẩu không chính xác!';
                            $this->view("master_home",[
                                "page"=>"login",
                                "category"=>$this->CategoryModel->show_category(),
                                "false"=>$validate['false'],
                            ]);
                      }
                    }
                    else{
                        echo'tài khoản của bạn bị khoá';
                        //echo $password;
                    }
                    
                  
                }else{
                    $validate['false'] = 'username hặc mật khẩu không chính xác!';
                    $this->view("master_home",[
                        "page"=>"login",
                        "category"=>$this->CategoryModel->show_category(),
                        "false"=>$validate['false'],
                    ]);
                }
               
            }
           
            
           
        
    }
    /*   if(empty($validate['error'])){
        $reusult=   $this->Auser_model->login($name_input);   
            
        if($reusult== true){
            $password = $reusult['password'];
            $role = $reusult['role'];
            
            
            if($reusult['status']==1){
                if(password_verify($password_input,$password)){
                    if($role==1){
                        $_SESSION['is_Admin']= true;
                        $_SESSION['login']= $reusult;
            
                    }else{
                        $_SESSION['is_Regester']= true;
                        $_SESSION['login']= $reusult;
                    }
                    echo "
                <script lang='javascript'>
                    alert('Đăng nhập  thành công!');
                    window.open('http://localhost/PHPMVC/Home','_self',1);
                </script>
             " ;
                   // header("Refresh: 0.001;url=http://localhost/PHPMVC/Home");
                }
                
                else{
                    $validate['false'] = 'username hặc mật khẩu không chính xác!';
                    $this->view("master_home",[
                        "page"=>"login",
                        "category"=>$this->CategoryModel->show_category(),
                        "false"=>$validate['false'],
                    ]);
              }
            }
            else{
                echo'tài khoản của bạn bị khoá';
                //echo $password;
            }
            
          
        }else{
            $validate['false'] = 'username hặc mật khẩu không chính xác!';
            $this->view("master_home",[
                "page"=>"login",
                "category"=>$this->CategoryModel->show_category(),
                "false"=>$validate['false'],
            ]);
        }
       }else{
        $this->view("master_home",[
            "page"=>"login",
            "category"=>$this->CategoryModel->show_category(),
            "error"=>$validate['error'],
        ]);
       }
        
       
    
}*/

    public function logout(){
        $this->Auser_model->logout();
        
        header("Refresh: 0.001;url=http://localhost/PHPMVC/Home");

    }
}
?>
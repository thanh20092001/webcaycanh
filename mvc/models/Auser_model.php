<?php
class Auser_model extends DB{
    function show_user() {
        $sql = "SELECT * FROM user";
    $smt=$this->connect()->query($sql);
    while($row=$smt->fetch()){
        $data[]=$row;
    }
    if(empty($data)){
        echo "";
    }else return $data;   
        
       
}
function show_auser($id) {
    $sql = "SELECT * FROM user where id ='$id'";
$smt=$this->connect()->query($sql);
while($row=$smt->fetch()){
    $data[]=$row;
}
if(empty($data)){
    echo "";
}else return $data;   
    
   
}
public function isUsernameExists($name) {
    // Kiểm tra xem username đã tồn tại trong cơ sở dữ liệu chưa
    // ...
    $sql = "SELECT * from user where name ='$name'";
    $smt=  $this->connect()->query($sql);
    $row= $smt->fetch();
    if($row != null){
        return true;
    }
    else{
        return false;
    }
    

     // Hoặc true nếu username đã tồn tại
}

public function validate($user){
    $error =[];
    $name = trim($user['name']);
    if (empty($name)) {
        $error['name'] = 'Tên đăng nhập không được trống';
    }
    $password = trim($user['password']);
    if (empty( $password)) {
        $error['password'] = 'Vui lòng nhập mật khẩu';
    }

    return ['error' => $error];
}
public function validateUserData($userData) {
    $errors = [];

    // Xác nhận username không trống và không trùng với username đã có
    $name = trim($userData['name']);
    if (empty($name)) {
        $errors['name'] = 'Tên đăng nhập không được trống';
    }  elseif (strlen($name) > 50) {
        $errors['name'] = 'Tên đăng nhập không được vượt quá 50 ký tự.';
    }

    elseif ($this->isUsernameExists($name)) {
        $errors['name'] = 'Tên đăng nhập đã tồn tại. Vui lòng chọn một tên khác.';
    }

    // Xác nhận email không trống 
    $email =trim($userData['email']);
    if (empty($email)) {
        $errors['email'] = 'Vui lòng nhập địa chỉ email.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Địa chỉ email không hợp lệ.';
    }

    // Xác nhận số điện thoại không trống và đúng định dạng
    $phone_number= trim($userData['phone_number']);
    if (empty($phone_number)) {
        $errors['phone_number'] = 'Vui lòng nhập số điện thoại.';
    } elseif (!preg_match('/^[0-9]{10,11}$/', $phone_number)) {
        $errors['phone_number'] = 'Số điện thoại không hợp lệ.';
    }

    // Xác nhận địa chỉ không trống
    $address = trim($userData['address']);
    if (empty( $address)) {
        $errors['address'] = 'địa chỉ không được trống';
    }elseif(strlen($address)>255){
        $errors['address'] ='địa chỉ không đưỢc vượt quá 255 ký tự ';
    }

    // Xác nhận mật khẩu không trống
    $password = trim($userData['password']);
    if (empty( $password)) {
        $errors['password'] = 'Vui lòng nhập mật khẩu.';
    }elseif(strlen($password)<6){
        $errors['password']='mật khẩu không được nhỏ hơn 6 ký tự  ';
    }elseif(strlen($password)>255){
        $errors['password']='mật khẩu không được quá 255 ký tự ';
    }

    // Thêm các điều kiện xác nhận khác...

    return ['errors' => $errors];
}

public function dangky($name,$email,$phone_number,$address,$password,$ngay){
    $sql= "INSERT INTO user(name,email,phone_number,address,password,role,created_date,update_date,status) VALUES('$name','$email','$phone_number','$address','$password','0','$ngay',null,'1')";
    $this->connect()->exec($sql);

}
public function login($name_input){
    $sql ="SELECT * FROM user WHERE name='$name_input' ";
    $smt=  $this->connect()->query($sql);
    $row= $smt->fetch();
    return $row;
}
public function logout(){
    if(isset($_SESSION['is_Admin'])){
        unset($_SESSION['is_Admin']);
        unset($_SESSION['login']);
        

    }if(isset($_SESSION['is_Regester'])){
        unset($_SESSION['is_Regester']);
        unset($_SESSION['login']);
    }
}
public function delete($id){
    $sql = "DELETE from user where id = '$id';";
    $this->connect()->exec($sql);
}
public function update($id,$name,$email,$phone_number,$address,$role,$status,$date){
    $sql ="UPDATE user set name ='$name',email ='$email',phone_number='$phone_number',address='$address',role='$role',status='$status',update_date='$date' where id='$id';";
    $this->connect()->exec($sql);
}
public function update2($name,$email,$phone_number,$address,$date){
    $sql ="UPDATE user set name ='$name',email ='$email',phone_number='$phone_number',address='$address',update_date='$date' where name='$name';";
    $this->connect()->exec($sql);
}
}
?>
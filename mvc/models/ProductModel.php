<?php
class ProductModel extends DB{
  public  function show_product() {
    $sql = "SELECT * FROM product";
    $smt=$this->connect()->query($sql);
    while($row=$smt->fetch()){
        $data[]=$row;
    }
    if(empty($data)){
        echo "";
    }else return $data;     
        
       
}
public function isProductExits($name){
    $sql="SELECT *from product where name = '$name'";
    $smt=  $this->connect()->query($sql);
    $row= $smt->fetch();
    if($row != null){
        return true;
    }
    else{
        return false;
    }

}
public function isProductExits2($id){
    $sql="SELECT *from product where id = '$id'";
    $smt=  $this->connect()->query($sql);
    $row= $smt->fetch();
    if($row != null){
        return true;
    }
    else{
        return false;
    }

}
public function validation_product($sp){
    $errors =[];
    $category_id= trim($sp['category_id']);
    if(empty($category_id)){
        $errors['category_id']='danh mucj sản phẩm không được bỏ trống';
    }
    $id = trim($sp['id']);
    if(empty($id)){
        $errors['id']= 'Id sản phẩm không được để trống';
    }elseif($this->isProductExits2($id)){
        $errors['id'] ='id sản phẩm đã tồn tại'; 
    }elseif(strlen($id)>50){
        $errors['id']= 'id sản phẩm không được dài quá 50 ký tự ';
    }
    $name = trim($sp['name']);
    if(empty($name)){
        $errors['name']='tên sản phẩm không được để trống';
    }elseif($this->isProductExits($name)){
        $errors['name']='tên sản phẩm đã tồn tại';
    }elseif(strlen($name)>100){
        $errors['name']='Tên sản phẩm không được dài quá 100 ký tự ';
    }
    $quantity = trim($sp['quantity']);
    if(empty($quantity)){
        $errors['quantity']='số lượng không được trống';

    }elseif(!preg_match('/^[0-9]{0,11}$/', $quantity)){
        $errors['quantity']='số lượng có độ dài không vượt quá 11 kí tự';
    }elseif($quantity<=0){
        $errors['quantity']='số lượng sản phẩm phải lớn hơn 0';
    }
    $entry_price = trim($sp['entry_price']);
    if(empty($entry_price)){
        $errors['entry_price']='giá nhập không được trống';

    }elseif(!preg_match('/^[0-9]{0,11}$/', $entry_price)){
        $errors['entry_price']='giá nhập có độ dài không vượt quá 11 kí tự';
    }elseif($quantity<=0){
        $errors['entry_price']='giá nhập sản phẩm phải lớn hơn 0';
    }
    $export_price = trim($sp['export_price']);
    if(empty($export_price)){
        $errors['export_price']='giá xuất không được trống';

    }elseif(!preg_match('/^[0-9]{0,11}$/', $export_price)){
        $errors['export_price']='giá xuất có độ dài không vượt quá 11 kí tự';
    }elseif($export_price<=0){
        $errors['export_price']='giá xuất  sản phẩm phải lớn hơn 0';
    }
    $status = trim($sp['status']);
    if(empty($status)){
        $errors['status']='trạng thái không được để trống';
    }
    $fileimage = trim($sp['fileimage']);
    if(empty($fileimage)){
        $errors['fileimage']='chưa có ảnh';
    }elseif(strlen($fileimage)>255){
        $errors['fileimage']='độ dài của file ảnh quá độ dài cho phép';
    }
    $description = trim($sp['description']);
    if(strlen($description)>255){
        $errors['description']='mô tả không được quá 255 kí tự ';
    }
    return ['errors' => $errors]; 
}
        
public function insert_product($id,$category_id,$name,$quantity,$fileimage,$entry_price,$export_price,$description,$created_date,$status){
    $sql ="INSERT INTO product(id,category_id,name,quantity,buy_qty,image,entry_price,export_price,description,created_date,status) VALUES('$id','$category_id','$name','$quantity','0','$fileimage','$entry_price','$export_price','$description','$created_date','$status')";
    $this->connect()->exec($sql);
}
public function delete_product($id) {
    $sql="DELETE FROM product WHERE id ='$id'";
    $this->connect()->exec($sql);
    return true;
    //echo "bạn đã xoá thành công ";    
}
public function show_detailproduct($id){
    $sql="SELECT * FROM product WHERE id='$id'";
    $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data;  
}
public function detail_sp($id){
    $sql= "SELECT * FROM product WHERE id='$id'";
    $smt=$this->connect()->query($sql);
    $row= $smt->fetch();
    return $row;
}
public function update_product($id,$category_id,$name,$fileimage,$quantity,$entry_price, $export_price, $description,$update_date,$status)  {
    $sql ="UPDATE product SET category_id='$category_id',name= '$name',image ='$fileimage',
    quantity='$quantity',entry_price='$entry_price',export_price='$export_price',description='$description',update_date='$update_date',status ='$status' WHERE id='$id'";
    $result=  $this->connect()->exec($sql);
    if($result){
        echo "update thành công";
    }else{
        echo "update thất bại";
    }
}
public function show_product2($a,$b){
    $sql =   "SELECT * from product WHERE status = 1  ORDER BY created_date  DESC limit $a,$b";
    $smt=$this->connect()->query($sql);
    while($row=$smt->fetch()){
        $data[]=$row;
    }
    if(empty($data)){
        echo "";
    }else return $data;     
        
}
public function show_product_radom($c){
    $sql="SELECT * FROM product WHERE status = 1 ORDER BY RAND () LIMIT $c";
    $smt=$this->connect()->query($sql);
    while($row=$smt->fetch()){
        $data[]=$row;
    }
    if(empty($data)){
        echo "";
    }else return $data;   
    
}
public function show_new_product($d) {
    $sql="SELECT * from product WHERE status = 1 ORDER BY created_date DESC limit $d";
    $smt=$this->connect()->query($sql);
    while($row=$smt->fetch()){
        $data[]=$row;
    }
    if(empty($data)){
        echo "";
    }else return $data;     
        
    
}
public function show_same_product($e,$g,$category_id){
    $sql=  "SELECT * from product WHERE status = 1  and category_id ='$category_id' ORDER BY created_date DESC limit $e,$g";
    $smt=$this->connect()->query($sql);
    while($row=$smt->fetch()){
        $data[]=$row;
    }
    if(empty($data)){
        echo "";
    }else return $data;     
}
public function select_category($id){
    $sql="SELECT category_id from product where id='$id'";
    $smt=$this->connect()->query($sql);
    while($row=$smt->fetch()){
        $data[]=$row;
    }
    if(empty($data)){
        echo "";
    }else return $data;   
}
public function category_product($category_id){
    $sql="SELECT * FROM product WHERE category_id='$category_id'";
    $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data;  
}
public function search($key){
    $sql = "SELECT a.name, a.export_price, a.id ,a.category_id,a.quantity,a.image,a.buy_qty FROM product as a inner join category as b on a.category_id = b.id  WHERE a.name like '%$key%' or b.name like '%$key%'; ";
    $smt=$this->connect()->query($sql);
    while($row=$smt->fetch()){
        $data[]=$row;
    }
    if(empty($data)){
        echo "";
    }else return $data;   
}

}



?>
<?php
class CategoryModel extends DB{
 public   function show_category() {
        $sql = "SELECT * FROM category";
        $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data;     
    }
        
       

public function insert_category($id,$name,$description, $created_date,){
    $sql = "INSERT INTO category VALUES('$id','$name','$description',' $created_date',null)";
    $this->connect()->exec($sql);
    
    
}
 public function show_detailcategory($id){
    $sql = "SELECT id,name,description,update_date FROM category WHERE id = '$id'";
    $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data;  
    //return $values = mysqli_query($this->con,$qr);
 }
 public function update_category($id,$name,$description,$update_date){
    $sql ="UPDATE category SET  name ='$name',description='$description',update_date='$update_date'WHERE id='$id'";
    $result=  $this->connect()->exec($sql);
    if($result){
        echo "update thành công";
    }else{
        echo "update thất bại";
    }


 }
 public function delete_category($id){
    $sql = "DELETE FROM category WHERE id = '$id'";
    $this->connect()->exec($sql);
        echo "Bạn đã xóa thành công";
 }
 public function show_name()  {
    $sql ="SELECT name FROM category";
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
<?php
class CouponModel extends DB{
    public function show(){
        $sql= "SELECT * from coupon ";
        $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data;
    }
    public function show_detail($id){
        $sql= "SELECT * from coupon where id= '$id'";
        $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data;
    }
    public function insert_coupon($name,$code,$discount,$created_date,$expiry_date,$status){
        $sql ="INSERT INTO coupon(name,code,discount,created_date,expiry_date,status) values('$name','$code','$discount','$created_date','$expiry_date','$status')";
        $this->connect()->exec($sql);
    }
    public function update_coupon($id,$name,$code,$discount,$expiry_date,$status)  {
        $sql= "UPDATE coupon SET name = '$name', code = '$code', discount ='$discount',expiry_date='$expiry_date',status ='$status' where id = '$id'";
      $result=  $this->connect()->exec($sql);
        if($result){
            echo "update thành công";
        }else{
            echo "update thất bại";
        }
    }
    
    public function delete_coupon($id){
        $sql ="DELETE from coupon where id = '$id'";
        $this->connect()->exec($sql);

    }
    public function get_coupon($code){
        $sql= "SELECT * from coupon where code= '$code' and status='1' and DATEDIFF(expiry_date,CURRENT_DATE())>=0;";
        $smt=$this->connect()->query($sql);
        $row= $smt->fetch();
    return $row;
    }
}

?>
<?php
class OderModel extends DB{
    public function show_customer($id_user){
        $sql = "SELECT * FROM orders WHERE id_user = '$id_user' GROUP BY oder_date DESC LIMIT 0,1;";
        $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data; 
    }
    public function show_bill($id_user){
        $sql  = "SELECT a.quantity, a.price, b.total_money, b.name_customer,b.phone_number,b.address_shipping,c.name 
        FROM orders_details AS a INNER JOIN orders AS b ON a.order_id = b.id 
        INNER JOIN product as c on c.id = a.product_id WHERE b.id_user = '$id_user' AND b.id =(select id FROM orders WHERE id_user = '$id_user' GROUP BY oder_date DESC LIMIT 0,1)  ";
        $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data;
        
    }
    public function show_oder(){
        $sql = "SELECT * FROM orders;";
        $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data; 
    }
    public function show_detail($id){
        $sql = "SELECT a.id,a.order_id,a.quantity,a.price,c.name FROM orders_details AS a INNER JOIN  product as c on c.id = a.product_id WHERE order_id = '$id';";
        $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data; 
    }
    public function delete_oder($id){
        $sql ="DELETE FROM orders WHERE id='$id';";
        $this->connect()->exec($sql);
    }
    public function show_aoder($id){
        $sql = "SELECT * FROM orders WHERE id='$id';";
        $smt=$this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data; 
    }
    public function update_oder($id,$name_customer,$phone_number, $address_shipping, $note,$status,$update_date){
        $sql = "UPDATE orders SET name_customer ='$name_customer',phone_number ='$phone_number',address_shipping ='$address_shipping', note = '$note', status = '$status', update_date = '$update_date' WHERE id = '$id';";
        $result=  $this->connect()->exec($sql);
    if($result){
        echo "update thành công";
    }else{
        echo "update thất bại";
    }
    }
    public function show_all($id_user){
        $sql ="SELECT * from orders where id_user='$id_user';";
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
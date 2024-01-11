<?php
class CheckoutModel extends DB
{
   public function save($mahd,$id_user,$name_customer,$phone_number,$address_shipping,$note,$oder_date,$count){
    /*$f = "";
    $v = "";
    foreach ($data as $key => $value) {
        $f .= $key . ",";
        $v .= "'" . $value . "',";
    }
    $f = trim($f, ",");
    $v = trim($v, ",");
    $query = "INSERT INTO orders($f) VALUES ($v)";
    
     $this->connect()->exec($query);*/
     $sql  = "INSERT INTO orders(id,id_user,name_customer,phone_number,address_shipping,note,oder_date,total_money,status) VALUES('$mahd','$id_user','$name_customer','$phone_number','$address_shipping','$note','$oder_date','$count','Đợi xác nhận')";
     $this->connect()->exec($sql);
     

}

public function saveoder($mahd){
    foreach ($_SESSION['cart'] as $value) {
        $order_id = $mahd;
          $product_id =$value['id'];
          $quantity = $value['qty'];
          $price = $value['export_price'];
          
          $query = "INSERT INTO orders_details(order_id,product_id,quantity,price) VALUES ('$order_id','$product_id','$quantity','$price')";
          $this->connect()->exec($query);
  
          $sql="UPDATE product SET buy_qty='$quantity' WHERE id = '$product_id'";
          $this->connect()->exec($sql);
      }
}
    
    
   
}

?>
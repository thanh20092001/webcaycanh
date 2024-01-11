<?php
 class ThongkeModel extends DB{
public function thongke($date,$thang,$nam){
    $sql = " SELECT 
            CASE 
           WHEN '$date' IS NOT NULL  THEN date('$date')
                WHEN '$thang' IS NOT NULL  THEN DATE_FORMAT('$thang', '%Y-%m') 
                WHEN '$nam' IS NOT NULL THEN YEAR('$nam')
                
            END AS thoigian,
            
            SUM(total_money) AS tongdoanhthu
        FROM orders
        WHERE 
            DATE(oder_date) = '$date' OR
            DATE_FORMAT(oder_date, '%Y-%m') = '$thang' OR
            
            YEAR(oder_date) = '$nam'
        GROUP BY thoigian;
    ";
   $smt=$this->connect()->query($sql);
   while($row=$smt->fetch()){
       $data[]=$row;
   }
   if(empty($data)){
       echo "";
   }else return $data; 

}

} 
//   or  or  

?>
<?php
class BannerModel extends DB{
    public function show_banner(){
        $sql="SELECT * FROM banner";
        $smt= $this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data;   
    }
    public function insert_banner($id,$fileimage,$created_date){
        $sql="INSERT INTO banner(id,image,created_date) VALUES('$id','$fileimage','$created_date')";
        $this->connect()->exec($sql);
    }
    public function show_abanner($id){
        $sql= "SELECT * FROM banner WHERE id= '$id'";
      $smt=  $this->connect()->query($sql);
        while($row=$smt->fetch()){
            $data[]=$row;
        }
        if(empty($data)){
            echo "";
        }else return $data; 
    }
    public function delete_banner($id){
        $sql= "DELETE FROM banner WHERE id='$id'";
        $this->connect()->exec($sql);

    }
    public function update_banner($id,$fileimage,$update_date){
        $sql = "UPDATE banner SET id='$id',image='$fileimage',update_date='$update_date'";
        $this->connect()->exec($sql);
    }
   

}
?>
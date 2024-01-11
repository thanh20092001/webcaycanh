

 <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="./Admin_product/show">Danh sách sản phẩm </a></li>
        <li class="breadcrumb-item"><a href="#">update sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">update sản phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
               
              </div>

            </div>
            <?php
                foreach($data['product'] as $k=>$values){
                    ?>

            <form class="row" action="Admin_product/update2/<?php echo $values['id'];?>" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-4">
              
                <td> <label class="control-label">Danh mục sản phẩm(*)</label></td>
                <br>
                <select class="form-control" name="dropdown" >
                    
                <?php 
                        
                        
                        
                        foreach($data['data1'] as $k=>$value1){
                          ?>
                            <option 
                            <?php
                            if($values['category_id']==$value1['id']){
                                echo 'selected="selected"';
                            }
                            ?>
                            value="<?php echo $value1['id']?>"><?php echo $value1['name']; ?></option>
                            <?php
                            }
                        
                        
                    ?>
                    </select>
                    <?php
							if(isset($data['error']['category_id'])){
								echo"<div style='color:red;'>{$data['error']['category_id']}</div>";
							}
              ?>
              
               
                
              </div>
              

              <div class="form-group col-md-4">
                <label class="control-label">Mã sản phẩm(*)</label>
                <input readonly="readonly" class="form-control" type="text" name="masp" value="<?php  echo $values['id'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tên sản phẩm(*)</label>
                <input class="form-control" type="text" name="name" value="<?php  echo $values['name'];?>"  required>
                <?php
							if(isset($data['error']['name'])){
								echo"<div style='color:red;'>{$data['error']['name']}</div>";
							}
							?>
              </div>
              
              
              <div class="form-group col-md-4">
                <label class="control-label">Số lượng(*) </label>
                <input class="form-control" type="number" name="soluong"  value="<?php echo $values['quantity'];?>" required>
                <?php
							if(isset($data['error']['quantity'])){
								echo"<div style='color:red;'>{$data['error']['quantity']}</div>";
							}
							?>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Giá nhập(*)</label>
                <input class="form-control" type="number" name="gianhap" value="<?php echo $values['entry_price'];?>" required>
                <?php
							if(isset($data['error']['entry_price'])){
								echo"<div style='color:red;'>{$data['error']['entry_price']}</div>";
							}
							?>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Giá xuất(*)</label>
                <input class="form-control" type="number" name="giaxuat" value="<?php echo $values['export_price'];?>"required>
                <?php
							if(isset($data['error']['export_price'])){
								echo"<div style='color:red;'>{$data['error']['export_price']}</div>";
							}
							?>
              </div>

              <div class="form-group  col-md-4">
                <label class="control-label">mô tả </label>
                <textarea  class="form-control" type="date" name="mota" value="<?php echo $values['description'];?>" required> </textarea>
                <?php
							if(isset($data['error']['description'])){
								echo"<div style='color:red;'>{$data['error']['description']}</div>";
							}
							?>
              </div>
              
              <!--<div class="form-group col-md-4">
                <label class="control-label">Ngày cập nhật</label>
                <input class="form-control" type="date" name ="date" value="<?php echo $values['update_date'];?>"required>
              </div>-->
              <div class="form-group col-md-4">
                <label class="control-label">Ảnh (*)</label>
                <div id="myfileupload">
                <?php
            if(isset($_FILES["fileimage"])){
                $file_name=$_FILES['fileimage']['name'];
                $file_tmp = $_FILES['fileimage']['tmp_name'];
                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"public/images/".$file_name);
                }
            }
            ?> 
            <td><img src="./public/img-sanpham/<?php echo $values["image"]; ?>" width="50" height="50"> </td> 
                  <input type="file" id="" name="fileimage"   value="<?php echo $values['image'];?>" />
                 
                </div>

               
                

              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Trạng thái(*)</label>
                <div class="radio">
                  <label >
                    <input type="radio" name="status"
                    <?php
                    if($values['status']==1){
                        echo 'checked';
                    }
                    ?>
                    
                    id="inputstatus" value="1" >
                    Hiện
                  </label>
                  <label >
                    <input type="radio" name="status"
                    <?php
                    if($values['status']==0){
                        echo 'checked';
                    }
                    ?>
                     id="inputstatus" value="0" >
                    Ẩn 
                  </label>
                </div>
              </div>
              

              <?php
                    }
                    ?>
 <?php
							if(isset($data['error']['status'])){
								echo"<div style='color:red;'>{$data['error']['status']}</div>";
							}
							?>
          </div>
          <button class="btn btn-save" type="submit" name="btn_update">Cập nhật</button>
          <a class="btn btn-cancel" href="Admin_product">Hủy bỏ</a>
        </div>
  </main>
  </form>

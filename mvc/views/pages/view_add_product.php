


 
 <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="./Admin_product/show">Danh sách sản phẩm</a></li>
        <li class="breadcrumb-item"><a href="#">Thêm mới sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Thêm mới sản phẩmn</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
               
              </div>

            </div>
            <form class="row" action="Admin_product/insert" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-4">
              
                <td> <label class="control-label">Danh mục sản phẩm(*)</label></td>
                <br>
                

                  <select class="form-control" name="dropdown">
                    <option value="unselect" selected>lựa chọn danh mục sản phẩm </option>
                <?php 
                        
                        
                        
                        foreach($data['data1'] as $k=>$value){
                          ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']; ?></option>
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
                <input class="form-control" type="text" name="masp"  required>
                <?php
							if(isset($data['error']['id'])){
								echo"<div style='color:red;'>{$data['error']['id']}</div>";
							}
							?>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tên sản phẩm(*)</label>
                <input class="form-control" type="text" name="name"  required>
                <?php
							if(isset($data['error']['name'])){
								echo"<div style='color:red;'>{$data['error']['name']}</div>";
							}
							?>
              </div>
              
             
              <div class="form-group col-md-4">
                <label class="control-label">Số lượng(*)</label>
                <input class="form-control" type="number" name="soluong" required>
                <?php
							if(isset($data['error']['quantity'])){
								echo"<div style='color:red;'>{$data['error']['quantity']}</div>";
							}
							?>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Giá nhập(*)</label>
                <input class="form-control" type="number" name="gianhap" required>
                <?php
							if(isset($data['error']['entry_price'])){
								echo"<div style='color:red;'>{$data['error']['entry_price']}</div>";
							}
							?>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Giá xuất(*)</label>
                <input class="form-control" type="number" name="giaxuat" required>
                <?php
							if(isset($data['error']['export_price'])){
								echo"<div style='color:red;'>{$data['error']['export_price']}</div>";
							}
							?>
              </div>

              <div class="form-group  col-md-4">
                <label class="control-label">mô tả </label>
                <textarea  class="form-control" type="date" name="mota" required> </textarea>
                <?php
							if(isset($data['error']['description'])){
								echo"<div style='color:red;'>{$data['error']['description']}</div>";
							}
							?>
              </div>
              
              <!--<div class="form-group col-md-4">
                <label class="control-label">Ngày tạo</label>
                <input class="form-control" type="date" name ="date"required>
              </div>-->
              <div class="form-group col-md-4">
                <label class="control-label">Ảnh(*) </label>
                <div id="myfileupload">
                <?php
            if(isset($_FILES["fileimage"])){
                $file_name=$_FILES['fileimage']['name'];
                $file_tmp = $_FILES['fileimage']['tmp_name'];
                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"public/img-sanpham/".$file_name);
                }
            }
            ?>
                  <input type="file" id="" name="fileimage" required  />
                  <?php
							if(isset($data['error']['fileimage'])){
								echo"<div style='color:red;'>{$data['error']['fileimage']}</div>";
							}
							?>
                </div>

                
                

              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Trạng thái(*)</label>
                <div class="radio">
                  <label >
                    <input type="radio" name="status" id="inputstatus" value="1" >
                    Hiện
                  </label>
                  <label >
                    <input type="radio" name="status" id="inputstatus" value="0" >
                    Ẩn
                  </label>
                </div>
                <?php
							if(isset($data['error']['status'])){
								echo"<div style='color:red;'>{$data['error']['status']}</div>";
							}
							?>

              </div>
              



          </div>
          <button class="btn btn-save" type="submit" name="btn_insert">Lưu lại</button>
          <a class="btn btn-cancel" href="Admin_product">Hủy bỏ</a>
        </div>
  </main>
  </form>

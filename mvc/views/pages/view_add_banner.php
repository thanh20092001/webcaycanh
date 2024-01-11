<form action="Admin_banner/insert" method="post" enctype="multipart/form-data">
 <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách ảnh</li>
        <li class="breadcrumb-item"><a href="#">Thêm ảnh</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Thêm mới ảnh</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
               
              </div>

            </div>
            <form class="row">
            
              
              
              <div class="form-group col-md-4">
                <label class="control-label">id</label>
                <input class="form-control" type="text" name="id">
              </div>
              
              
              <div class="form-group col-md-4">
                <label class="control-label">Ảnh </label>
                <div id="myfileupload">
                <?php
            if(isset($_FILES["fileimage"])){
                $file_name=$_FILES['fileimage']['name'];
                $file_tmp = $_FILES['fileimage']['tmp_name'];
                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"public/img_banner/".$file_name);
                }
            }
            ?>
                  <input type="file" id="" name="fileimage"  />
        </div>
        </div>
              
              <div class="form-group col-md-4">
                <label class="control-label">Ngày tạo</label>
                <input class="form-control" type="date" name ="date"required>
              </div>
             
              


        </div>
          <button class="btn btn-save" type="submit" name="btn_insert">Lưu lại</button>
          <a class="btn btn-cancel" href="Admin_product">Hủy bỏ</a>
        </div>
  </main>
  </form>





<form action="Admin_category/insert" method="post" >
  <div class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách danh mục sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm danh mục</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Tạo danh mục sản phẩm</h3>
          <div class="tile-body">
             <div class="row element-button">
              
            </div>
            <form class="row">
              <div class="form-group col-md-4">
                <label class="control-label">Mã danh mục </label>
                <input class="form-control" type="text" name="id">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tên danh mục</label>
                <input class="form-control" type="text" name="name" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Mô tả</label>
                <textarea  class="form-control" type="date" name="description" required> </textarea>
                
              </div>
              
              <div class="form-group col-md-4">
                <label class="control-label">Ngày tạo</label>
                <input class="form-control" type="date" name="date" required>
              </div>
             
              



          </div>
          <button class="btn btn-save" type="submit" name="btn_insert"  >Lưu lại</button>

          <a class="btn btn-cancel" href="Admin_category">Hủy bỏ</a>
        </div>

</div>

  </form>

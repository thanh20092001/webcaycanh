



<form action="Admin_coupon/insert" method="post" >
  <div class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách   khuyến mãi</li>
        <li class="breadcrumb-item"><a href="#">Thêm  khuyến mãic</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Tạo  khuyến mãi</h3>
          <div class="tile-body">
             <div class="row element-button">
              
            </div>
            <form class="row">
              <div class="form-group col-md-4">
                <label class="control-label">Tên khuyến mãi </label>
                <input class="form-control" type="text" name="name">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Mã khuyến mãi</label>
                <input class="form-control" type="text" name="code" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Giá trị mã(%) </label>
                <input class="form-control" type="number" name="discount" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày hết hạn</label>
                <input class="form-control" type="date" name="date"  required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Trạng thái</label>
                <div class="radio">
                  <label >
                    <input type="radio" name="status" id="inputstatus" value="1" checked="checked">
                    Hiện
                  </label>
                  <label >
                    <input type="radio" name="status" id="inputstatus" value="0" checked="checked">
                    Ẩn
                  </label>
                </div>
              </div>
              
             
              



          </div>
          <button class="btn btn-save" type="submit" name="btn_insert"  >Lưu lại</button>

          <a class="btn btn-cancel" href="Admin_coupon">Hủy bỏ</a>
        </div>

</div>

  </form>

<?php
                foreach($data['coupon'] as $k=>$values){
                    ?>

<form action="Admin_coupon/update2/<?php echo $values['id'];?>" method="post" enctype="multipart/form-data">
 <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách khuyến mãi</li>
        <li class="breadcrumb-item"><a href="#">update mã khuyến mãi</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">update mã khuyến mãi</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
               
              </div>

            </div>
            <form class="row">
           
              <div class="form-group col-md-4">
                <label class="control-label">Tên khuyến mãi</label>
                <input class="form-control" type="text" name="name" value="<?php  echo $values['name'];?>">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Mã khuyến mãi</label>
                <input class="form-control" type="text" name="code" value="<?php  echo $values['code'];?>">
              </div>
              

                
                

              </div>
              <div class="form-group col-md-4">
                <label class="control-label">giá trị mã</label>
                <input class="form-control" type="number" name="discount" value="<?php echo $values['discount'];?>" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày hết hạn</label>
                <input class="form-control" type="date" name="date" value="<?php echo $values['expiry_date'];?>" required>
              </div>
              
              <div class="form-group col-md-4">
                <label class="control-label">Trạng thái</label>
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

          </div>
          <button class="btn btn-save" type="submit" name="btn_update">Lưu lại</button>
          <a class="btn btn-cancel" href="Admin_coupoun">Hủy bỏ</a>
        </div>
  </main>
  </form>

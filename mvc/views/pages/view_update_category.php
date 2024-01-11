


<?php
                foreach($data['acategory'] as $k=>$values){
                    ?>
                
<form action="Admin_category/update2/<?php echo $values['id'];?>" method="post"  >
  <div class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách danh mục sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">update danh mục sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">update danh mục sản phẩm</h3>
          <div class="tile-body">
             <div class="row element-button">
              
            </div>
            <form class="row">
            
              <div class="form-group col-md-4">
                <label class="control-label">Mã danh mục </label>
                <input readonly="readonly" class="form-control" type="text" name="name" value="<?php  echo $values['id'];?>" >
                </td>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tên danh mục</label>
                <input class="form-control" type="text" name="name" value="<?php  echo $values['name'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Mô tả</label>
                <textarea  class="form-control" type="date" name="description" value="<?php echo $values['description']; ?>?" > </textarea>
                
              </div>
              
              <div class="form-group col-md-4">
                <label class="control-label">Ngày update</label>
                <input class="form-control" type="date" name="update_date" value="<?php echo $values['update_date']?>" >
              </div>
             
              
                    <?php
                    }
                    ?>


          </div>
          <button class="btn btn-save" type="submit" name="btn_update"  >Cập nhật</button>

          <a class="btn btn-cancel" href="Admin_category">Hủy bỏ</a>
        </div>

</div>

  </form>

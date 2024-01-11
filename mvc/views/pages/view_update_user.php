



                
                
  <div class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="Admin_user/show">Danh sách user</a></li>
        <li class="breadcrumb-item"><a href="#">update user</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">update user</h3>
          <div class="tile-body">
             <div class="row element-button">
              
            </div>
            <?php
                foreach($data['user'] as $k=>$values){
                    ?>
            <form  action="Admin_user/update2/<?php echo $values['id'];?>" method="post" class="row">
            
              <div class="form-group col-md-4">
                <label class="control-label">ID </label>
                <input readonly="readonly" class="form-control" type="text" name="id" value="<?php  echo $values['id'];?>" >
                </td>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tên username</label>
                <input class="form-control" type="text" name="name" value="<?php  echo $values['name'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">email</label>
                <input class="form-control" type="text" name="email" value="<?php  echo $values['email'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">SĐT</label>
                <input class="form-control" type="text" name="phone_number" value="<?php  echo $values['phone_number'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ</label>
                <input  class="form-control" type="text" name="address" value="<?php echo $values['address']; ?>" > </input>
                
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Phân quyền</label>
                <div class="radio">
                  <label >
                    <input type="radio" name="role"
                    <?php
                    if($values['role']==1){
                        echo 'checked';
                    }
                    ?>
                    
                    id="inputstatus" value="1" >
                    Admin
                  </label>
                  <label >
                    <input type="radio" name="role"
                    <?php
                    if($values['role']==0){
                        echo 'checked';
                    }
                    ?>
                     id="inputstatus" value="0" >
                    User
                  </label>
                </div>
                </div>
              
              <div class="form-group col-md-4">
                <label class="control-label">Tình trạng</label>
                <div class="radio">
                  <label >
                    <input type="radio" name="status"
                    <?php
                    if($values['status']==1){
                        echo 'checked';
                    }
                    ?>
                    
                    id="inputstatus" value="1" >
                    Nomal
                  </label>
                  <label >
                    <input type="radio" name="status"
                    <?php
                    if($values['status']==0){
                        echo 'checked';
                    }
                    ?>
                     id="inputstatus" value="0" >
                    lock
                  </label>
                </div>
                </div>
             
              
                    <?php
                    }
                    ?>


          </div>
          <button class="btn btn-save" type="submit" name="btn_update"  >Cập nhật</button>

          <a class="btn btn-cancel" href="Admin_user">Hủy bỏ</a>
        </div>

</div>

  </form>

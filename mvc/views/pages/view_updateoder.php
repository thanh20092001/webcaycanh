



               
                
               <!-- <form action="Admin_oder/update2/<?php echo $values['id'];?>" method="post">-->
  <div class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li  class="breadcrumb-item"><a href ="./Admin_oder/show">Danh sách đơn hàng</a></li>
        <li class="breadcrumb-item"><a href ="#">update đơn hàng</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">update đơn hàng</h3>
          <div class="tile-body">
             <div class="row element-button">
              
            </div>
            <?php
            foreach($data['oder'] as $k=>$values){
                ?>
            <form action="Admin_oder/update2/<?php echo $values['id'];?>" method="post"  class="row">
            
              <div class="form-group col-md-4">
                <label class="control-label">Mã đơn hàng </label>
                <input readonly="readonly" class="form-control" type="text" name="id" value="<?php  echo $values['id'];?>" >
                </td>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Mã khách hàng</label>
                <input class="form-control" readonly type="text" name="id_user" value="<?php  echo $values['id_user'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tên người nhận</label>
                <input class="form-control"  type="text" name="name_customer" value="<?php  echo $values['name_customer'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tổng tiền</label>
                <input class="form-control" readonly type="text" name="total_money" value="<?php  echo $values['total_money'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control"  type="text" name="phone_number" value="<?php  echo $values['phone_number'];?>" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ nhận hàng</label>
                <input class="form-control"  type="text" name="address_shipping" value="<?php  echo $values['address_shipping'];?>" >
              </div>
             
              <div class="form-group col-md-4">
                <label class="control-label">note</label>
                <input  class="form-control" type="text" name="note" value="<?php echo $values['note']; ?>" >
                
              </div>
              
              <div class="form-group col-md-4">
              
                <td> <label class="control-label">Tình trạng đơn hàng </label></td>
                <br>
                <select class="form-control" name="dropdown" >
                    
                <option value="Đợi xác nhận" selected>Đợi xác nhận</option>
                <option value="Đã xác nhận">Đã xác nhận </option>
                <option value="Đang chuẩn bị hàng">Đang chuẩn bị hàng</option>
                <option value="Đang giao hàng" >Đang giao hàng </option>
                <option value="Đã giao và đã thanh toán" >Đã giao và đã thanh toán  </option>
                <option value="Đã giao chưa thanh toán " >Đã giao chưa thanh toán  </option>
                <option value="Đã huỷ">Đã huỷ </option>
                    </select>
              
              
               
                
              </div>
             
              
                    <?php
                    }
                    ?>


          </div>
          <button class="btn btn-save" type="submit" name="btn_update"  >Cập nhật</button>

          <a class="btn btn-cancel" href="Admin_oder/show">Hủy bỏ</a>
          </form>
        </div>

</div>


  

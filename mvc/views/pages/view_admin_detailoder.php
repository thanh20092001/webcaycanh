<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb ">
      <li  class="breadcrumb-item"><a href ="./Admin_oder/show">Danh sách đơn hàng</a></li>
        <li class="breadcrumb-item"><a href ="#">Danh sách chi tiết đơn hàng</a></li>
      </ul>
      <div id="clock"></div>
    </div>
   
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
          <div class="col-sm-2">

        
   </div> 
      
      </div>

       <div class="row">
        <div class="col-sm-12">

            
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr >
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>ID </th>
                  <th width="100">Mã đơn hàng</th>
                  <th width="150"> Tên sản phẩm</th>
                  <th >Số lượng </th>
                  <th>Đơn giá</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php 
                  foreach($data['oder_detail'] as $k=>$values){
                    ?>
                <tr >
                  
                  
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $values['id'] ?></td>
                  <td><?php echo $values['order_id'] ?></td>
                  <td><?php echo $values['name'] ?></td>
                  <td><?php echo $values['quantity'] ?></td>
                  <td><?php echo $values['price'] ?></td>

                  
                  
                  
                  
                  
                  
                 
                </tr>
               
                <?php
                  }
                  ?>

              </tbody>
            </table>
          </div>
          </div>
          
      </div>
      </div>
      </div>
    </div>
    </div>
  </main>

  <!--
  MODAL
-->
  <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Chỉnh sửa thông tin người dùng</h5>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="control-label">ID </label>
              <input class="form-control" type="text" required value="#CD2187" disabled>
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">name</label>
              <input class="form-control" type="text" required value="Võ Trường">
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Email</label>
              <input class="form-control" type="text" required value="09267312388">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">SĐT</label>
              <input class="form-control" type="number" required value="012324">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" type="Text" value="bắc giang">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Ngày cập nhập</label>
              <input class="form-control" type="date" value="bắc giang">
            </div>
            
          </div>
          <BR>
          <a href="#" style="    float: right;
        font-weight: 600;
        color: #ea0000;"></a>
          <BR>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
  MODAL
-->
 
  <!--
  MODAL
-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 
  
  <!-- The javascript plugin to display page loading on top-->
 
  <!-- Page specific javascripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="./public/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="./public/js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
<script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function () {
      jQuery(".trash").click(function () {
        swal({
          title: "Cảnh báo",
         
          text: "Bạn có chắc chắn là muốn xóa nhân viên này?",
          buttons: ["Hủy bỏ", "Đồng ý"],
        })
          .then((willDelete) => {
            if (willDelete) {
              swal("Đã xóa thành công.!", {
                
              });
            }
          });
      });
    });
    oTable = $('#sampleTable').dataTable();
    $('#all').click(function (e) {
      $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
      e.stopImmediatePropagation();
    });

    $("#show-emp").on("click", function () {
      $("#ModalUP").modal({ backdrop: false, keyboard: false })
    });
</script>
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
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
                  <th width="70">Mã khách hàng</th>
                  <th width="100">Tên người nhận</th>
                  <th >Tổng tiền</th>
                  <th>SĐT</th>
                  <th width="150">Địa chỉ</th>
                  
                  
                  <th>Note</th>
                  <th>Ngày đặt</th>
                  <th>Ngày cập nhập</th>
                  <th>Tình trạng đơn hàng</th>
                  <th width="140">Tính năng</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  foreach($data['oder'] as $k=>$values){
                    ?>
                <tr >
                  
                  
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $values['id'] ?></td>
                  <td><?php echo $values['id_user'] ?></td>
                  <td><?php echo $values['name_customer'] ?></td>
                  <td><?php echo $values['total_money'] ?></td>

                  <td><?php echo $values['phone_number'] ?></td> 
                  <td><?php echo $values['address_shipping'] ?></td> 
                  
                  <td><?php echo $values['note'] ?></td>
                  <td><?php echo $values['oder_date'] ?></td>
                  
                  <td><?php echo $values['update_date'] ?></td>
                  <td><?php echo $values['status'] ?></td>
                  
                  <td class="table-td-center">
                  <a href="http://localhost/PHPMVC/Admin_oder/show_detail/<?php echo $values['id'] ?>" class="btn btn-primary btn-sm trash" type="button" title="xem" id="show-emp"
                     ><i class="fas fa-eye"></i>
                   </a>
                      <a href ="http://localhost/PHPMVC/Admin_oder/update/<?php echo $values['id']?>" class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                     ><i class="fas fa-edit"></i>
                    </a>
                    <a href="http://localhost/PHPMVC/Admin_oder/delete_oder/<?php echo $values['id'] ?>" class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                    onclick="return confirm(' bạn có muốn xoá đơn hàng này không?');"><i class="fas fa-trash-alt"></i>
                    </a>
                   
                    
                    
                    </td>
                  
                  
                  
                 
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
<!-- <script>
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
</script>-->
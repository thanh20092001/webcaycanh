<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách người dùng</b></a></li>
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
                  <th width="150">name</th>
                  <th width="300">email</th>
                  <th>SĐT</th>
                  <th>Địa chỉ</th>
                  <th>Phân quyền</th>
                  <th>Ngày tạo</th>
                  <th>Ngày cập nhập</th>
                  <th>trạng thái </th>
                  <th width="100">Tính năng</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  foreach($data['user'] as $k=>$values){
                    ?>
                <tr >
                  
                  
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $values['id'] ?></td>
                  <td><?php echo $values['name'] ?></td> 
                  <td><?php echo $values['email'] ?></td> 
                  <td><?php echo $values['phone_number'] ?></td>
                  <td><?php echo $values['address'] ?></td>
                  <td><?php 
                  if($values["role"]==0) {
                    echo "User";
                  }
                  if($values["role"]==1) {
                    echo "Admin";
                  }
                  ?></td>
                  <td><?php echo $values['created_date'] ?></td>
                  <td><?php echo $values['update_date'] ?></td>
                  <td><?php 
                  if($values["status"]==0) {
                    echo "Lock";
                  }
                  if($values["status"]==1) {
                    echo "Nomal";
                  }
                  ?></td>
                  
                  <td class="table-td-center"><a href="Admin_user/delete/<?= $values['id']?>" class="btn btn-primary btn-sm trash" type="submit" title="Xóa"
                  onclick="return confirm(' bạn có muốn xoá sản phẩm này không?');"><i class="fas fa-trash-alt"></i>
                    </a>
                    <a class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                    href="Admin_user/update/<?= $values['id']?>"><i class="fas fa-edit"></i>
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

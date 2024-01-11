<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh mục sản phẩm</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
          <div class="col-sm-2">

          <a class="btn btn-add btn-sm" href="Admin_category/insert_category" title="Thêm"><i class="fas fa-plus"></i>
        Thêm danh mục</a>
   </div>
    
          
      
      
   </div>
       <div class="row">
        <div class="col-sm-12">

                
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>Mã danh mục </th>
                  <th width="150">Tên danh mục</th>

                  <th width="500">mô tả </th>
                  <th>Ngày tạo</th> 
                  <th>Ngày cập nhật</th>
                  
                  <th width="100">Tính năng</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  foreach($data['category'] as $k=>$values){
                    ?> 
                <tr>
                  
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>
                    <?php echo $values['id'] ?>
                  </td>
                  <td><?php echo $values['name'] ?></td>
                  <td><?php echo $values['description'] ?></td>
                  <td><?php echo $values['created_date'] ?></td>
                  <td><?php echo $values['update_date'] ?> </td>
                  
                  
                  <td class="table-td-center">
                    <a class="btn btn-primary btn-sm trash"
                     onclick="return confirm(' bạn có muốn xoá danh mục này không?');"
                      href="http://localhost/PHPMVC/Admin_category/delete/<?php echo $values['id'] ?>" 
                       type="submit" name="btn_delete" title="Xóa">
                       <i class="fas fa-trash-alt"></i>
                    </a>
                    <a  class="btn btn-primary btn-sm edit"
                     href="http://localhost/PHPMVC/Admin_category/update/<?php echo $values['id'] ?>" 
                      type="submit" title="Sửa" id="show-emp"
                     ><i class="fas fa-edit"></i>
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

 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 
  
  <!-- The javascript plugin to display page loading on top-->
 
  <!-- Page specific javascripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="./public/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="./public/js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>


<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách banner</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
          <div class="col-sm-2">

          <a class="btn btn-add btn-sm" href="Admin_banner/insert_banner" title="Thêm"><i class="fas fa-plus"></i>
              Thêm ảnh</a>
      </div>
    </div>
       <div class="row">
        <div class="col-sm-12">
       
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr >
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>id </th>
                
                  <th >Hình ảnh</th>
                  
                  
                  <th>Ngày tạo</th>
                  <th>Ngày cập nhật</th>
                  
                  <th width="100">Tính năng</th>
                </tr>
              </thead>
              <tbody >
              <?php
                  foreach($data['banner'] as $k=>$values){
                  ?>
                <tr >
                  
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $values["id"] ?></td>
                  
                  
                  
                  <td><img src="./public/img_banner/<?php echo $values["image"]; ?>" width="100" height="100"> </td> 
                 
                  
                  <td><?php echo $values["created_date"] ?></td>
                  <td><?php echo $values["update_date"] ?></td>
                  
                  <td class="table-td-center">
                    <a class="btn btn-primary btn-sm trash" type="submit" title="Xóa" name="btn_delete"
                    onclick="return confirm(' bạn có muốn xoá sản phẩm này không?');"
                    href="http://localhost/PHPMVC/Admin_banner/delete/<?php echo $values['id'] ?>" >
                    <i class="fas fa-trash-alt"></i>
                    </a>
                    <a class="btn btn-primary btn-sm edit" type="submit" title="Sửa" id="show-emp"
                    href="http://localhost/PHPMVC/Admin_banner/update/<?php echo $values['id'] ?>" 
                      ><i class="fas fa-edit"></i>
                    </a>
                  </td>
                  <?php
                  }
                  ?>
                </tr>
               

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
 
-->
  

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 
  
  <!-- The javascript plugin to display page loading on top-->
 
  <!-- Page specific javascripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="./public/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="./public/js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>

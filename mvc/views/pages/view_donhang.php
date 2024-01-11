<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Đơn mua</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Đơn mua</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="pages cart-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive padding60">
					<table class="wishlist-table text-center" id="dxd">
                    <div class="container2">
                    <thead>
                <tr >
                  
                  <th>Mã đơn hàng </th>
                  <th width="100">Mã khách hàng</th>
                  <th width="150">Tên người nhận</th>
                  <th >Tổng tiền</th>
                  <th>SĐT</th>
                  <th width="200">Địa chỉ</th>
                  
                  
                  <th>Note</th>
                  <th>Ngày đặt</th>
                  <th>Tình trạng đơn hàng</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              if($data["donmua"] !=null){

             
                  foreach($data['donmua'] as $k=>$values){
                    ?>
                <tr >
                  
                  
                <td><?php echo $values['id'] ?></td>
                  <td><?php echo $values['id_user'] ?></td>
                  <td><?php echo $values['name_customer'] ?></td>
                  <td><?php echo $values['total_money'] ?></td>

                  <td><?php echo $values['phone_number'] ?></td> 
                  <td><?php echo $values['address_shipping'] ?></td> 
                  
                  <td><?php echo $values['note'] ?></td>
                  <td><?php echo $values['oder_date'] ?></td>
                  
                 
                  <td><?php echo $values['status'] ?></td>

                  
                  
                  
                  
                  
                  
                 
                </tr>
               
                <?php
                  }
                }else{

               
                  ?>
                  <h2>bạn chưa mua đơn hàng nào </h2>
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
</section>
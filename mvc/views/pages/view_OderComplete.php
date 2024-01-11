<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Order Complete</h2>
					<ul class="text-left">
						<li><a href="http://localhost/PHPMVC/Home/show">Trang chủ</a></li>
						<li><span> // </span>HOÀN THÀNH ĐƠN HÀNG</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- order-complete content section start -->
<section class="pages checkout order-complete section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="complete-title">
					<p>Cảm ơn bạn. Đơn đặt hàng của bạn đã được nhận; Đã nhận được đơn đặt hàng của bạn.</p>
					<p>chúng tôi sẽ giao hàng trong vài ngày tới, vui lòng chuẩn bị tiền mặt và để ý điện thoại gọi đến </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>ĐƠN ĐẶT HÀNG CỦA BẠN</strong></h3>
					</div>
					<div class="cart-form-text pay-details">
						<table>
							<thead>
								<tr>
									<th>Sản Phẩm</th>
                                    <td>Số lượng </td>
									<td>Đơn giá</td>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ($data['bill'] as $kt=>$value) { ?>
										<tr>
											<th><?= $value['name'] ?></th>
                                            <td><?= $value['quantity']?> VNĐ</td>
											<td><?=  $value['price']?> VNĐ</td>
										</tr>
								<?php }
								 ?>
								
							</tbody>
							<tfoot>
								<tr>
									<th>Thành tiền</th>
                                    <td></td>
                                    
									

									<td><?php echo  $value['total_money']?> VNĐ</td>
                                    
								 
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="order-details padding60">
					<div class="log-title">
						<h3><strong>ĐỊA CHỈ GIAO HÀNG</strong></h3>
					</div>
					<div class="por-dse clearfix">
                        <?php 
                        foreach($data['customer'] as $kt =>$values){
                        ?>
						<ul>
							<li><span>Tên KH<strong>: </strong></span> <?php echo $values['name_customer']?></li>
							<li><span>SĐT<strong>: </strong></span> <?php echo $values['phone_number']?></li>
							<li><span>Địa chỉ<strong>: </strong></span> <?php echo $values['address_shipping']?></li>
						</ul>
                       <?php
                       } ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- order-complete content section end -->
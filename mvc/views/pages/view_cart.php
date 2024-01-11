<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giỏ Hàng</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Giỏ Hàng</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- cart content section start -->
<section class="pages cart-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive padding60">
					<table class="wishlist-table text-center" id="dxd">
						<thead>
							<tr>
								<th>Sản phẩm</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(isset($_SESSION['cart'])){

							
								foreach ($_SESSION['cart'] as $kt => $value) { ?>
									<tr>
										<td class="td-img text-left">
											<a href="http://localhost/PHPMVC/detail_product/show/<?php echo $value['id'] ?>"><img src="./public/img-sanpham/<?= $value['image'] ?>" alt="Add Product" /></a>
											<div class="items-dsc">
												<h5><a href="http://localhost/PHPMVC/detail_product/show/<?php echo $value['id'] ?>"><?= $value['name'] ?></a></h5>
											</div>
										</td>
										<td><?= number_format($value['export_price']) ?> VNĐ</td>
										<td>
											<form action="" method="POST">
												<div class="plus-minus">
													<a href="http://localhost/PHPMVC/Cart/delete/<?=$value['id']?>" name="delete" class="dec qtybutton" type="button">-</a>
													<b class="plus-minus-box"><?= $value['qty'] ?></b>
													<a href="http://localhost/PHPMVC/Cart/insert/<?=$value['id']?>" name="insert" class="inc qtybutton" type="button">+</a>
												</div>
											</form>
										</td>
										<td>
											<strong><?= number_format($value['Thanhtien']) ?> VNĐ</strong>
										</td>
										<td><a href="http://localhost/PHPMVC/Cart/delete_all/<?= $value['id'] ?>"><i class="mdi mdi-close" title="Remove this product"></i></a></td>
									</tr>
							<?php 
							}
						}
						
							 ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row margin-top" >
			<div class="col-sm-6" >
				<div class="single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Chi tiết thanh toán</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<form action="checkout/show" method="post" id="form1">
							<table>
								<tbody>
									<tr>
										<th>Tổng Giỏ Hàng</th>
										<td><input type="text" style="border: none; text-align: right;" value="<?php echo number_format($data["total_price"]) ?>">VNĐ </td>
									</tr>
									<tr>
										<th>Giảm giá</th>
										<td><input type="text" name="code" style="border: none; text-align: right;" value="<?php
							if(isset($_SESSION['coupon'])){
								
								
									echo  $_SESSION['coupon']['discount'] ;echo'%';
								
								
							}
							else{
								echo'0%';
							}
							?>">
											</td>
									</tr>
									<tr>
										<th>Vận Chuyển</th>
										<td>0 VNĐ</td>
									</tr>
									
								</tbody>
								<tfoot>
									<tr>
										<?php
										if(isset($_SESSION['coupon'])){?>
											<th class="tfoot-padd">Tổng tiền</th>
										<td class="tfoot-padd"><input name ="total"type="text" style="border: none; text-align: right;" value="<?=number_format(($data["total_price"]+0)-($data["total_price"]+0)*$_SESSION['coupon']['discount']/100 )?>"> VNĐ</td>
<?php
										}else{?>
										<th class="tfoot-padd">Tổng tiền</th>
										<td class="tfoot-padd"><input name ="total"type="text" style="border: none; text-align: right;" value="<?=number_format(($data["total_price"]+0))?>"> VNĐ</td>

									<?php	}
										?>
										
									</tr>
								</tfoot>
							</table>
							<div class="submit-text coupon" style="text-align:center" >
								<a href ="http://localhost/PHPMVC/Checkout/show" type="submit">Đặt hàng</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Mã giảm giá</strong></h3> 
					</div>
					<div class="cart-form-text custom-input">
						<p>Nhập mã giảm giá nếu bạn có !</p>
						<form action="Cart/getdiscount" method="post" id="form2">
							<input type="text" name="code" placeholder="Nhập mã tại đây..."required />
							<div class="submit-text coupon">
								<button type="submit" name='submit' form="form2">Áp dụng</button>
							</div>
							<?php
							if(isset($_SESSION['coupon'])!=null){
								
									echo'giảm';	echo $_SESSION['coupon']['discount']  ; echo'%';
								
								
							}
							else{echo'';
								
							}
							?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- cart content section end -->
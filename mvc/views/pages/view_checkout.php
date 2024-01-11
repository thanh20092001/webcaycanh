<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Đặt hàng</h2>
					<ul class="text-left">
						<li><a href="http://localhost/PHPMVC/Home">Trang chủ</a></li>
						<li><span> // </span>Đặt hàng</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- Checkout content section start -->
<section class="pages checkout section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="main-input single-cart-form padding60">
					<div class="log-title">
						<h3><strong>thông tin người nhận</strong></h3>
					</div>
					<div class="custom-input">
						<form action="Checkout/save" method="post">
                            <input type="hidden" readonly name="id_user" placeholder="Người nhận" required value="<?php echo $_SESSION['login']['id'] ?>"/>
							<input type="text" name="name_customer" placeholder="Tên người nhận ........" required />
							<input type="text" name="phone_number" placeholder="Số điện thoại người nhận...." required pattern="[0-9]+" length="11"  />
							<input type="text" name="note" placeholder="Lưu ý cho người bán "   />
							<input type="text" name="address_shipping" placeholder="Đại chỉ giao hàng" required  />

							<?php
									if(isset($_SESSION['coupon']))
									{?>
									<td><input name ="total" type="hidden" style="border: none; text-align: right;    width: 74px; " value="<?= number_format(($data["total_price"] + 0)- ($data["total_price"] + 0)*$_SESSION['coupon']['discount']/100) ?>"> </td>
									<?php
									}else{?>
									<td><input name ="total" type="hidden" style="border: none; text-align: right;    width: 74px; " value="<?= number_format(($data["total_price"] + 0)) ?>"> </td>
								<?php
									}
									?>
							</br>
							<div class="submit-text">
								<button type="submit" name ="checkout">Đặt hàng</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Hóa đơn</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<table>
							<thead>
								<tr>
									<th>Sản phẩm</th>
                                    <td>Số lượng</td>
									<td>Đơn giá</td>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_SESSION['cart'])) {
									foreach ($_SESSION['cart'] as $value) { ?>
								<tr>
									<th><?=$value['name']?></th>
                                    <td><?=$value['qty']?></td>
									<td><?=number_format($value['export_price'])?> VNĐ</td>
								</tr>
						<?php }
								} ?>
						
						<tr>
							<th>Vận Chuyển</th>
                            <td></td>
							<td>0 VNĐ</td>
						</tr>
                        <tr>
							<th>khuyến mãi</th>
                            <td></td>
							<?php
							if(isset($_SESSION['coupon'])){?>

								<td><?= $_SESSION['coupon']['discount']?>%</td>
						<?php	}
							else{
								echo'<td>0%</td>';
							}
							?>
							
						</tr>
						
							</tbody>
							<tfoot>
								<tr>
									<th>Thành tiền</th>
                                    <td></td>
									<?php
									if(isset($_SESSION['coupon']))
									{?>
									<td><input name ="total" type="text" style="border: none; text-align: right;    width: 74px; " value="<?= number_format(($data["total_price"] + 0)- ($data["total_price"] + 0)*$_SESSION['coupon']['discount']/100) ?>"> VNĐ</td>
									<?php
									}else{?>
									<td><input name ="total" type="text" style="border: none; text-align: right;    width: 74px; " value="<?= number_format(($data["total_price"] + 0)) ?>"> VNĐ</td>
								<?php
									}
									?>
									
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Checkout content section end -->
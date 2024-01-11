<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thông tin tài khoản</h2>
					<ul class="text-left">
						<li><a href="index.php?act=home">Trang chủ</a></li>
						<li><span> // </span>Tài khoản</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- My account content section start -->
<section class="pages my-account-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Tài khoản của tôi</strong></h3>
					</div>
					<div class="prament-area main-input" id="doitk">
						<ul class="panel-group" id="accordion">
							<li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
									<label>
										<input type="radio" checked value="forever" name="rememberme" />
										Thông tin cá nhân
									</label>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="single-log-info">
										<div class="bulling-title">
											<b>
												
											</b>
											<div class="custom-input">
												<form action="Account/update" method="post">
													<div class="row">
														<div class="col-md-6">
															<input type="text" name="name" placeholder="name" required value="<?=$_SESSION['login']['name']?>" />
														</div>
														<div class="col-md-6">
															<input type="text" name="email" placeholder="email.." required value="<?=$_SESSION['login']['email']?>" />
														</div>
													</div>
													
													
													<input type="text" name="SĐT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" value="<?=$_SESSION['login']['phone_number']?>" />
													<input type="text" name="DiaChi" placeholder="Địa chỉ.." required value="<?=$_SESSION['login']['address']?>" />
													<div class="submit-text">
														<button type="submit_tt" name="btn_save">Lưu</button>
													</div>
												</form>
											</div>
										</div>
									</div>
							</li>
							<li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
									<label>
										<input type="radio" value="forever" name="rememberme" />
										Đổi mật khẩu
									</label>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="single-log-info">
										<div class="custom-input">
											<form action="Account/update1" method="post" id="2">
                                            <input type="text" hidden name="name" placeholder="name" required value="<?=$_SESSION['login']['name']?>" />
												<input type="password" placeholder="Mật khẩu hiện tại .. " name="MatKhau" minlength="6" required />
												<input type="password" placeholder="Mật khẩu mới .. " name="MatKhauMoi" />
												
												<div class="submit-text text-left">
													<button type="submit_pw" name="submit ">Lưu</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- my account content section end -->
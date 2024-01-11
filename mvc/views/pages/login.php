
	<style>
	.error-message {
            color: red;
            font-size: 14px;
            display: none;
        }
    </style>
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Đăng nhập</h2>
					<ul class="text-left">
						<li><a href="./Home/show">Trang chủ</a></li>
						<li><span> // </span>Đăng nhập</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding" >
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="main-input padding60" id="dangnhap">
					<div class="log-title">
						<h3><strong>Khách hàng đã đăng ký</strong></h3>
					</div>
					<div class="login-text">
						<div class="custom-input">
							<p>Nếu bạn đã có tài khoản, vui lòng đăng nhập!</p>
							<?php
							if(isset($data['false'])){
								echo"<div style='color:red;'>{$data['false']}</div>";
							}
							?>

							
								
							
							<form action="Login/login" method="post" id="form1">
								<input type="text" name="name" placeholder="username" />
								<?php
							if(isset($data['error']['name'])){
								echo"<div style='color:red;'>{$data['error']['name']}</div>";
							}
							?>
								<input type="password" name="password" placeholder="password" />
								<?php
							if(isset($data['error']['password'])){
								echo"<div style='color:red;'>{$data['error']['password']}</div>";
							}
							?>
								<a class="forget" href="#">Quên mật khẩu?</a>
								<div class="submit-text">
									<button  name="submit" type="submit" form="form1">Đăng nhập</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div> 
			<div class="col-sm-6">
				<div class="main-input padding60 new-customer" id="dangky">
					<div class="log-title">
						<h3><strong>Đăng Kí Khách Hàng Mới</strong></h3>
						<?php
							if(isset($data['success'])){
								echo"<div style='color:blue;'>{$data['success']}</div>";
							}
							?>
					</div>
					
					<div class="custom-input">
						<form action="Login/dangky" method="post" id="form2">
							<input type="text" name="name" placeholder="username........" required />
							<?php
							if(isset($data['errors']['name'])){
								echo"<div style='color:red;'>{$data['errors']['name']}</div>";
							}
							?>
							<input type="email" name="email" placeholder="Email.." required  />
							<?php
							if(isset($data['errors']['email'])){
								echo"<div style='color:red;'>{$data['errors']['email']}</div>";
							}
							?>
							<input type="text" name="phone_number" placeholder="phone_number......." required />
							<?php
							if(isset($data['errors']['phone_number'])){
								echo"<div style='color:red;'>{$data['errors']['phone_number']}</div>";
							}
							?>
                            <input type="text" name="address" placeholder="address...." required />
							<?php
							if(isset($data['errors']['address'])){
								echo"<div style='color:red;'>{$data['errors']['address']}</div>";
							}
							?>
							<input type="password" name="password" placeholder="password......" minlength="6" required />
							<?php
							if(isset($data['errors']['password'])){
								echo"<div style='color:red;'>{$data['errors']['password']}</div>";
							}
							?>
							
							<div class="submit-text coupon">
								<button type="submit" name="dangky" form="form2">Đăng ký</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- login content section end -->

<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Contact Us</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<section class="pages cart-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive padding60">
					<table class="wishlist-table text-center" id="dxd">
                    <?php
							if(isset($data['success'])){
								echo"<div style='color:blue;'>{$data['success']}</div>";
							}
							?>
                    <div class="container2">
                    <form action="./Contact/sendMail" method="post">
                        <label for="fname">Username</label>
                        <input type="text" id="name" name="name" placeholder="username..." required>
 
                         <label for="lname">Email</label>
                        <input type="text" id="email" name="email" placeholder="email..." required>
 
                        <label for="country">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder=" Subject..." required>
 
                        <label for="address">Message</label>
                        <textarea type="text" id="address" name="message" placeholder="write the message" required></textarea>
 
                        <button type="submit" value="Submit" name = "btn_send">Send</button>
                    </form>
					</table>
                    </div>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- cart content section end -->
<style>
    .container2 {
    
    margin: auto;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
    input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
textarea[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
 
button[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
 
button[type=submit]:hover {
    background-color: #45a049;
}
</style>
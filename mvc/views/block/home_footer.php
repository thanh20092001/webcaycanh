<footer class="footer-two">
    <!-- footer-top area start -->
    <div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Liên hệ</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p>Nguyễn Thị Tâm Thanh</p>
                                        <p>Trường đại học lao động xã hội</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>(+84) 0335109323</p>
                                        
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>tamthanh20092001@gmail.com</p>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="?act=taikhoan&xuli=account"><i class="mdi mdi-menu-right"></i>Tài khoản</a></li>
                                    <li><a href="?act=cart"><i class="mdi mdi-menu-right"></i>Giỏ Hàng</a></li>
                                    <li><a href="?act=taikhoan"><i class="mdi mdi-menu-right"></i>Đăng Nhập</a></li>
                                    <li><a href="?act=checkout"><i class="mdi mdi-menu-right"></i>Thanh Toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Danh mục sản phẩm</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php foreach ($data['category'] as $kt=>$values) { ?>
                                    <li><a href="http://lcalhost/shop/<?php echo $values['id']?>"><i class="mdi mdi-menu-right"></i><?=$values['name']?></a></li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 r-margin-top wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Mạng xã hội</h4>
                            </div>
                            <div class="clearfix instagram">
                                <ul>
                                    <li><a href="#"><img src="./public/img_footer/in1.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="./public/img_footer/in2.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="./public/img_footer/in3.png" alt="Instagram" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <a href="https://www.nganluong.vn/vn/home.html" target="_blank"><img src="./public/img_footer/payment.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area end -->
</footer>
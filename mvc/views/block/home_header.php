<header class="header-one header-two">
    <div class="header-top-two">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="middel-top">
                        <div class="left floatleft">
                           
                        </div>
                    </div>
                    <div class="middel-top clearfix">
                        <ul class="clearfix right floatright">
                            <li>
                                <a><i class="mdi mdi-account"></i></a>
                                <ul>
                                    <?php  if(isset($_SESSION['login'])){ ?>
                                    <li><b>Chào <?=$_SESSION['login']['name']?> </b></li>
                                    <li><a href="http://localhost/PHPMVC/Account">Tài khoản</a></li>
                                    <li><a href="http://localhost/PHPMVC/Login/logout">Đăng xuất</a></li>
                                    <?php
                                        if(isset($_SESSION['is_Admin']) ){ ?>
                                        <li><a href="http://localhost/PHPMVC/Admin">Trang quản lý</a></li>
                                  <?php }}else{ ?>
                                    <li><b>Khách hàng</b></li>
                                    <li><a href="http://localhost/PHPMVC/Login">Đăng nhập</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                        <div class="right floatright widthfull">
                            <form action="Shop/search" method="post">
                                <button type="submit" name="search"><i class="mdi mdi-magnify"></i></button>
                                <input type="text" placeholder="Tìm kiếm..." name="keyword"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="http://localhost/PHPMVC/Home"><img src="./public/images/logoshop.png" alt="Treeshop" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="header-middel">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="http://localhost/PHPMVC/Home">Trang chủ</a></li>
                                <li><a href="http://localhost/PHPMVC/Shop">Cửa Hàng</a>
                                    <ul class="magamenu">
                                        <li class="banner"></li>
                                        <?php     foreach ($data['category'] as $k=>$values) { ?>
                                            <li>
                                                <a href=""><h5><?php echo $values['name'] ?></h5></a>
                                                
                                            </li>
                                        <?php  } ?>
                                        <li class="banner"></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://localhost/PHPMVC/Checkout">Thanh Toán</a>
                                </li>
                                <li><a href="http://localhost/PHPMVC/Donmua">Đơn mua</a></li>
                                <li><a href="http://localhost/PHPMVC/Contact">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="http://localhost/PHPMVC/Home">Trang chủ</a>
                                    </li>
                                    <li><a href="http://localhost/PHPMVC/Shop">Cửa hàng</a>
                                        <ul>
                                        <?php     foreach ($data['category'] as $k=>$values) { ?>
                                            <li>
                                                <a href=""><h5><?php echo $values['name'] ?></h5></a>
                                                
                                            </li>
                                        <?php  } ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="http://localhost/PHPMVC/Checkout">Thanh Toán</a>
                                    </li>
                                    <li><a href="http://localhost/PHPMVC/Intro"></a>Đơn hàng </li>
                                    <li><a href="http://localhost/PHPMVC/Contact">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="cart-itmes">
                    <a class="cart-itme-a" href="http://localhost/PHPMVC/Cart">
                        <?php 
                            $soluong = 0;
                            $thanhtien = 0;
                            if(isset($_SESSION['cart'])){
                            foreach ($_SESSION['cart'] as$kt=> $value) {
                                $soluong +=1;
                                $thanhtien +=$value['Thanhtien'];
                            }}
                        ?>
                        <i  class="mdi mdi-cart"></i>
                       <strong> <?=$soluong?> SP : <strong><?=number_format($thanhtien)?> VNĐ</strong>
                    </a>
                    <div class="cartdrop">
                        <?php if(isset($_SESSION['cart'])){
                            foreach ($_SESSION['cart'] as $kt => $value) { ?>
                        <div class="sin-itme clearfix">
                        <a href="http://localhost/PHPMVC/Cart/delete<?= $value['id'] ?>"><i class="mdi mdi-close" title="Remove this product"></i></a>
                            <a class="cart-img" href="./Detail_product/<?= $value['id']?>"><img src="./public/img-sanpham/<?=$value['image']?>" alt="" /></a>
                            <div class="menu-cart-text">
                                <a href="http://localhost/PHPMVC/Deltail_product/show/<?=$value['id']?>">
                                    <h5><?=$value['name']?></h5>
                                </a>
                                <b>Số lượng: <?=$value['qty']?></b>
                                <strong><?=number_format($value['Thanhtien'])?> VNĐ</strong>
                            </div>
                        </div>
                            <?php }} ?>
                        <div class="total">
                            <span>Tổng <strong>= <?=number_format($thanhtien)?> VNĐ</strong></span>
                        </div>
                        <a class="goto" href="http://localhost/PHPMVC/Cart">Đến giỏ hàng</a>
                        <a class="out-menu" href="http://localhost/PHPMVC/Checkout">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
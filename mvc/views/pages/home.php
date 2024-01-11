<!-- banner-start -->
<div class="main-slider-one main-slider-two slider-area">
    <div id="wrapper">
        <div class="slider-wrapper">
            <div id="mainSlider" class="nivoSlider">
                <?php  foreach ($data['banner'] as $k=>$values) {  ?>
                <img src="./public/img_banner/<?php echo $values['image']?>" alt="main slider" title="#htmlcaption" />
                <?php } ?>
            </div>
            <div id="htmlcaption" class="nivo-html-caption slider-caption">
                <div class="container">
                    <div class="slider-left slider-right">
                        <div class="slide-text animated zoomInUp">
                            <h3>Cây đẹp giống tốt  </h3>
                            <hr>
                            <h1>Free ship</h1>
                        </div>
                        <div class="animated slider-btn fadeInUpBig">
                            <a class="shop-btn" href="http://localhost/PHPMVC/Shop">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>							
    </div>
</div>
<!-- banner-end -->
<!-- tab-products section start -->
<div class="tab-products single-products section-padding extra-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <div class="product-tab nav nav-tabs">
                        <ul>
                            <li class="active"><a data-toggle="tab" href="#arrival">  <span>BẢO HÀNH CÂY TRỌN ĐỜI </span></a></li>
                            <li><a data-toggle="tab" href="#popular"><span></span></a></li>
                            <li><a data-toggle="tab" href="#best"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center tab-content">
            <div class="tab-pane  fade in active" id="arrival">
                <div class="wrapper">
                    <ul class="load-list load-list-two">
                        
                        <li>
                            <div class="row text-center">
                        <?php 
                            foreach($data['product1'] as $kt=>$values) {
                                ?>
                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-f">
                                                <a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id'] ?>"><img src="./public/img-sanpham/<?php echo $values["image"]; ?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="http://localhost/PHPMVC/Cart/addtocart/<?php echo $values['id']?>"><i class="mdi mdi-cart"></i></a>
                                                    <a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>"><?php echo $values['name'] ?></a></p>
                                                <span><?= number_format($values['export_price']) ?> VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                        <?php }?>
                            </div>
                        </li>
                       
                        <li>
                            <div class="row text-center"><b><a href="http://localhost/Shop">Vào cửa hàng để xem nhiều hơn!</a></b></div>
                        </li>
                    </ul>
                    <button id="load-more-two">Tải thêm</button>
                </div>
            </div>
            <!-- arrival product end -->
            <div class="tab-pane fade" id="popular">
                <div class="wrapper">
                    <ul class="load-list load-list-three">
                        
                        <li>
                            <div class="row text-center"> 
                        <?php 
                            foreach($data['product2'] as $kt=>$values) {
                                ?>
                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-f">
                                                <a href="http://localhost/PHPMVC/Detail_product/show/<?php echo $values['id']?>"><img src="./public/img-sanpham/<?php echo $values['image']?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="http://localhost/PHPMVC/Cart/addtocart/<?php echo $values['id']?>"><i class="mdi mdi-cart"></i></a>
                                                    <a href="http://localhost/PHPMVC/Detail_product/show/<?php echo $values['id']?>" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="http://localhost/PHPMVC/Detail_product/show/<?php echo $values['id']?>"><?php echo $values['name'] ?></a></p>
                                                <span><?= number_format($values['export_price']) ?> VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                        <?php }?>
                            </div>
                        </li>
                       
                        <li>
                            <div class="row text-center"><b><a href="http://localhost/PHPMVC/Shop">Vào cửa hàng để xem nhiều hơn!</a></b></div>
                        </li>
                    </ul>
                    <button id="load-more-three">Tải thêm</button>
                </div>
            </div>
            <!-- popular product end -->
            <div class="tab-pane fade" id="best">
                <div class="wrapper">
                    <ul class="load-list load-list-four">
                      
                    <li>
                            <div class="row text-center">
                        <?php 
                            foreach($data['product3'] as $kt=>$values) {
                                ?>
                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-f">
                                                <a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>"><img src="./public/img-sanpham/<?php echo $values['image']?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="http://localhost/PHPMVC/Cart/addtocart/<?php echo $values['id']?>"><i class="mdi mdi-cart"></i></a>
                                                    <a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>"><?php echo $values['name'] ?></a></p>
                                                <span><?= number_format($values['export_price']) ?> VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                        <?php }?>
                            </div>
                        </li>
                        
                        <li>
                            <div class="row text-center"><b><a href="http://localhost/PHPMVC/Shop">Vào cửa hàng để xem nhiều hơn!</a></b></div>
                        </li>
                    </ul>
                    <button id="load-more-four">Tải thêm</button>
                </div>
            </div>
            <!-- popular product end -->
        </div>
    </div>
</div>
<!-- tab-products section end -->
<!-- collection section start -->
<section class="collection-area collection-area2 section-padding">
    <div class="container">
        
        <div class="row">
        <?php foreach($data['ProductRadom1'] as $kt=>$values){?>
        <div class="col-sm-4">
                <div class="single-colect banner collect-one">
                    <a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>"><img src="./public/img-sanpham/<?php echo $values['image']?>" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="colect-text ">
                    <h4><a href="#"><?php echo $values['name']?></a></h4>
                    <h5>Giá: <?= number_format($values['export_price']) ?> VNĐ</h5>
                    <a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>">Mua ngay <i class="mdi mdi-arrow-right"></i></a>
                </div>
                
            </div>
            <?php
        }
        ?>
           <?php foreach($data['ProductRadom2'] as $kt=>$values){?>
            <div class="col-sm-4">
                <div class="collect-img banner single-colect">
                <a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>"><img src="./public/img-sanpham/<?php echo $values['image']?>" alt="" /></a>
                </div>
                <div class="colect-text ">
                <h4><a href="#"><?php echo $values['name']?></a></h4>
                    <h5>Giá: <?= number_format($values['export_price']) ?> VNĐ</h5>
                    <a href="http://localhost/PHPMVC/Detail_product/showdetail/<?php echo $values['id']?>">Mua ngay <i class="mdi mdi-arrow-right"></i></a>
                </div>
            </div>
            <?php
        }
        ?>
           
        </div>
        
    </div>
</section>
<!-- collection section end -->
<!-- featured-products section start -->
<section class="single-products  products-two section-padding extra-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>CÂY MỚI VỀ </h2>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <ul class="load-list load-list-one">
                
                    <li>
                        <div class="row text-center">
                            <?php
                    
                                foreach ($data['newProduct'] as  $kt=>$values) { ?>
                                    <!-- single product end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-f">
                                                <a href="http://localhost/PHPMVC/Detail_product/show/<?php echo $values['id']?>"><img src="./public/img-sanpham/<?php echo $values['image']?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="http://localhost/PHPMVC/Cart/addtocart/<?php echo $values['id']?>"><i class="mdi mdi-cart"></i></a>
                                                    <a href="http://localhost/PHPMVC/Detail_product/show/<?php echo $values['id']?>" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="http://localhost/PHPMVC/Detail_product/show/<?php echo $values['id']?>"><?= $values['name'] ?></a></p>
                                                <span><?= number_format($values['export_price']) ?> VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                            <?php }
                             ?>
                        </div>
                    </li>
                <li></li>
            </ul>
            <button id="load-more-one">Tải thêm</button>
        </div>
    </div>
</section>
<!-- featured-products section end -->
<!-- quick view start -->

<!-- quick view end -->
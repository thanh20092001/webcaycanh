<!-- pages-title-start -->
<?php foreach($data['product_detail'] as $kt=>$values) { ?>
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2><?= $values['name'] ?></h2>
                        <ul class="text-left">
                            <li><a href="?act=home">Trang chủ</a></li>
                            <li><span> // </span><a href="http://localhost/PHPMVC/Shop">Cửa Hàng</a></li>
                            <li><span> // </span><?= $values['name'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- product-details-section-start -->
    <div class="product-details pages section-padding-top">
        <div class="container">
            <div class="row">
                <div class="single-list-view">
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div class="quick-image">
                            <div class="single-quick-image text-center">
                                <div class="list-img">
                                    <div class="product-f tab-content">
                                        <?php if ($values['image'] !=  null) { ?>
                                            <div >
                                                <a style="width:500px;heght: 500px;" class="simpleLens-image" data-lens-image="./public/img-sanpham/<?= $values['image'] ?>" href="#"><img src="./public/img-sanpham/<?= $values['image'] ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <div class="quick-right">
                            <div class="list-text">
                                <h3><?= $values['name'] ?></h3>
                               
                                <h5><?=number_format($values['export_price'])?> VNĐ</h5>
                               
                                    <p><?= $values['description'] ?></p>
                                
                                <div class="list-btn">
                                    <a href="http://localhost/PHPMVC/Cart/addtocart/<?=$values['id']?>">Thêm vào giỏ</a>
                                    <?php if ($values['category_id'] == 1) { ?>
                                    <a href="#info"></a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-product item end -->
            <!-- reviews area start 
            
            reviews area end -->
        </div>
    </div>
  <?php }?>
    <!-- product-details section end -->
    <!-- related-products section start -->
    <section class="single-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Sản phẩm tương tự</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <?php foreach ($data["data_lq"] as $kt=>$values) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-product">
                            <div class="product-f">
                                <a href="http://localhost/PHPMVC/Detail_product/show/<?= $values['id'] ?>"><img src="./public/img-sanpham/<?= $values['image'] ?>" alt="Product Title" class="img-products" /></a>
                                <div class="actions-btn">
                                    <a href="http://localhost/PHPMVC/Cart/addtocart/<?=$values['id']?>"><i class="mdi mdi-cart"></i></a>
                                    <a href="http://localhost/PHPMVC/Detail_product/show/<?= $values['id'] ?>" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-dsc">
                                <p><a href="http://localhost/PHPMVC/Detail_product/show/<?= $values['id'] ?>"><?= $values['name'] ?></a></p>
                                <span><?= number_format($values['export_price']) ?> VNĐ</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- single product end -->
            </div>
        </div>
    </section>

<!-- related-products section end -->
<!-- quick view start -->


<!-- quick view end -->
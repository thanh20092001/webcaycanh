<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Cửa hàng</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Cửa hàng</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- products-view content section start -->
<section class="pages products-page section-padding-bottom">
    <div class="container">
		<div class="row">
			<!-- Category-left -->
    <div class="col-xs-12 col-sm-4 col-md-3">
    <div class="sidebar left-sidebar">
     <div class="s-side-text">
        <div class="sidebar-title clearfix">
            <h4 class="floatleft">Danh mục</h4>
        </div>
        <div class="categories left-right-p">
            <ul id="accordion" class="panel-group clearfix">
                <?php  foreach ($data["category"] as $kt =>$values) { ?>
                    <li class="panel">
                        
                            <div class="medium-a">
                                <a href ="http://localhost/PHPMVC/Shop/show_list/<?= $values['id'] ?>"><?= $values['name'] ?></a>
                            </div>
                        
                       
                    </li>
                <?php 
             } ?>
            </ul>
        </div>
    </div>
  
    </div>
    </div>
    <!--product--right-->
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="right-products">
					<div class="row">
						<div class="col-xs-12">
							<div class="section-title clearfix">
								<ul><?php if ($data["product_all"] != null) {
											?>
									<li class="sort-by floatright">
                                        
                                       
                                        
										Số sản phẩm <?= $data["product_all"] ?>
									</li><?php } else{
										?>
										<li class="sort-by floatright">
                                        
                                       
                                        
										Số sản phẩm 0
									</li>
									<?php
									}
									?>

								</ul>
							</div>
						</div>
					</div>
					<div class="row">
                    <div class="tab-content grid-content">
	    <div class="tab-pane fade in active text-center" id="grid">
		<?php 
		if($data['product']!=null){
			
				foreach ($data['product'] as $kt=> $value) {		
		?>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="single-product">
				<div class="product-f">
					<a href="Detail_product/show/<?=$value['id']?>"><img src="./public/img-sanpham/<?=$value['image']?>" alt="Product Title" class="img-products"/></a>
					<div class="actions-btn">
						<a href="Cart/addtocart/<?=$value['id']?>"><i class="mdi mdi-cart"></i></a>
						<a href="Detail_product/show/<?=$value['id']?>" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>		
					</div>
				</div>
				<div class="product-dsc">
					<p><a href="Detail_product/show/<?=$value['id']?>"><?=$value['name']?></a></p>
					<div class="ratting">
						<?php
						if(($value['quantity']-$value['buy_qty'])>0){
							echo'<i ></i>';
						}
						else{
							echo'<i >HẾT HÀNG</i>';
						}
						?>
						
					</div>
					<span><?=number_format($value['export_price'])?> VNĐ</span>
				</div>
			</div>
		</div>
		<?php }}
		else
		{
			echo'<p> không có sản phẩm nào </p>';
		}
	?>
		<!-- single product end -->
	</div>
    </div>
					</div>
                    <!--product--right end-->
					<!--<div class="row">
						<div class="col-sm-12">
							<div class="pagnation-ul">
								<ul class="clearfix">
									<?php 
                                    $i=1;
                                    echo'<p> Trang :</p>';

										for ($i = 1; $i <= $data["nums"] ; $i++) { ?>
											<li><a href="http://localhost/PHPMVC/shop/show/<?= $i ?>"><?= $i ?></a></li>
									<?php
                                     }
									
									?>

								</ul>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- products-view content section end -->
<!-- quick view start -->

<!-- quick view end -->
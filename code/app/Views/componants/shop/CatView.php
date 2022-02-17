<div class="container clearfix">

<div class="fancy-title title-border nobottommargin">
                        <div class="row">
                            <div class="col-9">
                                <h4>
                                    <a class="depLink" href="<?= base_url()."/category/".$id ?>">
									<?= $name ?>
								    </a>

                                </h4>


                            </div>

                            <div style="display: flex;justify-content: flex-end" class="col-3">

                                <a href="<?= base_url()."/category/".$id ?>" class="button button-3d m-0">
                                    المزيد
                                </a>

                            </div>
                        </div>

                    </div>

                    <div class="owl-carousel products-carousel carousel-widget oc-prd bottommargin-sm"
                        data-lazyload="false" data-loop="false" data-speed="1000" data-margin="20" data-nav="true"
                        data-pagi="false" data-rtl="true" data-items-xs="2" data-items-sm="2" data-items-md="3"
                        data-items-lg="4" data-items-xl="5">

						
						<?php foreach($products as $product) :?>

<div class="oc-item">
<div class="product iproduct clearfix">
	<div class="product-image">
		<a href="<?= base_url()."/Product/".$product['id'] ?>">
			<img src="<?php echo base_url().$product['image']; ?>"
				alt="<?= $product['name'] ?>">


		</a>
	</div>
	<div class="product-desc center">
		<div class="product-title">
			<h3>
				<a href="<?= base_url()."/Product/".$product['id'] ?>"><?= $product['name'] ?></a>
			</h3>
		</div>

		<div class="product-price">
			<ins><?= $product['amount'] ?></ins>
			ر.س.
		</div>

	</div>
	<?php if($product['count']==0){
	?>	
	<div class="product-overlay">
		<a href="javascript:void(0);" class="add-to-cart soldOut">
			<i class="fas fa-shopping-cart"></i>
			<span>نفذت الكمية</span>
		</a>

		<a href="javascript:void(0);" lang="428" class="addToFavourites  item-quick-view">
			<i class="far fa-heart"></i>
		</a>
	</div>
	<?php }else{?>

		<div class="product-overlay">
		<a href="#" class="add-to-cart add-to-cart-easy addToCartAnimation" id="478">
			<i class="fas fa-shopping-cart"></i>
			<span>أضف إلى السلة</span>
		</a>

		<a href="javascript:void(0);" lang="478" class="addToFavourites  item-quick-view">
			<i class="far fa-heart"></i>
		</a>
	</div>

	<?php } ?>



</div>
</div>







<?php endforeach; ?>




                    </div>

                    <div class="clear"></div>


</div>

<!-- .................. -->


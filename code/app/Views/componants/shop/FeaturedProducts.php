        <!-- Content
    ============================================= -->
	<section id="content">

<div class="content-wrap">

	<div class="container">


		<div class="fancy-title title-border nobottommargin">
			<h4><a href="#" class="depLink">المنتجات الأكثر مبيعا</a></h4>
		</div>

		<div class="owl-carousel products-carousel carousel-widget oc-prd bottommargin-sm"
			data-lazyload="false" data-loop="true" data-speed="1000" data-margin="20" data-nav="true"
			data-pagi="false" data-rtl="true" data-items-xs="2" data-items-sm="2" data-items-md="3"
			data-items-lg="4" data-items-xl="5">

			<?php foreach($featured as $product) :?>

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

						<!-- --- -->
<?php 
	$name=session()->get('first_name');
	if(isset($name)){  
?>
						<div class="product-overlay">
						<a href="#" class="add-to-cart add-to-cart-easy addToCartAnimation" id="478">
							<i class="fas fa-shopping-cart"></i>
							<span>أضف إلى السلة</span>
						</a>

						<a href="javascript:add_to_favlogin();" lang="478" class="addToFavourites  item-quick-view">
							<i class="far fa-heart"></i>
						</a>
					</div>
<?php }else{ ?>

	<div class="product-overlay">
						<a href="#" class="add-to-cart add-to-cart-easy addToCartAnimation" id="478">
							<i class="fas fa-shopping-cart"></i>
							<span>أضف إلى السلة</span>
						</a>

						<a href="javascript:add_to_favlogout();" lang="478" class="addToFavourites  item-quick-view">
							<i class="far fa-heart"></i>
						</a>
					</div>
<?php } ?>
						<!-- --- -->



					<?php } ?>



				</div>
			</div>







<?php endforeach; ?>

		</div>


		<div class="clear"></div>





	</div>




</div>

</section>
<!-- #content end -->

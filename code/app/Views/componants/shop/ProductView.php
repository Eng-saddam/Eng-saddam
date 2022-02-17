	<!--================ Product Area =================-->
	<style>
	.header_padding{
		padding-top:0px !important;
	}
	</style>
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							
						
							</ol>
							<div class="carousel-inner">
								
								<div class="carousel-item active">
									<img class="d-block w-100" src="<?php echo base_url(); ?>/<?= $product['image'] ?>" alt="Third slide">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?= $product['name'] ?></h3>
						<h2><?= $product['amount'] ?> JD</h2>
						<ul class="list">
							<li>
								<a class="active" href="<?= base_url()."/category/".$product['main_cat'];  ?>">
									<span>Category</span> : <?= $product['main_cat_name'] ?></a>
							
							</li>
							<?php if($product['sub_cat'] > 0){ ?>
							<li>
								<a class="active" href="<?= base_url()."/category/".$product['sub_cat'];  ?>">

									<span>Sub Category</span> : <?= $product['sub_cat_name'] ?></a>
									<?php } ?>
							</li>


							<li>
								<a href="#">
									<span>Availibility</span> : <?= $product['count'] ?> piece</a>
							</li>
						</ul>
						<p><?= $product['details'] ?>.</p>
			
			
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="padding-bottom:50px;">
	</div>
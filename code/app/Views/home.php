<?= $this->extend('layout\shop_main') ?>

<?= $this->section('contant') ?>

<?= view("componants/shop/slider") ?>

	<!--================Feature Product Area =================-->
    <?= view('componants\shop\FeaturedProducts') ?>

	<div class="promo parallax promo-full bottommargin-sm midSecBg">
                    <div class="overlay" style="background:var(--company-second-color);"></div>
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-12 col-md-4 py-2">
                                <div class="feature-box fbox-center fbox-light fbox-plain noborder">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="far fa-thumbs-up text-white-70 mt-2"></i></a>
                                    </div>
                                    <h3 class="text-white">
                                    معايير الكفالة
                                    </h3>
                                    <p class="text-white-70">
                                    يمكنك الإعتماد علينا للحصول على أفضل كفالة ممكنة ضد العيوب المصنعية 
                                    </p>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 py-2">
                                <div class="feature-box fbox-center fbox-light fbox-plain noborder">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="fas fa-shopping-basket text-white-70 mt-2"></i></a>
                                    </div>
                                    <h3 class="text-white">جميع ما تحتاجه من إلكترونيات و أجهزة</h3>
                                    <p class="text-white-70">لا داعي للتجول و البحث للحصول على تنوع في الماركات التجارية المختلفة, جمعنا لك أفضل الماركات العالمية المختلفة بأفضل الأسعار لتوفر لك المال و الوقت.</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 py-2">
                                <div class="feature-box fbox-center fbox-light fbox-plain noborder">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="far fa-credit-card text-white-70 mt-2"></i></a>
                                    </div>
                                    <h3 class="text-white">دفع آمن</h3>
                                    <p class="text-white-70">حماية عالية في الدفع الآمن</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

	<?php
	
	foreach ($cats as $cat) :	
		
		if(count($cat['products']) > 0  && $cat['main_cat'] == 0){

	 echo    view('componants\shop\CatView',$cat) ;


		}

		
	 endforeach;
	?> 

	<!--================End Feature Product Area =================-->
<?= $this->endsection() ?>
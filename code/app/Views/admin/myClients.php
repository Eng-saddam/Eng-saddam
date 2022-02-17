<?= $this->extend('layout\admin_main') ?>

<?= $this->section('contant') ?>
<?php 
$SuccessM = session()->getFlashdata('SuccessM');
if(isset($SuccessM)){
  ?>
  <div class="alert alert-success" role="alert">
  <?php echo $SuccessM; ?>
</div>
 <?php
}
//  echo $settings['site_name'];
?>
			
<div class="portlet-header portlet-header-bordered">
		<h3 class="portlet-title"><?php echo $dictionary[149]; ?></h3>
</div>
<div class="content">
<div class="container-fluid">
<form action="<?php ?><?php echo base_url(); ?>/Admin/SocialMediaSettings" method="post" enctype="multipart/form-data">

<div class="row">
						<div class="col-12">
							<!-- BEGIN Portlet -->
							<div class="portlet">
								<!-- BEGIN Widget -->
								<div class="widget10 widget10-vertical-md">
									<div class="widget10-item">
										<div class="widget10-content">
											<h2 class="widget10-title">$27,639</h2>
											<span class="widget10-subtitle">Total revenue</span>
										</div>
										<div class="widget10-addon">
											<!-- BEGIN Avatar -->
											<div class="avatar avatar-label-info avatar-circle widget8-avatar m-0">
												<div class="avatar-display">
													<i class="fa fa-dollar-sign"></i>
												</div>
											</div>
											<!-- END Avatar -->
										</div>
									</div>
									<div class="widget10-item">
										<div class="widget10-content">
											<h2 class="widget10-title">87,123</h2>
											<span class="widget10-subtitle">Order received</span>
										</div>
										<div class="widget10-addon">
											<!-- BEGIN Avatar -->
											<div class="avatar avatar-label-primary avatar-circle widget8-avatar m-0">
												<div class="avatar-display">
													<i class="fa fa-boxes"></i>
												</div>
											</div>
											<!-- END Avatar -->
										</div>
									</div>
									<div class="widget10-item">
										<div class="widget10-content">
											<h2 class="widget10-title">237</h2>
											<span class="widget10-subtitle">New users</span>
										</div>
										<div class="widget10-addon">
											<!-- BEGIN Avatar -->
											<div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
												<div class="avatar-display">
													<i class="fa fa-users"></i>
												</div>
											</div>
											<!-- END Avatar -->
										</div>
									</div>
									<div class="widget10-item">
										<div class="widget10-content">
											<h2 class="widget10-title">5,726</h2>
											<span class="widget10-subtitle">Unique visits</span>
										</div>
										<div class="widget10-addon">
											<!-- BEGIN Avatar -->
											<div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
												<div class="avatar-display">
													<i class="fa fa-link"></i>
												</div>
											</div>
											<!-- END Avatar -->
										</div>
									</div>
								</div>
								<!-- END Widget -->
							</div>
							<!-- END Portlet -->
						</div>
					</div>


					
<div class="row">
<div class="col-md-12">
	<div class="portlet">
		<div class="portlet-header portlet-header-bordered">
			<div class="portlet-icon">
				<i class="fa fa-grin"></i>
			</div>
			<h3 class="portlet-title"><?php echo $dictionary[150]; ?></h3>
		</div>
		<div class="portlet-body">
			<!-- BEGIN Rich List -->
			<div class="rich-list rich-list-flush">
				<div class="rich-list-item flex-column align-items-stretch">
					<!-- BEGIN Rich List -->
					<div class="rich-list-item p-0">
						<div class="rich-list-prepend">
							<!-- BEGIN Avatar -->
							<div class="avatar">
								<div class="avatar-display">
									<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
								</div>
							</div>
							<!-- END Avatar -->
						</div>
						<div class="rich-list-content">
							<h4 class="rich-list-title">Airi Satou</h4>
							<span class="rich-list-subtitle">Accountant</span>
						</div>
						<div class="rich-list-append">
							<button class="btn btn-label-primary"><?php echo $dictionary[151]; ?></button>
						</div>
					</div>
					<!-- END Rich List -->
					<p class="text-justify mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem optio libero deleniti minus culpa modi, quam rem eius quaerat aut.</p>
				</div>
				<div class="rich-list-item flex-column align-items-stretch">
					<!-- BEGIN Rich List -->
					<div class="rich-list-item p-0">
						<div class="rich-list-prepend">
							<!-- BEGIN Avatar -->
							<div class="avatar">
								<div class="avatar-display">
									<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
								</div>
							</div>
							<!-- END Avatar -->
						</div>
						<div class="rich-list-content">
							<h4 class="rich-list-title">Cedric Kelly</h4>
							<span class="rich-list-subtitle">Senior Javascript Developer</span>
						</div>
						<div class="rich-list-append">
							<button class="btn btn-label-primary"><?php echo $dictionary[151]; ?></button>
						</div>
					</div>
					<!-- END Rich List -->
					<p class="text-justify mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus non, in, culpa libero quidem consequatur.</p>
				</div>
				<div class="rich-list-item flex-column align-items-stretch">
					<!-- BEGIN Rich List -->
					<div class="rich-list-item p-0">
						<div class="rich-list-prepend">
							<!-- BEGIN Avatar -->
							<div class="avatar">
								<div class="avatar-display">
									<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
								</div>
							</div>
							<!-- END Avatar -->
						</div>
						<div class="rich-list-content">
							<h4 class="rich-list-title">Brielle Williamson</h4>
							<span class="rich-list-subtitle">Integration Specialist</span>
						</div>
						<div class="rich-list-append">
							<button class="btn btn-label-primary"><?php echo $dictionary[151]; ?></button>
						</div>
					</div>
					<!-- END Rich List -->
					<p class="text-justify mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae nesciunt blanditiis tempora eius accusamus, libero facere amet! Neque quis odio dicta dolor, eaque consectetur. Nihil?</p>
				</div>
				<div class="rich-list-item flex-column align-items-stretch">
					<!-- BEGIN Rich List -->
					<div class="rich-list-item p-0">
						<div class="rich-list-prepend">
							<!-- BEGIN Avatar -->
							<div class="avatar">
								<div class="avatar-display">
									<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
								</div>
							</div>
							<!-- END Avatar -->
						</div>
						<div class="rich-list-content">
							<h4 class="rich-list-title">Sonya Frost</h4>
							<span class="rich-list-subtitle">Software Engineer</span>
						</div>
						<div class="rich-list-append">
							<button class="btn btn-label-primary"><?php echo $dictionary[151]; ?></button>
						</div>
					</div>
					<!-- END Rich List -->
					<p class="text-justify mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita praesentium rem aut aliquam perferendis harum molestiae cum beatae, perspiciatis, at nisi reprehenderit minus voluptatibus veritatis. Iste laborum possimus nobis vero?</p>
				</div>
			</div>
			<!-- END Rich List -->
		</div>
	</div>
</div>

</div>
</form>
</div>
</div>
<?= $this->endsection() ?>

<?= $this->section('js') ?>
<script>


</script>
<?= $this->endsection() ?>
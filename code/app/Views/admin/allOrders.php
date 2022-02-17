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
		<h3 class="portlet-title"><?php echo $dictionary[43]; ?></h3>
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

  <div class="col-md-6" style="margin-bottom: 15px;">
    <div class="input-group">
	  	<input type="text" class="form-control" placeholder="<?=$dictionary[219];?>" id="datetimepicker-2">
	  	<div class="input-group-append">
	  		<span class="input-group-text">
	  			<i class="fa fa-calendar"></i>
	  		</span>
	  	</div>
	  </div>
  </div>



<div class="col-md-12">
	<div class="portlet">
		<div class="portlet-header portlet-header-bordered">
			<div class="portlet-icon">
				<i class="fa fa-list-alt"></i>
			</div>
			<h3 class="portlet-title"><?php echo $dictionary[41]; ?></h3>

		</div>
		<div class="portlet-body">
			<!-- BEGIN Tables -->
			<table class="table table-striped table-hover table-responsive mb-0">
				<thead>
					<tr>
					  <th><?php echo $dictionary[213]; ?></th>												
            <th><?php echo $dictionary[214]; ?></th>
            <th> <?php echo $dictionary[215]; ?></th>
            <th><?php echo $dictionary[216]; ?></th>                     
            <th><?php echo $dictionary[218]; ?></th>                     
            <th><?php echo $dictionary[217]; ?></th>                     
					</tr>
				</thead>
				<tbody>

        </tbody>
			</table>
			<!-- END Tables -->
		</div>
	</div>
</div>

</div>
</form>
</div>
</div>
<?= $this->endsection() ?>

<?= $this->section('js') ?>
<script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/app/form/datetimepicker.js"></script>
<script>


</script>
<?= $this->endsection() ?>
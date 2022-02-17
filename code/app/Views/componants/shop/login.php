
<?= $this->extend('layout\shop_main') ?>

<?= $this->section('contant') ?>
<!--================Login Area =================-->
<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/rtl-core.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/rtl-vendor.css" rel="stylesheet">
<style>
	body{font-family: 'Cairo';}
	.btn-sm, .btn-group-sm>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 12px;
    line-height: 1.5;
}
    .custom-switch .custom-control-label::after{
        top:50%;
    }
    a {color:var(--company-color);}
    .btn-label-primary{color:var(--company-color);}
    .btn-label-primary:hover {
    color: #fff;
    background-color: var(--company-color);
    border-color: var(--company-color);
}
.theme-light .custom-control-input:checked ~ .custom-control-label::before{
    color: #fff;
    background-color: var(--company-color);
    border-color: var(--company-color);
}
.avatar-label-primary {
    color: var(--company-color) !important;
    background: rgba(33, 150, 243, 0.1) !important;
}
</style>
	<!-- BEGIN Page Holder -->
	<div class="holder">
		<!-- BEGIN Page Wrapper -->
		<div class="wrapper">
			<!-- BEGIN Page Content -->
            <form action="<?php echo base_url(); ?>/login" class="form" method="post" id="form2">
            <div class="content ">
            <input type="text" name="form_type" value="signin" hidden>
				<div class="container-fluid">
					<div class="row no-gutters align-items-center justify-content-center h-100">
						<div class="col-sm-8 col-md-6 col-lg-4 col-xl-3">
							<!-- BEGIN Portlet -->
							<div class="portlet">
								<div class="portlet-body">
									<div class="text-center mb-4">
										<!-- BEGIN Avatar -->
										<div class="avatar avatar-label-primary avatar-circle widget12">
											<div class="avatar-display">
												<i class="fa fa-user-alt"></i>
											</div>
										</div>
										<!-- END Avatar -->
									</div>
									<!-- BEGIN Form -->
									<form id="login-form" novalidate="novalidate">
										<!-- BEGIN Form Group -->
										<div class="form-group">
											<div class="float-label float-label-lg">
                                                
												<input class="form-control form-control-lg is-valid" type="email" id="email" name="email"  aria-invalid="false">
												<label for="email"><?php echo $dictionary[75]; ?></label>
											</div>
										</div>
										<!-- END Form Group -->
										<!-- BEGIN Form Group -->
										<div class="form-group">
											<div class="float-label float-label-lg">
												<input class="form-control form-control-lg is-valid" type="password" id="password" name="password"  aria-invalid="false">
												<label for="password"><?php echo $dictionary[16]; ?></label>
											</div>
										</div>
										<!-- END Form Group -->
										<div class="d-flex align-items-center justify-content-between mb-3">
											<!-- BEGIN Form Group -->
											<div class="form-group mb-0">
												<div class="custom-control custom-control-lg custom-switch">
													<input type="checkbox" class="custom-control-input" id="remember" name="remember">
													<label class="custom-control-label" for="remember"><?php echo $dictionary[17]; ?></label>
												</div>
											</div>
											<!-- END Form Group -->
											<a href="#"><?php echo $dictionary[18]; ?></a>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<span><?php echo $dictionary[19]; ?> <a href="..\..\../rtl/pages/register/register-1.html"><?php echo $dictionary[31]; ?></a>
											</span>
											<button type="submit" class="btn btn-label-primary btn-lg btn-widest"><?php echo $dictionary[2]; ?></button>
										</div>
									</form>
									<!-- END Form -->
								</div>
							</div>
							<!-- END Portlet -->
						</div>
					</div>
				</div>
			</div>
            </form>
			<!-- END Page Content -->
		</div>
		<!-- END Page Wrapper -->
	</div>
	<!-- END Page Holder -->













    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/mandatory.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/core.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/vendor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/app/pages/login.js"></script>
    
<!--================End Login Area =================-->
<?= $this->endsection() ?>

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
.pic_label{
    color: #424242;
    background: #fff;
    border-color: #e0e0e0;
    position: absolute;
    height: calc(1.5em + 0.75rem + 2px);
    font-weight: 400;
    line-height: 1.5;
    padding: 0.375rem 0.75rem;
    border-width: 1px;
    border-style: solid;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1;
    border-radius: 0.35rem;
}
</style>
<form action="<?php echo base_url(); ?>/signup" method="post" enctype="multipart/form-data" class="form" id="form1">

<div class="content ">
<input type="text" name="form_type" value="signup" hidden>
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
                                        <div class="card-body">
                                          <div class="custom-file">
                                          <input type="file" class="form-control-file" value="<?= set_value('pic'); ?>" name="pic" onchange="Filevalidation();"  data="" accept="jpg,.jpeg,.png,.gif,.bmp" id="pic">
		                                  <label class="pic_label" for="pic"> <?php echo $dictionary[65]; ?></label>
                                          </div>
		                                </div>
									</div>
									<!-- BEGIN Form -->
									<form id="register-form" novalidate="novalidate">
										<div class="row">
											<div class="col-sm-6">
												<!-- BEGIN Form Group -->
												<div class="form-group">
													<div class="float-label float-label-lg">
														<input class="form-control form-control-lg" type="text" id="first_name" name="first_name">
														<label for="first_name"><?php echo $dictionary[27]; ?></label>
													</div>
												</div>
												<!-- END Form Group -->
											</div>
											<div class="col-sm-6">
												<!-- BEGIN Form Group -->
												<div class="form-group">
													<div class="float-label float-label-lg">
														<input class="form-control form-control-lg" type="text" id="last_name" name="last_name">
														<label for="last_name"><?php echo $dictionary[28]; ?></label>
													</div>
												</div>
												<!-- END Form Group -->
											</div>
										</div>
										<!-- BEGIN Form Group -->
										<div class="form-group">
											<div class="float-label float-label-lg">
												<input class="form-control form-control-lg is-valid" type="email" id="email" name="email" aria-invalid="false">
												<label for="email"><?php echo $dictionary[75]; ?></label>
											</div>
										</div>
										<!-- END Form Group -->
										<!-- BEGIN Form Group -->
										<div class="form-group">
											<div class="float-label float-label-lg">
												<input class="form-control form-control-lg is-valid" type="phone" id="phone" name="phone" aria-invalid="false">
												<label for="phone"><?php echo $dictionary[15]; ?></label>
											</div>
										</div>
										<!-- END Form Group -->
										<!-- BEGIN Form Group -->
										<div class="form-group">
											<div class="float-label float-label-lg">
												<input class="form-control form-control-lg is-valid" type="password" id="password" name="password" aria-invalid="false">
												<label for="password"><?php echo $dictionary[16]; ?></label>
											</div>
										</div>
										<!-- END Form Group -->
										<!-- BEGIN Form Group -->
										<div class="form-group">
											<div class="float-label float-label-lg">
												<input class="form-control form-control-lg" type="password" id="re_password" name="re_password">
												<label for="re_password"><?php echo $dictionary[29]; ?></label>
											</div>
										</div>
										<!-- END Form Group -->
										<div class="d-flex align-items-center justify-content-between mb-3">
											<!-- BEGIN Form Group -->
											<div class="form-group mb-0">
												<div class="custom-control custom-control-lg custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="agreement" name="agreement">
													<label class="custom-control-label" for="agreement"><?php echo $dictionary[77]; ?></label>
												</div>
											</div>
											<!-- END Form Group -->
											<a href="#"><?php echo $dictionary[18]; ?></a>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<span> <?php echo $dictionary[76]; ?> <a href="<?php echo base_url(); ?>/login"><?php echo $dictionary[2]; ?></a>
											</span>

                                            <div class="result" id="result" style="text-align: left;color: red;">
					                         <?php if(isset($validation) && $uri->getSegment(1) =="signup"){echo $validation->listerrors();} ?>
						                    </div>
											<button type="submit" class="btn btn-label-primary btn-lg btn-widest"><?php echo $dictionary[31]; ?></button>
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










    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/mandatory.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/core.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/vendor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/app/pages/login.js"></script>
    <script>
            $('#pic').change(function(e) {
        var files = e.target.files;
        thisImage=$(this);
            for (var i = 0; i <= files.length; i++) {
          

          
          var file = files[i];
          var reader = new FileReader();
          
          reader.onload = (function(file) {
            return function(event){
                // thisImage.parent().parent().parent().find('.avatar-display').find('img').attr('src',event.target.result);
                thisImage.parent().parent().parent().find('.avatar-display').html(`<img style="height: 120px;width: 120px;" src="${event.target.result}">`);
                
            };
          })(file);
          
          reader.readAsDataURL(file);
        }// end for;
        
      });
    </script>
<!--================End Login Area =================-->
<?= $this->endsection() ?>
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

<div class="content">
<div class="container-fluid">
<form autocomplete="off" action="<?php ?><?php echo base_url(); ?>/Admin/SocialMediaSettings" method="post" enctype="multipart/form-data">
	<div class="row portlet-row-fill-xl">
		<div class="col-xl-12">
			<!-- BEGIN Portlet -->
			<div class="portlet widget1">
				<div class="widget1-display widget1-display-top widget1-display-lg bg-primary text-white">
									<div class="widget1-group">
										<h3 class="widget1-title"><?php echo $dictionary[144]; ?></h3>

									</div>
									<div class="widget1-dialog">
										<div class="widget1-dialog-content">
											<h1 class="display-3"><?= session()->get('first_name')." ".session()->get('last_name') ?></h1>
										</div>
									</div>
									<div class="widget1-offset">
										<label class="avatar_myprofile_div" for="pic">
											<img class="avatar_myprofile_pic" src="<?php if(session()->get('pic')!=''){echo base_url().session()->get('pic');}else{echo base_url()."/asset/images/profile.png";} ?>" id="preview" class="card-img-top" alt="<?php echo $dictionary[38]; ?>">
											<input type="file" style="display: none;" name="pic" id="pic">
										</label>
									</div>
				</div>
			</div>
			<!-- BEGIN Portlet -->
		</div>
	</div>


<div class="row" style="margin-top: 45px;">

<div class="col-md-6">
    <div class="form-group">
    		<div class="float-label float-label-lg">
    			<input type="text" id="first_name" value="<?= session()->get('first_name') ?>" name="first_name" class="form-control form-control-lg" placeholder="<?php echo $dictionary[27]; ?>">
    			<label style="pointer-events: none;" for="first_name"><?php echo $dictionary[27]; ?></label>
    		</div>
    </div>
</div>


<div class="col-md-6">
<div class="form-group">
    		<div class="float-label float-label-lg">
    			<input type="text" id="last_name" value="<?= session()->get('last_name') ?>" name="last_name" class="form-control form-control-lg" placeholder="<?php echo $dictionary[28]; ?>">
    			<label style="pointer-events: none;" for="last_name"><?php echo $dictionary[28]; ?></label>
    		</div>
    </div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="phone" value="<?= session()->get('phone') ?>" name="phone" class="form-control form-control-lg" placeholder="<?php echo $dictionary[15]; ?>">
			<label style="pointer-events: none;" for="phone"><?php echo $dictionary[15]; ?></label>
		</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="email" value="<?= session()->get('email') ?>" name="email" class="form-control form-control-lg" placeholder="<?php echo $dictionary[75]; ?>">
			<label style="pointer-events: none;" for="email"><?php echo $dictionary[75]; ?></label>
		</div>
</div>
</div>




</div>

<div class="row" style="margin-bottom: 15px;margin-top:15px;">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<button type="submit" style="width: 100%;" class="btn btn-primary">  <?php echo $dictionary[82]; ?>  <i class="fa fa-check mr-2"></i></button>
	</div>
	<div class="col-md-4"></div>
</div>

</form>
</div>
</div>
<?= $this->endsection() ?>

<?= $this->section('js') ?>
<script>
    $("#phone").keypress(function (e) {
        var value = $(this).val();

    if (e.which != 8 && e.which != 0 && e.which != 13 && (e.which < 48 || e.which > 57)) {
        return false;
    }
    if(value.length>10){return false;}
});
$("#pic").change(function () {
	
	if (this.files && this.files[0]) {
		
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview').attr('src', e.target.result);
		}
		reader.readAsDataURL(this.files[0]);
	}
});

$(".remove_this_image").click(function () {
	oldImg=$(this).parent().find('img').attr('src');
	if(oldImg.includes("profile.png")){return false;}
	$(this).parent().find('img').attr('src','<?php echo base_url();?>/asset/images/profile.png');
	$(this).parent().find('input').val('');
	return false;
});
</script>
<?= $this->endsection() ?>
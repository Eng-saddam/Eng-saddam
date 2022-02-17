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
		<h3 class="portlet-title"><?php echo $dictionary[168]; ?></h3>
		<a href="otherOptions"><button style="margin-top: 10px;" class="btn btn-flat-success"> <?php echo $dictionary[193]; ?> <i class="fa fa-plus mr-2"></i></button></a>

</div>
<div class="content">
<div class="container-fluid">
<form autocomplete="off" action="<?php ?><?php echo base_url(); ?>/Admin/SocialMediaSettings" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-md-3">
	<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="count_ShowHide" <?= ($settings['product_count'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="count_ShowHide"><?php echo $dictionary[175]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>

<div class="col-md-3">
	<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="size_ShowHide" <?= ($settings['product_size'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="size_ShowHide"><?php echo $dictionary[170]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>


<div class="col-md-3">
	<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="colors_ShowHide" <?= ($settings['product_color'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="colors_ShowHide"><?php echo $dictionary[174]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>


<div class="col-md-3">
	<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="brand_ShowHide" <?= ($settings['product_brand'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="brand_ShowHide"><?php echo $dictionary[185]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>

<div class="col-md-3">
	<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="weight_ShowHide" <?= ($settings['product_weight'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="weight_ShowHide"><?php echo $dictionary[171]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>


<div class="col-md-3">
	<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="depth_ShowHide" <?= ($settings['product_depth'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="depth_ShowHide"><?php echo $dictionary[169]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>
<div class="col-md-3">
	<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="height_ShowHide" <?= ($settings['product_height'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="height_ShowHide"><?php echo $dictionary[172]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>
<div class="col-md-3">
	<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="width_ShowHide" <?= ($settings['product_width'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="width_ShowHide"><?php echo $dictionary[173]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>

<div class="col-md-3">
<?php
$numOfImages=1;
if($settings['product_image2']=='1'){$numOfImages=$numOfImages+1;}
if($settings['product_image3']=='1'){$numOfImages=$numOfImages+1;}
if($settings['product_image4']=='1'){$numOfImages=$numOfImages+1;}
if($settings['product_image5']=='1'){$numOfImages=$numOfImages+1;}
?>
<div class="form-group">
		<div class="float-label float-label-lg">
      <select name="images_ShowHide" id="images_ShowHide" class="form-control custom-select dropdown_lg_custom">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      </select>

	    <label style="pointer-events: none;" for="images_ShowHide"><?php echo $dictionary[202]; ?></label>
		</div>
</div>
</div>
<script>document.getElementById("images_ShowHide").value = "<?=$numOfImages;?>";</script>



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
    $("#mobile_number").keypress(function (e) {
        var value = $(this).val();

    if (e.which != 8 && e.which != 0 && e.which != 13 && (e.which < 48 || e.which > 57)) {
        return false;
    }
    if(value.length>10){return false;}
});
</script>
<?= $this->endsection() ?>
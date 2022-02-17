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
$lang=2 ;
//  echo $settings['site_name'];
?>
			
<div class="portlet-header portlet-header-bordered">
		<h3 class="portlet-title"><?php echo $dictionary[49]; ?></h3>
</div>
<div class="content">
<div class="container-fluid">
<form autocomplete="off" action="<?php ?><?php echo base_url(); ?>/Admin/Settings" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="name" value="<?= $settings['site_name'];?>" name="name" class="form-control form-control-lg" placeholder="<?php echo $dictionary[56]; ?>">
			<label style="pointer-events: none;" for="name"><?php echo $dictionary[56]; ?></label>
			<div class="show_info_div">
				<i class="fa fa-info"></i>
				<p><?php echo $dictionary[176]; ?></p>
			</div>
			
		</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="name_ar" value="<?= $settings['site_name_ar'];?>" name="name_ar" class="form-control form-control-lg" placeholder="<?php echo $dictionary[57]; ?>">
			<label style="pointer-events: none;" for="name_ar"><?php echo $dictionary[57]; ?></label>
			<div class="show_info_div">
				<i class="fa fa-info"></i>
				<p><?php echo $dictionary[176]; ?></p>
			</div>
		</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label">
			<textarea class="form-control" name="details" id="details" rows="5" placeholder="<?php echo $dictionary[58]; ?>"><?= $settings['site_description'];?></textarea>
			<label for="textarea"><?php echo $dictionary[58]; ?></label>
			<div class="show_info_div">
				<i class="fa fa-info"></i>
				<p><?php echo $dictionary[177]; ?></p>
			</div>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label">
			<textarea class="form-control" name="details_ar" id="details_ar" rows="5" placeholder="<?php echo $dictionary[59]; ?>"><?= $settings['site_description_ar'];?></textarea>
			<label for="textarea"><?php echo $dictionary[59]; ?></label>
			<div class="show_info_div">
				<i class="fa fa-info"></i>
				<p><?php echo $dictionary[177]; ?></p>
			</div>
		</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
      <select name="store_type" id="store_type" class="form-control custom-select dropdown_lg_custom">
      <option value="1" <?php if($settings['store_type']=='1'){echo "selected";} ?>><?php echo $dictionary[115]; ?></option>
      <option value="2" <?php if($settings['store_type']=='2'){echo "selected";} ?>><?php echo $dictionary[116]; ?></option>
      <option value="3" <?php if($settings['store_type']=='3'){echo "selected";} ?>><?php echo $dictionary[117]; ?></option>
      </select>

	    <label style="pointer-events: none;" for="store_type"><?php echo $dictionary[113]; ?></label>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
      <select name="template" id="template" class="form-control custom-select dropdown_lg_custom">
      <option value="1"<?php if($settings['template']=='1'){echo "selected";} ?>><?php echo $dictionary[118]; ?></option>
      </select>

	    <label style="pointer-events: none;" for="template"><?php echo $dictionary[114]; ?></label>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
      <select name="default_currency" id="default_currency" class="form-control custom-select dropdown_lg_custom">
      <?php 
      foreach($currency as $curr) :
       ?>
          <option value="<?=  $curr['id']; ?>"<?php if($curr['id']==$settings['default_currency']){echo "selected";} ?>><?= ( $lang==1)?$curr['currency_name']:$curr['currency_name_ar']; ?></option>
      <?php  
      endforeach; 
      ?>
      </select>

	    <label style="pointer-events: none;" for="default_currency"><?php echo $dictionary[119]; ?></label>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
      <select name="default_language" id="default_language" class="form-control custom-select dropdown_lg_custom">
          <option value="1"<?php if($settings['default_currency']=='1'){echo "selected";} ?>><?php echo $dictionary[123]; ?></option>
          <option value="2"<?php if($settings['default_currency']=='2'){echo "selected";} ?>><?php echo $dictionary[124]; ?></option>
      </select>

	    <label style="pointer-events: none;" for="default_language"><?php echo $dictionary[120]; ?></label>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
      <select name="store_country" id="store_country" class="form-control custom-select dropdown_lg_custom">
          <option value="1"<?php if($settings['store_country']=="1"){echo "selected";} ?>><?= $dictionary[125]; ?></option>
          <option value="2"<?php if($settings['store_country']=="2"){echo "selected";} ?>><?= $dictionary[126]; ?></option>
          <option value="3"<?php if($settings['store_country']=="3"){echo "selected";} ?>><?= $dictionary[127]; ?></option>
          <option value="4"<?php if($settings['store_country']=="4"){echo "selected";} ?>><?= $dictionary[128]; ?></option>
      </select>

	    <label style="pointer-events: none;" for="store_country"><?php echo $dictionary[130]; ?></label>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
      <select name="store_country" id="store_country" class="form-control custom-select dropdown_lg_custom">
          <option value="1"<?php if($settings['store_city']=="1"){echo "selected";} ?>>amman</option>
      </select>

	    <label style="pointer-events: none;" for="store_country"><?php echo $dictionary[129]; ?></label>
		</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="store_location" value="<?= $settings['store_location'];?>" name="store_location" class="form-control form-control-lg" placeholder="<?php echo $dictionary[121]; ?>">
			<label style="pointer-events: none;" for="store_location"><?php echo $dictionary[121]; ?></label>
		</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="store_location_ar" value="<?= $settings['store_location_ar'];?>" name="store_location" class="form-control form-control-lg" placeholder="<?php echo $dictionary[122]; ?>">
			<label style="pointer-events: none;" for="store_location_ar"><?php echo $dictionary[122]; ?></label>
		</div>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="delivery_service_ShowHide" <?= ($settings['delivery_service'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="delivery_service_ShowHide"><?php echo $dictionary[205]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>

<div class="col-md-3">
<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="visa_mastercard_ShowHide" <?= ($settings['visa_mastercard'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="visa_mastercard_ShowHide"><?php echo $dictionary[206]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>

<div class="col-md-3">
<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="cash_on_delivery_ShowHide" <?= ($settings['cash_on_delivery'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="cash_on_delivery_ShowHide"><?php echo $dictionary[207]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>

<div class="col-md-3">
<div class="form-group">
		<!-- BEGIN Custom Switch -->
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input " id="bank_transfer_ShowHide" <?= ($settings['bank_transfer'])=='1'?'checked':''?>>
			<label class="custom-control-label" for="bank_transfer_ShowHide"><?php echo $dictionary[208]; ?></label>
		</div>
		<!-- END Custom Switch -->
	</div>
</div>

<div class="col-md-3">
<div class="form-group">
		<div class="float-label float-label-lg">
    <input type="color" id="template_primary_color" value="<?= $settings['template_primary_color'];?>" name="template_primary_color" class="form-control form-control-lg" placeholder="<?php echo $dictionary[131]; ?>">
	    <label style="pointer-events: none;" for="template_primary_color"><?php echo $dictionary[131]; ?></label>
		</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
		<div class="float-label float-label-lg">
    
    <input type="color" id="template_secondary_color" value="<?= $settings['template_secondary_color'];?>" name="template_secondary_color" class="form-control form-control-lg" placeholder="<?php echo $dictionary[132]; ?>">


	    <label style="pointer-events: none;" for="template_secondary_color"><?php echo $dictionary[132]; ?></label>
		</div>
</div>
</div>

<div class="col-md-6"></div>



<div class="col-md-6">
	<div class="grid-nav-row">

		<div class="grid-nav-item" style="text-align:center;">
			<div class="image_select_class">
			<label for="logo" style="position: relative;">
  			<div class="btn btn-primary btn-icon btn-circle remove_this_image"><i class="fa fa-times"></i></div>
			<img style="height:50px;width:50px;margin-bottom:10px;" src="<?php if(isset($settings['logo'])){echo base_url()."/uploads/images/".$settings['logo'];}else{echo base_url()."/asset/images/profile.png";} ?>" id="preview" class="card-img-top" alt="<?php echo $dictionary[141]; ?>">
			<input type="file" style="display: none;" name="logo" id="logo">
			<span><?php echo $dictionary[141]; ?></span>
			</label>
			</div>
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
$("#logo").change(function () {
	
	if (this.files && this.files[0]) {
		
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview').attr('src', e.target.result);
		}
		reader.readAsDataURL(this.files[0]);
	}
});

$('.show_info_div').hover(
  function () {
    $(this).find('p').show("slow");
  }, 
  function () {
    $(this).find('p').hide("fast");
  }
);

$(".remove_this_image").click(function () {
	oldImg=$(this).parent().find('img').attr('src');
	if(oldImg.includes("profile.png")){return false;}
	$(this).parent().find('img').attr('src','<?php echo base_url();?>/asset/images/profile.png');
	$(this).parent().find('input').val('');
	return false;
});
</script>
<?= $this->endsection() ?>



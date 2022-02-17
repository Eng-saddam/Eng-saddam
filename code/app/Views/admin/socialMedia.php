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
		<h3 class="portlet-title"><?php echo $dictionary[133]; ?></h3>
</div>
<div class="content">
<div class="container-fluid">
<form autocomplete="off" action="<?php ?><?php echo base_url(); ?>/Admin/SocialMediaSettings" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-md-6">
    <div class="row">
        <div class="col-8">
            <div class="form-group">
            		<div class="float-label float-label-lg">
            			<input type="text" id="mobile_number" value="<?= $settings['mobile_number'];?>" name="mobile_number" class="form-control form-control-lg" placeholder="<?php echo $dictionary[15]; ?>">
            			<label style="pointer-events: none;" for="mobile_number"><?php echo $dictionary[15]; ?></label>
                        <div class="show_info_div">
                        	<i class="fa fa-info"></i>
                        	<p><?php echo $dictionary[178]; ?></p>
                        </div>
            		</div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
            		<div class="float-label float-label-lg">
                        <select name="mobile_number_key" id="mobile_number_key" class="form-control custom-select dropdown_lg_custom">
                        <option value="+962" <?php if($settings['mobile_number_key']=='+962'){echo "selected";} ?>>JO (+962)</option>
                        </select>
            		</div>
            </div>     
        </div>

    </div>
</div>


<div class="col-md-6">
    <div class="row">
        <div class="col-8">
            <div class="form-group">
            		<div class="float-label float-label-lg">
            			<input type="text" id="whatsapp_number" value="<?= $settings['whatsapp'];?>" name="whatsapp_number" class="form-control form-control-lg" placeholder="<?php echo $dictionary[136]; ?>">
            			<label style="pointer-events: none;" for="whatsapp_number"><?php echo $dictionary[136]; ?></label>
                        <div class="show_info_div">
                        	<i class="fa fa-info"></i>
                        	<p><?php echo $dictionary[179]; ?></p>
                        </div>
            		</div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
            		<div class="float-label float-label-lg">
                        <select name="whatsapp_number_key" id="whatsapp_number_key" class="form-control custom-select dropdown_lg_custom">
                        <option value="+962" <?php if($settings['whatsapp_number_key']=='+962'){echo "selected";} ?>>JO (+962)</option>
                        </select>
            		</div>
            </div>     
        </div>

    </div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="facebook" value="<?= $settings['facebook'];?>" name="facebook" class="form-control form-control-lg" placeholder="<?php echo $dictionary[137]; ?>">
			<label style="pointer-events: none;" for="facebook"><?php echo $dictionary[137]; ?></label>
            <div class="show_info_div">
            	<i class="fa fa-info"></i>
            	<p><?php echo $dictionary[180]; ?></p>
            </div>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="snapchat" value="<?= $settings['snapchat'];?>" name="snapchat" class="form-control form-control-lg" placeholder="<?php echo $dictionary[138]; ?>">
			<label style="pointer-events: none;" for="snapchat"><?php echo $dictionary[138]; ?></label>
            <div class="show_info_div">
            	<i class="fa fa-info"></i>
            	<p><?php echo $dictionary[181]; ?></p>
            </div>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="twitter" value="<?= $settings['twitter'];?>" name="twitter" class="form-control form-control-lg" placeholder="<?php echo $dictionary[139]; ?>">
			<label style="pointer-events: none;" for="twitter"><?php echo $dictionary[139]; ?></label>
            <div class="show_info_div">
            	<i class="fa fa-info"></i>
            	<p><?php echo $dictionary[182]; ?></p>
            </div>
		</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="instagram" value="<?= $settings['instagram'];?>" name="instagram" class="form-control form-control-lg" placeholder="<?php echo $dictionary[140]; ?>">
			<label style="pointer-events: none;" for="instagram"><?php echo $dictionary[140]; ?></label>
            <div class="show_info_div">
            	<i class="fa fa-info"></i>
            	<p><?php echo $dictionary[183]; ?></p>
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
    $("#mobile_number").keypress(function (e) {
        var value = $(this).val();

    if (e.which != 8 && e.which != 0 && e.which != 13 && (e.which < 48 || e.which > 57)) {
        return false;
    }
    if(value.length>10){return false;}
});
$('.show_info_div').hover(
  function () {
    $(this).find('p').show("slow");
  }, 
  function () {
    $(this).find('p').hide("fast");
  }
);
</script>
<?= $this->endsection() ?>

<?= $this->extend('layout\admin_main') ?>

<?= $this->section('contant') ?>
<?php 
if(isset($validation)){
  ?>
  <div class="alert alert-danger" role="alert">
  <?php echo $validation->listerrors(); ?>
</div>
 <?php

}
?>

<?php 
if(isset($SuccessM)){
  ?>
  <div class="alert alert-success" role="alert">
  <?php echo $SuccessM; ?>
</div>
 <?php

}
?>
<div class="portlet-header portlet-header-bordered">
		<h3 class="portlet-title"><?php echo $dictionary[51]; ?></h3>
</div>
<div class="content">
<div class="container-fluid">
<form autocomplete="off" action="<?php ?><?php echo base_url(); ?>/Admin/addcat" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input style="direction: rtl;" type="text" id="name_ar" value="<?= set_value("name_ar") ?>" name="name_ar" class="form-control form-control-lg" placeholder="<?php echo $dictionary[57]; ?>">
			<label style="pointer-events: none;" for="name"><?php echo $dictionary[57]; ?> <span class="requierd_field">*</span></label>
			
		</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input style="direction: ltr;" type="text" id="name" value="<?= set_value("name") ?>" name="name" class="form-control form-control-lg" placeholder="<?php echo $dictionary[56]; ?>">
			<label style="pointer-events: none;" for="name"><?php echo $dictionary[56]; ?> <span class="requierd_field">*</span></label>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
      <select name="main_cat" id="main_cat" class="form-control custom-select dropdown_lg_custom">
      <option value="0"><?php echo $dictionary[83]; ?></option>
      <?php foreach($posts as $post) :?>

 <?= view_cell('\App\Libraries\cats::cat_dropdown',['post'=>$post]) ?> 


<?php endforeach; ?>
      </select>

	    <label style="pointer-events: none;" for="main_cat"><?php echo $dictionary[78]; ?></label>
		</div>
</div>
</div>
<div class="col-md-12">
	<div class="grid-nav-row">

		<div class="grid-nav-item" style="text-align:center;">
			<div class="image_select_class">
			<label for="image" style="position: relative;">
			<div class="btn btn-primary btn-icon btn-circle remove_this_image"><i class="fa fa-times"></i></div>
			<img style="height:50px;width:50px;margin-bottom:10px;" src="<?php if(isset($image)){echo base_url().$image;}else{echo base_url()."/asset/images/profile.png";} ?>" id="preview" class="card-img-top" alt="<?php echo $dictionary[38]; ?>">
			<input type="file" style="display: none;" name="image" id="image">
			<span><?php echo $dictionary[65]; ?></span>
			</label>
			</div>
		</div>
	</div>
</div>


</div>

<div class="row" style="margin-bottom: 15px;margin-top:15px;">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<button type="submit" style="width: 100%;" class="btn btn-primary">  <?php echo $dictionary[21]; ?>  <i class="fa fa-plus mr-2"></i></button>
	</div>
	<div class="col-md-4"></div>
</div>

</form>

</div>
</div>
<!-- ......... -->
<?= $this->endsection() ?>
<?= $this->section('js') ?>
<script>
	$("#image").change(function () {
	
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





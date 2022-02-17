
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
		<h3 class="portlet-title"><?php echo $dictionary[22]; ?></h3>
</div>
<div class="content">
<div class="container-fluid">

<form autocomplete="off" action="<?php ?><?php echo base_url(); ?>/Admin/productedit/<?= $id?>" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-md-12">

<div class="row">
	

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input style="direction: rtl;" type="text" id="name_ar" value="<?= $name_ar ?>" name="name_ar" class="form-control form-control-lg" placeholder="<?php echo $dictionary[57]; ?>">
			<label style="pointer-events: none;" for="name"><?php echo $dictionary[57]; ?> <span class="requierd_field">*</span></label>
		</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input style="direction: ltr;" type="text" id="name" name="name" value="<?= $name ?>" class="form-control form-control-lg" placeholder="<?php echo $dictionary[56]; ?>">
			<label style="pointer-events: none;" for="name"><?php echo $dictionary[56]; ?> <span class="requierd_field">*</span></label>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
	<div class="float-label float-label-lg">
                      <?php 

                       $paramters['selected']=$main_cat;
                       $paramters['id']='main_cat';
                       $paramters['name']='main_cat';
                       $paramters['class']='form-control';
                       $paramters['items']=['0'=>'This is main Cat'];
                       
                       foreach($posts as $postx) :
                           $paramters['items'][$postx['id']]=$postx['name'];  
                        endforeach; 
                      ?>
                       <?= view('componants\dynmic_dropdown',['parameter'=>$paramters]) ?>
											<label style="pointer-events: none;" for="main_cat"><?php echo $dictionary[78]; ?></label>
	</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
			<div class="float-label float-label-lg">
                    <?php 

                     $paramters['selected']=$sub_cat;
                     $paramters['id']='sub_cat';
                     $paramters['name']='sub_cat';
                     $paramters['class']='form-control';
                     $paramters['items']=['0'=>'none'];
                     
                     foreach($posts as $postx) :
                       if($postx['main_cat']==$main_cat)
                         $paramters['items'][$postx['id']]=$postx['name'];  
                      endforeach; ?>
                     
                     
                     <?= view('componants\dynmic_dropdown',['parameter'=>$paramters]) ?>
											<label style="pointer-events: none;" for="sub_cat"><?php echo $dictionary[79]; ?></label>
										</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label">
			<textarea style="direction: rtl;" class="form-control" name="details_ar" id="details_ar" rows="5" placeholder="<?php echo $dictionary[59]; ?>"><?= $name_ar?></textarea>
			<label for="textarea"><?php echo $dictionary[59]; ?> <span class="requierd_field">*</span></label>
		</div>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
		<div class="float-label">
			<textarea style="direction: ltr;" class="form-control" name="details" id="details" rows="5" placeholder="<?php echo $dictionary[58]; ?>"><?= $name?></textarea>
			<label for="textarea"><?php echo $dictionary[58]; ?> <span class="requierd_field">*</span></label>
		</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="Number" id="amount" value="<?= $amount?>" name="amount" class="form-control form-control-lg" placeholder="<?php echo $dictionary[35]; ?>">
			<label style="pointer-events: none;" for="name"><?php echo $dictionary[35]; ?> <span class="requierd_field">*</span></label>
		</div>
</div>
</div>
<?php
if($settings['product_count']=='1'){
?>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="Number" id="count" value="<?= $count?>" name="count" class="form-control form-control-lg" placeholder="<?php echo $dictionary[36]; ?>">
			<label style="pointer-events: none;" for="name"><?php echo $dictionary[36]; ?>  </label>
		</div>
</div>
</div>
<?php } ?>



<?php
if($settings['product_brand']=='1'){
?>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="brand" value="<?= $brand?>" name="brand" class="form-control form-control-lg" placeholder="<?php echo $dictionary[186]; ?>">
			<label style="pointer-events: none;" for="brand"><?php echo $dictionary[186]; ?>  </label>
		</div>
</div>
</div>
<?php } ?>



<?php
if($settings['product_weight']=='1'){
?>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="number" min="0" id="weight" value="<?= $weight; ?>" name="weight" class="form-control form-control-lg" placeholder=" <?php echo $dictionary[61]; ?> ">
			<label style="pointer-events: none;" for="weight"><?php echo $dictionary[61]; ?></label>
		</div>
</div>
</div>
<?php } ?>

<?php
if($settings['product_depth']=='1'){
?>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="number" min="0" id="depth" value="<?= $depth; ?>" name="depth" class="form-control form-control-lg" placeholder=" <?php echo $dictionary[64]; ?>  ">
			<label style="pointer-events: none;" for="depth"><?php echo $dictionary[64]; ?></label>
		</div>
</div>
</div>
<?php } ?>

<?php
if($settings['product_height']=='1'){
?>
<div class="col-md-6">
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="number" min="0" id="height" value="<?= $height; ?>" name="height" class="form-control form-control-lg" placeholder=" <?php echo $dictionary[62]; ?> ">
			<label style="pointer-events: none;" for="height"><?php echo $dictionary[62]; ?></label>
		</div>
</div>
</div>
<?php } ?>

<?php
if($settings['product_width']=='1'){
?>
<div class="col-md-6">	
<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="number" min="0" id="width" value="<?= $width; ?>" name="width" class="form-control form-control-lg" placeholder=" <?php echo $dictionary[63]; ?> ">
			<label style="pointer-events: none;" for="width"><?php echo $dictionary[63]; ?></label>
		</div>
</div>
</div>
<?php } ?>


<?php
if($settings['product_color']=='1'){
?>
<div class="col-md-12">
	<input type="text" style="display: none;" name="color" id="color">
	<?php 
	$allcolors = explode(",", $color); 
	?>
	<label for="weight" class="form-label" style="display: block;"><?php echo $dictionary[60]; ?></label>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="black" value="black" <?= (in_array("black", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="black"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="white" value="white" <?= (in_array("white", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="white"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="red" value="red" <?= (in_array("red", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="red"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="green" value="green" <?= (in_array("green", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="green"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="brown" value="brown" <?= (in_array("brown", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="brown"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="orange" value="orange" <?= (in_array("orange", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="orange"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="blue" value="blue" <?= (in_array("blue", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="blue"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="gray" value="gray" <?= (in_array("gray", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="gray"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="gold" value="gold" <?= (in_array("gold", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="gold"><i class="fa fa-square color_picker_class"></i></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input color_checkbox_check display_none_class" type="checkbox" id="silver" value="silver" <?= (in_array("silver", $allcolors))?'Checked':''; ?>>
		<label class="form-check-label" for="silver"><i class="fa fa-square color_picker_class"></i></label>
	</div>
</div>
<?php } ?>


<?php
if($settings['product_size']=='1'){
?>
<div class="col-md-12" style="margin-bottom: 5px;">
	<input type="text" style="display: none;" name="size" id="size">
	<?php 
	$allsize = explode(",", $size); 

	?>
	<label for="weight" class="form-label" style="display: block;"><?php echo $dictionary[108]; ?></label>
	<div class="form-check form-check-inline">
		<input class="form-check-input size_checkbox_check" type="checkbox" id="s" value="small" <?= (in_array("small", $allsize))?'Checked':''; ?>>
		<label class="form-check-label" for="s"><?php echo $dictionary[109]; ?></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input size_checkbox_check" type="checkbox" id="m" value="medium" <?= (in_array("medium", $allsize))?'Checked':''; ?>>
		<label class="form-check-label" for="m"><?php echo $dictionary[110]; ?></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input size_checkbox_check" type="checkbox" id="l" value="large" <?= (in_array("large", $allsize))?'Checked':''; ?>>
		<label class="form-check-label" for="l"><?php echo $dictionary[111]; ?></label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input size_checkbox_check" type="checkbox" id="xl" value="xlarge" <?= (in_array("xlarge", $allsize))?'Checked':''; ?>>
		<label class="form-check-label" for="xl"><?php echo $dictionary[112]; ?></label>
	</div>
	
</div>
<?php } ?>

<div class="col-md-12">
	<div class="grid-nav-row">

		<div class="grid-nav-item" style="text-align:center;">
			<div class="image_select_class">
			<label for="image" style="position: relative;">
			<img style="height:50px;width:50px;margin-bottom:10px;" src="<?php if(isset($image)){echo base_url().$image;}else{echo base_url()."/asset/images/profile.png";} ?>" id="preview" class="card-img-top" alt="<?php echo $dictionary[38]; ?>">
			<input type="file" style="display: none;" name="image" id="image">
			
			<span><?php echo $dictionary[65]; ?><span class="requierd_field">*</span></span>
			</label>
			</div>
		</div>

		<?php
		if($settings['product_image2']=='1'){
		?>
		<div class="grid-nav-item" style="text-align:center;">
			<div class="image_select_class">
				<label for="image2" style="position: relative;">
					<div class="btn btn-primary btn-icon btn-circle remove_this_image"><i class="fa fa-times"></i></div>
					<img style="height:50px;width:50px;margin-bottom:10px;" src="<?php if(isset($image2) && !empty($image2)){echo base_url().$image2;}else{echo base_url()."/asset/images/profile.png";} ?>" id="preview2" class="card-img-top" alt="<?php echo $dictionary[38]; ?>">
					<input type="file" style="display: none;" name="image2" id="image2">
					<input type="text" style="display: none;" name="image2Number" id="image2Number">
			<span><?php echo $dictionary[65]; ?></span>
			</label>
			</div>
		</div>
		<?php } ?>

		<?php
		if($settings['product_image3']=='1'){
		?>
		<div class="grid-nav-item" style="text-align:center;">
			<div class="image_select_class">
			<label for="image3" style="position: relative;">
			<div class="btn btn-primary btn-icon btn-circle remove_this_image"><i class="fa fa-times"></i></div>
			<img style="height:50px;width:50px;margin-bottom:10px;" src="<?php if(isset($image3)  && !empty($image3)){echo base_url().$image3;}else{echo base_url()."/asset/images/profile.png";} ?>" id="preview3" class="card-img-top" alt="<?php echo $dictionary[38]; ?>">
			<input type="file" style="display: none;" name="image3" id="image3">
			<input type="text" style="display: none;" name="image3Number" id="image3Number">
			<span><?php echo $dictionary[65]; ?></span>
			</label>
			</div>
		</div>
		<?php } ?>

		<?php
		if($settings['product_image4']=='1'){
		?>
		<div class="grid-nav-item" style="text-align:center;">
			<div class="image_select_class">
			<label for="image4" style="position: relative;">
			<div class="btn btn-primary btn-icon btn-circle remove_this_image"><i class="fa fa-times"></i></div>
			<img style="height:50px;width:50px;margin-bottom:10px;" src="<?php if(isset($image4)  && !empty($image4)){echo base_url().$image4;}else{echo base_url()."/asset/images/profile.png";} ?>" id="preview4" class="card-img-top" alt="<?php echo $dictionary[38]; ?>">
			<input type="file" style="display: none;" name="image4" id="image4">
			<input type="text" style="display: none;" name="image4Number" id="image4Number">
			<span><?php echo $dictionary[65]; ?></span>
			</label>
			</div>
		</div>
		<?php } ?>

		<?php
		if($settings['product_image5']=='1'){
		?>
		<div class="grid-nav-item" style="text-align:center;">
			<div class="image_select_class">
			<label for="image5" style="position: relative;">
			<div class="btn btn-primary btn-icon btn-circle remove_this_image"><i class="fa fa-times"></i></div>
			<img style="height:50px;width:50px;margin-bottom:10px;" src="<?php if(isset($image5)  && !empty($image5)){echo base_url().$image5;}else{echo base_url()."/asset/images/profile.png";} ?>" id="preview5" class="card-img-top" alt="<?php echo $dictionary[38]; ?>">
			<input type="file" style="display: none;" name="image5" id="image5">
			<input type="text" style="display: none;" name="image5Number" id="image5Number">
			<span><?php echo $dictionary[65]; ?></span>
			</label>
			</div>
		</div>
		<?php } ?>
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

<!-- //..................... -->
<?= $this->endsection() ?>

<?= $this->section('js') ?>

<script src="<?php echo base_url(); ?>/asset/js/product_cat.js"></script>
<script>
	var stringArrColor='';
	var totalColor = $('.color_checkbox_check').length;
	$('.color_checkbox_check').each(function(index){
		if(this.checked) {
			stringArrColor +=$(this).val();

    	}
		if (index === totalColor - 1) {
        		// this is the last one
    			}else{
					stringArrColor +=',';
		}
	});
	var stringArrSize='';
	var totalSize = $('.size_checkbox_check').length;
	$('.size_checkbox_check').each(function(index){
		if(this.checked) {
			stringArrSize +=$(this).val();

    	}
		if (index === totalSize - 1) {
        		// this is the last one
    			}else{
					stringArrSize +=',';
		}
	});
	$('#size').val(stringArrSize);
	$('#color').val(stringArrColor);




	$('input[type="checkbox"]').each(function(index){
		if(this.checked) {
       		$(this).parent().find('.color_picker_class').css('border-color','#009aae');
       		$(this).parent().find('.color_picker_class').css('background','#009aae');
    	}else{
			$(this).parent().find('.color_picker_class').css('border-color','#9c9c9c');
			$(this).parent().find('.color_picker_class').css('background','transparent');
		}
	});
	$('input[type="checkbox"]').change(function() {
    	if(this.checked) {
    	   $(this).parent().find('.color_picker_class').css('border-color','#009aae');
    	   $(this).parent().find('.color_picker_class').css('background','#009aae');
    	}else{
			$(this).parent().find('.color_picker_class').css('border-color','#9c9c9c');
			$(this).parent().find('.color_picker_class').css('background','transparent');
		}
});
$('.color_checkbox_check').change(function () {
	var stringArr='';
	var total = $('.color_checkbox_check').length;
	$('.color_checkbox_check').each(function(index){
		if(this.checked) {
       		stringArr +=$(this).val();

    	}
		if (index === total - 1) {
        		// this is the last one
    			}else{
					stringArr +=',';
		}
	});
	$('#color').val(stringArr);
});
$('.size_checkbox_check').change(function () {
	var stringArr='';
	var total = $('.size_checkbox_check').length;
	$('.size_checkbox_check').each(function(index){
		if(this.checked) {
       		stringArr +=$(this).val();

    	}
		if (index === total - 1) {
        		// this is the last one
    			}else{
					stringArr +=',';
		}
	});
	$('#size').val(stringArr);
});
$("#image").change(function () {
	
	if (this.files && this.files[0]) {
		
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview').attr('src', e.target.result);
		}
		reader.readAsDataURL(this.files[0]);
	}
});
$("#image2").change(function () {

	if (this.files && this.files[0]) {
		
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview2').attr('src', e.target.result);
		}
		reader.readAsDataURL(this.files[0]);
	}
});
$("#image3").change(function () {

	if (this.files && this.files[0]) {
		
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview3').attr('src', e.target.result);
		}
		reader.readAsDataURL(this.files[0]);
	}
});
$("#image4").change(function () {

	if (this.files && this.files[0]) {
		
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview4').attr('src', e.target.result);
		}
		reader.readAsDataURL(this.files[0]);
	}
});
$("#image5").change(function () {

	if (this.files && this.files[0]) {
		
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#preview5').attr('src', e.target.result);
		}
		reader.readAsDataURL(this.files[0]);
	}
});

$(".remove_this_image").click(function () {
	oldImg=$(this).parent().find('img').attr('src');
	if(oldImg.includes("profile.png")){return false;}
	$(this).parent().find('img').attr('src','<?php echo base_url();?>/asset/images/profile.png');
	$(this).parent().find('input[type=file]').val('');
	$(this).parent().find('input[type=text]').val('1');
	return false;
});
</script>
<?= $this->endsection() ?>


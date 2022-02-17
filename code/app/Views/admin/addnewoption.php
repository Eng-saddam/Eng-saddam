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

?>
	<!-- BEGIN Portlet -->
	<div class="portlet">
		<div class="portlet-header portlet-header-bordered">
			<h3 class="portlet-title"><?php echo $dictionary[195]; ?></h3>

		</div>
		<div class="portlet-body">
        <form autocomplete="off" action="<?php ?><?php echo base_url(); ?>/Settings/" method="post" enctype="multipart/form-data">
			<!-- BEGIN Tables -->
            <div class="row">
    
                    
				<div class="col-md-6">
            	    <div class="form-group">
            	    		<div class="float-label float-label-lg">
            	    			<input type="text" id="option_ar_title" name="option_ar_title" class="form-control form-control-lg" placeholder="<?php echo $dictionary[191]; ?>">
            	    			<label style="pointer-events: none;" for="option_ar_title"><?php echo $dictionary[191]; ?> <span class="requierd_field">*</span></label>
            	    		</div>
            	    </div>
            	</div>
                    
                    
                <div class="col-md-6">
                	<div class="form-group">
                			<div class="float-label float-label-lg">
                				<input style="direction: ltr;" type="text" id="option_title" name="option_title" class="form-control form-control-lg" placeholder="<?php echo $dictionary[192]; ?>">
                				<label style="pointer-events: none;" for="option_title"><?php echo $dictionary[192]; ?> <span class="requierd_field">*</span></label>
                			</div>
                	</div>
                </div>

          

                <div class="col-md-6">
                	<div class="form-group">
                			<div class="float-label float-label-lg">
                	      <select name="main_cat" id="main_cat" class="form-control custom-select dropdown_lg_custom">
						  <option value="0"><?= $dictionary[201]; ?></option>
                	      <?php foreach($main_cats as $main_cat) :?>
                	      <option value="<?= $main_cat['id'] ?>"><?= $main_cat['name'] ?></option>
                	      <?php endforeach; ?>
                	      </select>
						
                		    <label style="pointer-events: none;" for="main_cat"><?php echo $dictionary[78]; ?></label>
                			</div>
                	</div>
                </div>
                    
                    
                <div class="col-md-6">
                    <div class="form-group">
                    		<div class="float-label float-label-lg">
                          <select name="sub_cat" id="sub_cat" class="form-control custom-select dropdown_lg_custom">
                          <option value="0"><?php echo $dictionary[201]; ?></option>
                          </select>

                    	    <label style="pointer-events: none;" for="sub_cat"><?php echo $dictionary[79]; ?></label>
                    		</div>
                    </div>
                </div>
                    
				<div class="col-md-6">
                	<div class="form-group">
                			<div class="float-label float-label-lg">
                	      <select name="main_cat" id="feature_type" class="form-control custom-select dropdown_lg_custom">
                	      <option value="text"><?php echo $dictionary[196]; ?></option>
                	      <option value="number"><?php echo $dictionary[197]; ?></option>
                	      <option value="dropdown"><?php echo $dictionary[198]; ?></option>
                	      </select>
							
                		    <label style="pointer-events: none;" for="main_cat"><?php echo $dictionary[199]; ?></label>
                			</div>
                	</div>
                </div>

                <div class="col-md-6 others_options_div">
                	<div class="form-group">
                		<!-- BEGIN Custom Switch -->
                		<div class="custom-control custom-switch">
                			<input type="checkbox" class="custom-control-input " id="searchFilter_ShowHide">
                			<label class="custom-control-label" for="searchFilter_ShowHide"><?php echo $dictionary[200]; ?></label>
                		</div>
                		<!-- END Custom Switch -->
                	</div>
                </div>

                   
                

            </div>

                    
            
            <div class="row others_options_div option_dinamic_add">        
                <div class="col-6" style="margin-top: 10px;">
                	<div class="form-group">
                		<div class="float-label float-label-lg">
                			<input type="text" id="option_ar_number_1" name="option_ar_number_1" class="form-control form-control-lg" placeholder="<?php echo $dictionary[189]; ?> 1">
                			<label style="pointer-events: none;" for="option_ar_number_1"><?php echo $dictionary[189]; ?> 1 <span class="requierd_field">*</span></label>
                			<button class="btn btn-primary btn-icon" id="add_new_option_btn">
                				<i class="fa fa-plus"></i>
                			</button>
                			<button class="btn btn-label-danger btn-icon remove_option_class">
                					<i class="fa fa-minus"></i>
                			</button>
                		</div>
                	</div>
                </div>
                <div class="col-6" style="margin-top: 10px;">
                	<div class="form-group">
                		<div class="float-label float-label-lg">
                			<input style="direction: ltr;" type="text" id="option_number_1" name="option_number_1" class="form-control form-control-lg" placeholder="<?php echo $dictionary[190]; ?> 1">
                			<label style="pointer-events: none;" for="option_number_1"><?php echo $dictionary[190]; ?> 1 <span class="requierd_field">*</span></label>
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
<!-- END Tables -->
	</div>
</div>
<!-- END Portlet -->


                            <?= $this->endsection() ?>

<?= $this->section('js') ?>
<script src="<?php echo base_url(); ?>/asset/js/product_cat.js"></script>
<script>

$('#feature_type').change(function () {
	if($(this).val()=='dropdown') {
        $('.others_options_div').css('display','flex');
    	}else{
			$('.others_options_div').hide('slow');
		}
});


$('body').delegate('#add_new_option_btn', 'click', function () {
	lastIdNum=$('[id^=option_number_]').length;
	if(lastIdNum>19){return false;}
	$('.option_dinamic_add').append(`
	<div class="col-6">
	<div class="form-group">
		<div class="float-label float-label-lg">
			<input type="text" id="option_ar_number_${lastIdNum+1}" name="option_ar_number_${lastIdNum+1}" class="form-control form-control-lg" placeholder="<?php echo $dictionary[189]; ?> ${lastIdNum+1}">
			<label style="pointer-events: none;" for="option_ar_number_${lastIdNum+1}"><?php echo $dictionary[189]; ?> ${lastIdNum+1} <span class="requierd_field">*</span></label>
		</div>
	</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<div class="float-label float-label-lg">
				<input style="direction: ltr;" type="text" id="option_number_${lastIdNum+1}" name="option_number_${lastIdNum+1}" class="form-control form-control-lg" placeholder="<?php echo $dictionary[190]; ?> ${lastIdNum+1}">
				<label style="pointer-events: none;" for="option_number_${lastIdNum+1}"><?php echo $dictionary[190]; ?> ${lastIdNum+1} <span class="requierd_field">*</span></label>
			</div>
		</div>
	</div>`);

	return false;
});

$('body').delegate('.remove_option_class', 'click', function () {
	all_option_num=$(this).parent().parent().parent().parent().find('[id^=option_ar_number_]').length;
	if(all_option_num=='1'){return false;}
	$($(`#option_ar_number_${all_option_num}`)).parent().parent().parent().next().remove();
	$($(`#option_ar_number_${all_option_num}`)).parent().parent().parent().remove();
	return false;
});
</script>
<?= $this->endsection() ?>



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
									<h3 class="portlet-title"><?php echo $dictionary[153]; ?></h3>
									<a href="addcat"> <button style="margin-top: 10px;" class="btn btn-flat-success"> <?php echo $dictionary[21]; ?> <i class="fa fa-plus mr-2"></i></button></a>

								</div>
								
								<div class="portlet-body">
									<!-- BEGIN Tables -->
									<table class="table table-striped table-hover table-responsive mb-0">
										<thead>
											<tr>
											  <th><?php echo $dictionary[22]; ?></th>												
                                              <th><?php echo $dictionary[27]; ?>  <?php ?></th>
                                              <th> <?php echo $dictionary[28]; ?></th>
                                              <th><?php echo $dictionary[75]; ?></th>                     
                                              <th><?php echo $dictionary[15]; ?></th>                     
                                              <th><?php echo $dictionary[38]; ?></th>                     
                                              <th><?php echo $dictionary[23]; ?></th>
											</tr>
										</thead>
										<tbody>

            </tbody>
									</table>
									<!-- END Tables -->
								</div>
							</div>
							<!-- END Portlet -->



<?= $this->endsection() ?>



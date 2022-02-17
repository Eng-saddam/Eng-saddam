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
		<h3 class="portlet-title"><?php echo $dictionary[39]; ?></h3>
</div>
<div class="content">
<div class="container-fluid">

    <div class="row">
		<div class="col-12">
			<!-- BEGIN Portlet -->
			<div class="portlet">
				<!-- BEGIN Widget -->
				<div class="widget10 widget10-vertical-md">
					<div class="widget10-item">
						<div class="widget10-content">
							<h2 class="widget10-title">$27,639</h2>
							<span class="widget10-subtitle">Total revenue</span>
						</div>
						<div class="widget10-addon">
							<!-- BEGIN Avatar -->
							<div class="avatar avatar-label-info avatar-circle widget8-avatar m-0">
								<div class="avatar-display">
									<i class="fa fa-dollar-sign"></i>
								</div>
							</div>
							<!-- END Avatar -->
						</div>
					</div>
					<div class="widget10-item">
						<div class="widget10-content">
							<h2 class="widget10-title">87,123</h2>
							<span class="widget10-subtitle">Order received</span>
						</div>
						<div class="widget10-addon">
							<!-- BEGIN Avatar -->
							<div class="avatar avatar-label-primary avatar-circle widget8-avatar m-0">
								<div class="avatar-display">
									<i class="fa fa-boxes"></i>
								</div>
							</div>
							<!-- END Avatar -->
						</div>
					</div>
					<div class="widget10-item">
						<div class="widget10-content">
							<h2 class="widget10-title">237</h2>
							<span class="widget10-subtitle">New users</span>
						</div>
						<div class="widget10-addon">
							<!-- BEGIN Avatar -->
							<div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
								<div class="avatar-display">
									<i class="fa fa-users"></i>
								</div>
							</div>
							<!-- END Avatar -->
						</div>
					</div>
					<div class="widget10-item">
						<div class="widget10-content">
							<h2 class="widget10-title">5,726</h2>
							<span class="widget10-subtitle">Unique visits</span>
						</div>
						<div class="widget10-addon">
							<!-- BEGIN Avatar -->
							<div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
								<div class="avatar-display">
									<i class="fa fa-link"></i>
								</div>
							</div>
							<!-- END Avatar -->
						</div>
					</div>
				</div>
				<!-- END Widget -->
			</div>
			<!-- END Portlet -->
		</div>
	</div>



    <div class="row">
    	<div class="col-xl-12">
    		<div class="row portlet-row-fill-md h-100">
    			<div class="col-md-12 col-xl-12">
    				<!-- BEGIN Portlet -->
    				<div class="portlet">
    					<div class="portlet-header">
    						<div class="portlet-icon">
    							<i class="fa fa-exchange-alt"></i>
    						</div>
    						<h3 class="portlet-title">Revenue change</h3>
    						<div class="portlet-addon">
    							<!-- BEGIN Dropdown -->
    							<div class="dropdown">
    								<button class="btn btn-label-primary btn-icon" data-toggle="dropdown" aria-expanded="false">
    									<i class="fa fa-ellipsis-h"></i>
    								</button>
    								<div class="dropdown-menu dropdown-menu-left dropdown-menu-animated" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
    									<a class="dropdown-item" href="#">
    										<div class="dropdown-icon">
    											<i class="fa fa-poll"></i>
    										</div>
    										<span class="dropdown-content">Report</span>
    									</a>
    									<a class="dropdown-item" href="#">
    										<div class="dropdown-icon">
    											<i class="fa fa-chart-pie"></i>
    										</div>
    										<span class="dropdown-content">Charts</span>
    									</a>
    									<a class="dropdown-item" href="#">
    										<div class="dropdown-icon">
    											<i class="fa fa-chart-line"></i>
    										</div>
    										<span class="dropdown-content">Statistics</span>
    									</a>
    									<div class="dropdown-divider"></div>
    									<a class="dropdown-item" href="#">
    										<div class="dropdown-icon">
    											<i class="fa fa-cog"></i>
    										</div>
    										<span class="dropdown-content">Settings</span>
    									</a>
    								</div>
    							</div>
    							<!-- END Dropdown -->
    						</div>
    					</div>
    					<div class="portlet-body" style="position: relative;">
    						<div class="row mt-4">
    							<div class="col-6">
    								<!-- BEGIN Widget -->
    								<div class="widget4 mb-3">
    									<div class="widget4-group">
    										<div class="widget4-display">
    											<h6 class="widget4-subtitle">New York</h6>
    										</div>
    										<div class="widget4-addon">
    											<h6 class="widget4-subtitle">60%</h6>
    										</div>
    									</div>
    									<div class="progress progress-sm">
    										<div class="progress-bar bg-warning" style="width: 60%"></div>
    									</div>
    								</div>
    								<!-- END Widget -->
    								<!-- BEGIN Widget -->
    								<div class="widget4">
    									<div class="widget4-group">
    										<div class="widget4-display">
    											<h6 class="widget4-subtitle">Sydney</h6>
    										</div>
    										<div class="widget4-addon">
    											<h6 class="widget4-subtitle">90%</h6>
    										</div>
    									</div>
    									<div class="progress progress-sm">
    										<div class="progress-bar bg-success" style="width: 90%"></div>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    							<div class="col-6">
    								<!-- BEGIN Widget -->
    								<div class="widget4 mb-3">
    									<div class="widget4-group">
    										<div class="widget4-display">
    											<h6 class="widget4-subtitle">San Francisco</h6>
    										</div>
    										<div class="widget4-addon">
    											<h6 class="widget4-subtitle">75%</h6>
    										</div>
    									</div>
    									<div class="progress progress-sm">
    										<div class="progress-bar bg-primary" style="width: 75%"></div>
    									</div>
    								</div>
    								<!-- END Widget -->
    								<!-- BEGIN Widget -->
    								<div class="widget4">
    									<div class="widget4-group">
    										<div class="widget4-display">
    											<h6 class="widget4-subtitle">Tokyo</h6>
    										</div>
    										<div class="widget4-addon">
    											<h6 class="widget4-subtitle">55%</h6>
    										</div>
    									</div>
    									<div class="progress progress-sm">
    										<div class="progress-bar bg-danger" style="width: 55%"></div>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    						</div>
    					<div class="resize-triggers"><div class="expand-trigger"><div style="width: 525px; height: 416px;"></div></div><div class="contract-trigger"></div></div></div>
    				</div>
    				<!-- END Portlet -->
    			</div>

    		</div>
    	</div>

    	<div class="col-xl-12">
    		<div class="row portlet-row-fill-md h-100">
    			<div class="col-md-6 col-xl-6">
    				<!-- BEGIN Portlet -->
    				<div class="portlet portlet-primary">
    					<div class="portlet-header">
    						<div class="portlet-icon">
    							<i class="fa fa-chalkboard"></i>
    						</div>
    						<h3 class="portlet-title">Company summary</h3>
    						<div class="portlet-addon">
    							<!-- BEGIN Dropdown -->
    							<div class="dropdown">
    								<button class="btn btn-label-light dropdown-toggle" data-toggle="dropdown">June, 2020</button>
    								<div class="dropdown-menu dropdown-menu-left dropdown-menu-animated">
    									<a class="dropdown-item" href="#">
    										<div class="dropdown-icon">
    											<i class="fa fa-poll"></i>
    										</div>
    										<span class="dropdown-content">Report</span>
    									</a>
    									<a class="dropdown-item" href="#">
    										<div class="dropdown-icon">
    											<i class="fa fa-chart-pie"></i>
    										</div>
    										<span class="dropdown-content">Charts</span>
    									</a>
    									<a class="dropdown-item" href="#">
    										<div class="dropdown-icon">
    											<i class="fa fa-chart-line"></i>
    										</div>
    										<span class="dropdown-content">Statistics</span>
    									</a>
    									<div class="dropdown-divider"></div>
    									<a class="dropdown-item" href="#">
    										<div class="dropdown-icon">
    											<i class="fa fa-cog"></i>
    										</div>
    										<span class="dropdown-content">Settings</span>
    									</a>
    								</div>
    							</div>
    							<!-- END Dropdown -->
    						</div>
    					</div>
    					<div class="portlet-body">
    						<!-- BEGIN Portlet -->
    						<div class="portlet mb-2">
    							<div class="portlet-body">
    								<!-- BEGIN Widget -->
    								<div class="widget5">
    									<h4 class="widget5-title">Monthly income</h4>
    									<div class="widget5-group">
    										<div class="widget5-item">
    											<span class="widget5-info">Total</span>
    											<span class="widget5-value">$65,880</span>
    										</div>
    										<div class="widget5-item">
    											<span class="widget5-info">Change</span>
    											<span class="widget5-value text-success">+15%</span>
    										</div>
    										<div class="widget5-item">
    											<span class="widget5-info">Sales</span>
    											<span class="widget5-value">554</span>
    										</div>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    						</div>
    						<!-- END Portlet -->
    						<!-- BEGIN Portlet -->
    						<div class="portlet mb-2">
    							<div class="portlet-body">
    								<!-- BEGIN Widget -->
    								<div class="widget5">
    									<h4 class="widget5-title">Employee amount</h4>
    									<div class="widget5-group">
    										<div class="widget5-item">
    											<span class="widget5-info">Total</span>
    											<span class="widget5-value">1250</span>
    										</div>
    										<div class="widget5-item">
    											<span class="widget5-info">Change</span>
    											<span class="widget5-value text-danger">-2%</span>
    										</div>
    										<div class="widget5-item">
    											<span class="widget5-info">Active</span>
    											<span class="widget5-value">1120</span>
    										</div>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    						</div>
    						<!-- END Portlet -->
    						<!-- BEGIN Portlet -->
    						<div class="portlet mb-2">
    							<div class="portlet-body">
    								<!-- BEGIN Widget -->
    								<div class="widget5">
    									<h4 class="widget5-title">Product sales</h4>
    									<div class="widget5-group">
    										<div class="widget5-item">
    											<span class="widget5-info">Total</span>
    											<span class="widget5-value">2350</span>
    										</div>
    										<div class="widget5-item">
    											<span class="widget5-info">Change</span>
    											<span class="widget5-value text-success">+10%</span>
    										</div>
    										<div class="widget5-item">
    											<span class="widget5-info">Last report</span>
    											<span class="widget5-value">2220</span>
    										</div>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    						</div>
    						<!-- END Portlet -->
    						<!-- BEGIN Portlet -->
    						<div class="portlet mb-0">
    							<div class="portlet-body">
    								<!-- BEGIN Widget -->
    								<div class="widget5">
    									<h4 class="widget5-title">Monthly profit</h4>
    									<div class="widget5-group">
    										<div class="widget5-item">
    											<span class="widget5-info">Total</span>
    											<span class="widget5-value">$502,100</span>
    										</div>
    										<div class="widget5-item">
    											<span class="widget5-info">Change</span>
    											<span class="widget5-value text-success">+15%</span>
    										</div>
    										<div class="widget5-item">
    											<span class="widget5-info">Last month</span>
    											<span class="widget5-value">$453,000</span>
    										</div>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    						</div>
    						<!-- END Portlet -->
    					</div>
    					<div class="portlet-footer text-left">
    						<button class="btn btn-label-light">View all packages</button>
    					</div>
    				</div>
    				<!-- END Portlet -->
    			</div>
    			<div class="col-md-6 col-xl-6">
    				<div class="row portlet-row-fill-sm">
    					<div class="col-sm-6">
    						<!-- BEGIN Portlet -->
    						<div class="portlet">
    							<div class="portlet-header">
    								<h3 class="portlet-title">Features</h3>
    								<div class="portet-addon">
    									<!-- BEGIN Dropdown -->
    									<div class="dropdown">
    										<button class="btn btn-text-secondary btn-icon" data-toggle="dropdown">
    											<i class="fa fa-ellipsis-h"></i>
    										</button>
    										<div class="dropdown-menu dropdown-menu-left dropdown-menu-animated">
    											<a class="dropdown-item" href="#">
    												<div class="dropdown-icon">
    													<i class="fa fa-poll"></i>
    												</div>
    												<span class="dropdown-content">Report</span>
    											</a>
    											<a class="dropdown-item" href="#">
    												<div class="dropdown-icon">
    													<i class="fa fa-chart-pie"></i>
    												</div>
    												<span class="dropdown-content">Charts</span>
    											</a>
    											<a class="dropdown-item" href="#">
    												<div class="dropdown-icon">
    													<i class="fa fa-chart-line"></i>
    												</div>
    												<span class="dropdown-content">Statistics</span>
    											</a>
    										</div>
    									</div>
    									<!-- END Dropdown -->
    								</div>
    							</div>
    							<div class="portlet-body">
    								<!-- BEGIN Widget -->
    								<div class="widget8">
    									<div class="widget8-content">
    										<h4 class="widget8-highlight widget8-highlight-lg text-primary">34</h4>
    										<h6 class="widget8-title">Proposals</h6>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    							<div class="portlet-footer">
    								<span class="text-muted">Completed: <strong>8</strong>
    								</span>
    							</div>
    						</div>
    						<!-- END Portlet -->
    						<!-- BEGIN Portlet -->
    						<div class="portlet">
    							<div class="portlet-body">
    								<!-- BEGIN Widget -->
    								<div class="widget8">
    									<div class="widget8-addon" data-toggle="tooltip" data-placement="left" title="" data-original-title="New users for last month">
    										<i class="fa fa-question"></i>
    									</div>
    									<div class="widget8-content">
    										<!-- BEGIN Avatar -->
    										<div class="avatar avatar-label-primary avatar-circle widget8-avatar">
    											<div class="avatar-display">
    												<i class="fa fa-users"></i>
    											</div>
    										</div>
    										<!-- END Avatar -->
    										<h4 class="widget8-highlight">35.2K</h4>
    										<h6 class="widget8-title">Users</h6>
    										<span class="widget8-subtitle text-success">
    											<i class="fa fa-caret-up"></i> 0.2% </span>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    						</div>
    						<!-- END Portlet -->
    					</div>
    					<div class="col-sm-6">
    						<!-- BEGIN Portlet -->
    						<div class="portlet">
    							<div class="portlet-header">
    								<h3 class="portlet-title">Bug</h3>
    								<div class="portet-addon">
    									<!-- BEGIN Dropdown -->
    									<div class="dropdown">
    										<button class="btn btn-text-secondary btn-icon" data-toggle="dropdown">
    											<i class="fa fa-ellipsis-h"></i>
    										</button>
    										<div class="dropdown-menu dropdown-menu-left dropdown-menu-animated">
    											<a class="dropdown-item" href="#">
    												<div class="dropdown-icon">
    													<i class="fa fa-poll"></i>
    												</div>
    												<span class="dropdown-content">Report</span>
    											</a>
    											<a class="dropdown-item" href="#">
    												<div class="dropdown-icon">
    													<i class="fa fa-chart-pie"></i>
    												</div>
    												<span class="dropdown-content">Charts</span>
    											</a>
    											<a class="dropdown-item" href="#">
    												<div class="dropdown-icon">
    													<i class="fa fa-chart-line"></i>
    												</div>
    												<span class="dropdown-content">Statistics</span>
    											</a>
    										</div>
    									</div>
    									<!-- END Dropdown -->
    								</div>
    							</div>
    							<div class="portlet-body">
    								<!-- BEGIN Widget -->
    								<div class="widget8">
    									<div class="widget8-content">
    										<h4 class="widget8-highlight widget8-highlight-lg text-danger">21</h4>
    										<h6 class="widget8-title">Report</h6>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    							<div class="portlet-footer">
    								<span class="text-muted">Fixed: <strong>4</strong>
    								</span>
    							</div>
    						</div>
    						<!-- END Portlet -->
    						<!-- BEGIN Portlet -->
    						<div class="portlet">
    							<div class="portlet-body">
    								<!-- BEGIN Widget -->
    								<div class="widget8">
    									<div class="widget8-content">
    										<!-- BEGIN Avatar -->
    										<div class="avatar avatar-label-info avatar-circle widget8-avatar">
    											<div class="avatar-display">
    												<i class="fa fa-dollar-sign"></i>
    											</div>
    										</div>
    										<!-- END Avatar -->
    										<h4 class="widget8-highlight">$23K</h4>
    										<h6 class="widget8-title">Profit</h6>
    										<span class="widget8-subtitle text-danger">
    											<i class="fa fa-caret-down"></i> 1.4% </span>
    									</div>
    								</div>
    								<!-- END Widget -->
    							</div>
    						</div>
    						<!-- END Portlet -->
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

</div>
</div>
<?= $this->endsection() ?>

<?= $this->section('js') ?>


<script>

</script>
<?= $this->endsection() ?>
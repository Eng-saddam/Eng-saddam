<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

<?php
$browseralign;
if(isset($_COOKIE["browseralign"])){

if(htmlspecialchars($_COOKIE["browseralign"])=='left' ){
	$browseralign='left';
?>
  	<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/rtl-core.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/rtl-vendor.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/rtl-second-style.css" rel="stylesheet">
<?php	
}else if(htmlspecialchars($_COOKIE["browseralign"])=='right'){
	$browseralign='right';
?>
  	<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/ltr-core.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/ltr-vendor.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/ltr-second-style.css" rel="stylesheet">
<?php	
}
?>

<?php	
}else{
	$browseralign='left';
?>
  <link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/rtl-core.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/rtl-vendor.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/asset/admin/asset_admin/build/styles/rtl-second-style.css" rel="stylesheet">
<?php
};
?>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/admin/fonts/google/font.css">
	<link href="<?php echo base_url(); ?>/asset/admin/asset_admin/images/favicon.png" rel="shortcut icon" type="image/x-icon">
	<title><?php if(isset($page_title)){echo $page_title;}else{echo "MenaItech Portal";} ?></title>
  <?php 
if(session()->get('islogin') == "" || session()->get('type') == "0"){
 ?>
   <script>
     window.location.href = "<?php echo base_url(); ?>/login";
     </script>
<?php
}


?>
</head>

<body class="theme-light preload-active aside-active aside-mobile-minimized aside-desktop-maximized" id="fullscreen">
	<!-- BEGIN Preload -->
	<div class="preload">
		<div class="preload-dialog">
			<!-- BEGIN Spinner -->
			<div class="spinner-border text-primary preload-spinner"></div>
			<!-- END Spinner -->
		</div>
	</div>
	<!-- END Preload -->
	<!-- BEGIN Page Holder -->
	<div class="holder">
		<!-- BEGIN Aside -->
		<div class="aside">
			<div class="aside-header">
				<h3 class="aside-title"><?php echo $dictionary[55]; ?></h3>
				<div class="aside-addon">
					<button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside">
						<i class="fa fa-times aside-icon-minimize"></i>
						<i class="fa fa-thumbtack aside-icon-maximize"></i>
					</button>
				</div>
			</div>
			<div class="aside-body" data-simplebar="data-simplebar">
				<!-- BEGIN Menu -->
				<div class="menu">
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/Dashboard" data-menu-path="<?php echo base_url(); ?>/Admin/Dashboard" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-desktop"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[39]; ?></span>
						</a>
					</div>
					<!-- BEGIN Menu Section -->
					<div class="menu-section">
						<div class="menu-section-icon">
							<i class="fa fa-ellipsis-h"></i>
						</div>
						<h2 class="menu-section-text"><?php echo $dictionary[40]; ?></h2>
					</div>
					<!-- END Menu Section -->
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/products" data-menu-path="<?php echo base_url(); ?>/Admin/products" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-cart-arrow-down"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[7]; ?></span>
						</a>
					</div>

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/categories" data-menu-path="<?php echo base_url(); ?>/Admin/categories" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-clone"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[34]; ?></span>
						</a>
					</div>

					          <!-- BEGIN Menu Section -->
							  <div class="menu-section">
						<div class="menu-section-icon">
							<i class="fa fa-ellipsis-h"></i>
						</div>
						<h2 class="menu-section-text"><?php echo $dictionary[155]; ?></h2>
					</div>
					<!-- END Menu Section -->
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/myClients" data-menu-path="<?php echo base_url(); ?>/Admin/myClients" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-grin"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[149]; ?></span>
						</a>
					</div>
					<!-- END Menu Section -->
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/Orders/today" data-menu-path="<?php echo base_url(); ?>/Admin/Orders/today" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-shopping-basket"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[42]; ?></span>
						</a>
					</div>

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/Orders/allOrders" data-menu-path="<?php echo base_url(); ?>Admin/Orders/allOrders" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-list-alt"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[43]; ?> </span>
						</a>
					</div>

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/Orders/deliveryOrders" data-menu-path="<?php echo base_url(); ?>/Admin/Orders/deliveryOrders" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-truck"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[44]; ?> </span>
						</a>
					</div>

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/Orders/canceledOrders" data-menu-path="<?php echo base_url(); ?>/Admin/Orders/canceledOrders" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-ban"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[45]; ?></span>
						</a>
					</div>


					<!-- BEGIN Menu Section -->
					<div class="menu-section">
						<div class="menu-section-icon">
							<i class="fa fa-ellipsis-h"></i>
						</div>
						<h2 class="menu-section-text"><?php echo $dictionary[152]; ?></h2>
					</div>
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/Admin/administrativeUsers" data-menu-path="<?php echo base_url(); ?>/Admin/administrativeUsers" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-users-cog"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[153]; ?></span>
						</a>
					</div>
					<!-- BEGIN Menu Section -->
					<div class="menu-section">
						<div class="menu-section-icon">
							<i class="fa fa-ellipsis-h"></i>
						</div>
						<h2 class="menu-section-text"><?php echo $dictionary[154]; ?></h2>
					</div>
					<!-- END Menu Section -->
					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle">
							<div class="menu-item-icon">
								<i class="fa fa-cog"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[46]; ?></span>
							<div class="menu-item-addon">
								<i class="menu-item-caret caret"></i>
							</div>
						</button>
						<!-- BEGIN Menu Submenu -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="<?php echo base_url(); ?>/Admin/Settings" data-menu-path="<?php echo base_url(); ?>/Admin/Settings" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text"><?php echo $dictionary[49]; ?></span>
								</a>
							</div>

							<div class="menu-item">
								<a href="<?php echo base_url(); ?>/Admin/Settings/Product" data-menu-path="<?php echo base_url(); ?>/Admin/Settings/Product" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text"><?php echo $dictionary[168]; ?></span>
								</a>
							</div>

							<div class="menu-item">
								<a href="<?php echo base_url(); ?>/Admin/Settings/SocialMedia" data-menu-path="<?php echo base_url(); ?>/Admin/Settings/SocialMedia" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text"><?php echo $dictionary[133]; ?></span>
								</a>
							</div>

							<div class="menu-item">
								<a href="<?php echo base_url(); ?>/Admin/Settings/SocialMedia" data-menu-path="<?php echo base_url(); ?>/Admin/Settings/Payment" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text"><?php echo $dictionary[203]; ?></span>
								</a>
							</div>

							<div class="menu-item">
								<a href="<?php echo base_url(); ?>/Admin/Settings/SocialMedia" data-menu-path="<?php echo base_url(); ?>/Admin/Settings/Delivery" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text"><?php echo $dictionary[204]; ?></span>
								</a>
							</div>

						</div>
						<!-- END Menu Submenu -->
					</div>




					<div class="menu-item">
						<a href="<?php echo base_url(); ?>/" data-menu-path="<?php echo base_url(); ?>/" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-shopping-bag"></i>
							</div>
							<span class="menu-item-text"><?php echo $dictionary[48]; ?></span>
						</a>
					</div>

					<!-- BEGIN Menu Section -->
					<div class="menu-section">
						<div class="menu-section-icon">
							<i class="fa fa-ellipsis-h"></i>
						</div>
						<h2 class="menu-section-text"></h2>
					</div>
					<!-- END Menu Section -->



				</div>
				<!-- END Menu -->
			</div>
		</div>
		<!-- END Aside -->
		<!-- BEGIN Page Wrapper -->
		<div class="wrapper">
			<!-- BEGIN Header -->
			<div class="header">
				<!-- BEGIN Header Holder -->
				<div class="header-holder header-holder-desktop sticky-header" id="sticky-header-desktop">
					<div class="header-container container-fluid">
						<div class="header-wrap">
							<!-- BEGIN Nav -->
							<ul class="nav nav-pills">
								<!-- BEGIN Dropdown -->
								<li class="nav-item dropdown">
									<!-- <a href="#" class="nav-link active" data-toggle="dropdown">Apps</a> -->
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
										<a href="#" class="dropdown-item">
											<div class="dropdown-icon">
												<i class="fa fa-boxes"></i>
											</div>
											<span class="dropdown-content">Inventory Manager</span>
											<div class="dropdown-addon">
												<span class="badge badge-warning badge-pill">20</span>
											</div>
										</a>
										<!-- BEGIN Dropdown Submenu -->
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item">
												<div class="dropdown-icon">
													<i class="fa fa-project-diagram"></i>
												</div>
												<span class="dropdown-content">Project manager</span>
												<div class="dropdown-addon">
													<i class="caret"></i>
												</div>
											</a>
											<div class="dropdown-submenu-menu dropdown-submenu-right">
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Create project</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Delete project</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Ongoing project</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Completed project</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Urgent project</span>
												</a>
											</div>
										</div>
										<!-- END Dropdown Submenu -->
										<!-- BEGIN Dropdown Submenu -->
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item">
												<div class="dropdown-icon">
													<i class="fa fa-tasks"></i>
												</div>
												<span class="dropdown-content">Task manager</span>
												<div class="dropdown-addon">
													<i class="caret"></i>
												</div>
											</a>
											<div class="dropdown-submenu-menu dropdown-submenu-right">
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Show task</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Assign task</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Assign member</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Completed task</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Urgent task</span>
												</a>
											</div>
										</div>
										<!-- END Dropdown Submenu -->
										<a href="#" class="dropdown-item">
											<div class="dropdown-icon">
												<i class="fa fa-dollar-sign"></i>
											</div>
											<span class="dropdown-content">Invoice</span>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">
											<div class="dropdown-icon">
												<i class="fa fa-user-cog"></i>
											</div>
											<span class="dropdown-content">My Account</span>
										</a>
									</div>
								</li>
								<!-- END Dropdown -->

								
							</ul>
							<!-- END Nav -->
						</div>
						<div class="header-wrap header-wrap-block">
							<!-- BEGIN Input Group -->
							<!-- <div class="input-group-icon input-group-lg widget15-compact">
								<div class="input-group-prepend">
									<i class="fa fa-search text-primary"></i>
								</div>
								<input type="text" class="form-control" placeholder="Type to search...">
							</div> -->
							<!-- END Input Group -->
						</div>
						<div class="header-wrap">
							<!-- BEGIN Dropdown -->
							<div class="dropdown mr-2">
								<button class="btn btn-label-primary btn-icon" data-toggle="dropdown">
									<i class="far fa-bell"></i>
									<div class="btn-marker">
										<i class="marker marker-dot text-success"></i>
									</div>
								</button>
								<div class="dropdown-menu dropdown-menu-left dropdown-menu-wide dropdown-menu-animated overflow-hidden py-0 notification_style_class">
									<!-- BEGIN Portlet -->
									<div class="portlet border-0 portlet-scroll">
										<div class="portlet-header bg-primary rounded-0">
											<div class="portlet-icon text-white">
												<i class="far fa-bell"></i>
											</div>
											<h3 class="portlet-title text-white">Notification</h3>
											<div class="portlet-addon">
												<span class="badge badge-warning badge-square badge-lg">9+</span>
											</div>
										</div>
										<div class="portlet-body p-0 rounded-0" data-toggle="simplebar">
											<!-- BEGIN Rich List -->
											<div class="rich-list rich-list-action">
												<a href="#" class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar avatar-label-info">
															<div class="avatar-display">
																<i class="fa fa-file-invoice"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">New report has been received</h4>
														<span class="rich-list-subtitle">2 min ago</span>
													</div>
													<div class="rich-list-append">
														<i class="caret mx-2"></i>
													</div>
												</a>
												<a href="#" class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar avatar-label-success">
															<div class="avatar-display">
																<i class="fa fa-shopping-basket"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Last order was completed</h4>
														<span class="rich-list-subtitle">1 hrs ago</span>
													</div>
													<div class="rich-list-append">
														<i class="caret mx-2"></i>
													</div>
												</a>
												<a href="#" class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar avatar-label-danger">
															<div class="avatar-display">
																<i class="fa fa-users"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Company meeting canceled</h4>
														<span class="rich-list-subtitle">5 hrs ago</span>
													</div>
													<div class="rich-list-append">
														<i class="caret mx-2"></i>
													</div>
												</a>
												<a href="#" class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar avatar-label-warning">
															<div class="avatar-display">
																<i class="fa fa-paper-plane"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">New feedback received</h4>
														<span class="rich-list-subtitle">6 hrs ago</span>
													</div>
													<div class="rich-list-append">
														<i class="caret mx-2"></i>
													</div>
												</a>
												<a href="#" class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar avatar-label-primary">
															<div class="avatar-display">
																<i class="fa fa-download"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">New update was available</h4>
														<span class="rich-list-subtitle">1 day ago</span>
													</div>
													<div class="rich-list-append">
														<i class="caret mx-2"></i>
													</div>
												</a>
												<a href="#" class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar avatar-label-success">
															<div class="avatar-display">
																<i class="fa fa-asterisk"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Your password was changed</h4>
														<span class="rich-list-subtitle">2 day ago</span>
													</div>
													<div class="rich-list-append">
														<i class="caret mx-2"></i>
													</div>
												</a>
												<a href="#" class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar avatar-label-info">
															<div class="avatar-display">
																<i class="fa fa-user-plus"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">New account has been registered</h4>
														<span class="rich-list-subtitle">5 day ago</span>
													</div>
													<div class="rich-list-append">
														<i class="caret mx-2"></i>
													</div>
												</a>
											</div>
											<!-- END Rich List -->
										</div>
									</div>
									<!-- END Portlet -->
								</div>
							</div>
							<!-- END Dropdown -->
							<!-- BEGIN Dropdown -->
							<div class="dropdown mr-2">
								<button class="btn btn-label-primary btn-icon" data-toggle="dropdown">
									<i class="far fa-comments"></i>
									<div class="btn-marker">
										<i class="marker marker-dot text-success"></i>
									</div>
								</button>
								<div class="dropdown-menu dropdown-menu-left dropdown-menu-wide dropdown-menu-animated overflow-hidden py-0">
									<!-- BEGIN Portlet -->
									<div class="portlet portlet-scroll border-0">
										<div class="portlet-header portlet-header-bordered rounded-0">
											<!-- BEGIN Rich List Item -->
											<div class="rich-list-item w-100 p-0">
												<div class="rich-list-prepend">
													<!-- BEGIN Avatar -->
													<div class="avatar avatar-circle">
														<div class="avatar-display">
															<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
														</div>
													</div>
													<!-- END Avatar -->
												</div>
												<div class="rich-list-content">
													<h3 class="rich-list-title">Garrett Winters</h3>
													<span class="rich-list-subtitle">UX Designer</span>
												</div>
											</div>
											<!-- END Rich List Item -->
										</div>
										<div class="portlet-body" data-toggle="simplebar">
											<!-- BEGIN Chat -->
											<div class="chat">
												<div class="chat-item chat-item-right">
													<div class="chat-content">
														<p class="chat-bubble chat-bubble-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, eius.</p>
														<p class="chat-bubble chat-bubble-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, eius.</p>
														<span class="chat-time">3 min ago</span>
													</div>
												</div>
												<div class="chat-item chat-item-left">
													<div class="chat-content">
														<p class="chat-bubble">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, eius.</p>
														<span class="chat-time">2 min ago</span>
													</div>
												</div>
												<div class="chat-item chat-item-right">
													<div class="chat-content">
														<p class="chat-bubble chat-bubble-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, eius.</p>
														<span class="chat-time">1 min ago</span>
													</div>
												</div>
											</div>
											<!-- END Chat -->
										</div>
										<div class="portlet-footer portlet-footer-bordered rounded-0">
											<!-- BEGIN Input Group -->
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Type...">
												<div class="input-group-append">
													<button class="btn btn-primary btn-icon">
														<i class="fa fa-paper-plane"></i>
													</button>
												</div>
											</div>
											<!-- END Input Group -->
										</div>
									</div>
									<!-- END Portlet -->
								</div>
							</div>
							<!-- END Dropdown -->
							<button class="btn btn-label-primary btn-icon mr-2" data-toggle="sidemenu" data-target="#sidemenu-todo">
								<i class="far fa-address-book"></i>
							</button>
							<button class="btn btn-label-primary btn-icon mr-2" data-toggle="sidemenu" data-target="#sidemenu-settings">
								<i class="far fa-list-alt"></i>
							</button>
							<!-- BEGIN Dropdown -->
							<div class="dropdown mr-2">
								<button class="btn btn-flat-primary widget13" data-toggle="dropdown">
									<div class="widget13-text"> <?php echo $dictionary[52]; ?> <strong><?= session()->get('first_name') ?></strong>
									</div>
									<!-- BEGIN Avatar -->
									<div class="avatar avatar-info widget13-avatar">
										<div class="avatar-display">
											<i class="fa fa-user-alt"></i>
										</div>
									</div>
									<!-- END Avatar -->
								</button>
								<div class="dropdown-menu dropdown-menu-wide dropdown-menu-left dropdown-menu-animated overflow-hidden py-0">
									<!-- BEGIN Portlet -->
									<div class="portlet border-0">
										<div class="portlet-header bg-primary rounded-0">
											<!-- BEGIN Rich List Item -->
											<div class="rich-list-item w-100 p-0">
												<div class="rich-list-prepend">
													<!-- BEGIN Avatar -->
													<div class="avatar avatar-circle">
														<div class="avatar-display">
															<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
														</div>
													</div>
													<!-- END Avatar -->
												</div>
												<div class="rich-list-content">
													<h3 class="rich-list-title text-white"><?= session()->get('first_name') ?></h3>
													<span class="rich-list-subtitle text-white"><?= session()->get('email') ?></span>
												</div>

											</div>
											<!-- END Rich List Item -->
										</div>
										<div class="portlet-body p-0">
											<!-- BEGIN Grid Nav -->
											<div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
												<div class="grid-nav-row">
													<a href="<?php echo base_url(); ?>/Admin/UserSettings" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-address-card"></i>
														</div>
														<span class="grid-nav-content"><?php echo $dictionary[144]; ?></span>
													</a>
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-comments"></i>
														</div>
														<span class="grid-nav-content"><?php echo $dictionary[145]; ?></span>
													</a>
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-bell"></i>
														</div>
														<span class="grid-nav-content"><?php echo $dictionary[146]; ?></span>
													</a>
												</div>
											</div>
											<!-- END Grid Nav -->
										</div>
										<div class="portlet-footer portlet-footer-bordered rounded-0">
											<a  style="width:100%;" href="<?php echo base_url(); ?>/logout" data-menu-path="<?php echo base_url(); ?>/logout" class="btn btn-label-signout"><?php echo $dictionary[3]; ?></a>
										</div>
									</div>
									<!-- END Portlet -->
								</div>
							</div>
							<!-- END Dropdown -->
						</div>
					</div>
				</div>
				<!-- END Header Holder -->
				<!-- BEGIN Header Holder -->
				<div class="header-holder header-holder-mobile sticky-header" id="sticky-header-mobile">
					<div class="header-container container-fluid">
						<div class="header-wrap">
							<button class="btn btn-flat-primary btn-icon" data-toggle="aside">
								<i class="fa fa-bars"></i>
							</button>
						</div>
						<div class="header-wrap header-wrap-block justify-content-start px-3">
							<!-- <h4 class="header-brand">Panely</h4> -->
						</div>
						<div class="header-wrap">
							<button class="btn btn-flat-primary btn-icon todo_class_style" data-toggle="sidemenu" data-target="#sidemenu-todo">
								<i class="far fa-address-book"></i>
							</button>
							
							<!-- BEGIN Dropdown -->
							<div class="dropdown mr-2">
								<button class="btn btn-flat-primary widget13" data-toggle="dropdown">
									<div class="widget13-text"> <?php echo $dictionary[52]; ?> <strong><?= session()->get('first_name') ?></strong>
									</div>
									<!-- BEGIN Avatar -->
									<div class="avatar avatar-info widget13-avatar">
										<div class="avatar-display">
											<i class="fa fa-user-alt"></i>
										</div>
									</div>
									<!-- END Avatar -->
								</button>
								<div class="dropdown-menu dropdown-menu-wide dropdown-menu-right dropdown-menu-animated overflow-hidden py-0">
									<!-- BEGIN Portlet -->
									<div class="portlet border-0">
										<div class="portlet-header bg-primary rounded-0">
											<!-- BEGIN Rich List Item -->
											<div class="rich-list-item w-100 p-0">
												<div class="rich-list-prepend">
													<!-- BEGIN Avatar -->
													<div class="avatar avatar-circle">
														<div class="avatar-display">
															<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
														</div>
													</div>
													<!-- END Avatar -->
												</div>
												<div class="rich-list-content">
													<h3 class="rich-list-title text-white"><?= session()->get('first_name') ?></h3>
													<span class="rich-list-subtitle text-white"><?= session()->get('email') ?></span>
												</div>

											</div>
											<!-- END Rich List Item -->
										</div>
										<div class="portlet-body p-0">
											<!-- BEGIN Grid Nav -->
											<div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
												<div class="grid-nav-row">
													<a href="<?php echo base_url(); ?>/Admin/UserSettings" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-address-card"></i>
														</div>
														<span class="grid-nav-content"><?php echo $dictionary[144]; ?></span>
													</a>
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-comments"></i>
														</div>
														<span class="grid-nav-content"><?php echo $dictionary[145]; ?></span>
													</a>
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-bell"></i>
														</div>
														<span class="grid-nav-content"><?php echo $dictionary[146]; ?></span>
													</a>
												</div>
											</div>
											<!-- END Grid Nav -->
										</div>
										<div class="portlet-footer portlet-footer-bordered rounded-0">
                    						<a  style="width:100%;" href="<?php echo base_url(); ?>/logout" data-menu-path="<?php echo base_url(); ?>/logout" class="btn btn-label-signout"><?php echo $dictionary[3]; ?></a>
										</div>
									</div>
									<!-- END Portlet -->
								</div>
							</div>
							<!-- END Dropdown -->
						</div>
					</div>
				</div>
				<!-- END Header Holder -->

			</div>
			<!-- END Header -->
			<!-- BEGIN Page Content -->


        <?= $this->rendersection('contant') ?>


			<!-- END Page Content -->
			<!-- BEGIN Footer -->
			<div class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<p class="mb-0"> <i class="far fa-copyright"></i> <span id="copyright-year"></span> aswa8.com. <?php echo $dictionary[26]; ?></p>
						</div>
					</div>
				</div>
			</div>
			<!-- END Footer -->
		</div>
		<!-- END Page Wrapper -->
	</div>
	<!-- END Page Holder -->
	<!-- BEGIN Scroll To Top -->
	<div class="scrolltop">
		<button class="btn btn-info btn-icon btn-lg">
			<i class="fa fa-angle-up"></i>
		</button>
	</div>
	<!-- END Scroll To Top -->
	<!-- BEGIN Sidemenu -->
	<div class="sidemenu sidemenu-left sidemenu-wider" id="sidemenu-todo">
		<div class="sidemenu-header">
			<h3 class="sidemenu-title"><?php echo date("M d, Y"); ?></h3>
			<div class="sidemenu-addon">
				<button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu">
					<i class="fa fa-times"></i>
				</button>
			</div>
		</div>
		<div class="sidemenu-body pb-0" data-simplebar="data-simplebar">
			<!-- BEGIN Portlet -->
			<div class="portlet portlet-bordered">
				<div class="portlet-header portlet-header-bordered">
					<div class="portlet-icon">
						<i class="fa fa-users"></i>
					</div>
					<h3 class="portlet-title"><?php echo $dictionary[147]; ?></h3>
					<div class="portlet-addon">
						<button class="btn btn-label-primary btn-icon">
							<i class="fa fa-plus"></i>
						</button>
					</div>
				</div>
				<div class="portlet-body p-0">
					<!-- BEGIN Rich List -->
					<div class="rich-list rich-list-flush rich-list-action">
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-addon avatar-addon-top">
										<div class="avatar-icon avatar-icon-info">
											<i class="fa fa-thumbtack"></i>
										</div>
									</div>
									<div class="avatar-display">
										<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-secondary"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Charlie Stone</h4>
								<span class="rich-list-subtitle">Art Director</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">1 min</span>
								<span class="badge badge-success badge-pill">1</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-success"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Freddie Stevens</h4>
								<span class="rich-list-subtitle">Journalist</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">2 hour</span>
								<span class="badge badge-success badge-pill">12</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-success"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Tyler Clark</h4>
								<span class="rich-list-subtitle">Programmer</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">5 hour</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-addon avatar-addon-top">
										<div class="avatar-icon avatar-icon-success">
											<i class="fa fa-check"></i>
										</div>
									</div>
									<div class="avatar-display">
										<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-secondary"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Darcy Harrison</h4>
								<span class="rich-list-subtitle">Internet Marketer</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">1 day</span>
								<span class="badge badge-success badge-pill">2</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-success"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Victor Payne</h4>
								<span class="rich-list-subtitle">Accountant</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">1 day</span>
								<span class="badge badge-success badge-pill">5</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?= base_url().session()->get('pic') ?>" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-secondary"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Alberta Harris</h4>
								<span class="rich-list-subtitle">UI Designer</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">2 day</span>
								<span class="badge badge-success badge-pill">4</span>
							</div>
						</a>

					</div>
					<!-- END Rich List -->
				</div>
			</div>
			<!-- END Portlet -->
		</div>
	</div>
	<!-- END Sidemenu -->
	<!-- BEGIN Sidemenu -->
	<div class="sidemenu sidemenu-left sidemenu-wider" id="sidemenu-settings">
		<div class="sidemenu-header">
			<h3 class="sidemenu-title"><?php echo date("M d, Y"); ?></h3>
			<div class="sidemenu-addon">
				<button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu">
					<i class="fa fa-times"></i>
				</button>
			</div>
		</div>
		<div class="sidemenu-body pb-0" data-simplebar="data-simplebar">
			<!-- BEGIN Portlet -->
			<div class="portlet portlet-bordered">
				<div class="portlet-header portlet-header-bordered">
					<div class="portlet-icon">
						<i class="fa fa-bolt"></i>
					</div>
					<h3 class="portlet-title"><?php echo $dictionary[148]; ?></h3>
				</div>
				<div class="portlet-body">
					<!-- BEGIN Widget -->
					<div class="widget4 mb-3">
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
					</div>
					<!-- END Widget -->
					<!-- BEGIN Widget -->
					<div class="widget4 mb-3">
						<div class="widget4-group">
							<div class="widget4-display">
								<h6 class="widget4-subtitle">CPU Load</h6>
							</div>
							<div class="widget4-addon">
								<h6 class="widget4-subtitle text-info">60%</h6>
							</div>
						</div>
						<!-- BEGIN Progress -->
						<div class="progress progress-sm">
							<div class="progress-bar bg-info" style="width: 60%"></div>
						</div>
						<!-- END Progress -->
					</div>
					<!-- END Widget -->
					<!-- BEGIN Widget -->
					<div class="widget4 mb-3">
						<div class="widget4-group">
							<div class="widget4-display">
								<h6 class="widget4-subtitle">CPU Temparature</h6>
							</div>
							<div class="widget4-addon">
								<h6 class="widget4-subtitle text-success">42°</h6>
							</div>
						</div>
						<!-- BEGIN Progress -->
						<div class="progress progress-sm">
							<div class="progress-bar bg-success" style="width: 30%"></div>
						</div>
						<!-- END Progress -->
					</div>
					<!-- END Widget -->
					<!-- BEGIN Widget -->
					<div class="widget4">
						<div class="widget4-group">
							<div class="widget4-display">
								<h6 class="widget4-subtitle">RAM Usage</h6>
							</div>
							<div class="widget4-addon">
								<h6 class="widget4-subtitle text-danger">6,532 MB</h6>
							</div>
						</div>
						<!-- BEGIN Progress -->
						<div class="progress progress-sm">
							<div class="progress-bar bg-danger" style="width: 80%"></div>
						</div>
						<!-- END Progress -->
					</div>
					<!-- END Widget -->
				</div>
			</div>
			<!-- END Portlet -->
		</div>
	</div>
	<!-- END Sidemenu -->
	<!-- BEGIN Float Button -->
	<div class="float-btn float-btn-left changes_btns">
		<button  class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="<?php echo $browseralign; ?>" title="<?php echo $dictionary[142]; ?>">
			<i class="fa fa-moon"></i>
		</button>
		<a href="javascript:changeLanguage();" class="btn btn-flat-primary btn-icon btn-changeLanguage" data-toggle="tooltip" data-placement="<?php echo $browseralign; ?>" title="<?php echo $dictionary[143]; ?>">
			<i class="fa fa-language"></i>
		</a>
	</div>
	<!-- END Float Button -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/mandatory.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/core.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/build/scripts/vendor.js"></script>

	<!-- <script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/asset_admin/app/home.js"></script> -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url(); ?>/asset/admin/js/dashboard.js"></script>
    <script>


		function changeLanguage() {
			if($('.btn-changeLanguage').attr('data-placement')=='left'){
				document.cookie = "browseralign=right; expires=Thu, 18 Dec 2022 12:00:00 UTC; path=/";
				// document.cookie = encodeURIComponent("browseralign") + '=' + encodeURIComponent("right");
				$('.btn-changeLanguage').attr('data-placement','right');
				window.location.reload();
			}else if($('.btn-changeLanguage').attr('data-placement')=='right'){
				document.cookie = "browseralign=left; expires=Thu, 18 Dec 2022 12:00:00 UTC; path=/";
				// document.cookie = encodeURIComponent("browseralign") + '=' + encodeURIComponent("left");
				$('.btn-changeLanguage').attr('data-placement','left');
				window.location.reload();
			}
			
		}
	</script>
  <?= $this->rendersection('js') ?>

  <!-- End custom js for this page-->
</body>

</html>

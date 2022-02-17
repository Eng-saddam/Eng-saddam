<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<!-- STYLES -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">



	<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container right-panel-active">
<?php 
$uri = service('uri');
if(isset($alert)) {?>
<div class="databaseAlert"><span class="actionText"><?php if(isset($alert)){echo $alert;} ?></span><span></span>
        <div class="fa fa-check-circle"></div>
    </div>
<?php } ?>

			<!-- Sign Up -->
			<div class="container__form container--signup">
				<form action="<?php echo base_url(); ?>/signup" method="post" enctype="multipart/form-data" class="form" id="form1">
					<h2 class="form__title">Sign Up</h2>
					<input type="text" name="form_type" value="signup" hidden>
					<input type="text" id="first_name" name="first_name" value="<?php if(isset($validation)){ echo set_value('first_name');} ?>" placeholder="First Name" class="input" />
					<input type="text" id="last_name" name="last_name" value="<?php if(isset($validation)){ echo set_value('last_name');} ?>" placeholder="Last Name" class="input" />
					<input type="email" id="email" name="email" value="<?php if(isset($validation)){ echo set_value('email');} ?>" placeholder="Email" class="input" />
					<input type="text" id="phone" name="phone" value="<?php if(isset($validation)){ echo set_value('phone');} ?>" placeholder="Phone" class="input" />
					<input type="password" id="password"  value="<?php if(isset($validation)){ echo set_value('password');} ?>" name="password" placeholder="Password" class="input" />
					<input type="password" id="re_password" value="<?php if(isset($validation)){ echo set_value('re_password');} ?>"  name="re_password" placeholder="Repeat Password" class="input" />
					<div class="form-group" id="upload_section" style="padding: 5px;">
    				<label for="pic">Personal Image</label>
					<img src="<?php echo base_url(); ?>/asset/images/profile.png" style="width:30px;hight:30px;">
    				<input type="file" class="form-control-file" value="<?= set_value('pic'); ?>" name="pic" onchange="Filevalidation();"  data="" accept="jpg,.jpeg,.png,.gif,.bmp" id="pic">
  					</div>
					  <div class="result" id="result" style="text-align: left;color: red;">
					  <?php if(isset($validation) && $uri->getSegment(1) =="signup"){echo $validation->listerrors();} ?>
						</div>
  					<button type="submit" class="btn" id="signup_btn">Sign Up</button>
				</form>
			</div>

			<!-- Sign In -->
			<div class="container__form container--signin">
				<form action="<?php echo base_url(); ?>/login" class="form" method="post" id="form2">
					<h2 class="form__title">Sign In</h2>
					<input type="text" name="form_type" value="signin" hidden>
					<input type="email" placeholder="Email" name="email" class="input" />
					<input type="password" placeholder="Password" name="password" class="input" />
					<!-- <a href="#" class="link">Forgot your password?</a> -->
					<button type="submit" class="btn">Sign In</button>
					<div class="result" id="result" style="text-align: left;color: red;">
					<br>
					  <?php if(isset($validation) && $uri->getSegment(1) =="login"){echo $validation->listerrors();} ?>
						</div>
				</form>
			</div>

			<!-- Overlay -->
			<div class="container__overlay">
				<div class="overlay">
					<div class="overlay__panel overlay--left">
						<button class="btn" id="signIn">Sign In</button>
					</div>
					<div class="overlay__panel overlay--right">
						<button class="btn" id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
</body>
<!-- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>/asset/js/main.js"></script>
<?php 
 
	if($uri->getSegment(1) =="login"){
		?>
	<script>
			container.classList.remove("right-panel-active");

		</script>
		<?php
	}
?>
</body>
</html>

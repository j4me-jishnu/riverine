<!DOCTYPE>
<html>
<head>
	<title>YED ELETRIC</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/login_css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/admin-bg.jpg');">
	<div class="login-page">
		<div class="alert alert-light" align="center">
			<img class="davidlogo" src="<?php echo base_url() ?>Images/logo.png">
		</div>
		<div class="form" style="border-radius: 15px;background: #f8f5f0;">
			<form class="login-form" method='post'>
				<input type="text" name="username" placeholder="Name" />
				<span style="color:#f8f9f9"><?php echo form_error('username'); ?></span>
				<input type="password" name="password" placeholder="Password" />
				<span style="color:#f8f9f9"><?php echo form_error('password'); ?></span>
				<button style="border-radius: 10px;background-color: #aa8453 !important;">login</button>
				<span style="color:#f8f9f9"><?php if (isset($message)) echo $message; ?><span>
			</form>
		</div>
		<div class="row" style="margin-top: -70px;">
			<div class="col-md-6">+91 7510201717</div>
			<div class="col-md-6">riverinesuites@gmail.com </div>
		</div><br>
		<div class="row">
			<div class="col-md-12" align="center">
			</div>
		</div>
	</div>
	<script src='<?php echo base_url(); ?>/assets/js/jquery.min.js'></script>
	<script src='<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js'></script>
	<script src="<?php echo base_url(); ?>/assets/js/login_js/index.js"></script>
</body>
</html>
<!DOCTYPE HTML>
<html  lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>jcms</title>
	<link rel="stylesheet" type="text/css" href="<?php echo  base_url();  ?>css/login.css" media="screen" />
	</head>
	<body>
		<div id="container">
			<form name="loginform" action="<?php  echo site_url('/admin/login/validate'); ?>" method="post">
				<div class="login">LOGIN</div>
				<div class="username-text">Username:</div>
				<div class="password-text">Password:</div>
				<div class="username-field">
					<input type="text" name="log" value="" />
				</div>
				<div class="password-field">
					<input type="password" name="pwd" value="" />
				</div>
				<input type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">Remember me</label>
				<div class="forgot-usr-pwd" style="color: red;"><?php echo $error; ?></div>
				<input type="submit" name="submit" value="GO" />
			</form>
			
		</div>
	
	</body>
</html>

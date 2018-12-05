<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/stuff/tampilan_login.css">
	</head>
	<body>
		<script src="<?php echo base_url(); ?>/assets/stuff/script.js"></script>
		
			<form name="login" action="javascript:void(0)" class="content">
				<table>
					<tr>
						<td>
							<span class="judul">SIGN IN</span>
						</td>
					</tr>
					<tr>
						<td id="username1">
							<span class="isi">username</span>
							<input class="isian" type="text" name="pengguna" onfocus="test(username1)" onblur="checkFill(username1)">
						</td>
					</tr>
					<tr>
						<td id="password1">
							<span class="isi">password</span>
							<input class="isian" type="password" name="katakunci" onfocus="test(password1)" onblur="checkFill(password1)">
						</td>
					</tr>
					<tr>
						<td>
							<a href="#" class="lupa">Forgot your password?</a>
							<input type="submit" name="login" value="Log In" class="tombol">
						</td>
					</tr>
					<tr>
						<td class="noaccount">
							<br><br><br>
							Don't have an account? <a href="<?php echo site_url(); ?>sadaya/register">Sign Up</a>
						</td>
					</tr>					
				</table>
			</form>
		
	</body>
</html>
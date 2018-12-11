<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/stuff/tampilan_registrasi.css">
	</head>
	<body>
		<script src="<?php echo base_url(); ?>/assets/stuff/script.js"></script>
		
			<form name="registrasi" action="" method ="POST" class="content">
				<table>
					<tr>
						<td>
							<img class="logo" src="<?php echo base_url(); ?>/assets/stuff/Logo Sementara .jpg" alt="logo">
						</td>
					</tr>
					<tr>
						<td>
							<span class="judul">REGISTER YOUR ACCOUNT</span>
						</td>
					</tr>
					<tr>
						<td class="validasi">
							<?php echo validation_errors(); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo form_open('form'); ?>
						</td>
					</tr>
					<tr>
						<td id="isi1">
							<span class="isi">Username</span>
							<input class="isian" type="text" name="pengguna" onfocus="test(isi1)" onblur="checkFill(isi1)">
						</td>
					</tr>
					<tr>
						<td id="isi2">
							<span class="isi">Names</span>
							<input class="isian" type="text" name="namaPengguna" onfocus="test(isi2)" onblur="checkFill(isi2)">
						</td>
					</tr>
					<tr>
						<td id="isi3">
							<span class="isi">Email</span>
							<input class="isian" type="text" name="email" onfocus="test(isi3)" onblur="checkFill(isi3)">
						</td>
					</tr>
					<tr>
						<td id="isi4">
							<span class="isi">Password</span>
							<input class="isian" type="password" name="katakunci" onfocus="test(isi4)" onblur="checkFill(isi4)">
						</td>
					</tr>
					<tr>
						<td class="validasi">
							<?php if($passwordtidaksama!='') echo "<p>".$passwordtidaksama."</p>"; ?>
						</td>
					</tr>
					<tr>
						<td id="isi5">
							<span class="isi">Password Confirmation</span>
							<input class="isian" type="password" name="katakunciPasti" onfocus="test(isi5)" onblur="checkFill(isi5)">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="registrasi" value="Register" class="tombol">
						</td>
					</tr>					
				</table>
			</form>
		
	</body>
</html>
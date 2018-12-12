<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Edit</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/stuff/tampilan_home.css">
	</head>
	<body>
		<script src="<?php echo base_url(); ?>/assets/stuff/script.js"></script>
		<div class="whitebar">
			<img class="tombolBuka" src="<?php echo base_url(); ?>/assets/stuff/Side bar tab.jpg" alt="tombol buka" onclick="openNav()">
			<img class="logo" src="<?php echo base_url(); ?>/assets/stuff/Logo Sementara .jpg" alt="logo">
			<span class="menuHeader">
				<a id="tombolBeranda" onclick="homePesan();">Pesan sekarang!</a>
				<a>Menu</a>
			</span>
		</div>
		<div id="pesan" class="pesan" style=" height=""; ">
			
		</div>
		<div id=sidebar class="sidebar sidenav">
			<a href="javascript:void(0)" class="closebutton" onclick="closeNav()">x</a>
			<a class="menuSidebar" href="#"><img class="tombolMenuSidebar" src="<?php echo base_url(); ?>/assets/stuff/gearwheels.png" alt="tombol Setting">bantuan</a>
			
		</div>
			<div id="content" class="content">
				<div class="isi">
					<form action="<?php echo base_url('C_edit/edit')?>" method="post" enctype="multipart/form-data">
						<table>
							<tr>
								<td>
									<input type="file" name="gambar">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="namaTempat">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="hargaTempat">
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" value="edit">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
	</body>
</html>
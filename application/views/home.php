<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
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
			<a href="<?php echo base_url('sadaya/perjalanan?id=1');?>" id="tombolBeranda" style="color:black;" >Bandung</a>
			<a href="<?php echo base_url('sadaya/perjalanan?id=2');?>" id="tombolBeranda" style="color:black;" >Jakarta</a>
			<a href="<?php echo base_url('sadaya/perjalanan?id=3');?>" id="tombolBeranda" style="color:black;" >Yogyakarta</a>
			<a href="<?php echo base_url('sadaya/perjalanan?id=4');?>" id="tombolBeranda" style="color:black;" >Bali</a>
			<a href="<?php echo base_url('sadaya/perjalanan?id=5');?>" id="tombolBeranda" style="color:black;" >Lombok</a>
		</div>
		<div id=sidebar class="sidebar sidenav">
			<a href="javascript:void(0)" class="closebutton" onclick="closeNav()">x</a>
			<a class="menuSidebar" href="#"><img class="tombolMenuSidebar" src="<?php echo base_url(); ?>/assets/stuff/gearwheels.png" alt="tombol Setting">bantuan</a>
			<?php if($logged_in){ ?>
			<a class="menuSidebar" href="<?php echo base_url('sadaya/logout?from=home');?>"><img class="tombolMenuSidebar" src="<?php echo base_url(); ?>/assets/stuff/log out.png" alt="tombol Setting">logout</a>
			<?php } else {?>
			<a class="menuSidebar" href="<?php echo base_url('sadaya/login?from=home');?>"><img class="tombolMenuSidebar" src="<?php echo base_url(); ?>/assets/stuff/log out.png" alt="tombol Setting">login</a>
			<?php } ?>
		</div>
			<div id="content" class="content">
				<div class="isi">
					
				</div>
			</div>
	</body>
</html>
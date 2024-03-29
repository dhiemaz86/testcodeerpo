<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="M-Food">
		<meta name="author" content="">
		<meta name="description" content="M-Food">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Mendaftar</title>
		<link href="<?php echo base_url().'assets/img/logo.png'?>" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'mobile/css/jquery.mmenu.all.css'?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'mobile/css/style.css'?>" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.mmenu.min.all.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/gmap3.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/o-script.js'?>"></script>

	</head>
	<body class="o-page">
		<div id="page">
			<div id="header">
				<div class="header-content">
					<a href="#menu" class="p-link-home"><i class="fa fa-bars"></i></a>
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>
			<div class="bannerPane banner-bg">
				<div class="overlay"></div>
				<div class="s-banner-content">
					<i class="fa fa-user"></i> Mendaftar
				</div>
			</div>
			<!-- MAP -->
			
			<div id="content">
				
				<?php echo $this->session->flashdata('msg');?>
				
				<form class="contactForm" action="<?php echo base_url().'member/simpan_pelanggan'?>" method="post" enctype="multipart/form-data">
					<input type="text" name="nama" placeholder="Nama*" required>
					<input type="text" name="alamat" placeholder="Alamat*" required>
					<p>
						<input type="radio" name="jenkel" value="L" checked>Laki-Laki
						<input type="radio" name="jenkel" value="P">Perempuan
					</p>
					<input type="text" name="kontak" placeholder="Kontak Person*" required>
					<input type="email" name="email" placeholder="Email*" required>
					<input type="text" name="facebook" placeholder="Facebook">
					<input type="text" name="instagram" placeholder="Instagram">
					<input type="text" name="line" placeholder="Line">
					<input type="text" name="whatapp" placeholder="WhatApp">
					<input type="text" name="path" placeholder="Path">
					<input type="password" name="pass" placeholder="Password*" required>
					<input type="password" name="pass2" placeholder="Ulangi Password*" required>
					<input type="file" name="filefoto">
					<p>NB: Photo harus berektensi JPG|PNG|BMP.</p>
					
					<button type="submit" class="o-buttons red" style="border:none;height:38px;width:100%;margin-top:10px;margin-left:0px;">Mendaftar</button>
				</form>
					<p>NB: Tanda (*) wajib di isi.</p>
				
			</div>
			
			<!--<div class="subFooter">Copyright 2013. All rights reserved.</div>-->
			
			<!-- Menu navigation -->
			<nav id="menu">
				<ul>
					<li class="Selected">
						<a href="#close">
							<i class="fa fa-times-circle"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'home'?>">
							<i class="fa fa-home"></i>Home
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'menu/cart'?>">
							<i class="fa fa-shopping-cart"></i>Keranjang Belanja (<?=$this->cart->total_items();?>)
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'menu/makanan'?>">
							<i class="fa fa-cutlery"></i>Makanan
						</a>
					</li>

					<li>
						<a href="<?php echo base_url().'menu/minuman'?>">
							<i class="fa fa-glass"></i>Minuman
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'menu/favorite'?>">
							<i class="fa fa-star"></i>Favorite
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'menu'?>">
							<i class="fa fa-fire"></i>Hot Promo
						</a>
					</li>
					
					<li>
						<a href="<?php echo base_url().'tracker'?>">
							<i class="fa fa-crosshairs"></i>Tracker
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'member/register'?>">
							<i class="fa fa-user"></i>Mendaftar
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'gallery'?>">
							<i class="fa fa-camera-retro"></i>Gallery
						</a>
					</li>
					
					
					<?php if($this->session->userdata('online') == TRUE):?>
					<li>
						<a href="<?php echo base_url().'konfirmasi'?>">
							<i class="fa fa-exchange"></i>Konfirmasi
						</a>
					</li>
					
					<li>
						<a href="<?php echo base_url().'myfood'?>">
							<i class="fa fa-cutlery"></i>My Food
						</a>
					</li>

					<li>
						<a href="<?php echo base_url().'member/logout'?>">
							<i class="fa fa-sign-out"></i>Logout
						</a>
					</li>
					<?php else:?>
					<li>
						<a href="<?php echo base_url().'member'?>">
							<i class="fa fa-sign-in"></i>Login
						</a>
					</li>
					<?php endif;?>
				</ul>
					
			</nav>
			
		</div>
	</body>
</html>
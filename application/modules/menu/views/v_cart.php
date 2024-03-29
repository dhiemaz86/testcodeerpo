<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="M-Food by Mfikri.com">
		<meta name="author" content="M Fikri Setiadi">
		<meta name="description" content="M-Food by Mfikri.com">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Keranjang Belanja</title>
		<link href="<?php echo base_url().'assets/img/logo.png'?>" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'mobile/css/jquery.mmenu.all.css'?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'mobile/css/style.css'?>" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.mmenu.min.all.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.easy-pie-chart.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/o-script.js'?>"></script>
		
	</head>
	<body class="o-page" style="background-color:#fff;">
		<div id="page">
			<div id="header">
				<div class="header-content">
					<a href="#menu" class="p-link-home"><i class="fa fa-bars"></i></a>
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
				</div>
			</div>
			<div class="bannerPane banner-bg">
				<div class="overlay"></div>
				<div class="s-banner-content">
					Keranjang Belanja
				</div>
			</div>
			<div id="content">
				
				<article>
					
					<div class="prod-single-content">
						<table style="width:100%">
							<thead>
							<tr>
								<th style="text-align:center;">Menu</th>
								<th style="text-align:center;">Jumlah</th>
								<th style="text-align:center;">Subtotal</th>
								<th style="text-align:center;">Aksi</th>
							</tr>
							<thead>
							<tbody>
							<form action="<?php echo base_url().'menu/update/'?>" method="post">
							<?php $i = 1; ?>
							<?php foreach ($this->cart->contents() as $items): ?>
								<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

								<tr>
									<td><?=$items['name'];?></td>
									<td style="padding:0px;width:15%"><input type="number" name="<?php echo $i.'[qty]'?>" value="<?php echo number_format($items['qty']);?>" min="1"></td>
									<td style="text-align:center;"><?php echo number_format($items['subtotal']);?></td>
									<td style="text-align:center;"><a href="<?php echo base_url().'menu/remove/'.$items['rowid'];?>" style="text-decoration:none;">X</a></td>
								</tr>
							<?php $i++; ?>
							<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr>
									<th style="text-align:left;" colspan="2">Total</th>
									<th style="text-align:center;"><?php echo number_format($this->cart->total());?></th>
									<th></th>
								</tr>
							</tfoot>
						</table>
						<button type="submit" class="o-buttons blue" style="border:none;height:32px;">Update Keranjang</button>
						<a href="<?php echo base_url().'menu/check_out'?>" style="text-decoration:none;" class="o-buttons red pull-right">Check Out</a>
						</form>
					</div>
					<div class="notifications info">
						<p style="text-align:justify;">Jika jumlah porsi yang Anda inginkan lebih dari satu. Tambahkan jumlah posrsi sesuai dengan yang Anda inginkan dan klik tombol <b>Update Keranjang</b>.</p> <p style="text-align:justify;">Jika masih ada lagi menu yang akan Anda beli selain dari tabel diatas. Klik <a href="<?php echo base_url().'menu'?>"><b>disini</b></a> untuk memilih menu lainnya.</p>
					</div>
				</article>

			</div>
			
			
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

	
	</body>
</html>
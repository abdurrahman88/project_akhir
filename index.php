<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="admin/gambar/P1040806.jpg" type="image/ico" />
	<title>Wahdah blog</title>
	<link rel="stylesheet" type="text/css" href="admin/css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="admin/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".pencari").click(function(){
				$(".input-atas").slideDown("slow");
			});
			$(".bars").click(function(){
				$(".body-dorp").show("slow");
				$(".wrepper-drop-down").show();
				$(".header").hide();
				$(".wrepper").hide();
			});
			$(".closes").click(function(){
				$(".header").show();
				$(".wrepper").show();
				$(".body-dorp").hide();
			});
		});
	</script>
	
</head>
<body>
<div class="container clearfix">
	<div class="wrepper-res clearfix">
		<div class="body-dorp">
			<div class="wrepper-drop-down clearfix">
				<ul class="closes-1 clearfix">
					<li class="closes"><i class="fa fa-close"></i></li>
				</ul>
				<ul class="ul-header-menu-1 clearfix">
					<li>HOME</li>
						<div style="height: 1px;background-color: blue;" class="garis clearfix"></div>
					<li>ABOUT</li>
						<div class="garis clearfix" style="height: 1px;background-color:blue;"></div>
					<li>ARCHIVE</li>
						<div class="garis clearfix" style="height: 1px;background-color:blue;"></div>
					<li>CONTANCT</li>
						<div class="garis clearfix" style="height: 1px;background-color:blue;"></div>
				</ul>
			</div>
		</div>
			<div class="header clearfix">
				<div class="wrepper clearfix">
					<ul class="ul-header-atas clearfix">
						<!-- <li></li> -->
						<li>Al-Wahdah</li>
					</ul>
					<ul class="bars clearfix">
						<li class="li-bars"><i class="fa fa-bars"></i></li>
					</ul>
					<ul class="ul-header-menu">
						<li class="hover-menu-atas">HOME</li>
						<li class="hover-menu-atas">ABOUT</li>
						<li class="hover-menu-atas">ARCHIVE</li>
						<li class="hover-menu-atas">CONTANCT</li>
						<li class="hover-menu-bawah"><i class="fa fa-search pencari" style="color: #333333;"></i></li>
					</ul>
				</div>
			</div>
			<?php
	   			include 'admin/proses/koneksi.php';
			?>
			<div style="clear: both;"></div>
				<?php
					$input = isset($_POST['input']) ? $_POST['input'] : '';
					if (!empty($input)) {
						$sql = mysqli_query($connect, "SELECT * FROM artikel WHERE judul LIKE '%".$input."%'");
					} else {
						$sql = mysqli_query($connect, "SELECT * FROM artikel WHERE status = 1");
					}  
				?>  
			<div class="wrepper clearfix">    
				<div class="input-atas clearfix">
					<form action="" method="post">
						<tr>
							<td><input type="text" name="input" placeholder="Masukan yang ingin di cari..!!!!" class="input"></td>
							<td><input type="submit" class="submit" value="Search" name="submit"></td>
						</tr>
					</form>
				</div>
			</div>
			<div style="clear: both;"></div>
				<div class="wrepper clearfix">  
					<?php
				 		while ($row = mysqli_fetch_array($sql)) {
				 	?>     
					<div class="content-1 clearfix">
						<button>Story</button>
						
						<div class="wrepper-content clearfix">
							<div class="fa-tulisan clearfix">
								<img src="admin/gambar/<?php echo $row['gambar']; ?>">
								<h3><?= date('F d, Y', strtotime($row['tanggal'])) ?></h3>
								
								<h2> <?= $row['judul'] ?></h2>
								<hr>
								<p style="font-size: 20px;"><?= substr($row['isi'], 0, 800) ?> ....<br>
									<a href="<?php echo 'post.php?id='.$row['id']; ?>">Read More...</a></p>
								<br>
							</div>
						</div>
					</div>
					<?php
		          	}	          	
		          	?>
				</div>
	</div>
		<div class="footer clearfix">
			<div class="wrepper-content clearfix">
				<div class="footer-atas">
					<i><p>Al-Wahdah</p></i>
					<ul class="ul-footer clearfix">
						<li>HOME</li>
						<li>ABOUT</li>
						<li>ARCHIVE</li>
						<li>CONTANCT</li>
					</ul>
				</div>
				<div style="clear: both;" class="garis"></div>
				<div class="footer-tengah">
					<p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
				</div>
				<div style="clear: both;" class="garis-2"></div>
				<div class="footer-bawah clearfix">
					<p>© 2018 - Al-Wahdah. All Rights Reserved.</p>
					<ul class="icon clearfix">
						<li><i class="fa fa-facebook-square"></i></li>
						<li><i class="fa fa-twitter"></i></li>
						<li><i class="fa fa-instagram"></i></li>
						<li class="akhir"><i class="fa fa-pinterest"></i></li>
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div> <!---Penutup wrepper-content-->
		</div><!---Penutup footer-->
</div>
</body>
</html>

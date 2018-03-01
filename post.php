
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="admin/gambar/P1040806.jpg" type="image/ico" />
	<title>Wahdah blog</title>
	<link rel="stylesheet" type="text/css" href="admin/css/index-coment.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="admin/jquery/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="admin/jquery/jquery-validation-1.17.0/demo/css/screen.css">
	<script src="admin/jquery/jquery-validation-1.17.0/lib/jquery.js"></script>
	<script src="admin/jquery/jquery-validation-1.17.0/dist/jquery.validate.js"></script>
	<script>
	$(document).ready(function() {
			$(".pencari").click(function(){
				$(".input-atas").toggle("slow");
			});
			$(".bars").click(function(){
				$(".body-dorp").show("slow");
				$(".wrepper-drop-down").show();
				$(".header").hide();
				$(".wrepper-content").hide();
			});
			$(".closes").click(function(){
				$(".header").show();
				$(".wrepper-content").show();
				$(".body-dorp").hide();
			});
			$(".nama").click(function(){
				$(".email").toggle("slow");
				$(".span-email").toggle("slow")
			});
			$(".email").click(function(){
				$(".number").toggle("slow");
				$(".span-number").toggle("slow")
			});

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				komentar: {
					required: true,
					minlength: 5
				},
				nama: {
					required: true,
					minlength: 5
				},
				email: {
					required: true,
					email: true
				},
				number: {
					required: true,
					number: 12
				},
				agree: "required"
			},
			messages: {
				nama: {
					required: "Masukan User nama anda terlebih dahulu..!!",
					minlength: "Anda harus memasukan minimal 5 karakter"
				},
				komentar: {
					required: "Masukan komentar anda terlebih dahulu..!!",
					minlength: "Anda harus memasukan minimal 5 karakter"
				},
				number: {
					required: "Masukan no hp anda terlebih dahulu..!!",
					minlength: "Anda harus memasukan minimal 15 karakter"
				},
				// komentar: "Masukan komentar anda di dalam kolom komentar ini",
				email: "Masukan email anda terlebih dahulu",
				// number: "Masukan no hp anda terlebih dahulu",
			}
		});
		var newsletter = $("#newsletter");
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
	});
	</script>
</head>
<body>
<div class="container clearfix">
		<div class="body-dorp">
			<div class="wrepper-drop-down clearfix">
				<ul class="closes-1 clearfix">
					<li class="closes"><i class="fa fa-close"></i></li>
				</ul>
				<ul class="ul-header-menu-1 clearfix">
					<a href="index.php" style="text-decoration: none;"><li>HOME</li></a>
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
						<a href="<?php echo 'index.php?id=';?>"><li><i>Al-Wahdah</i></li></a>
					</ul>
					<ul class="bars clearfix">
						<li><i class="fa fa-bars"></i></li>
					</ul>
					<ul class="menu clearfix">
						<a href="<?php echo 'index.php?id=';?>"><li class="hover-menu-atas">HOME</li></a>
						<li class="hover-menu-atas">ABOUT</li>
						<li class="hover-menu-atas">ARCHIVE</li>
						<li class="hover-menu-atas">CONTANCT</li>
						<li><i class="fa fa-search pencari" style="color: #333333;"></i></li>
					</ul>
				</div>
		</div>
		<?php
			error_reporting(0);
			$input = $_POST['input'];
			if ($input !='') {
				$sql = mysqli_query($connect, "SELECT * FROM artikel WHERE judul LIKE '".$input."'");
			} else {
				$sql = mysqli_query($connect, "SELECT * FROM artikel WHERE id = 
              $_GET[id]");
			}
				$row = mysqli_fetch_array($sql);
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
		<?php
		include 'admin/proses/koneksi.php';
		include 'admin/function/library.php';
		?>
		<div class="wrepper clearfix">
			<div style="clear: both;"></div>
			<div class="content-1 clearfix">
				<?php
				$id = $_GET[id];
				$sql = mysqli_query($connect, "SELECT * FROM artikel WHERE id = $id");
				$row = mysqli_fetch_array($sql);
				?>
				<div class="wrepper-content clearfix">
					<button>Story</button>
					<img src="admin/gambar/<?php echo $row['gambar']; ?>">
					<div class="fa-tulisan clearfix">
						<!-- <button>Story</button> -->
						<span><?= date('F d, Y', strtotime($row['tanggal'])) ?></span>
						<h2><?= $row['judul'] ?></h2>
						<hr>
						<p><?= $row['isi'] ?></p>
					</div><!---Penutup fa-tulisan-->
					<div style="clear: both;"></div>
				</div><!---Penutup wrepper-content-->
			</div> <!---Penutup -content-1-->
			<div class="content-2 clearfix">
				<!--  -->
				<div class="wrepper-content clearfix">
					<form  id="signupForm" action="admin/proses/proses_komentar.php" method="post">
						<div class="textara clearfix">
							<textarea placeholder="Silahkan masukan komntar mu " name="komentar"></textarea>
						</div>
						<div class="gambar-komenta clearfix">
							<img src="admin/images/user.png" style="border-radius: 10px;">
							<!-- <p>adfs</p> -->
						</div>
						<div class="input-komentar clearfix">
							<span style="margin-bottom: 15px; font-size: 12px; line-height: 30px;">Harus di isi<a style="color: red;text-decoration: none;">*</a></span>
							<input type="text" placeholder="Silahkan isikan username anda" name="nama" class="nama">
							<div style="clear: both;"></div>

							<span style="margin-bottom: 15px; font-size: 12px; line-height: 30px;">Harus di isi<a style="color: red;text-decoration: none;" class="span-email">*</a></span>
							<input type="email" placeholder="Silahkan isikan email anda" class="email" name="email" style="display: none;">

							<span style="margin-bottom: 15px;font-size: 12px; line-height: 30px;">Harus di isi<a style="color: red;text-decoration: none;" class="span-number">*</a></span>
							<input type="number" placeholder="Silahkan Isikan no hp anda" name="number" class="number" style="display: none;">

							<div style="clear: both;"></div>
							<input type="hidden" name="id" value="<?= $id ?>">
							<button>Submit</button>
						</div>
					</form>
					<?php
					include 'admin/proses/koneksi.php';
					$sql = mysqli_query($connect, "SELECT * FROM comment WHERE id_artikel = $id");
						while ($row = mysqli_fetch_array($sql)) {
						
					?>
					<div class="pusblise-coment clearfix">
						<div class="gambar clearfix">
							<img src="admin/images/user.png">
						</div>
						<div class="text-coment clearfix">
							<strong><?= $row['nama'] ?></strong>
							<span><?= '17 oct' ?></span>
							<h3><?= $row['komentar'] ?></h3>
						</div>
						<div class="garis-komentar">
							<a href="#" style="float: right;">
								Delete<i class="fa fa-trash-o"></i>
							</a>
							<a href="p">Reply</a>
							
						</div>
						<br>
					</div>
					<?php 
					}
					?>
				</div>
			</div>
		</div>
		<div class="footer clearfix">
			<div class="wrepper clearfix">
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/login-style.css'?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login | Manajemen Risiko</title>
  <style>
	* {
	  box-sizing: border-box;
	}

	/* Create two equal columns that floats next to each other */
	.column {
	  float: left;
	  width: 50%;
	  padding-left: 90px;
	}

	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}
	</style>
</head>
<body>
<header class="header-distributed">
<h3>Electronic Information System for Risk Analysis based on Fuzzy-FMEA</h3>
</header>
<div class="row">
<div class="column" style="margin-left: 90px; margin-top: 200px; text-align: center;">
<img src="<?php echo base_url().'assets/login-img/eriska.png'?>">
<p>eRiskA adalah electronic information system for risk analysis based on Fuzzy-FMEA atau sistem informasi elektronik untuk analisis risiko berbasis Fuzzy-FMEA.</p>
<p>Aplikasi ini digunakan untuk melakukan analisis risiko pada organisasi/perusahaan yang melingkupi analisis risiko produk maupun analisis risiko proses. Aplikasi ini dikembangkan dengan pendekatan integrasi logika fuzzy dan Failure Mode and Effect Analysis (FMEA)</p>
</div>
  <div class="column login-wrapper">
	<?php echo form_open('Home/login_user', 'class="form"');?>
      <img src="<?php echo base_url().'assets/login-img/avatar.png'?>" alt="">
      <h2>Login ke eRiskA</h2>
      <div class="input-group">
        <input type="text" name="loginUser" id="loginUser" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="loginPassword" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a><br>
	  <a href="<?php echo base_url().'assets/laporan/'?>manual_Eriska-14-167_compressed.pdf" class="unduh-panduan">Unduh Panduan Aplikasi</a>
    <?php echo form_close(); ?>

    <div id="forgot-pw">
      <?php echo form_open('Home/forgot_pw', 'class="form"');?>
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      <?php echo form_close(); ?>
    </div>
  </div>
  </div>
  <footer class="footer-distributed">
	<div class="footer-left">
		<img src="<?php echo base_url().'assets/login-img/brin.png'?>">
	</div>

	<div class="footer-center">
		<div>
			<i class="fa fa-map-marker"></i>
			  <p><span>KST BJ. Habibie Gd 720, Muncul, Setu</span>
				Tangsel, Banten - 15314</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+62 811-1933-3594</p>
		</div>
		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:prtp@brin.go.id">prtp@brin.go.id</a></p>
		</div>
	</div>
	<div class="footer-right">
		<div class="footer-icons">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube-play"></i></a>
		</div>
	</div>
  </footer>
</body>
</html>
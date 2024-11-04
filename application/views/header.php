<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | Manajemen Risiko</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/tampilan/plugins/fontawesome-free/css/all.min.css">
	<!-- IonIcons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/tampilan/dist/css/adminlte.min.css">
	<!-- sweetalert2-theme-bootstrap-4 -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-4.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/toastr.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<?php if($this->uri->segment('1') == 'homepage'){ ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/home.css">
	<?php }elseif($this->uri->segment('1') == 'identifikasi'||$this->uri->segment('1') == 'framework'||$this->uri->segment('1') == 'penilaian'||$this->uri->segment('1') == 'cetak'){ ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/home2.css">
	<?php }else{ ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/home3.css">
	<?php } ?>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
	
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<?php if($status == 'sukses'){?>
<body class="hold-transition sidebar-mini" onload="alertSukses()">
<?php }elseif($status == 'gagal'){ ?>
<body class="hold-transition sidebar-mini" onload="alertGagal()">
<?php }elseif($this->uri->segment('2') == 'pembobotan_sod'){ ?>
<body class="hold-transition sidebar-mini" onload="peringatan()">
<?php }else{ ?>
<body class="hold-transition sidebar-mini">
<?php } ?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
	  
		<?php if($this->uri->segment('1') == 'penilaian_proses'){ ?>
			<?php if($this->uri->segment('2') != 'evaluasi'){ ?>
			<li class="nav-item d-none d-sm-inline-block active">
				<a href="<?php echo base_url()."penilaian_proses";?>" class="nav-link">Penilaian Awal</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">			
				<a href="<?php echo base_url()."penilaian_proses/evaluasi";?>" class="nav-link">Evaluasi</a>
			</li>
			<?php }else{ ?>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="<?php echo base_url()."penilaian_proses";?>" class="nav-link">Penilaian Awal</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block active">			
				<a href="<?php echo base_url()."penilaian_proses/evaluasi";?>" class="nav-link">Evaluasi</a>
			</li>
			<?php } ?>	
		<?php }elseif($this->uri->segment('1') == 'penilaian_produk'){ ?>
			<?php if($this->uri->segment('2') != 'evaluasi'){ ?>
			<li class="nav-item d-none d-sm-inline-block active">
				<a href="<?php echo base_url()."penilaian_produk";?>" class="nav-link">Penilaian Awal</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">	
				<a href="<?php echo base_url()."penilaian_produk/evaluasi";?>" class="nav-link">Evaluasi</a>
			</li>
			<?php }else{ ?>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="<?php echo base_url()."penilaian_produk";?>" class="nav-link">Penilaian Awal</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block active">	
				<a href="<?php echo base_url()."penilaian_produk/evaluasi";?>" class="nav-link">Evaluasi</a>
			</li>
			<?php } ?>	
		<?php }else{ ?>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Home</a>
				</li>
		<?php } ?>	  
      
	  
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="<?php echo base_url();?>assets/tampilan/dist/img/avatar5.png" class="user-image" alt="<?php echo $user[0]->nama; ?> ">
				<span class="hidden-xs"><?php echo $user[0]->nama; ?></span>
			</a>
			<ul class="dropdown-menu">
				<!-- User image -->
				<li class="user-header" style="background-color: #343a40">
					<img src="<?php echo base_url();?>assets/tampilan/dist/img/avatar5.png" class="img-circle" alt="<?php echo $user[0]->nama; ?> ">
					<p style="color: white">
						<?php echo $user[0]->nama; ?> 
						<small><?php echo $level; ?></small>
					</p>
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
					<div class="float-left">
						<a href="#" class="btn btn-default btn-flat">Profile</a>
					</div>
					<div class="float-right">
						<a href="<?php echo base_url().'logout';?>" class="btn btn-default btn-flat">Sign out</a>
					</div>
				</li>
			</ul>
			</li>
    </ul>
  </nav>
  <!-- /.navbar -->

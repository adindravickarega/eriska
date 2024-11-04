  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: rgba(255,255,255,0.1);">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="padding-top: 0px; padding-right: 0px; padding-left: 0px">
      <div class="container-fluid">
        <div class="row mb-2" style="background-color: rgba(0,0,0,0.1);">
          <div class="col-sm-6">
            <h1 class="m-0" style="padding: 10px">Home | Manajemen Risiko</h1>
			<p style="color: #007bff; padding-left: 10px"> Electronic Information System for Risk Analysis based on Fuzzy-FMEA</p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
	  <p>Selamat datang, <?php echo $user[0]->nama; ?>!</p>
	  <div class="row">
	  <div class="col-lg-3 col-6">
	  <p style="text-align: center; margin-bottom:50px">Identifikasi Risiko</p>
            <!-- small card -->
            <a href="<?php echo base_url();?>identifikasi"><div class="small-box" style="background-color:#dfe9fb">
              <div class="inner">
				<div class="image" style="margin-top:-40px; margin-left: calc(50% - 20px);">
				  <img src="<?php echo base_url();?>assets/tampilan/dist/img/identifikasi.png" style="width:40%" class="img-circle elevation-2" alt="Identifikasi Risiko">
				</div>
                <p style="text-align: center; font-size: 14px">Proses penentuan daftar risiko, dampak, penyebab, dan metode deteksinya<br><br><br></p>
              </div>
            </div></a>
          </div>
          <!-- ./col -->
		  
		  <div class="col-lg-3 col-6">
	  <p style="text-align: center; margin-bottom:50px">Framework Risiko</p>
            <!-- small card -->
            <a href="<?php echo base_url();?>framework"><div class="small-box" style="background-color:#f8d6c0">
              <div class="inner">
				<div class="image" style="margin-top:-40px; margin-left: calc(50% - 20px);">
				  <img src="<?php echo base_url();?>assets/tampilan/dist/img/framework.png" style="width:40%" class="img-circle elevation-2" alt="Identifikasi Risiko">
				</div>
                <p style="text-align: center; font-size: 14px">- Fitur skala yang digunakan untuk mengukur risiko<br>- Nilai selera risiko yang digunakan organisasi untuk mengkategorisasi risiko</p>
              </div>
            </div></a>
          </div>
		  <div class="col-lg-3 col-6">
	  <p style="text-align: center; margin-bottom:50px">Penilaian Risiko</p>
            <!-- small card -->
            <a href="<?php echo base_url();?>penilaian"><div class="small-box" style="background-color:#d3ffeb">
              <div class="inner">
				<div class="image" style="margin-top:-40px; margin-left: calc(50% - 20px);">
				  <img src="<?php echo base_url();?>assets/tampilan/dist/img/penilaian.png" style="width:40%" class="img-circle elevation-2" alt="Identifikasi Risiko">
				</div>
                <p style="text-align: center; font-size: 14px">Proses penilaian risiko menggunakan skala severity,occurence, dan detection serta estimasi nilai prioritas risiko<br><br></p>
              </div>
            </div></a>
          </div>
		  <div class="col-lg-3 col-6">
	  <p style="text-align: center; margin-bottom:50px">Cetak Laporan</p>
            <!-- small card -->
            <a href="<?php echo base_url();?>cetak"><div class="small-box" style="background-color:#fef2c4">
              <div class="inner">
				<div class="image" style="margin-top:-40px; margin-left: calc(50% - 20px);">
				  <img src="<?php echo base_url();?>assets/tampilan/dist/img/cetak.png" style="width:40%" class="img-circle elevation-2" alt="Identifikasi Risiko">
				</div>
                <p style="text-align: center; font-size: 14px">Fitur yang digunakan untuk mencetak laporan penilaian risiko (laporan awal, mitigasi, akhir)<br><br><br></p>
              </div>
            </div></a>
          </div>
		</div>
		
		
	  <div class="row">
	  <div class="col-lg-3 col-6">
	  <img src="<?php echo base_url();?>assets/tampilan/dist/img/skala.png" style="width:100%" alt="Skala Risiko">
	  </div>
	  </div>
	  <p> </p>
	  <div class="row">
	  <div class="col-lg-4">
	  Parameter Risiko<br>
	  <div class="row">	  
	  <div class="col-sm-3 col-6" style="background-color:#fff9e4">
	  <p style="font-size: 14px">Severity</p>
	  </div>
	  <div class="col-sm-9 col-6" style="background-color:#fff9e4">
	  <p style="font-size: 14px">: Tingkat keparahan dampak risiko</p>
	  </div>
	  </div>
	  <div class="row">	  
	  <div class="col-sm-3 col-6" style="background-color:#fff9e4">
	  <p style="font-size: 14px">Occurence</p>
	  </div>
	  <div class="col-sm-9 col-6" style="background-color:#fff9e4">
	  <p style="font-size: 14px">: Tingkat kemungkinan munculnya risiko</p>
	  </div>
	  </div>
	  <div class="row">	  
	  <div class="col-sm-3 col-6" style="background-color:#fff9e4">
	  <p style="font-size: 14px">Detection</p>
	  </div>
	  <div class="col-sm-9 col-6" style="background-color:#fff9e4">
	  <p style="font-size: 14px">: Tingkat deteksi suatu metode deteksi</p>
	  </div>
	  </div>
	  
	  <p> </p>
	  Nilai Fuzzy Risk Priority Number (FRPN)<br>
	  <div class="row">	  
	  <div class="col-sm-12 col-6" style="background-color:#ecf8e5">
	  <p style="font-size: 14px">Nilai prioritas risiko berdasarkan pendekatan logika fuzzy dan Failure Mode and Effect Analysis</p>
	  </div>
	  </div>
	  </div>
	  <div class="col-lg-4">
	  <img src="<?php echo base_url();?>assets/tampilan/dist/img/Hubungan FRPN dan SOD.png" style="width:90%; margin-left:30px" alt="hub SOD dan FRPN">
	  </div>
	  </div>
	  
	  
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



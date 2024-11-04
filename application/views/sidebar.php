  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-light"  style="background-color: rgba(0,0,0,0.6);">
    <!-- Brand Logo -->
    <a href="index3.html">
      <img src="<?php echo base_url();?>assets/tampilan/dist/img/logoeRiskA.png" alt="eRiskA" style="width:100%">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Badan Riset dan Inovasi Nasional</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color: rgba(255,255,255,1); color: #989fa6;">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Menus</li>
		  <?php if($level == 'analis' || $level == 'manajemen'){ ?>
				<?php if($page == 'proses' || $page == 'produk' || $page == 'identifikasi' || $page == ''){ ?>
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>Identifikasi Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<?php if($page == 'proses'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>proses" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<?php } ?>
						<?php if($page == 'produk'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>produk" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						<?php } ?>
						</ul>
					</li>
				<?php } ?>
		  <?php } ?>
		  <?php if($level == 'manajemen'){ ?>
				<?php if($page == 'skala_penyebab' || $page == 'skala_dampak' || $page == 'skala_metode_deteksi' || $page == 'selera_risiko' || $page == 'framework'){ ?>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>Identifikasi Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-th"></i>
						<p>Framework Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<?php if($page == 'skala_dampak'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_dampak" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Severity</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_dampak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Severity</p>
						</a>
						</li>
						<?php } ?>
						<?php if($page == 'skala_penyebab'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_penyebab" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Occurrence</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_penyebab" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Occurrence</p>
						</a>
						</li>
						<?php } ?>
						<?php if($page == 'skala_metode_deteksi'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_metode_deteksi" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Detection</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_metode_deteksi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Detection</p>
						</a>
						</li>
						<?php } ?>
						<?php if($page == 'selera_risiko'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>selera_risiko" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Selera Risiko</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>selera_risiko" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Selera Risiko</p>
						</a>
						</li>
						<?php } ?>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>Penilaian Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-history"></i>
						<p>Riwayat Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_awal" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-print"></i>
						<p>Cetak Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>
				<?php }elseif($page == 'proses' || $page == 'produk' || $page == 'identifikasi' || $page == ''){ ?>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>Framework Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_dampak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Severity</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_penyebab" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Occurrence</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_metode_deteksi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Detection</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>selera_risiko" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Selera Risiko</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>Penilaian Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-history"></i>
						<p>Riwayat Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_awal" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-print"></i>
						<p>Cetak Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>
				<?php }elseif($page == 'penilaian_proses' || $page == 'penilaian_produk' || $page == 'penilaian'){ ?>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>Identifikasi Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>Framework Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_dampak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Severity</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_penyebab" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Occurrence</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_metode_deteksi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Detection</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>selera_risiko" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Selera Risiko</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>Penilaian Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<?php if($page == 'penilaian_proses'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_proses" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<?php } ?>
						<?php if($page == 'penilaian_produk'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_produk" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						<?php } ?>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-history"></i>
						<p>Riwayat Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_awal" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-print"></i>
						<p>Cetak Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>
				<?php }elseif($page == 'riwayat_laporan_awal' || $page == 'riwayat_laporan_mitigasi' || $page == 'riwayat_laporan_total'){ ?>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>Identifikasi Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>Framework Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_dampak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Severity</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_penyebab" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Occurrence</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_metode_deteksi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Detection</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>selera_risiko" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Selera Risiko</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>Penilaian Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-history"></i>
						<p>Riwayat Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<?php if($page == 'riwayat_laporan_awal'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_awal" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Akhir</p>
						</a>
						</li>
						<?php }elseif($page == 'riwayat_laporan_mitigasi'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_awal" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_mitigasi" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Akhir</p>
						</a>
						</li>
						<?php }elseif($page == 'riwayat_laporan_total'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_awal" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_total" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Akhir</p>
						</a>
						</li>
						<?php } ?>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-print"></i>
						<p>Cetak Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>
				<?php }elseif($page == 'cetak'){ ?>
				<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>Identifikasi Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>Framework Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_dampak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Severity</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_penyebab" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Occurrence</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>skala_metode_deteksi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Skala Detection</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>selera_risiko" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Selera Risiko</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>Penilaian Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-history"></i>
						<p>Riwayat Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_awal" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>riwayat_laporan_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Riwayat Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-print"></i>
						<p>Cetak Laporan<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Awal</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_mitigasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Mitigasi</p>
						</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url();?>home/cetak_total" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Cetak Laporan Akhir</p>
						</a>
						</li>
						</ul>
					</li>	
				<?php } ?>
		  <?php } ?>
		  <?php if($level == 'penilai'){ ?>
				<?php if($page == 'penilaian_proses' || $page == 'penilaian_produk' || $page == 'penilaian' || $page == ''){ ?>
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>Penilaian Risiko<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
						<?php if($page == 'penilaian_proses'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_proses" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_proses" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Proses</p>
						</a>
						</li>
						<?php } ?>
						<?php if($page == 'penilaian_produk'){ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_produk" class="nav-link active">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
						<a href="<?php echo base_url();?>penilaian_produk" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Produk</p>
						</a>
						</li>
						<?php } ?>
						</ul>
					</li>
				<?php } ?>
			<?php } ?>
			<?php if($level == 'analis' && ($page != 'penilaian_proses' && $page != 'penilaian_produk' && $page != 'penilaian')){ ?>
			<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="nav-icon fas fa-file-signature"></i>
					<p>Penilaian Risiko<i class="right fas fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
					<li class="nav-item">
					<a href="<?php echo base_url();?>penilaian_proses" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Proses</p>
					</a>
					</li>
					<li class="nav-item">
					<a href="<?php echo base_url();?>penilaian_produk" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Produk</p>
					</a>
					</li>
					</ul>
				</li>
			<?php }else if($level == 'analis' && ($page == 'penilaian_proses' || $page == 'penilaian_produk' || $page == 'penilaian')){ ?>
			<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="nav-icon fas fa-file-alt"></i>
					<p>Identifikasi Risiko<i class="right fas fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
					<li class="nav-item">
					<a href="<?php echo base_url();?>proses" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Proses</p>
					</a>
					</li>
					<li class="nav-item">
					<a href="<?php echo base_url();?>produk" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Produk</p>
					</a>
					</li>
					</ul>
				</li>
			<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
					<i class="nav-icon fas fa-file-signature"></i>
					<p>Penilaian Risiko<i class="right fas fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
					<?php if($page == 'penilaian_proses'){ ?>
					<li class="nav-item">
					<a href="<?php echo base_url();?>penilaian_proses" class="nav-link active">
					<i class="far fa-circle nav-icon"></i>
					<p>Proses</p>
					</a>
					</li>
					<?php }else{ ?>
					<li class="nav-item">
					<a href="<?php echo base_url();?>penilaian_proses" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Proses</p>
					</a>
					</li>
					<?php } ?>
					<?php if($page == 'penilaian_produk'){ ?>
					<li class="nav-item">
					<a href="<?php echo base_url();?>penilaian_produk" class="nav-link active">
					<i class="far fa-circle nav-icon"></i>
					<p>Produk</p>
					</a>
					</li>
					<?php }else{ ?>
					<li class="nav-item">
					<a href="<?php echo base_url();?>penilaian_produk" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Produk</p>
					</a>
					</li>
					<?php } ?>
					</ul>
				</li>
			<?php } ?>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
	<hr style="border: 3px solid white; margin-top:25vh">
	<footer class="footer-distributed">
	<div class="footer-left">
		<div class="footer-icons">
			<i class="fa fa-map-marker"></i>
			  <p><span>KST BJ. Habibie Gd 720, Muncul, Setu</span>
				Tangsel, Banten - 15314</p>
		</div>

		<div class="footer-icons">
			<i class="fa fa-phone"></i>
			<p>+62 811-1933-3594</p>
		</div>
		<div class="footer-icons">
			<i class="fa fa-envelope"></i>
			<p>prtp@brin.go.id</p>
		</div>		
		<div class="footer-icons">
			<img src="<?php echo base_url().'assets/login-img/brin.png'?>" style="width:50%">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-linkedin"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>

	<div class="footer-center">
	</div>
	<div class="footer-right">
		
	</div>
  </footer>
  </aside>
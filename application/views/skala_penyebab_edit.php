  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Skala Pengukuran Tingkat Kemungkinan Munculnya Risiko (Occurrence)</h1>
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
			<div class="row">
				<div class="col-md-12">
					<div class="card card-info">
					  <div class="card-header">
					  <div class="row">
						<div class="col-md-6">
						<h3 class="card-title">Edit Skala Penyebab Proses</h3>
						</div>
						<div class="col-md-6">
						<h3 class="card-title">Edit Skala Penyebab Produk</h3>
						</div>
						</div>
					  </div>
					  <?php foreach($skala_penyebab as $sp){?>
					  <div class="card-body">
							<input type="text" class="form-control" id="id_skala_penyebab" value="<?php echo $sp->id; ?>" hidden>
							
							<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label for="judul">Ranking<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="ranking" placeholder="Ranking" value="<?php echo $sp->ranking; ?>" readonly>
							</div>
							<div class="form-group">
								<label for="judul_proses">Nama Proses<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="judul_proses" placeholder="Nama Proses" value="<?php echo $sp->judul_proses; ?>" required>
							</div>
							<div class="form-group">
								<label for="deskripsi_proses">Deskripsi<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="deskripsi_proses" placeholder="Deskripsi" value="<?php echo $sp->deskripsi_proses; ?>" required>
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<label for="judul">Ranking<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="ranking" placeholder="Ranking" value="<?php echo $sp->ranking; ?>" readonly>
							</div>
							<div class="form-group">
								<label for="judul_produk">Nama Produk<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="judul_produk" placeholder="Nama Produk" value="<?php echo $sp->judul_produk; ?>" required>
							</div>
							<div class="form-group">
								<label for="deskripsi_produk">Deskripsi<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="deskripsi_produk" placeholder="Deskripsi" value="<?php echo $sp->deskripsi_produk; ?>" required>
							</div>
							</div>
							</div>
					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <button type="submit" class="btn btn-info" value="Submit" onclick="javascript:simpan()">Simpan</button>
						  <button type="submit" class="btn btn-default float-right" onclick="javascript:back()">Kembali</button>
					  </div>
					  <?php } ?>
					</div>
			  
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
<script type="text/javascript">
function simpan(){
			var id_skala_penyebab, judul_proses, deskripsi_proses, judul_produk, deskripsi_produk;
			id_skala_penyebab = document.getElementById("id_skala_penyebab").value;
			judul_proses = document.getElementById("judul_proses").value;
			deskripsi_proses = document.getElementById("deskripsi_proses").value;
			judul_produk = document.getElementById("judul_produk").value;
			deskripsi_produk = document.getElementById("deskripsi_produk").value;
			
			if(judul_proses != '' && deskripsi_proses != '' && judul_produk != '' && deskripsi_produk != ''){
				var request = new XMLHttpRequest();
				request.onreadystatechange = function() {
					 if (request.readyState == 4 && request.status == 200) {
						console.log(request.responseText);
						if(request.responseText == " berhasil"){
							Swal.fire(
								  'Berhasil!',
								  'Data telah diupdate!',
								  'success'
								);
								setTimeout(() => { window.location.href = "<?php echo base_url().'skala_penyebab'?>"; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_skala_penyebab'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_skala_penyebab=" + id_skala_penyebab + "&judul_proses=" + judul_proses + "&deskripsi_proses=" + deskripsi_proses + "&judul_produk=" + judul_produk + "&deskripsi_produk=" + deskripsi_produk);
			}
		}
function back(){
	window.location.href = "<?php echo base_url().'skala_penyebab'?>";
}
</script>


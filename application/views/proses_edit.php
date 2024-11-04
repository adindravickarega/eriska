  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Identifikasi Risiko Dashboard</h1>
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
						<div class="col-md-12">
						<h3 class="card-title">Edit Proses</h3>
						</div>
						</div>
					  </div>
					  <?php foreach($ident_risiko as $ir){?>
					  <div class="card-body">
							<input type="text" class="form-control" id="id_proses" value="<?php echo $ir->id; ?>" hidden>
							<div class="form-group">
								<label for="judul">Nama Proses<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="judul" placeholder="Judul" value="<?php echo $ir->judul; ?>" maxlength="100" required>
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi Proses<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" value="<?php echo $ir->deskripsi; ?>" maxlength="100" required>
							</div>
							<div class="form-group">
								<label for="langkah">Langkah Proses<sup style='color:red'>*</sup></label>
								<textarea class="form-control" rows="5" placeholder="Langkah ..." id="langkah" maxlength="100" required><?php echo $ir->langkah; ?></textarea>
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
			var id_proses, judul, deskripsi, langkah;
			id_proses = document.getElementById("id_proses").value;
			judul = document.getElementById("judul").value;
			deskripsi = document.getElementById("deskripsi").value;
			langkah = document.getElementById("langkah").value;
			
			if(judul != '' && deskripsi != '' && langkah != ''){
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
								setTimeout(() => { window.location.href = "<?php echo base_url().'proses'?>"; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_proses'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_proses=" + id_proses + "&judul=" + judul + "&deskripsi=" + deskripsi + "&langkah=" + langkah);
			}
		}
function back(){
	window.location.href = "<?php echo base_url().'proses'?>";
}
</script>


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
		  <div class="col-sm-12">
            <?php foreach($ident_risiko as $ir){?>
			<?php foreach($risiko as $r){?>
            <table style="width:100%">
				<tr>
					<td style="width:20%">Judul :</td>
					<td style="width:80%"><?php echo $ir->judul; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Deskripsi :</td>
					<td style="width:80%"><?php echo $ir->deskripsi; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Identifikasi :</td>
					<td style="width:80%"><?php echo $r->risiko; ?></td>
				</tr>
			</table>
			<?php } ?>
		  <?php } ?>
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
						<h3 class="card-title">Edit Identifikasi Metode Deteksi</h3>
						</div>
						</div>
					  </div>
					  <?php foreach($ident_risiko as $ir){?>
					  <?php foreach($risiko as $r){?>
					  <?php foreach($metode_deteksi as $md){?>
					  <div class="card-body">
							<input type="text" class="form-control" id="id_metode_deteksi_produk" value="<?php echo $md->id; ?>" hidden>
							<input type="text" class="form-control" id="id_risiko_produk" value="<?php echo $r->id; ?>" hidden>
							<input type="text" class="form-control" id="id_produk" value="<?php echo $ir->id; ?>" hidden>
							<div class="form-group">
								<label for="judul">Identifikasi Metode Deteksi<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="metode_deteksi" placeholder="Identifikasi Metode Deteksi" value="<?php echo $md->metode_deteksi; ?>" required>
							</div>
					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <button type="submit" class="btn btn-info" value="Submit" onclick="javascript:simpan()">Simpan</button>
						  <button type="submit" class="btn btn-default float-right" onclick="javascript:back()">Kembali</button>
					  </div>
					  <?php } ?>
					  <?php } ?>
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
			var id_produk, id_metode_deteksi_produk, id_risiko_produk, metode_deteksi;
			id_produk = document.getElementById("id_produk").value;
			id_metode_deteksi_produk = document.getElementById("id_metode_deteksi_produk").value;
			id_risiko_produk = document.getElementById("id_risiko_produk").value;
			metode_deteksi = document.getElementById("metode_deteksi").value;
			
			if(id_metode_deteksi_produk != '' && id_risiko_produk != '' && metode_deteksi != ''){
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
								setTimeout(() => { window.location.href = "<?php echo base_url().'produk/risiko/'?>" + id_produk + '/view/' + id_risiko_produk; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_metode_deteksi_produk'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_metode_deteksi_produk=" + id_metode_deteksi_produk + "&id_risiko_produk=" + id_risiko_produk + "&id_produk=" + id_produk + "&metode_deteksi=" + metode_deteksi);
			}
		}
function back(){
	var id_produk, id_metode_deteksi_produk, id_risiko_produk, metode_deteksi;
	id_produk = document.getElementById("id_produk").value;
	id_metode_deteksi_produk = document.getElementById("id_metode_deteksi_produk").value;
	id_risiko_produk = document.getElementById("id_risiko_produk").value;
	metode_deteksi = document.getElementById("metode_deteksi").value;
	window.location.href = "<?php echo base_url().'produk/risiko/'?>" + id_produk + '/view/' + id_risiko_produk;
}
</script>


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
					<td style="width:20%">ID Produk :</td>
					<td style="width:80%"><?php echo $ir->id; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Nama Produk :</td>
					<td style="width:80%"><?php echo $ir->judul; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Deskripsi Produk :</td>
					<td style="width:80%"><?php echo $ir->deskripsi; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Risiko :</td>
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
						<h3 class="card-title">Edit Identifikasi Dampak, Penyebab, dan Metode Deteksi</h3>
						</div>
						</div>
					  </div>
					  <?php foreach($ident_risiko as $ir){?>
					  <?php foreach($risiko as $r){?>
					  <?php foreach($sod as $s){?>
					  <div class="card-body">
							<input type="text" class="form-control" id="id_sod_produk" value="<?php echo $s->id; ?>" hidden>
							<input type="text" class="form-control" id="id_risiko_produk" value="<?php echo $r->id; ?>" hidden>
							<input type="text" class="form-control" id="id_produk" value="<?php echo $ir->id; ?>" hidden>
							<div class="form-group">
								<label for="judul">Dampak Risiko<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="dampak" placeholder="Dampak Risiko" value="<?php echo $s->dampak; ?>" maxlength="100" required>
							</div>
							<div class="form-group">
								<label for="judul">Penyebab Risiko<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="penyebab" placeholder="Penyebab Risiko" value="<?php echo $s->penyebab; ?>" maxlength="100" required>
							</div>
							<div class="form-group">
								<label for="judul">Metode Deteksi Risiko<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="metode_deteksi" placeholder="Metode Deteksi Risiko" value="<?php echo $s->metode_deteksi; ?>" maxlength="100" required>
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
			var id_produk, id_sod_produk, id_risiko_produk, dampak, penyebab, metode_deteksi;
			id_produk = document.getElementById("id_produk").value;
			id_sod_produk = document.getElementById("id_sod_produk").value;
			id_risiko_produk = document.getElementById("id_risiko_produk").value;
			dampak = document.getElementById("dampak").value;
			penyebab = document.getElementById("penyebab").value;
			metode_deteksi = document.getElementById("metode_deteksi").value;
			
			if(id_sod_produk != '' && id_risiko_produk != '' && dampak != '' && penyebab != '' && metode_deteksi != ''){
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
				request.open('POST', "<?php echo base_url().'home/edit_sod_produk'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_sod_produk=" + id_sod_produk + "&id_risiko_produk=" + id_risiko_produk + "&id_produk=" + id_produk + "&dampak=" + dampak + "&penyebab=" + penyebab + "&metode_deteksi=" + metode_deteksi);
			}
		}
function back(){
	var id_produk, id_risiko_produk;
	id_produk = document.getElementById("id_produk").value;
	id_risiko_produk = document.getElementById("id_risiko_produk").value;
	window.location.href = "<?php echo base_url().'produk/risiko/'?>" + id_produk + '/view/' + id_risiko_produk;
}
</script>


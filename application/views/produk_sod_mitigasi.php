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
					<td style="width:20%">Deskripsi :</td>
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
								<label for="dampak">Identifikasi Dampak<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="dampak" placeholder="Identifikasi Dampak" value="<?php echo $s->dampak; ?>" maxlength="100" readonly required>
							</div>
							<div class="form-group">
								<label for="penyebab">Identifikasi Penyebab<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="penyebab" placeholder="Identifikasi Penyebab" value="<?php echo $s->penyebab; ?>" maxlength="100" readonly required>
							</div>
							<div class="form-group">
								<label for="metode_deteksi">Identifikasi Metode Deteksi<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="metode_deteksi" placeholder="Identifikasi Metode Deteksi" value="<?php echo $s->metode_deteksi; ?>" maxlength="100" readonly required>
							</div>
							<div class="form-group">
								<label for="usulan_tindakan">Usulan Tindakan<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="usulan_tindakan" placeholder="Usulan Tindakan" value="<?php echo $s->usulan_tindakan; ?>" maxlength="100" required>
							</div>
							<div class="form-group">
								<label for="penanggung_jawab">Penanggung Jawab<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="penanggung_jawab" placeholder="Penanggung Jawab" value="<?php echo $s->penanggung_jawab; ?>" maxlength="100" required>
							</div>
							<div class="form-group">
								<label for="tanggal_target">Tanggal Target<sup style='color:red'>*</sup></label>
								<input type="date" id="tanggal_target" name="tanggal_target" min="<?php echo date("Y-m-d");?>" value="<?php echo $s->tanggal_target; ?>" required>
							  </div>
							<div class="form-group">
								<label for="tindakan_perbaikan">Tindakan Perbaikan</label>
								<input type="text" class="form-control" id="tindakan_perbaikan" placeholder="Tindakan Perbaikan" value="<?php echo $s->tindakan_perbaikan; ?>" maxlength="100" required>
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
			var id_produk, id_sod_produk, id_risiko_produk, usulan_tindakan, penanggung_jawab, tanggal_target, tindakan_perbaikan;
			id_produk = document.getElementById("id_produk").value;
			id_sod_produk = document.getElementById("id_sod_produk").value;
			id_risiko_produk = document.getElementById("id_risiko_produk").value;
			usulan_tindakan = document.getElementById("usulan_tindakan").value;
			penanggung_jawab = document.getElementById("penanggung_jawab").value;
			tanggal_target = document.getElementById("tanggal_target").value;
			tindakan_perbaikan = document.getElementById("tindakan_perbaikan").value;
			
			if(id_sod_produk != '' && id_risiko_produk != '' && usulan_tindakan != '' && penanggung_jawab != '' && tanggal_target != ''){
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
								setTimeout(() => { window.location.href = "<?php echo base_url().'penilaian_produk/evaluasi'?>"; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/mitigasi_sod_produk'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_sod_produk=" + id_sod_produk + "&id_risiko_produk=" + id_risiko_produk + "&id_produk=" + id_produk + "&usulan_tindakan=" + usulan_tindakan + "&penanggung_jawab=" + penanggung_jawab + "&tanggal_target=" + tanggal_target + "&tindakan_perbaikan=" + tindakan_perbaikan);
			}
		}
function back(){
	var id_produk, id_risiko_produk;
	id_produk = document.getElementById("id_produk").value;
	id_risiko_produk = document.getElementById("id_risiko_produk").value;
	window.location.href = "<?php echo base_url().'produk/risiko/'?>" + id_produk + '/view/' + id_risiko_produk;
}
</script>


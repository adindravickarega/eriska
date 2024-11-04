  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Penilaian SOD Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
		  <div class="col-sm-12">
            <?php foreach($produk as $ir){?>
			<?php foreach($risiko as $r){?>
            <table style="width:100%">
				<tr>
					<td style="width:20%">Nama Produk :</td>
					<td style="width:80%"><?php echo $ir->judul; ?></td>
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
						<h3 class="card-title">Nilai SOD</h3>
						</div>
						</div>
					  </div>
					  <?php foreach($produk as $ir){?>
					  <?php foreach($risiko as $r){?>
					  <?php foreach($sod as $s){?>
					  <div class="card-body">
							<input type="text" class="form-control" id="id_sod_produk" value="<?php echo $s->id; ?>" hidden>
							<input type="text" class="form-control" id="id_risiko_produk" value="<?php echo $r->id; ?>" hidden>
							<input type="text" class="form-control" id="id_produk" value="<?php echo $ir->id; ?>" hidden>
							<h3><b>Skala Severity</b></h3>
							<p><b><?php echo 'Dampak: '.$s->dampak;?></b></p>
							<?php $id = 10;
							foreach($skala_dampak as $sd){?>
							<div class="custom-control custom-radio">
							<input class="custom-control-input" type="radio" id="<?php echo 'sd'.$id; ?>" name="sd" value="<?php echo $id; ?>">
							<label for="<?php echo 'sd'.$id; ?>" class="custom-control-label"><?php echo $sd->ranking.': '.$sd->judul_produk.': '.$sd->deskripsi_produk; ?></label>
							</div>
							<?php $id--;} ?>
							<br>
							<h3><b>Skala Occurence</b></h3>
							<p><b><?php echo 'Penyebab: '.$s->penyebab;?></b></p>
							<?php $id = 10;
							foreach($skala_penyebab as $sp){?>
							<div class="custom-control custom-radio">
							<input class="custom-control-input" type="radio" id="<?php echo 'sp'.$id; ?>" name="sp" value="<?php echo $id; ?>">
							<label for="<?php echo 'sp'.$id; ?>" class="custom-control-label"><?php echo $sp->ranking.': '.$sp->judul_produk.': '.$sp->deskripsi_produk; ?></label>
							</div>
							<?php $id--;} ?>
							<br>
							<h3><b>Skala Detection</b></h3>
							<p><b><?php echo 'Deteksi: '.$s->metode_deteksi;?></b></p>
							<?php $id = 10;
							foreach($skala_metode_deteksi as $smd){?>
							<div class="custom-control custom-radio">
							<input class="custom-control-input" type="radio" id="<?php echo 'smd'.$id; ?>" name="smd" value="<?php echo $id; ?>">
							<label for="<?php echo 'smd'.$id; ?>" class="custom-control-label"><?php echo $smd->ranking.': '.$smd->judul_produk.': '.$smd->deskripsi_produk; ?></label>
							</div>
							<?php $id--;} ?>
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
			var sd,sp,smd;
			var id_produk, id_risiko_produk, id_sod_produk;
			id_produk = document.getElementById("id_produk").value;
			id_sod_produk = document.getElementById("id_sod_produk").value;
			id_risiko_produk = document.getElementById("id_risiko_produk").value;
			for(let i = 1; i < 11; i++){
				if(document.getElementById("sd" + i).checked){
					sd = document.getElementById("sd" + i).value;
				}
				if(document.getElementById("sp" + i).checked){
					sp = document.getElementById("sp" + i).value;
				}
				if(document.getElementById("smd" + i).checked){
					smd = document.getElementById("smd" + i).value;
				}
			}
			if(id_produk != '' && id_risiko_produk != '' && id_sod_produk != '' && sd != '' && sd > 0 && sd < 11 && sp != '' && sp > 0 && sp < 11 && smd != '' && smd > 0 && smd < 11){
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
								setTimeout(() => { window.location.href = "<?php echo base_url().'penilaian_produk/'?>"; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_penilaian_produk'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_sod_produk=" + id_sod_produk + "&id_risiko_produk=" + id_risiko_produk + "&id_produk=" + id_produk + "&sd=" + sd + "&sp=" + sp + "&smd=" + smd);
			}else{
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Mohon tentukan nilai Dampak (S), Penyebab (O), dan Deteksi (D)!',
				  footer: '<a href="">Why do I have this issue?</a>'
				})
			}
		}
function back(){
	window.location.href = "<?php echo base_url().'penilaian_produk/'?>";
}
</script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Penunjukan Tim Penilai Risiko Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li><li class="breadcrumb-item"><a href="<?php echo base_url().'produk'?>">Produk</a></li>
            </ol>
          </div><!-- /.col -->
		  <div class="col-sm-12">
		  <?php foreach($ident_risiko as $ir){?>
            <table style="width:100%">
				<tr>
					<td style="width:20%">Nama Produk :</td>
					<td style="width:80%"><?php echo $ir->judul; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Deskripsi Produk :</td>
					<td style="width:80%"><?php echo $ir->deskripsi; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Spesifikasi Produk :</td>
					<td style="width:80%"><?php echo $ir->langkah; ?></td>
				</tr>
			</table>
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
						<div class="col-md-4">
						<h3 class="card-title">Tim Penilai Produk</h3>
						</div>
						<div class="col-md-4">
						
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
						
						</div>
						<div class="col-md-1">
						
						</div>
						</div>
					  </div>
					  <div class="card-body">
							<?php foreach($ident_risiko as $ir){?>
							<input type="text" class="form-control" id="id_produk" value="<?php echo $ir->id; ?>" hidden>
							<?php $i = 1;?>
							<?php foreach($penilai as $p){
								$isi = 0;
								foreach($penilai_dipilih as $pd){
							if($p->id == $pd){?>
								<div class="custom-control custom-checkbox">
								<?php echo "<input class='custom-control-input' type='checkbox' id='penilai".$i."' value='".$p->id."' checked>";
								echo "<label for='penilai".$i."' class='custom-control-label'>".$p->nama."</label><br>";
								$isi = 1;
								?>
								</div>
							<?php } ?>
							<?php }
							if($isi == 0){ ?>
								<div class="custom-control custom-checkbox">
								<?php echo "<input class='custom-control-input' type='checkbox' id='penilai".$i."' value='".$p->id."'>";
								echo "<label for='penilai".$i."' class='custom-control-label'>".$p->nama."</label><br>";
								?>
								</div>
							<?php } ?>
							<?php $i++;} ?>							
							<?php } ?>
							<input type="text" class="form-control" id="jumlah_penilai" value="<?php echo $i; ?>" hidden>
						<!-- /input-group -->
					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <button type="submit" class="btn btn-info" onclick="javascript:penilai()">Tentukan Penilai</button>
						  <button type="submit" class="btn btn-default float-right" onclick="javascript:back()">Kembali</button>
					  </div>
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
function penilai(){
	var id_produk, penilai, jumlah_penilai, penilai_cek, nilai;
	id_produk = document.getElementById("id_produk").value;
	penilai = "penilai";
	jumlah_penilai = document.getElementById("jumlah_penilai").value;
	nilai = "";
	for (let i = 1; i < jumlah_penilai; i++) {
		penilai_cek = penilai + i;
		if(document.getElementById(penilai_cek).checked){
			nilai = nilai + document.getElementById(penilai_cek).value;
			nilai = nilai + ";";
		}
	}
	var request = new XMLHttpRequest();
	request.onreadystatechange = function() {
		 if (request.readyState == 4 && request.status == 200) {
			console.log(request.responseText);
		 }
	  }
	request.open('POST', "<?php echo base_url().'home/simpan_penilai_produk'?>", true);
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	request.send("id_produk=" + id_produk + "&penilai=" + nilai);
	Swal.fire(
	  'Berhasil!',
	  'Tim penilai telah ditentukan!',
	  'success'
	);
	setTimeout(() => { window.location.href = "<?php echo base_url().'produk';?>"; }, 2000);
}
function back(){
	window.location.href = "<?php echo base_url().'produk';?>";
}
</script>


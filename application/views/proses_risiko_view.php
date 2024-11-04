  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Identifikasi Risiko Dashboard</h1>
          </div><!-- /.col -->
		  <?php foreach($ident_risiko as $ir){?>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li><li class="breadcrumb-item"><a href="<?php echo base_url().'proses'?>">Proses</a></li><li class="breadcrumb-item"><a href="<?php echo base_url().'proses/view/'.$ir->id?>">Risiko</a></li>
            </ol>
          </div><!-- /.col -->
		  <?php } ?>
		  <div class="col-sm-12">
		  <?php foreach($ident_risiko as $ir){?>
			<?php foreach($risiko as $r){?>
            <table style="width:100%">
				<tr>
					<td style="width:20%">ID Proses:</td>
					<td style="width:80%"><?php echo $ir->id; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Nama Proses :</td>
					<td style="width:80%"><?php echo $ir->judul; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Deskripsi Proses :</td>
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
			<!-- Daftar Penyebab-->
			<div class="row">
			  <div class="col-md-12">
			  <div class="card card-info">
					  <div class="card-header">
					  <div class="row">
						<div class="col-md-6">
						<h3 class="card-title">Identifikasi Dampak, Penyebab, dan Metode Deteksi</h3>
						</div>
						<div class="col-md-4">
						
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-1">
						<button type="button" class="btn btn-block btn-sm" style="background-color: #f7f78d" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i></button>
						</form>
						</div>
						</div>
					  </div>
					  <div class="card-body">
							<table class="table table-striped" id="mydata">
							<thead>
								<tr>
									<th>No.</th>
									<th>Dampak Risiko</th>
									<th>Penyebab Risiko</th>
									<th>Metode Deteksi Risiko</th>
									<th>Action</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php $iterasi = 1;?>
							<?php foreach($ident_risiko as $ir){?>
							<?php foreach($risiko as $r){?>
							<?php foreach($sod as $s){?>
							<tr>
							<td><?php echo $iterasi++;?></td>
							<td><?php echo $s->dampak;?></td>
							<td><?php echo $s->penyebab;?></td>
							<td><?php echo $s->metode_deteksi;?></td>
							<td>
							<a class="btn btn-sm" style="color: white; background-color: #ee5bf5" href="<?php echo base_url().'proses/risiko/'.$ir->id.'/'.$r->id.'/sod/edit/'.$s->id;?>">
							<i class="fas fa-pencil-alt">
							</i>
							Edit
							</a>
							<a class="btn btn-dark btn-sm" onclick="javascript:hapus(<?php echo $s->id; ?>)">
							<i class="fas fa-trash">
							</i>
							Delete
							</a>
							</td>
							</tr>
							<?php } ?>
							<?php } ?>
						  <?php } ?>
							</tbody>
						</table>
						<!-- /input-group -->
					  </div>
					  <!-- /.card-body -->
					</div>
			  
				</div>
				
				
				<div class="modal fade" id="modal-lg">
				<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<?php foreach($risiko as $r){?>
				<div class="modal-header bg-info">
				<h4 class="modal-title">Identifikasi Dampak, Penyebab, dan Metode Deteksi</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
				<input type="text" class="form-control" id="id_risiko_proses" value="<?php echo $r->id; ?>" hidden>
				<div class="form-group">
					<label for="dampak">Identifikasi Dampak<sup style='color:red'>*</sup></label>
					<input type="text" class="form-control" id="dampak" placeholder="Identifikasi Dampak" maxlength="100" required>
				</div>
				<div class="form-group">
					<label for="penyebab">Identifikasi Penyebab<sup style='color:red'>*</sup></label>
					<input type="text" class="form-control" id="penyebab" placeholder="Identifikasi Penyebab" maxlength="100" required>
				</div>
				<div class="form-group">
					<label for="metode_deteksi">Identifikasi Metode Deteksi<sup style='color:red'>*</sup></label>
					<input type="text" class="form-control" id="metode_deteksi" placeholder="Identifikasi Metode Deteksi" maxlength="100" required>
				</div>
				</div>
				<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-info" value="Submit" onclick="javascript:simpan()">Simpan</button>
				</div>
				<?php } ?>
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
function simpan(){
			var risiko;
			id_risiko_proses = document.getElementById("id_risiko_proses").value;
			dampak = document.getElementById("dampak").value;
			penyebab = document.getElementById("penyebab").value;
			metode_deteksi = document.getElementById("metode_deteksi").value;
			
			if(dampak != '' && penyebab != '' && metode_deteksi != ''){
				var request = new XMLHttpRequest();
				request.onreadystatechange = function() {
					 if (request.readyState == 4 && request.status == 200) {
						console.log(request.responseText);
						if(request.responseText == " berhasil"){
							Swal.fire(
								  'Berhasil!',
								  'Data telah ditambah!',
								  'success'
								);
								setTimeout(() => { location.replace(location.href); }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/add_proses_sod'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_risiko_proses=" + id_risiko_proses + "&dampak=" + dampak + "&penyebab=" + penyebab + "&metode_deteksi=" + metode_deteksi);
			}
		}
var ke;
function hapus(ke){
	Swal.fire({
	  title: 'Apakah Anda yakin?',
	  text: "Data akan dihapus permanen!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, hapus ini!'
	}).then((result) => {
	  if (result.isConfirmed) {
		  var request = new XMLHttpRequest();
			request.onreadystatechange = function() {
				 if (request.readyState == 4 && request.status == 200) {
					console.log(request.responseText);
					if(request.responseText == " berhasil"){
						Swal.fire(
						  'Deleted!',
						  'Penyebab telah dihapus.',
						  'success'
						)
							setTimeout(() => { location.replace(location.href); }, 2000);
					}
				 }
			  }
			request.open('POST', "<?php echo base_url().'home/delete_proses_sod'?>", true);
			request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			request.send("id_sod=" + ke);
	  }
	})
}
</script>


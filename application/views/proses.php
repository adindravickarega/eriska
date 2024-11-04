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
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
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
						<div class="col-md-4">
						<h3 class="card-title">Identifikasi Proses</h3>
						</div>
						<div class="col-md-4">
						
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
						
						</div>
						<div class="col-md-1">
						<button type="button" class="btn btn-block bg-gradient-warning btn-sm" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i></button>
						</form>
						</div>
						</div>
					  </div>
					  <div class="card-body">
							<table class="table table-striped" id="mydata">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama Proses</th>
									<th>Deskripsi Proses</th>
									<th>Action</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php $iterasi = 1;?>
							<?php foreach($ident_risiko as $ir){?>
							<tr>
							<td><?php echo $ir->id;?></td>
							<td><?php echo $ir->judul;?></td>
							<td><?php echo $ir->deskripsi;?></td>
							<td>
							<a class="btn btn-primary btn-sm" href="<?php echo base_url().'proses/view/'.$ir->id;?>">
							<i class="fas fa-folder">
							</i>
							View
							</a>
							<a class="btn btn-info btn-sm" href="<?php echo base_url().'proses/edit/'.$ir->id;?>">
							<i class="fas fa-pencil-alt">
							</i>
							Edit
							</a>
							<?php if($level == 'manajemen'){ ?>
							<a class="btn btn-warning btn-sm" href="<?php echo base_url().'proses/pembobotan_sod/'.$ir->id;?>">
							<i class="fas fa-tachometer-alt">
							</i>
							Weight
							</a>
							<?php } ?>
							<a class="btn btn-success btn-sm" href="<?php echo base_url().'proses/penilai_proses/'.$ir->id;?>">
							<i class="fas fa-calendar-alt">
							</i>
							Assessor
							</a>
							<a class="btn btn-danger btn-sm" onclick="javascript:hapus(<?php echo $ir->id; ?>)">
							<i class="fas fa-trash">
							</i>
							Delete
							</a>
							</td>
							</tr>
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
				<div class="modal-header bg-info">
				<h4 class="modal-title">Identifikasi Risiko: Proses</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
				<div class="form-group">
					<label for="judul">Nama Proses<sup style='color:red'>*</sup></label>
					<input type="text" class="form-control" id="judul" placeholder="Nama Proses" maxlength="100" required>
				</div>
				<div class="form-group">
					<label for="deskripsi">Deskripsi<sup style='color:red'>*</sup></label>
					<input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" maxlength="100" required>
				</div>
				<div class="form-group">
					<label for="langkah">Langkah Proses<sup style='color:red'>*</sup></label>
					<textarea class="form-control" rows="5" placeholder="Langkah ..." id="langkah" maxlength="100" required></textarea>
				</div>
				</div>
				<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-info" value="Submit" onclick="javascript:simpan()">Simpan</button>
				</div>
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
			var judul, deskripsi, langkah;
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
								  'Data telah ditambah!',
								  'success'
								);
								setTimeout(() => { location.replace(location.href); }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/add_proses'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("judul=" + judul + "&deskripsi=" + deskripsi + "&langkah=" + langkah);
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
						  'Proses telah dihapus.',
						  'success'
						)
							setTimeout(() => { location.replace(location.href); }, 2000);
					}
				 }
			  }
			request.open('POST', "<?php echo base_url().'home/delete_proses'?>", true);
			request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			request.send("id_proses=" + ke);
	  }
	})
}
function penilai(){
	window.location.href = "<?php echo base_url().'proses/penilai_proses';?>";
}
</script>


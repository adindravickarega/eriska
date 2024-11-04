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
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li><li class="breadcrumb-item"><a href="<?php echo base_url().'produk'?>">Produk</a></li>
            </ol>
          </div><!-- /.col -->
		  <div class="col-sm-12">
		  <?php foreach($ident_risiko as $ir){?>
            <table style="width:100%">
				<tr>
					<td style="width:20%">ID Produk:</td>
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
					<td style="width:20%">Spesifikasi Produk  :</td>
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
						<h3 class="card-title">Identifikasi Risiko</h3>
						</div>
						<div class="col-md-4">
						
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
						
						</div>
						<div class="col-md-1">
						<button type="button" class="btn btn-block btn-sm" style="background-color: #c1f7eb" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i></button>
						</form>
						</div>
						</div>
					  </div>
					  <div class="card-body">
							<table class="table table-striped" id="mydata">
							<thead>
								<tr>
									<th>No.</th>
									<th>Risiko</th>
									<th>Action</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php $iterasi = 1;?>
							<?php foreach($risiko as $r){?>
							<tr>
							<td><?php echo $iterasi++;?></td>
							<td><?php echo $r->risiko;?></td>
							<td>
							<a class="btn btn-success btn-sm" href="<?php echo base_url().'produk/risiko/'.$r->id_produk.'/view/'.$r->id;?>">
							<i class="fas fa-folder">
							</i>
							View
							</a>
							<a class="btn btn-sm" style="color: white; background-color: #ffc107" href="<?php echo base_url().'produk/risiko/'.$r->id_produk.'/edit/'.$r->id;?>">
							<i class="fas fa-pencil-alt">
							</i>
							Edit
							</a>
							<a class="btn bg-purple btn-sm" onclick="javascript:hapus(<?php echo $r->id; ?>)">
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
				<?php foreach($ident_risiko as $ir){?>
				<div class="modal-header bg-info">
				<h4 class="modal-title">Identifikasi Risiko</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
				<input type="text" class="form-control" id="id_produk" value="<?php echo $ir->id; ?>" hidden>
				<div class="form-group">
					<label for="risiko">Identifikasi Risiko<sup style='color:red'>*</sup></label>
					<input type="text" class="form-control" id="risiko" placeholder="Identifikasi Risiko" maxlength="100" required>
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
			id_produk = document.getElementById("id_produk").value;
			risiko = document.getElementById("risiko").value;
			
			if(risiko != ''){
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
				request.open('POST', "<?php echo base_url().'home/add_produk_risiko'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_produk=" + id_produk + "&risiko=" + risiko);
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
						  'Identifikasi risiko telah dihapus.',
						  'success'
						)
							setTimeout(() => { location.replace(location.href); }, 2000);
					}
				 }
			  }
			request.open('POST', "<?php echo base_url().'home/delete_produk_risiko'?>", true);
			request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			request.send("id_risiko=" + ke);
	  }
	})
}
</script>


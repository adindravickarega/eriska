  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Penilaian Risiko Dashboard</h1>
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
						<h3 class="card-title">Penilaian Risiko: Proses</h3>
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
							<table class="table table-striped" id="mydata">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama Proses</th>
									<th>Risiko</th>
									<th>Dampak<br>Risiko</th>
									<th>S</th>
									<th>Penyebab<br>Risiko</th>
									<th>O</th>
									<th>Metode<br>Deteksi</th>
									<th>D</th>
									<th>RPN</th>
									<th>FRPN</th>
									<th>Prioritas</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php foreach($proses as $p){?>
							<?php $iterasi = 1;?>
							<?php foreach($sod as $s){?>
							<?php foreach($risiko as $r){?>
							<?php if($p->id == $r->id_proses && $s->id_risiko_proses == $r->id){ ?>
							<tr>
							<td><?php echo $p->id;?></td>
							<td><?php echo $p->judul;?></td>
							<td><?php echo $r->risiko;?></td>
							<td><?php echo $s->dampak;?></td>
							<td><?php echo $s->ave_s;?></td>
							<td><?php echo $s->penyebab;?></td>
							<td><?php echo $s->ave_o;?></td>
							<td><?php echo $s->metode_deteksi;?></td>
							<td><?php echo $s->ave_d;?></td>
							<td><?php echo $s->rpn;?></td>
							<td><?php echo $s->frpn;?></td>
							<td><?php echo $iterasi++;?></td>
							<td><?php echo $s->keterangan;?></td>
							</tr>
							<?php } ?>
							<?php } ?>
							<?php } ?>
							<?php } ?>
							</tbody>
						</table>
						<!-- /input-group -->
					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <a type="submit" class="btn btn-info" href="<?php echo base_url().'penilaian_proses';?>">Kembali</a>
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


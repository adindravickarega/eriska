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
						<h3 class="card-title">Evaluasi Risiko: Produk</h3>
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
									<th>Nama Produk</th>
									<th>Risiko</th>
									<th>Usulan Tindakan</th>
									<th>Penanggung Jawab</th>
									<th>Tanggal Target Penyelesaian</th>
									<th>Tindakan Perbaikan</th>
									<th>Severity<br>(S)</th>
									<th>Occurence<br>(O)</th>
									<th>Detection<br>(D)</th>
									<th>Action</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php $iterasi = 1;?>
							<?php foreach($produk as $p){?>
							<?php foreach($risiko as $r){?>
							<?php foreach($sod as $s){?>
							<?php if((($p->id == $r->id_produk && $s->id_risiko_produk == $r->id && ($user[0]->level == 'analis' || $user[0]->level == 'manajemen')) || ((strpos($p->penilai,$user[0]->id.";")==true || (strpos($p->penilai,$user[0]->id.";")==0 && substr($p->penilai,0,strlen($user[0]->id.";")) == $user[0]->id.";") || substr($p->penilai,-strlen($user[0]->id)) == $user[0]->id) && $user[0]->level == 'penilai' && $p->id == $r->id_produk && $s->id_risiko_produk == $r->id)) && ($s->keterangan == "Hindari" || $s->keterangan == "Mitigasi")){ ?>
							<tr>
							<td><?php echo $p->id;?></td>
							<td><?php echo $p->judul;?></td>
							<td><?php echo $r->risiko;?></td>
							<td><?php echo $s->usulan_tindakan;?></td>
							<td><?php echo $s->penanggung_jawab;?></td>
							<td><?php echo $s->tanggal_target;?></td>
							<td><?php echo $s->tindakan_perbaikan;?></td>
							<?php if($belum_menilai == 1){ ?>
							<td> </td>
							<td> </td>
							<td> </td>
							<?php }else{ ?>
							<?php $ada = 0;?>
							<?php foreach($penilaian_produk as $pp){?>
							<?php if($s->id == $pp->id_sod_produk){ ?>
							<td><?php echo $pp->nilai_s_eval;?></td>
							<td><?php echo $pp->nilai_o_eval;?></td>
							<td><?php echo $pp->nilai_d_eval;?></td>
							
							<?php $ada = 1;
							break;} ?>
							<?php }
							if($ada == 0){?>
							<td> </td>
							<td> </td>
							<td> </td>
							<?php } ?>
							<?php } ?>
							<td>
							<?php if($user[0]->level == 'manajemen' || $user[0]->level == 'analis'){?>
							<a class="btn btn-warning btn-sm" href="<?php echo base_url().'produk/risiko/'.$p->id.'/'.$r->id.'/sod/mitigasi/'.$s->id;?>">
							<i class="fas fa-recycle">
							</i>
							Mitigate
							</a>
							<?php } ?>
							<a class="btn btn-info btn-sm" href="<?php echo base_url().'penilaian_produk/evaluasi/'.$p->id.'/'.$r->id.'/edit/'.$s->id;?>">
							<i class="fas fa-pencil-alt">
							</i>
							Penilaian
							</a>
							</td>
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
						<?php if($user[0]->level == 'analis' || $user[0]->level == 'manajemen'){?>
						  <button type="submit" class="btn btn-info" value="Submit" onclick="javascript:combine()">Hitung</button>
						<?php }elseif($user[0]->level == 'penilai'){ ?>
						  <button type="submit" class="btn btn-info" value="Submit" onclick="javascript:combine()">Kirim</button>
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
				request.open('POST', "<?php echo base_url().'home/add_produk'?>", true);
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
						  'Produk telah dihapus.',
						  'success'
						)
							setTimeout(() => { location.replace(location.href); }, 2000);
					}
				 }
			  }
			request.open('POST', "<?php echo base_url().'home/delete_produk'?>", true);
			request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			request.send("id_produk=" + ke);
	  }
	})
}
function penilai(){
	window.location.href = "<?php echo base_url().'produk/penilai_produk';?>";
}
function combine(){
	Swal.fire({
	  title: 'Apakah kamu yakin untuk mengevaluasi?',
	  html: "Harap pastikan Anda telah melakukan <b>Pembobotan prioritas</b> dan menentukan <b>nilai SOD</b>!<br><br>Evaluasi ini hanya dapat dilakukan <b>1 kali</b>!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, saya setuju!'
	}).then((result) => {
	  if (result.isConfirmed) {
		Swal.fire(
		  'Berhasil!',
		  'Kombinasi penilaian SOD dan evaluasi FMEA telah dilakukan.',
		  'success'
		)
			setTimeout(() => { window.location.href = "<?php echo base_url().'penilaian_produk/evaluasi/combine';?>"; }, 2000);
	  }
	})
}
</script>


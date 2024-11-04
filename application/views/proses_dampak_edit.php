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
						<h3 class="card-title">Edit Identifikasi Dampak</h3>
						</div>
						</div>
					  </div>
					  <?php foreach($ident_risiko as $ir){?>
					  <?php foreach($risiko as $r){?>
					  <?php foreach($dampak as $d){?>
					  <div class="card-body">
							<input type="text" class="form-control" id="id_dampak_proses" value="<?php echo $d->id; ?>" hidden>
							<input type="text" class="form-control" id="id_risiko_proses" value="<?php echo $r->id; ?>" hidden>
							<input type="text" class="form-control" id="id_proses" value="<?php echo $ir->id; ?>" hidden>
							<div class="form-group">
								<label for="judul">Identifikasi Dampak<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="dampak" placeholder="Identifikasi Dampak" value="<?php echo $d->dampak; ?>" required>
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
			var id_proses, id_dampak_proses, id_risiko_proses, dampak;
			id_proses = document.getElementById("id_proses").value;
			id_dampak_proses = document.getElementById("id_dampak_proses").value;
			id_risiko_proses = document.getElementById("id_risiko_proses").value;
			dampak = document.getElementById("dampak").value;
			
			if(id_dampak_proses != '' && id_risiko_proses != '' && dampak != ''){
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
								setTimeout(() => { window.location.href = "<?php echo base_url().'proses/risiko/'?>" + id_proses + '/view/' + id_risiko_proses; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_dampak_proses'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_dampak_proses=" + id_dampak_proses + "&id_risiko_proses=" + id_risiko_proses + "&id_proses=" + id_proses + "&dampak=" + dampak);
			}
		}
function back(){
	var id_proses, id_dampak_proses, id_risiko_proses, dampak;
	id_proses = document.getElementById("id_proses").value;
	id_dampak_proses = document.getElementById("id_dampak_proses").value;
	id_risiko_proses = document.getElementById("id_risiko_proses").value;
	dampak = document.getElementById("dampak").value;
	window.location.href = "<?php echo base_url().'proses/risiko/'?>" + id_proses + '/view/' + id_risiko_proses;
}
</script>


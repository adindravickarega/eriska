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
            <table style="width:100%">
				<tr>
					<td style="width:20%">Nama Proses :</td>
					<td style="width:80%"><?php echo $ir->judul; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Deskripsi Proses :</td>
					<td style="width:80%"><?php echo $ir->deskripsi; ?></td>
				</tr>
				<tr>
					<td style="width:20%">Langkah Proses :</td>
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
						<div class="col-md-12">
						<h3 class="card-title">Edit Identifikasi Risiko</h3>
						</div>
						</div>
					  </div>
					  <?php foreach($ident_risiko as $ir){?>
						<?php foreach($risiko as $r){?>
						  <div class="card-body">
						  <input type="text" class="form-control" id="id_proses" value="<?php echo $ir->id; ?>" hidden>
								<input type="text" class="form-control" id="id_risiko_proses" value="<?php echo $r->id; ?>" hidden>
								<div class="form-group">
									<label for="judul">Risiko<sup style='color:red'>*</sup></label>
									<input type="text" class="form-control" id="risiko" placeholder="Identifikasi Risiko" value="<?php echo $r->risiko; ?>" maxlength="100" required>
								</div>
						  </div>
						  <!-- /.card-body -->
						  <div class="card-footer">
							  <button type="submit" class="btn btn-info" value="Submit" onclick="javascript:simpan()">Simpan</button>
							  <button type="submit" class="btn btn-default float-right" onclick="javascript:back()">Kembali</button>
						  </div>
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
			var id_proses, id_risiko_proses, risiko;
			id_proses = document.getElementById("id_proses").value;
			id_risiko_proses = document.getElementById("id_risiko_proses").value;
			risiko = document.getElementById("risiko").value;
			
			if(id_proses != '' && id_risiko_proses != '' && risiko != ''){
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
								setTimeout(() => { window.location.href = "<?php echo base_url().'proses/view/'?>" + id_proses; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_risiko_proses'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_risiko_proses=" + id_risiko_proses + "&id_proses=" + id_proses + "&risiko=" + risiko);
			}
		}
function back(){
	var id_proses;
	id_proses = document.getElementById("id_proses").value;
	window.location.href = "<?php echo base_url().'proses/view/'?>" + id_proses;
}
</script>


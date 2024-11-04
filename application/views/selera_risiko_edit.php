  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Selera Risiko</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
						<div class="col-md-12">
						<h3 class="card-title">Edit Selera Risiko</h3>
						</div>
						</div>
					  </div>
					  <?php foreach($selera_risiko as $sr){?>
					  <div class="card-body">
							<input type="text" class="form-control" id="id_selera_risiko" value="<?php echo $sr->id; ?>" hidden>
							<div class="form-group">
								<label for="judul">Status<sup style='color:red'>*</sup></label>
								<input type="text" class="form-control" id="status" placeholder="Status" value="<?php echo $sr->status; ?>" readonly>
							</div>
							<?php if($nilai_sebelum == 1000){
								$nilai_sebelum = $nilai_sebelum-1;
							}?>
							<input type="text" class="form-control" id="nilai_sebelum" value="<?php echo $nilai_sebelum; ?>" hidden>
							<div class="form-group">
								<label for="judul">Min<sup style='color:red'>*</sup></label>
								<input type="number" class="form-control" id="min" placeholder="Minimum" value="<?php echo $nilai_sebelum+1; ?>" readonly>
							</div>
							<div class="form-group">
								<label for="deskripsi">Max<sup style='color:red'>*</sup></label>
								<input type="number" class="form-control" id="max" placeholder="Maximum" min="0" max="1000" value="<?php echo $sr->max; ?>" required>
							</div>
					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <button type="submit" class="btn btn-info" value="Submit" onclick="javascript:simpan()">Simpan</button>
						  <button type="submit" class="btn btn-default float-right" onclick="javascript:back()">Kembali</button>
					  </div>
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
			var id_selera_risiko, min, max, nilai_sebelum;
			id_selera_risiko = document.getElementById("id_selera_risiko").value;
			min = document.getElementById("min").value;
			max = document.getElementById("max").value;
			nilai_sebelum = document.getElementById("nilai_sebelum").value;
			
			if((min != '' && (min > nilai_sebelum)) && (max != '' && max <= 1000 && (max > min || max == 1000))){
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
								setTimeout(() => { window.location.href = "<?php echo base_url().'selera_risiko'?>"; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_selera_risiko'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_selera_risiko=" + id_selera_risiko + "&min=" + min + "&max=" + max);
			}
		}
function back(){
	window.location.href = "<?php echo base_url().'selera_risiko'?>";
}
</script>


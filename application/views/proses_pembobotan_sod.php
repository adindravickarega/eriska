  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pembobotan Parameter Risiko (Severity, Occurence, Detection)</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li><li class="breadcrumb-item"><a href="<?php echo base_url().'proses'?>">Proses</a></li>
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
						<h3 class="card-title">Pembobotan Severity, Occurence, Detection (SOD)</h3>
						</div>
						</div>
					  </div>
					  <div class="card-body">
					  <div class="row">
						<div class="col-md-12">
							<?php if($pembobotan_dipilih == 'langsung'){?>
							<input type="radio" onclick="javascript:yesnoCheck()" id="langsung" name="sod" checked required>
							<?php }else{ ?>
							<input type="radio" onclick="javascript:yesnoCheck()" id="langsung" name="sod" required>
							<?php } ?>
							<label for="langsung"> Pembobotan langsung</label>
							<table class="table table-striped">
							<thead>
								<tr>
									<th hidden>No</th>
									<th>Parameter Risiko</th>
									<th>Peringkat</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php foreach($ident_risiko as $ir){?>
							<input type="text" class="form-control" id="id_proses" value="<?php echo $ir->id; ?>" hidden>
							<input type="text" class="form-control" id="ps_langsung" value="<?php echo $ir->ps_langsung; ?>" hidden>
							<input type="text" class="form-control" id="po_langsung" value="<?php echo $ir->po_langsung; ?>" hidden>
							<input type="text" class="form-control" id="pd_langsung" value="<?php echo $ir->pd_langsung; ?>" hidden>
							<tr>
							<td hidden>1</td>
							<td>Severity</td>
							<td><input type="number" class="form-control" id="<?php echo 'psod_langsung_2'; ?>" placeholder="peringkat" min="1" max="3" value="<?php echo $ir->ps_langsung; ?>" required></td>
							</tr>
							<tr>
							<td hidden>2</td>
							<td>Occurence</td>
							<td><input type="number" class="form-control" id="<?php echo 'psod_langsung_3'; ?>" placeholder="peringkat" min="1" max="3" value="<?php echo $ir->po_langsung; ?>" required></td>
							</tr>
							<tr>
							<td hidden>3</td>
							<td>Detection</td>
							<td><input type="number" class="form-control" id="<?php echo 'psod_langsung_4'; ?>" placeholder="peringkat" min="1" max="3" value="<?php echo $ir->pd_langsung; ?>" required></td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
						<div id="if_langsung" style="display:none">
						<button type="submit" class="btn btn-secondary" value="Submit" onclick="javascript:simpan_langsung()">Simpan</button>
						</div>
						<div id="if_ahp2" style="display:block">
						<button type="submit" class="btn btn-secondary" value="Submit" onclick="javascript:simpan_langsung()" disabled>Simpan</button>
						</div>
						<br>
						<!-- /input-group -->
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
							<?php if($pembobotan_dipilih == 'ahp'){?>
							<input type="radio" onclick="javascript:yesnoCheck()" id="ahp" name="sod" checked required>
							<?php }else{ ?>
							<input type="radio" onclick="javascript:yesnoCheck()" id="ahp" name="sod" required>
							<?php } ?>
							<label for="ahp"> Pembobotan dengan AHP</label>
							<div class="row">
							<div class="col-md-3">
							<button type="button" class="btn btn-block bg-gradient-warning btn-sm" onclick="javascript:skala()"><i class="fas fa-plus"></i> skala tingkat kepentingan saaty</button>
							</div>
							<div class="col-md-12" id="if_skala" style="display:none">
							<table class="table table-striped">
							<thead>
								<tr>
									<th colspan="2" style="text-align: center">Skala Tingkat Kepentingan Saaty</th>
								</tr>
								<tr>
									<th>Nilai</th>
									<th>Definisi</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<tr>
							<td>1</td>
							<td>A dan B sama penting</td>
							</tr>
							<tr>
							<td>3</td>
							<td>A sedikit lebih penting dari B</td>
							</tr>
							<tr>
							<td>5</td>
							<td>A jelas lebih penting dari B</td>
							</tr>
							<tr>
							<td>7</td>
							<td>A sangat jelas lebih penting dari B</td>
							</tr>
							<tr>
							<td>9</td>
							<td>A mutlak lebih penting dari B</td>
							</tr>
							<tr>
							<td>2,4,6,8</td>
							<td>Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan (<i>compromise value</i>)</td>
							</tr>
							</tbody>
							</table>
							</div>
							
							<div class="col-md-12">
							<table class="table table-striped">
							<input type="text" class="form-control" id="id_proses" value="<?php echo $ident_risiko[0]->id; ?>" hidden>
							<thead>
								<tr>
									<th>Kriteria A</th>
									<th style="text-align: center">Tingkat Kepentingan Relatif</th>
									<th>Kriteria B</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<tr>
							<td>Severity</td>
							<td style="text-align: center">
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a1"> 9
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a2"> 8
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a3"> 7
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a4"> 6
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a5"> 5
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a6"> 4
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a7"> 3
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a8"> 2
							</label>
							<label class="btn btn-warning">
							<input type="radio" name="options" id="option_a9"> 1
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a10"> 2
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a11"> 3
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a12"> 4
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a13"> 5
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a14"> 6
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a15"> 7
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a16"> 8
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options" id="option_a17"> 9
							</label>
							</div>
							</td>
							<td>Occurence</td>
							</tr>
							<tr>
							<td>Severity</td>
							<td style="text-align: center">
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b1"> 9
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b2"> 8
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b3"> 7
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b4"> 6
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b5"> 5
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b6"> 4
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b7"> 3
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b8"> 2
							</label>
							<label class="btn btn-warning">
							<input type="radio" name="options2" id="option_b9"> 1
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b10"> 2
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b11"> 3
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b12"> 4
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b13"> 5
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b14"> 6
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b15"> 7
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b16"> 8
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options2" id="option_b17"> 9
							</label>
							</div>
							</td>
							<td>Detection</td>
							</tr>
							<tr>
							<td>Occurence</td>
							<td style="text-align: center">
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c1"> 9
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c2"> 8
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c3"> 7
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c4"> 6
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c5"> 5
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c6"> 4
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c7"> 3
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c8"> 2
							</label>
							<label class="btn btn-warning">
							<input type="radio" name="options3" id="option_c9"> 1
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c10"> 2
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c11"> 3
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c12"> 4
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c13"> 5
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c14"> 6
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c15"> 7
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c16"> 8
							</label>
							<label class="btn btn-secondary">
							<input type="radio" name="options3" id="option_c17"> 9
							</label>
							</div>
							</td>
							<td>Detection</td>
							</tr>
							</tbody>
							</table>
							<div id="if_ahp" style="display:none">
							<button type="submit" class="btn btn-secondary" value="Submit" onclick="javascript:simpan_ahp()">Simpan</button>
							</div>
							<div id="if_langsung2" style="display:block">
							<button type="submit" class="btn btn-secondary" value="Submit" onclick="javascript:simpan_ahp()" disabled>Simpan</button>
							</div>
							</div>							
							</div>
							
							<br>
							<p>Hasil pembobotan dengan AHP sebagai berikut</p>
							<table class="table table-striped">
							<thead>
								<tr>
									<th hidden>No</th>
									<th>Parameter Risiko</th>
									<th>Peringkat</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php foreach($ident_risiko as $ir){?>
							<input type="text" class="form-control" id="id_proses" value="<?php echo $ir->id; ?>" hidden>
							<input type="text" class="form-control" id="ps_ahp" value="<?php echo $ir->ps_ahp; ?>" hidden>
							<input type="text" class="form-control" id="po_ahp" value="<?php echo $ir->po_ahp; ?>" hidden>
							<input type="text" class="form-control" id="pd_ahp" value="<?php echo $ir->pd_ahp; ?>" hidden>
							<tr>
							<td hidden>1</td>
							<td>Severity</td>
							<td><input type="number" class="form-control" id="<?php echo 'psod_ahp_2'; ?>" placeholder="peringkat" min="1" max="3" value="<?php echo $ir->ps_ahp; ?>" required></td>
							</tr>
							<tr>
							<td hidden>2</td>
							<td>Occurence</td>
							<td><input type="number" class="form-control" id="<?php echo 'psod_ahp_3'; ?>" placeholder="peringkat" min="1" max="3" value="<?php echo $ir->po_ahp; ?>" required></td>
							</tr>
							<tr>
							<td hidden>3</td>
							<td>Detection</td>
							<td><input type="number" class="form-control" id="<?php echo 'psod_ahp_4'; ?>" placeholder="peringkat" min="1" max="3" value="<?php echo $ir->pd_ahp; ?>" required></td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
						<!-- /input-group -->
						</div>
						</div>
					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <button type="submit" class="btn btn-danger btn-block" value="Submit" onclick="javascript:simpan()">Aktivasi Pembobotan SOD</button>
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
		function skala(){
			if(document.getElementById('if_skala').style.display == 'none'){
				document.getElementById('if_skala').style.display = 'block';
			}else{
				document.getElementById('if_skala').style.display = 'none';
			}			
		}
        function peringatan() {
			if (document.getElementById('langsung').checked) {
				document.getElementById('if_langsung').style.display = 'block';
				document.getElementById('if_langsung2').style.display = 'block';
				document.getElementById('if_ahp').style.display = 'none';
				document.getElementById('if_ahp2').style.display = 'none';
			}else if (document.getElementById('ahp').checked){
				document.getElementById('if_langsung').style.display = 'none';
				document.getElementById('if_langsung2').style.display = 'none';
				document.getElementById('if_ahp').style.display = 'block';
				document.getElementById('if_ahp2').style.display = 'block';
			}
			if(<?php echo $so?> == 9){
				document.getElementById('option_a1').checked = 1;
			}else if(<?php echo $so?> == 1/9){
				document.getElementById('option_a17').checked = 1;
			}else if(<?php echo $so?> == 8){
				document.getElementById('option_a2').checked = 1;
			}else if(<?php echo $so?> == 1/8){
				document.getElementById('option_a16').checked = 1;
			}else if(<?php echo $so?> == 7){
				document.getElementById('option_a3').checked = 1;
			}else if(<?php echo $so?> == 1/7){
				document.getElementById('option_a15').checked = 1;
			}else if(<?php echo $so?> == 6){
				document.getElementById('option_a4').checked = 1;
			}else if(<?php echo $so?> == 1/6){
				document.getElementById('option_a14').checked = 1;
			}else if(<?php echo $so?> == 5){
				document.getElementById('option_a5').checked = 1;
			}else if(<?php echo $so?> == 1/5){
				document.getElementById('option_a13').checked = 1;
			}else if(<?php echo $so?> == 4){
				document.getElementById('option_a6').checked = 1;
			}else if(<?php echo $so?> == 1/4){
				document.getElementById('option_a12').checked = 1;
			}else if(<?php echo $so?> == 3){
				document.getElementById('option_a7').checked = 1;
			}else if(<?php echo $so?> == 1/3){
				document.getElementById('option_a11').checked = 1;
			}else if(<?php echo $so?> == 2){
				document.getElementById('option_a8').checked = 1;
			}else if(<?php echo $so?> == 1/2){
				document.getElementById('option_a10').checked = 1;
			}else if(<?php echo $so?> == 1){
				document.getElementById('option_a9').checked = 1;
			}
			if(<?php echo $sd?> == 9){
				document.getElementById('option_b1').checked = 1;
			}else if(<?php echo $sd?> == 1/9){
				document.getElementById('option_b17').checked = 1;
			}else if(<?php echo $sd?> == 8){
				document.getElementById('option_b2').checked = 1;
			}else if(<?php echo $sd?> == 1/8){
				document.getElementById('option_b16').checked = 1;
			}else if(<?php echo $sd?> == 7){
				document.getElementById('option_b3').checked = 1;
			}else if(<?php echo $sd?> == 1/7){
				document.getElementById('option_b15').checked = 1;
			}else if(<?php echo $sd?> == 6){
				document.getElementById('option_b4').checked = 1;
			}else if(<?php echo $sd?> == 1/6){
				document.getElementById('option_b14').checked = 1;
			}else if(<?php echo $sd?> == 5){
				document.getElementById('option_b5').checked = 1;
			}else if(<?php echo $sd?> == 1/5){
				document.getElementById('option_b13').checked = 1;
			}else if(<?php echo $sd?> == 4){
				document.getElementById('option_b6').checked = 1;
			}else if(<?php echo $sd?> == 1/4){
				document.getElementById('option_b12').checked = 1;
			}else if(<?php echo $sd?> == 3){
				document.getElementById('option_b7').checked = 1;
			}else if(<?php echo $sd?> == 1/3){
				document.getElementById('option_b11').checked = 1;
			}else if(<?php echo $sd?> == 2){
				document.getElementById('option_b8').checked = 1;
			}else if(<?php echo $sd?> == 1/2){
				document.getElementById('option_b10').checked = 1;
			}else if(<?php echo $sd?> == 1){
				document.getElementById('option_b9').checked = 1;
			}
			if(<?php echo $od?> == 9){
				document.getElementById('option_c1').checked = 1;
			}else if(<?php echo $od?> == 1/9){
				document.getElementById('option_c17').checked = 1;
			}else if(<?php echo $od?> == 8){
				document.getElementById('option_c2').checked = 1;
			}else if(<?php echo $od?> == 1/8){
				document.getElementById('option_c16').checked = 1;
			}else if(<?php echo $od?> == 7){
				document.getElementById('option_c3').checked = 1;
			}else if(<?php echo $od?> == 1/7){
				document.getElementById('option_c15').checked = 1;
			}else if(<?php echo $od?> == 6){
				document.getElementById('option_c4').checked = 1;
			}else if(<?php echo $od?> == 1/6){
				document.getElementById('option_c14').checked = 1;
			}else if(<?php echo $od?> == 5){
				document.getElementById('option_c5').checked = 1;
			}else if(<?php echo $od?> == 1/5){
				document.getElementById('option_c13').checked = 1;
			}else if(<?php echo $od?> == 4){
				document.getElementById('option_c6').checked = 1;
			}else if(<?php echo $od?> == 1/4){
				document.getElementById('option_c12').checked = 1;
			}else if(<?php echo $od?> == 3){
				document.getElementById('option_c7').checked = 1;
			}else if(<?php echo $od?> == 1/3){
				document.getElementById('option_c11').checked = 1;
			}else if(<?php echo $od?> == 2){
				document.getElementById('option_c8').checked = 1;
			}else if(<?php echo $od?> == 1/2){
				document.getElementById('option_c10').checked = 1;
			}else if(<?php echo $od?> == 1){
				document.getElementById('option_c9').checked = 1;
			}
			Swal.fire({
			  title: 'Perhatian',
			  html: "<p style='text-align: left'>Mohon pastikan untuk mengikuti langkah-langkah sebagai berikut:</p><ol style='text-align: left'><li> Pilih <strong>Metode Pembobotan</strong>,</li><li> Tentukan <strong>Peringkat</strong>,</li><li> Tekan tombol <strong>Simpan</strong>,</li><li> Tekan tombol <strong>Aktivasi Pembobotan SOD</strong></li></ol>",
			  icon: 'warning',
			  showCancelButton: false,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Ya, saya mengerti!'
			}).then((result) => {
			  if (result.isConfirmed) {
				
			  }
			})
		}
    </script>
<script type="text/javascript">
	var telah_simpan = 0; 
		function yesnoCheck() {
			if (document.getElementById('langsung').checked) {
				document.getElementById('if_langsung').style.display = 'block';
				document.getElementById('if_langsung2').style.display = 'block';
				document.getElementById('if_ahp').style.display = 'none';
				document.getElementById('if_ahp2').style.display = 'none';
			}else{
				document.getElementById('if_langsung').style.display = 'none';
				document.getElementById('if_langsung2').style.display = 'none';
				document.getElementById('if_ahp').style.display = 'block';
				document.getElementById('if_ahp2').style.display = 'block';
			}
		}
		function simpan_langsung(){
			var id_proses,s,o,d;
			id_proses = document.getElementById("id_proses").value;
			s = document.getElementById("psod_langsung_2").value;
			o = document.getElementById("psod_langsung_3").value;
			d = document.getElementById("psod_langsung_4").value;
			
			
			if(s != o && s != d && o != d && s != '' && d != '' && o != '' && s > 0 && s < 4 && o > 0 && o < 4 && d > 0 && d < 4){
				var request = new XMLHttpRequest();
				request.onreadystatechange = function() {
					 if (request.readyState == 4 && request.status == 200) {
						console.log(request.responseText);
						if(request.responseText == " berhasil"){
							telah_simpan = 1;
							Swal.fire(
								  'Berhasil!',
								  'selanjutnya tekan Aktivasi Pembobotan SOD!',
								  'success'
								);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_langsung_proses'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_proses=" + id_proses + "&s=" + s + "&o=" + o + "&d=" + d);
			}else{
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Pastikan S, O, dan D memiliki prioritas yang berbeda antara 1-3 dan tidak boleh kosong!',
				  footer: '<a href="">Why do I have this issue?</a>'
				})
			}
		}
		function simpan_ahp(){
			
			var id_proses,s,o,d;
			var ss,so,sd,os,oo,od,ds,d_o,dd;
			var kol1, kol2, kol3;
			var geo1, geo2, geo3, kolgeo;
			var p1, p2, p3;
			var pb1, pb2, pb3;
			var lambda;
			var ci, cr;
			ss = 1;
			oo = 1;
			dd = 1;
			id_proses = document.getElementById("id_proses").value;
			
			if(document.getElementById('option_a9').checked == document.getElementById('option_b9').checked && document.getElementById('option_a9').checked == document.getElementById('option_c9').checked && document.getElementById('option_b9').checked == document.getElementById('option_c9').checked && document.getElementById('option_a9').checked == 1){
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Tidak boleh pilih 1 semua!',
				  footer: '<a href="">Why do I have this issue?</a>'
				})
			}else{
				if((document.getElementById('option_a1').checked == 1 || document.getElementById('option_a2').checked == 1 || document.getElementById('option_a3').checked == 1 || document.getElementById('option_a4').checked == 1 || document.getElementById('option_a5').checked == 1 || document.getElementById('option_a6').checked == 1 || document.getElementById('option_a7').checked == 1 || document.getElementById('option_a8').checked == 1 || document.getElementById('option_a9').checked == 1 || document.getElementById('option_a10').checked == 1 || document.getElementById('option_a11').checked == 1 || document.getElementById('option_a12').checked == 1 || document.getElementById('option_a13').checked == 1 || document.getElementById('option_a14').checked == 1 || document.getElementById('option_a15').checked == 1 || document.getElementById('option_a16').checked == 1 || document.getElementById('option_a17').checked == 1) && (document.getElementById('option_b1').checked == 1 || document.getElementById('option_b2').checked == 1 || document.getElementById('option_b3').checked == 1 || document.getElementById('option_b4').checked == 1 || document.getElementById('option_b5').checked == 1 || document.getElementById('option_b6').checked == 1 || document.getElementById('option_b7').checked == 1 || document.getElementById('option_b8').checked == 1 || document.getElementById('option_b9').checked == 1 || document.getElementById('option_b10').checked == 1 || document.getElementById('option_b11').checked == 1 || document.getElementById('option_b12').checked == 1 || document.getElementById('option_b13').checked == 1 || document.getElementById('option_b14').checked == 1 || document.getElementById('option_b15').checked == 1 || document.getElementById('option_b16').checked == 1 || document.getElementById('option_b17').checked == 1) && (document.getElementById('option_c1').checked == 1 || document.getElementById('option_c2').checked == 1 || document.getElementById('option_c3').checked == 1 || document.getElementById('option_c4').checked == 1 || document.getElementById('option_c5').checked == 1 || document.getElementById('option_c6').checked == 1 || document.getElementById('option_c7').checked == 1 || document.getElementById('option_c8').checked == 1 || document.getElementById('option_c9').checked == 1 || document.getElementById('option_c10').checked == 1 || document.getElementById('option_c11').checked == 1 || document.getElementById('option_c12').checked == 1 || document.getElementById('option_c13').checked == 1 || document.getElementById('option_c14').checked == 1 || document.getElementById('option_c15').checked == 1 || document.getElementById('option_c16').checked == 1 || document.getElementById('option_c17').checked == 1)){
					if(document.getElementById('option_a1').checked){
						so = 9;
						os = 1/9;
					}else if(document.getElementById('option_a17').checked){
						so = 1/9;
						os = 9;
					}else if(document.getElementById('option_a2').checked){
						so = 8;
						os = 1/8;
					}else if(document.getElementById('option_a16').checked){
						so = 1/8;
						os = 8;
					}else if(document.getElementById('option_a3').checked){
						so = 7;
						os = 1/7;
					}else if(document.getElementById('option_a15').checked){
						so = 1/7;
						os = 7;
					}else if(document.getElementById('option_a4').checked){
						so = 6;
						os = 1/6;
					}else if(document.getElementById('option_a14').checked){
						so = 1/6;
						os = 6;
					}else if(document.getElementById('option_a5').checked){
						so = 5;
						os = 1/5;
					}else if(document.getElementById('option_a13').checked){
						so = 1/5;
						os = 5;
					}else if(document.getElementById('option_a6').checked){
						so = 4;
						os = 1/4;
					}else if(document.getElementById('option_a12').checked){
						so = 1/4;
						os = 4;
					}else if(document.getElementById('option_a7').checked){
						so = 3;
						os = 1/3;
					}else if(document.getElementById('option_a11').checked){
						so = 1/3;
						os = 3;
					}else if(document.getElementById('option_a8').checked){
						so = 2;
						os = 1/2;
					}else if(document.getElementById('option_a10').checked){
						so = 1/2;
						os = 2;
					}else if(document.getElementById('option_a9').checked){
						so = 1;
						os = 1;
					}
					if(document.getElementById('option_b1').checked){
						sd = 9;
						ds = 1/9;
					}else if(document.getElementById('option_b17').checked){
						sd = 1/9;
						ds = 9;
					}else if(document.getElementById('option_b2').checked){
						sd = 8;
						ds = 1/8;
					}else if(document.getElementById('option_b16').checked){
						sd = 1/8;
						ds = 8;
					}else if(document.getElementById('option_b3').checked){
						sd = 7;
						ds = 1/7;
					}else if(document.getElementById('option_b15').checked){
						sd = 1/7;
						ds = 7;
					}else if(document.getElementById('option_b4').checked){
						sd = 6;
						ds = 1/6;
					}else if(document.getElementById('option_b14').checked){
						sd = 1/6;
						ds = 6;
					}else if(document.getElementById('option_b5').checked){
						sd = 5;
						ds = 1/5;
					}else if(document.getElementById('option_b13').checked){
						sd = 1/5;
						ds = 5;
					}else if(document.getElementById('option_b6').checked){
						sd = 4;
						ds = 1/4;
					}else if(document.getElementById('option_b12').checked){
						sd = 1/4;
						ds = 4;
					}else if(document.getElementById('option_b7').checked){
						sd = 3;
						ds = 1/3;
					}else if(document.getElementById('option_b11').checked){
						sd = 1/3;
						ds = 3;
					}else if(document.getElementById('option_b8').checked){
						sd = 2;
						ds = 1/2;
					}else if(document.getElementById('option_b10').checked){
						sd = 1/2;
						ds = 2;
					}else if(document.getElementById('option_b9').checked){
						sd = 1;
						ds = 1;
					}
					if(document.getElementById('option_c1').checked){
						od = 9;
						d_o = 1/9;
					}else if(document.getElementById('option_c17').checked){
						od = 1/9;
						d_o = 9;
					}else if(document.getElementById('option_c2').checked){
						od = 8;
						d_o = 1/8;
					}else if(document.getElementById('option_c16').checked){
						od = 1/8;
						d_o = 8;
					}else if(document.getElementById('option_c3').checked){
						od = 7;
						d_o = 1/7;
					}else if(document.getElementById('option_c15').checked){
						od = 1/7;
						d_o = 7;
					}else if(document.getElementById('option_c4').checked){
						od = 6;
						d_o = 1/6;
					}else if(document.getElementById('option_c14').checked){
						od = 1/6;
						d_o = 6;
					}else if(document.getElementById('option_c5').checked){
						od = 5;
						d_o = 1/5;
					}else if(document.getElementById('option_c13').checked){
						od = 1/5;
						d_o = 5;
					}else if(document.getElementById('option_c6').checked){
						od = 4;
						d_o = 1/4;
					}else if(document.getElementById('option_c12').checked){
						od = 1/4;
						d_o = 4;
					}else if(document.getElementById('option_c7').checked){
						od = 3;
						d_o = 1/3;
					}else if(document.getElementById('option_c11').checked){
						od = 1/3;
						d_o = 3;
					}else if(document.getElementById('option_c8').checked){
						od = 2;
						d_o = 1/2;
					}else if(document.getElementById('option_c10').checked){
						od = 1/2;
						d_o = 2;
					}else if(document.getElementById('option_c9').checked){
						od = 1;
						d_o = 1;
					}
					console.log(so + ', ' + sd + ', ' + od);
					kol1 = ss+os+ds;
					kol2 = so+oo+d_o;
					kol3 = sd+od+dd;
					n_ss = ss/kol1;
					n_os = os/kol1;
					n_ds = ds/kol1;
					n_so = so/kol2;
					n_oo = oo/kol2;
					n_d_o = d_o/kol2;
					n_sd = sd/kol3;
					n_od = od/kol3;
					n_dd = dd/kol3;
					
					geo1 = (n_ss*n_so*n_sd)**(1/3);
					geo2 = (n_os*n_oo*n_od)**(1/3);
					geo3 = (n_ds*n_d_o*n_dd)**(1/3);
					kolgeo = geo1 + geo2 + geo3;
					p1 = geo1/kolgeo;
					p2 = geo2/kolgeo;
					p3 = geo3/kolgeo;
					pb1 = (ss*p1)+(so*p2)+(sd*p3);
					pb2 = (os*p1)+(oo*p2)+(od*p3);
					pb3 = (ds*p1)+(d_o*p2)+(dd*p3);
					
					lambda = ((pb1/p1)+(pb2/p2)+(pb3/p3))/3;
					ci = (lambda-3)/(3-1);
					cr = ci/0.58;
					console.log(geo1 + ', ' + geo2 + ', ' + geo3);
					if(cr <= 0.1){
						if(p1<p2){
							if(p2<p3){ //p1<p2<p3
								d = 1;
								o = 2;
								s = 3;
							}else{
								if(p1<p3){//p1<p3<p2
									o = 1;
									d = 2;
									s = 3;
								}else{//p3<p1<p2
									o = 1;
									s = 2;
									d = 3;
								}
							}
						}else{
							if(p3<p1){
								if(p3<p2){//p3<p2<p1
									s = 1;
									o = 2;
									d = 3;
								}else{//p2<p3<p1
									s = 1;
									d = 2;
									o = 3;
								}
							}else{//p2<p1<p3
								d = 1;
								s = 2;
								o = 3;
							}
						}
						var request = new XMLHttpRequest();
						request.onreadystatechange = function() {
							 if (request.readyState == 4 && request.status == 200) {
								console.log(request.responseText);
								if(request.responseText == " berhasil"){
									telah_simpan = 1;
									document.getElementById('psod_ahp_2').value = s;
									document.getElementById('psod_ahp_3').value = o;
									document.getElementById('psod_ahp_4').value = d;
									Swal.fire(
									  'Berhasil!',
									  'selanjutnya tekan Aktivasi Pembobotan SOD!',
									  'success'
									);
								}
							 }
						  }
						request.open('POST', "<?php echo base_url().'home/edit_ahp_proses'?>", true);
						request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						request.send("id_proses=" + id_proses + "&s=" + s + "&o=" + o + "&d=" + d + "&so=" + so + "&sd=" + sd + "&od=" + od);
					}else{
						Swal.fire({
						  icon: 'error',
						  title: 'Oops...',
						  text: 'Nilai inkonsistensi (CR) > 0.1, mohon tentukan kembali!',
						  footer: '<a href="">Why do I have this issue?</a>'
						})
					}
				}
			}
		}
		function simpan(){
			var id_proses, pembobotan, ps_langsung,po_langsung,pd_langsung, ps_ahp, po_ahp, pd_ahp;
			id_proses = document.getElementById("id_proses").value;
			ps_langsung = document.getElementById("ps_langsung").value;
			po_langsung = document.getElementById("po_langsung").value;
			pd_langsung = document.getElementById("pd_langsung").value;
			ps_ahp = document.getElementById("ps_ahp").value;
			po_ahp = document.getElementById("po_ahp").value;
			pd_ahp = document.getElementById("pd_ahp").value;
			
			if (document.getElementById('langsung').checked) {
				pembobotan = "langsung";
			}else{
				pembobotan = "ahp";
			}
			
			if(pembobotan != '' && telah_simpan == 1){
				var request = new XMLHttpRequest();
				request.onreadystatechange = function() {
					 if (request.readyState == 4 && request.status == 200) {
						console.log(request.responseText);
						if(request.responseText == " berhasil"){
							Swal.fire(
								  'Berhasil!',
								  'Pembobotan SOD telah disimpan!',
								  'success'
								);
								setTimeout(() => { window.location.href = "<?php echo base_url().'proses'?>"; }, 2000);
						}
					 }
				  }
				request.open('POST', "<?php echo base_url().'home/edit_pembobotan_sod_proses'?>", true);
				request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				request.send("id_proses=" + id_proses + "&pembobotan=" + pembobotan);
			}else{
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Pastikan Anda telah memilih metode pembobotan dan mengisi bobotnya!',
				  footer: '<a href="">Why do I have this issue?</a>'
				})
			}
		}
</script>

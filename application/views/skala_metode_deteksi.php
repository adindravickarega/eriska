  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Skala Pengukuran Tingkat Kemudahan/Kesulitan  Metode Deteksi Dapat Mendekteksi Risiko (Detection)</h1>
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
						<div class="col-md-12">
						<h3 class="card-title">Skala Detection</h3>
						</div>
						</div>
					  </div>
					  <div class="card-body">
							<table class="table table-striped" id="mydata">
							<thead>
								<tr>
									<th hidden>No</th>
									<th>Ranking</th>
									<th>Detection Proses</th>
									<th>Deskripsi</th>
									<th>Detection Produk</th>
									<th>Deskripsi</th>
									<th>Action</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php $iterasi = 1;?>
							<?php foreach($skala_metode_deteksi as $sp){?>
							<tr>
							<td hidden><?php echo $iterasi++?></td>
							<td><?php echo $sp->ranking;?></td>
							<td><?php echo $sp->judul_proses;?></td>
							<td><?php echo $sp->deskripsi_proses;?></td>
							<td><?php echo $sp->judul_produk;?></td>
							<td><?php echo $sp->deskripsi_produk;?></td>
							<td>
							<a class="btn btn-info btn-sm" href="<?php echo base_url().'skala_metode_deteksi/edit/'.$sp->id;?>">
							<i class="fas fa-pencil-alt">
							</i>
							Edit
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


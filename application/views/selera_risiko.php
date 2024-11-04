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
						<h3 class="card-title">Selera Risiko</h3>
						</div>
						</div>
					  </div>
					  <div class="card-body">
							<table class="table table-striped" id="mydata">
							<thead>
								<tr>
									<th hidden>No</th>
									<th>Status Risiko</th>
									<th>F-RPN</th>
									<th>Action</th>
								</tr>
							</thead>
							<!--<tbody id="show_data">-->
							<tbody>
							<?php $iterasi = 1;?>
							<?php foreach($selera_risiko as $sr){?>
							<tr>
							<td hidden><?php echo $iterasi++?></td>
							<td><?php echo $sr->status;?></td>
							<?php if($sr->min > $sr->max){ ?>
							<td style="background-color:orange"><?php echo $sr->min.' - '.$sr->max;?></td>
							<?php }else{ ?>
							<td><?php echo $sr->min.' - '.$sr->max;?></td>
							<?php } ?>
							<td>
							<?php if($sr->id == 1 && $sr->max == ''){ 
								$boleh2 = 0;
							}else if($sr->id == 1 && $sr->max != ''){
								$boleh2 = 1;
							} ?>
							<?php if($sr->id == 2 && $sr->max == ''){ 
								$boleh3 = 0;
							}else  if($sr->id == 2 && $sr->max != ''){
								$boleh3 = 1;
							} ?>
							<?php if($sr->id == 1 || ($sr->id == 2 && $boleh2 == 1) || ($sr->id == 3 && $boleh3 == 1)){ ?>
							<a class="btn btn-info btn-sm" href="<?php echo base_url().'selera_risiko/edit/'.$sr->id;?>">
							<i class="fas fa-pencil-alt">
							</i>
							Edit
							</a>
							<?php } ?>
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


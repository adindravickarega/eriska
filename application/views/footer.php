  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/tampilan/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>assets/tampilan/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url();?>assets/tampilan/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url();?>assets/tampilan/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/tampilan/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/tampilan/dist/js/pages/dashboard3.js"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script type="text/javascript">
      $(document).ready(function() {
         $('#mydata').DataTable();
      } );

      $( "#datepicker" ).datepicker({
        inline: true
      });

      $(function() {
          $( "#dialog" ).dialog();
      });
 
</script>
<script type="text/javascript">
      $(document).ready(function() {
         $('#mydata2').DataTable();
      } );

      $( "#datepicker2" ).datepicker({
        inline: true
      });

      $(function() {
          $( "#dialog2" ).dialog();
      });
 
</script>
<script type="text/javascript">
      $(document).ready(function() {
         $('#mydata3').DataTable();
      } );

      $( "#datepicker3" ).datepicker({
        inline: true
      });

      $(function() {
          $( "#dialog3" ).dialog();
      });
 
</script>
</body>
</html>
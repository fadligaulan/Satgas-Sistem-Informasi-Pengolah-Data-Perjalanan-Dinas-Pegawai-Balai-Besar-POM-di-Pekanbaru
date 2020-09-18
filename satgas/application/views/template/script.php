<!-- ./wrapper -->

<!-- jQuery 3 -->



<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<!-- Morris.js charts -->
<!-- <script src="bower_components/raphael/raphael.min.js'); ?>"></script>
  <script src="assets/bower_components/morris.js/morris.min.js'); ?>"></script> -->
  <!-- ChartJS -->
  <script src="<?php echo base_url('assets/bower_components/chart.js/Chart.js'); ?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
  <!-- bootstrap time picker -->
  <script src="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="dist/js/pages/dashboard.js'); ?>"></script> -->
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
 

  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })

     //Date picker
     $('#datepicker1').datepicker({
      autoclose: true
      
    })

     $('#datepicker2').datepicker({
      autoclose: true
      
    })

     $('#datepicker3').datepicker({
      autoclose: true
      
    })
     
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })

    //Initialize Select2 Elements
    $('.select2').select2()

    <?php if($this->session->userdata('level') === '4'): ?>
    <?php if (isset($pageTitle) && $pageTitle == 'DASHBOARD') { ?>
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieChart       = new Chart(pieChartCanvas)
      var PieData        = [
      {
        value    : <?=$donutChart['pegawai']?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Pegawai'
      },
      {
        value    : <?=$donutChart['bidang']?>,
        color    : '#20908b',
        highlight: '#20908b',
        label    : 'Bidang'
      },
      {
        value    : <?=$donutChart['surat_tugas']?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Surat tugas'
      },
      {
        value    : <?=$donutChart['sppd']?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'SPPD'
      }
      ]
      var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    
  <?php } ?>
  <?php endif?>

  <?php if($this->session->userdata('level') === '3'): ?>
    <?php if (isset($pageTitle) && $pageTitle == 'DASHBOARD') { ?>
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieChart       = new Chart(pieChartCanvas)
      var PieData        = [
      {
        value    : <?=$donutChart['pegawai']?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Pegawai'
      },
      {
        value    : <?=$donutChart['bidang']?>,
        color    : '#20908b',
        highlight: '#20908b',
        label    : 'Bidang'
      },
      {
        value    : <?=$donutChart['surat_tugas']?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Surat tugas'
      },
      {
        value    : <?=$donutChart['sppd']?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'SPPD'
      }
      ]
      var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    
  <?php } ?>
  <?php endif?>

  <?php if($this->session->userdata('level') === '1'): ?>

  <?php if (isset($pageTitle) && $pageTitle == 'DASHBOARD') { ?>
      var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
      var pieChart       = new Chart(pieChartCanvas)
      var PieData        = [
      {
        value    : <?=$donutChart2['pegawai']?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Pegawai'
      },
      {
        value    : <?=$donutChart2['bidang']?>,
        color    : '#20908b',
        highlight: '#20908b',
        label    : 'Bidang'
      },
      {
        value    : <?=$donutChart2['surat_by_bidang']?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Surat tugas'
      },
      {
        value    : <?=$donutChart2['sppd_by_bidang']?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'SPPD'
      }
      ]
      var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    
  <?php } ?>
  <?php endif?>




});
</script>



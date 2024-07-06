<!--Counter Inbox-->
<?php
error_reporting(0);
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KAPEL UNIKA - Dashboard Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'theme/images/HKBP2.png' ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
  <?php
/* Mengambil query report*/
foreach ($visitor as $result) {
    $bulan[] = $result->tgl; //ambil bulan
    $value[] = (float) $result->jumlah; //ambil nilai
}
/* end mengambil query*/

?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!--Header-->
  <?php
$this->load->view('admin/v_header');
?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>

        <li class="active">
          <a href="<?php echo base_url() . 'admin/dashboard' ?>">
            <i class="fa fa-star-o fa-pulse"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() . 'admin/renungan' ?>"><i class="fa fa-list"></i> Super Admin</a></li>
            <li><a href="<?php echo base_url() . 'admin/renungan/add_renungan' ?>"><i class="fa fa-list"></i> Admin Fakultas</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url() . 'admin/lingkungan' ?>">
              <i i class="fa fa-pencil"></i> <span>Petugas Misa</span>
              <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Jadwal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() . 'admin/jadwalibadah' ?>"><i class="fa fa-list"></i> Misa </a></li>
            <li><a href="<?php echo base_url() . 'admin/jadwalpetugas' ?>"><i class="fa fa-list"></i> Lainnya</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url() . 'admin/pengumuman' ?>">
            <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() . 'admin/agenda' ?>">
            <i class="fa fa-calendar"></i> <span>Agenda</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() . 'admin/agenda' ?>">
            <i class="fa fa-camera"></i> <span>Gallery</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-print"></i>
            <span>Cetak</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() . 'admin/jadwalibadah' ?>"><i class="fa fa-list"></i> Data Kolekte </a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url() . 'admin/inbox' ?>">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() . 'admin/komentar' ?>">
            <i class="fa fa-comments"></i> <span>Komentar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_comment; ?></small>
            </span>
          </a>
        </li>

         <li>
          <a href="<?php echo base_url() . 'administrator' ?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align:center; font-family:square721 bt;">
       <br><b>DASHBOARD ADMIN </b> <br>
     <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-7 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-chrome"></i></span>
              <?php
$query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Chrome'");
$jml = $query->num_rows();
?>
            <div class="info-box-content">
              <span class="info-box-text">Chrome</span>
              <span class="info-box-number"><?php echo $jml; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-7 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-firefox"></i></span>
            <?php
$query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Firefox' OR pengunjung_perangkat='Mozilla'");
$jml = $query->num_rows();
?>
            <div class="info-box-content">
              <span class="info-box-text">Mozilla Firefox</span>
              <span class="info-box-number"><?php echo $jml; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <!-- /.col -->
        <div class="col-md-4 col-sm-7 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-opera"></i></span>
            <?php
$query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Opera'");
$jml = $query->num_rows();
?>
            <div class="info-box-content">
              <span class="info-box-text">Opera</span>
              <span class="info-box-number"><?php echo $jml; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pengunjung bulan ini</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">

                  <div class="col-md-12">
                          <canvas id="canvas" width="1000" height="280"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Renungan Terpopuler</h3>

              <table class="table">
              <?php
$query = $this->db->query("SELECT * FROM tbl_renungan ORDER BY renungan_views DESC");
foreach ($query->result_array() as $i):
    $renungan_id = $i['renungan_id'];
    $renungan_judul = $i['renungan_judul'];
    $renungan_views = $i['renungan_views'];
    ?>
																																	                  <tr>
																																	                    <td><?php echo $renungan_judul; ?></td>
																																	                    <td><?php echo $renungan_views . ' Views'; ?></td>
																																	                  </tr>
																																	              <?php endforeach;?>
              </table>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
  </div>

<?php
$this->load->view('admin/v_footer');
?>

</div>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() . 'assets/plugins/sparkline/jquery.sparkline.min.js' ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url() . 'assets/plugins/chartjs/Chart.min.js' ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() . 'assets/dist/js/pages/dashboard2.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>

<script>

            var lineChartData = {
                labels : <?php echo json_encode($bulan); ?>,
                datasets : [

                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($value); ?>
                    }

                ]

            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

        var canvas = new Chart(myLine).Line(lineChartData, {
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.005)",
            scaleGridLineWidth : 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve : true,
            bezierCurveTension : 0.4,
            pointDot : true,
            pointDotRadius : 4,
            pointDotStrokeWidth : 1,
            pointHitDetectionRadius : 2,
            datasetStroke : true,
            tooltipCornerRadius: 2,
            datasetStrokeWidth : 2,
            datasetFill : true,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });

        </script>

</body>
</html>

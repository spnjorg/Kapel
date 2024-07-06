<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HKBP II - Data Jemaat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'theme/images/HKBP2.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
        <li>
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Renungan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/renungan'?>"><i class="fa fa-list"></i> List Renungan</a></li>
            <li><a href="<?php echo base_url().'admin/renungan/add_renungan'?>"><i class="fa fa-thumb-tack"></i> Post Renungan</a></li>
            <li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-wrench"></i> Kategori</a></li>
            <li><a href="<?php echo base_url().'admin/renungan/video'?>"><i class="fa fa-film"></i> Video Renungan</a></li>
          </ul>
        </li>

         <li class="treeview active">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/pengguna'?>"><i class="fa fa-list"></i> Admin</a></li>
            <li class="active"><a href="<?php echo base_url().'admin/jemaat'?>"><i class="fa fa-spinner fa-pulse"></i>Jemaat</a></li>
            <li><a href="<?php echo base_url().'admin/parhalado'?>"><i class="fa fa-list"></i>Parhalado</a></li>
            <li><a href="<?php echo base_url().'admin/kepalakeluarga'?>"><i class="fa fa-list"></i>Kepala Keluarga</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>Dewan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/dewan'?>"><i class="fa fa-user"></i> Anggota Dewan</a></li>
            <li><a href="<?php echo base_url().'admin/kdewan'?>"><i class="fa fa-wrench"></i> Kategori Dewan</a></li>
          </ul>
        </li>

  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-star-o"></i>
            <span>Warta Jemaat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/listwa'?>"><i class="fa fa-whatsapp"></i> WhatsApp Gateway</a></li>
            <li><a href="<?php echo base_url().'admin/warta'?>"><i class="fa fa-list"></i> List Warta</a></li>
            <li><a href="<?php echo base_url().'admin/wartafix'?>"><i class="fa fa-book"></i> Warta Jemaat</a></li>
            <li><a href="<?php echo base_url().'admin/kategoriwarta'?>"><i class="fa fa-wrench"></i> Kategori Warta</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-camera"></i>
            <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/album'?>"><i class="fa fa-clone"></i> Album</a></li>
            <li><a href="<?php echo base_url().'admin/galeri'?>"><i class="fa fa-picture-o"></i> Photos</a></li>
          </ul>
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
            <li><a href="<?php echo base_url().'admin/jadwalibadah'?>"><i class="fa fa-list"></i> Jadwal Ibadah</a></li>
            <li><a href="<?php echo base_url().'admin/jadwalpetugas'?>"><i class="fa fa-list"></i> Jadwal Petugas</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-code-o"></i>
            <span>Berita Lainnya</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/kelahiran'?>"><i class="fa fa-tags"></i> Kelahiran</a></li>
            <li><a href="<?php echo base_url().'admin/datameninggal'?>"><i class="fa fa-tags"></i> Meninggal Dunia</a></li>
            <li><a href="<?php echo base_url().'admin/tardidi'?>"><i class="fa fa-tags"></i> Tardidi</a></li>
            <li><a href="<?php echo base_url().'admin/sidi'?>"><i class="fa fa-tags"></i> Peneguhan Sidi</a></li>
            <li><a href="<?php echo base_url().'admin/jmenikah'?>"><i class="fa fa-tags"></i> Menikah</a></li>
            <li><a href="<?php echo base_url().'admin/keterangan'?>"><i class="fa fa-tags"></i> Keterangan Anggota Jemaat</a></li>
            <li><a href="<?php echo base_url().'admin/jpindah'?>"><i class="fa fa-tags"></i> Pindah Jemaat</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/surat'?>">
            <i class="fa fa-pencil"></i> <span>Surat Keterangan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

         <li>
          <a href="<?php echo base_url().'admin/lingkungan'?>">
            <i class="fa fa-book"></i> <span>Lingkungan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/agenda'?>">
            <i class="fa fa-calendar"></i> <span>Agenda</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/pengumuman'?>">
            <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo base_url().'admin/ama'?>">
            <i class="fa fa-newspaper-o"></i> <span> Hasil & Laporan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/inbox'?>">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/komentar'?>">
            <i class="fa fa-comments"></i> <span>Komentar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_comment;?></small>
            </span>
          </a>
        </li>

         <li>
          <a href="<?php echo base_url().'administrator'?>">
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
      <h1>
        Data Anggota Jemaat
        <small>/Kepala Keluarga</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jemaat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">            
               <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Anggota Jemaat</a>
              <!-- /END Bagian Select by Tanggal-->          
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tempat/Tgl Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Tgl.Tardidi</th>
                    <th>Tgl.Malua</th>
                    <th>Alamat</th>
                    <th>No.Telepon</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $id=$i['anggota_id'];
          					   $nama=$i['anggota_nama'];
          					   $tmp_lahir=$i['anggota_tmptlahir'];
                       $tgl_lahir=$i['anggota_tgllahir'];
          					   $jenkel=$i['anggota_jenkel'];
                       $tardidi=$i['anggota_tardidi'];
                       $malua=$i['anggota_malua'];
                       $alamat=$i['alamat_keluarga'];
                       $nohp=$i['anggota_notelp'];
                       $pendidikan=$i['anggota_pendidikan'];
                       $pekerjaan=$i['anggota_pekerjaan'];


                    ?>
                <tr>
        				  <td><?php echo $no;?></td>
                  <td><?php echo $nama;?></td>
                  <td><?php echo $tmp_lahir.', '.$tgl_lahir;?></td>

                  <?php if($jenkel=='L'):?>
                  <td>Laki-Laki</td>
                  <?php else:?>
                  <td>Perempuan</td>
                  <?php endif;?>

                  <td><?php echo $tardidi;?></td>
                  <td><?php echo $malua;?></td>
                  <td><?php echo $alamat;?></td>

                  <td><?php echo $nohp;?></td>

                  <td><?php echo $pendidikan;?></td>
                  <td><?php echo $pekerjaan;?></td>
                  
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
    $this->load->view('admin/v_footer');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

    <!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Jemaat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/jemaat/simpan_jemaat'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Anggota Jemaat</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnamajemaat" class="form-control" id="inputUserName" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmp_lahir" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtgl_lahir" class="form-control" id="inputUserName" placeholder="Contoh: Tahun-bulan-hari (2000-01-01)" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Tardidi</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtgl_tardidi" class="form-control" id="inputUserName" placeholder="Contoh: 25/10/1993" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Malua</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtgl_malua" class="form-control" id="inputUserName" placeholder="Contoh: 25/10/1993" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Pendidikan</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xpendidikan" class="form-control" id="inputUserName" placeholder="Pendidikan" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xpekerjaan" class="form-control" id="inputUserName" placeholder="Pekerjaan" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Status Anggota Keluarga</label>
                                        <div class="col-sm-7">
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga" name="xstatuskk" checked>
                                                <label for="inlineRadio1"> Kepala Keluarga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Ibu Rumah Tangga" name="xstatukks">
                                                <label for="inlineRadio2"> Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga/Ibu Rumah Tangga" name="xstatuskk">
                                                <label for="inlineRadio3"> Kepala Keluarga/Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Anak" name="xstatuskk">
                                                <label for="inlineRadio4"> Anak </label>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">No.Telepon</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnohp" class="form-control" id="inputUserName" placeholder="No. Telepon" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Lingkungan</label>
                                        <div class="col-sm-7">
                                          <select name="xlingkungan" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($lingkungan->result_array() as $k) {
                                                  $id_lingkungan=$k['lingkungan_id'];
                                                  $nm_lingkungan=$k['lingkungan_nama'];
                                                  $jln_lingkungan=$k['lingkungan_jalan'];
                                            ?>
                                            <option value="<?php echo $id_lingkungan;?>"><?php echo $nm_lingkungan;?> - <?php echo $jln_lingkungan;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nomor Urut di KK</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnourutkk" class="form-control" id="inputUserName" placeholder="Nomor Urut di KK" required>
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

  <!--Modal Edit Album-->
  <?php foreach ($data->result_array() as $i) :

                       $id=$i['anggota_id'];
                       $nokk=$i['no_kk'];
                       $nama=$i['anggota_nama'];
                       $tmp_lahir=$i['anggota_tmptlahir'];
                       $tgl_lahir=$i['anggota_tgllahir'];
                       $jenkel=$i['anggota_jenkel'];
                       $tardidi=$i['anggota_tardidi'];
                       $malua=$i['anggota_malua'];
                       $nohp=$i['anggota_notelp'];
                       $pendidikan=$i['anggota_pendidikan'];
                       $pekerjaan=$i['anggota_pekerjaan'];
                       $statuskk=$i['anggota_status'];
                       $nourutkk=$i['no_urut_kk'];
            ?>

        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Anggota Jemaat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/jemaat/update_jemaat'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Anggota Jemaat</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnamajemaat" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmp_lahir" value="<?php echo $tmp_lahir;?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtgl_lahir" value="<?php echo $tgl_lahir;?>" class="form-control" id="inputUserName" placeholder="Contoh: Tahun-bulan-hari (2000-01-01)" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                                          <?php if($jenkel=='L'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Tardidi</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtgl_tardidi" value="<?php echo $tardidi;?>" class="form-control" id="inputUserName" placeholder="Contoh: 25/12/1993" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Malua</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtgl_malua" value="<?php echo $malua;?>" class="form-control" id="inputUserName" placeholder="Contoh: 25/12/1993" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Pendidikan</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xpendidikan" value="<?php echo $pendidikan;?>" class="form-control" id="inputUserName" placeholder="Pekerjaan" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xpekerjaan" value="<?php echo $pekerjaan;?>" class="form-control" id="inputUserName" placeholder="Pekerjaan" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Status Anggota Keluarga</label>
                                        <div class="col-sm-7">
                                          <?php if($statuskk=='Kepala Keluarga'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga" name="xstatuskk" checked>
                                                <label for="inlineRadio1"> Kepala Keluarga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Ibu Rumah Tangga" name="xstatuskk">
                                                <label for="inlineRadio2"> Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga/Ibu Rumah Tangga" name="xstatuskk">
                                                <label for="inlineRadio3"> Kepala Keluarga/Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Anak" name="xstatuskk">
                                                <label for="inlineRadio4"> Anak </label>
                                            </div>

                                          <?php elseif($statuskk=='Ibu Rumah Tangga'):?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga" name="xstatuskk">
                                                <label for="inlineRadio1"> Kepala Keluarga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Ibu Rumah Tangga" name="xstatuskk" checked>
                                                <label for="inlineRadio2"> Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga/Ibu Rumah Tangga" name="xstatuskk">
                                                <label for="inlineRadio3"> Kepala Keluarga/Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Anak" name="xstatuskk">
                                                <label for="inlineRadio4"> Anak </label>
                                            </div>

                                            <?php elseif($statuskk=='Kepala Keluarga/Ibu Rumah Tangga'):?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga" name="xstatuskk">
                                                <label for="inlineRadio1"> Kepala Keluarga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Ibu Rumah Tangga" name="xstatuskk">
                                                <label for="inlineRadio2"> Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga/Ibu Rumah Tangga" name="xstatuskk" checked>
                                                <label for="inlineRadio3"> Kepala Keluarga/Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Anak" name="xstatuskk">
                                                <label for="inlineRadio4"> Anak </label>
                                            </div>

                                            <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga" name="xstatuskk">
                                                <label for="inlineRadio1"> Kepala Keluarga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Ibu Rumah Tangga" name="xstatuskk">
                                                <label for="inlineRadio2"> Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Kepala Keluarga/Ibu Rumah Tangga" name="xstatuskk">
                                                <label for="inlineRadio3"> Kepala Keluarga/Ibu Rumah Tangga </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Anak" name="xstatuskk" checked>
                                                <label for="inlineRadio4"> Anak </label>
                                            </div>

                                          <?php endif;?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">No.Telepon</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnohp" value="<?php echo $nohp;?>" class="form-control" id="inputUserName" placeholder="No. Telepon" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Lingkungan</label>
                                        <div class="col-sm-7">
                                          <select name="xlingkungan" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($lingkungan->result_array() as $k) {
                                                  $id_lingkungan=$k['lingkungan_id'];
                                                  $nm_lingkungan=$k['lingkungan_nama'];
                                                  $jln_lingkungan=$k['lingkungan_jalan'];
                                                  
                                            ?>
                                            <?php if($id_lingkungan==$lingkungan_id):?>
                                              <option value="<?php echo $id_lingkungan;?>" selected><?php echo $nm_lingkungan;?> - <?php echo $jln_lingkungan;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $id_lingkungan;?>"> <?php echo $nm_lingkungan;?> - <?php echo $jln_lingkungan;?> </option>
                                            <?php endif;?>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">No Urut KK</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnourutkk" value="<?php echo $nourutkk;?>" class="form-control" id="inputUserName" placeholder="Nomor Urut di KK" required>
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>
	<!--Modal Edit Album-->

	<?php foreach ($data->result_array() as $i) :
              $id=$i['anggota_id'];
                       $nama=$i['anggota_nama'];
                       $tmp_lahir=$i['anggota_tmptlahir'];
                       $tgl_lahir=$i['anggota_tgllahir'];
                       $jenkel=$i['anggota_jenkel'];
                       $tardidi=$i['anggota_tardidi'];
                       $malua=$i['anggota_malua'];
                       $nohp=$i['anggota_notelp'];
                       $pendidikan=$i['anggota_pendidikan'];
                       $pekerjaan=$i['anggota_pekerjaan'];
                       $statuskk=$i['anggota_status'];
                       $nourutkk=$i['no_urut_kk'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Anggota</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/jemaat/hapus_jemaat'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus <b><?php echo $nama;?></b> dari Anggota Jemaat?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>




<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data Anggota Jemaat Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Data Anggota Jemaat berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data Anggota Jemaat Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
</body>
</html>

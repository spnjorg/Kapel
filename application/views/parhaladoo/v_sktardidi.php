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
  <title>HKBP II - Surat Keterangan Tardidi</title>
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
          <a href="<?php echo base_url().'parhaladoo/dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <!-- <li>
          <a href="<?php echo base_url().'parhaladoo/parhalado'?>">
            <i class="fa fa-user"></i> <span>Parhalado</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li> -->
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>Dewan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'parhaladoo/dewan'?>"><i class="fa fa-user"></i> Anggota Dewan</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/kdewan'?>"><i class="fa fa-wrench"></i> Kategori Dewan</a></li>
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
            <li><a href="<?php echo base_url().'parhaladoo/listwa'?>"><i class="fa fa-whatsapp"></i> WhatsApp Gateway</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/warta'?>"><i class="fa fa-list"></i> List Warta</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/wartafix'?>"><i class="fa fa-book"></i> Warta Jemaat</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/kategoriwarta'?>"><i class="fa fa-wrench"></i> Kategori Warta</a></li>
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
            <li><a href="<?php echo base_url().'parhaladoo/album'?>"><i class="fa fa-clone"></i> Album</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/galeri'?>"><i class="fa fa-picture-o"></i> Photos</a></li>
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
            <li><a href="<?php echo base_url().'parhaladoo/jadwalibadah'?>"><i class="fa fa-list"></i> Jadwal Ibadah</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/jadwalpetugas'?>"><i class="fa fa-list"></i> Jadwal Petugas</a></li>
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
            <li><a href="<?php echo base_url().'parhaladoo/kelahiran'?>"><i class="fa fa-tags"></i> Kelahiran</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/datameninggal'?>"><i class="fa fa-tags"></i> Meninggal Dunia</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/tardidi'?>"><i class="fa fa-tags"></i> Tardidi</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/sidi'?>"><i class="fa fa-tags"></i> Peneguhan Sidi</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/jmenikah'?>"><i class="fa fa-tags"></i> Menikah</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/keterangan'?>"><i class="fa fa-tags"></i> Keterangan Anggota Jemaat</a></li>
            <li><a href="<?php echo base_url().'parhaladoo/jpindah'?>"><i class="fa fa-tags"></i> Pindah Jemaat</a></li>
          </ul>
        </li>

        <li class="active">
          <a href="<?php echo base_url().'parhaladoo/surat'?>">
            <i class="fa fa-star-o fa-pulse"></i> <span>Surat Pengantar</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="<?php echo base_url().'parhaladoo/lingkungan'?>">
            <i class="fa fa-book"></i> <span>Lingkungan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'parhaladoo/agenda'?>">
            <i class="fa fa-calendar"></i> <span>Agenda</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'parhaladoo/pengumuman'?>">
            <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
        
        <li>
          <a href="<?php echo base_url().'parhaladoo/inbox'?>">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'parhaladoo/komentar'?>">
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
        Surat Pengantar Marguru Tardidi
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Surat Pengantar</li>
        <li class="active">Tardidi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">            
               <div class="box-header">  
            <label class="label-control"><h4>Surat Pengantar : </h4></label>
               <ul class="pull-right">
                <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal" style="background-color: darkcyan; color: white; margin-top: 5px; "><span class="fa fa-plus"></span> Tambah Data</a>
               </ul>   

               <a class="btn btn-success btn-flat" href="<?php echo base_url().'parhaladoo/surat'?>" style="background-color: darkcyan; color: white;">Kelahiran</a>
               <a class="btn btn-flat" href="<?php echo base_url().'parhaladoo/surat/tardidi'?>" style="background-color: lightcyan; color: black;">Tardidi</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'parhaladoo/surat/sidi'?>" style="background-color: darkcyan; color: white">Sidi</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'parhaladoo/surat/jpindah'?>" style="background-color: darkcyan; color: white">Pindah </a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'parhaladoo/surat/jmenikah'?>" style="background-color: darkcyan; color: white">Menikah</a>
             </div>
           <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th style="width: 5px;">No.</th>
                    <th style="text-align:center;width: 60px;">ID Jemaat</th>
                    <th style="text-align:center;width: 60px;">Username</th>
                    <th style="text-align:center;">Nama Anak</th>
                    <th style="text-align:center;">Dari Keluarga</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat/Tgl.Lahir</th>
                    <th style="text-align:center;width: 50px;">Alamat</th>
                    <th style="text-align:center;">status</th>
                    <th style="text-align:center;">Aksi</th>
                 </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    foreach ($data->result_array() as $i) :
                       $no++;
                       $id=$i['surat_id'];
                       $jemaat=$i['surat_jemaat_id'];
                       $username=$i['surat_username'];
                       $kk_nama=$i['kk_username'];
                       $nama=$i['surat_nama'];
                       $alamat=$i['kk_alamat'];
                       $lingkungan_nama=$i['lingkungan_nama'];
                       $tmptlahir=$i['surat_tmptlahir'];
                       $tanggal=$i['surat_tgllahir'];
                       $tanggal_new= date('d F Y', strtotime($tanggal));
                       $jenkel=$i['surat_jenkel'];
                       $katsurat_id=$i['surat_katsurat_id'];
                       $status=$i['surat_status'];
                    ?>
                <tr>
                  <td style="width: 5px;"><?php echo $no;?></td>
                  <td><?php echo $jemaat;?></td>
                  <td><?php echo $username;?></td>
                  <td><?php echo $nama;?></td>
                  <td><?php echo $kk_nama;?></td>

                  <?php if($jenkel=='L'):?>
                  <td>Laki-Laki</td>
                  <?php else:?>
                  <td>Perempuan</td>
                  <?php endif;?>
                  
                  <td><?php echo $tmptlahir.', '.$tanggal_new;?></td>
                  <td><?php echo $alamat.', Lk. '.$lingkungan_nama;?></td>

                  <?php if($status==1):?>
                      <td style="text-align:center;">Selesai</td>
                      <?php else:?>
                      <td style="text-align:center;">Menunggu Konfirmasi</td>
                      <?php endif;?>
                  
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalAddsk<?php echo $id;?>"><span class="fa fa-plus"></span></a>
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


<!-- TAMBAH DATA SURAT KETERANGAN -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Surat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'parhaladoo/surat/simpan_sktardidi'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">ID Jemaat</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xidjemaat" class="form-control" id="inputUserName" placeholder="Masukkan ID Jemaat" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xusername" class="form-control" id="inputUserName" placeholder="Username" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">ID Keluarga</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xidkeluarga" class="form-control" id="inputUserName" placeholder="Masukkan ID Keluarga Anda" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Anak</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama Lengkap Anak" required>
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
                                        <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmptlahir" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="xtgllahir" class="form-control" id="inputUserName" placeholder="Contoh: Tahun-bulan-hari (2000-01-01)" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Status</label>
                                        <div class="col-sm-7">
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="1" name="xstatus" checked>
                                                <label for="inlineRadio1"> Selesai </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="2" name="xstatus">
                                                <label for="inlineRadio2"> Menunggu Konfirmasi </label>
                                            </div>
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

<!-- END TAMBAH DATA SURAT KETERANGAN -->


<!-- EDIT DATA SURAT KETERANGAN -->

<?php foreach ($data->result_array() as $i) :
                $id=$i['surat_id'];
                       $username=$i['surat_username'];
                       $kk_id=$i['surat_kk_id'];
                       $kk_nama=$i['kk_username'];
                       $nama=$i['surat_nama'];
                       $alamat=$i['kk_alamat'];
                       $lingkungan_nama=$i['lingkungan_nama'];
                       $tmptlahir=$i['surat_tmptlahir'];
                       $tanggal=$i['surat_tgllahir'];
                       $tanggal_new= date('d F Y', strtotime($tanggal));
                       $jenkel=$i['surat_jenkel'];
                       $katsurat_id=$i['surat_katsurat_id'];
                       $status=$i['surat_status'];
            ?>

        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit SK Marguru Tardidi</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'parhaladoo/surat/update_sktardidi'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xusername" value="<?php echo $username;?>" class="form-control" id="inputUserName" placeholder="Username" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">ID Keluarga</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xidkeluarga" value="<?php echo $kk_id;?>" class="form-control" id="inputUserName" placeholder="Masukkan ID Keluarga Anda" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Anak</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama Lengkap Anak" required>
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
                                        <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmptlahir" value="<?php echo $tmptlahir;?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="xtgllahir" value="<?php echo $tanggal;?>" class="form-control" id="inputUserName" placeholder="Contoh: Tahun-bulan-hari (2000-01-01)" required>
                                        </div>
                                    </div>

           
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Status</label>
                                        <div class="col-sm-7">
                                          <?php if($status==1):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="1" name="xstatus" checked>
                                                <label for="inlineRadio1"> Selesai </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="2" name="xstatus">
                                                <label for="inlineRadio2"> Menunggu Konfirmasi </label>
                                            </div>
                                          <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="1" name="xstatus">
                                                <label for="inlineRadio1"> Selesai </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="2" name="xstatus" checked>
                                                <label for="inlineRadio2"> Menunggu Konfirmasi </label>
                                            </div>
                                          <?php endif;?>
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

<!-- END EDIT DATA SURAT KETERANGAN -->

<!-- HAPUS DATA SURAT KETERANGAN -->
<?php foreach ($data->result_array() as $i) :
                 $id=$i['surat_id'];
                       $username=$i['surat_username'];
                       $kk_nama=$i['kk_username'];
                       $nama=$i['surat_nama'];
                       $alamat=$i['kk_alamat'];
                       $lingkungan_nama=$i['lingkungan_nama'];
                       $tmptlahir=$i['surat_tmptlahir'];
                       $tanggal=$i['surat_tgllahir'];
                       $tanggal_new= date('d F Y', strtotime($tanggal));
                       $jenkel=$i['surat_jenkel'];
                       $katsurat_id=$i['surat_katsurat_id'];
                       $status=$i['surat_status'];
           ?>
  <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Surat Pengantar : Tardidi</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'parhaladoo/surat/hapus_sktardidi'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                     <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus data Surat Tardidi dari keluarga <b><?php echo $kk_nama;?></b> ?</p>

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

<!-- END HAPUS DATA SURAT KETERANGAN -->


<!-- TAMBAH DATA SURAT KE KELAHIRAN -->
<?php foreach ($data->result_array() as $i) :
                $id=$i['surat_id'];
                       $username=$i['surat_username'];
                       $kk_nama=$i['kk_username'];
                       $nama=$i['surat_nama'];
                       $alamat=$i['kk_alamat'];
                       $lingkungan_nama=$i['lingkungan_nama'];
                       $tmptlahir=$i['surat_tmptlahir'];
                       $tanggal=$i['surat_tgllahir'];
                       $tanggal_new= date('d F Y', strtotime($tanggal));
                       $jenkel=$i['surat_jenkel'];
                       $katsurat_id=$i['surat_katsurat_id'];
                       $status=$i['surat_status'];
            ?>

        <div class="modal fade" id="ModalAddsk<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Data Ke Halaman Tardidi</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'parhaladoo/tardidi/simpan_sktardidi'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">ID Keluarga</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xidkeluarga" value="<?php echo $kk_id;?>" class="form-control" id="inputUserName" placeholder="Masukkan ID Keluarga Anda" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Anak</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama Lengkap Anak" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmptlahir" value="<?php echo $tmptlahir;?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="xtgllahir" value="<?php echo $tanggal;?>" class="form-control" id="inputUserName" placeholder="Contoh: Tahun-bulan-hari (2000-01-01)" required>
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


<!-- END TAMBAH DATA SURAT KE KELAHIRAN -->

 


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
                    text: "SK Marguru Tardidi Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='berhasil'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data Tardidi Berhasil disimpan ke database.",
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
                    text: "SK Marguru Tardidi berhasil di update",
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
                    text: "SK Marguru Tardidi Berhasil dihapus.",
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

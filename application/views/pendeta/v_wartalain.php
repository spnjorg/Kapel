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
  <title>HKBP II - Warta Jemaat HKBP</title>
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
          <a href="<?php echo base_url().'pendeta/dashboard'?>">
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
            <li><a href="<?php echo base_url().'pendeta/renungan'?>"><i class="fa fa-list"></i> List Renungan</a></li>
            <li><a href="<?php echo base_url().'pendeta/renungan/add_renungan'?>"><i class="fa fa-thumb-tack"></i> Post Renungan</a></li>
            <li><a href="<?php echo base_url().'pendeta/kategori'?>"><i class="fa fa-wrench"></i> Kategori</a></li>
            <li><a href="<?php echo base_url().'pendeta/renungan/video'?>"><i class="fa fa-film"></i> Video Renungan</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'pendeta/jemaat'?>"><i class="fa fa-user"></i>Jemaat</a></li>
            <li><a href="<?php echo base_url().'pendeta/kepalakeluarga'?>"><i class="fa fa-user"></i>Kepala Keluarga</a></li>
          </ul>
        </li>

       <li class="treeview active">
          <a href="#">
            <i class="fa fa-star-o"></i>
            <span>Warta Jemaat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'pendeta/listwa'?>"><i class="fa fa-whatsapp"></i> WhatsApp Gateway</a></li>
            <li><a href="<?php echo base_url().'pendeta/warta'?>"><i class="fa fa-list"></i> List Warta</a></li>
            <li class="active"><a href="<?php echo base_url().'pendeta/wartafix'?>"><i class="fa fa-spinner fa-pulse"></i> Warta Jemaat</a></li>
            <li><a href="<?php echo base_url().'pendeta/kategoriwarta'?>"><i class="fa fa-wrench"></i> Kategori Warta</a></li>
            <li><a href="<?php echo base_url().'pendeta/files'?>"><i class="fa fa-download"></i> Download</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url().'pendeta/laporan'?>">
            <i class="fa fa-print"></i> <span> Cetak Laporan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'pendeta/inbox'?>">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'pendeta/komentar'?>">
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
        Warta Jemaat HKBP Ressort Sidikalang II
        <small> - Warta Lainnnya</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li>Warta Jemaat</li>
        <li>Warta Jemaat</li>
        <li class="active">Warta Lainnya</li>
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
            <label class="label-control"><h4>Kategori Warta : </h4></label>
               <ul class="pull-right">
                <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal" style="background-color: darkcyan; color: white; margin-top: 5px; "><span class="fa fa-plus"></span> Tambah Data</a>
               </ul>   

               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/wartafix'?>" style="background-color: darkcyan; color: white;">Nasorang</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/wartafix/namonding'?>" style="background-color: darkcyan; color: white;">Namonding</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/wartafix/jmenikah'?>" style="background-color: darkcyan; color: white;">Menikah</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/wartafix/jpindah'?>" style="background-color: darkcyan; color: white;">Pindah </a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/wartafix/hamuliateon'?>" style="background-color: darkcyan; color: white;">Hamuliateon</a>
               <a class="btn btn-flat" href="<?php echo base_url().'pendeta/wartafix/wartalain'?>" style="background-color: lightcyan; color: black;">Lainnya</a>
             </div>
           <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Isi Warta</th>
                    <th style="text-align:center;">Aksi</th>
                 </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    foreach ($data->result_array() as $i) :
                       $no++;
                       $id=$i['wartafix_id'];
                       $tanggal=$i['wartafix_tgl'];
                       $tanggal_new= date('d F Y', strtotime($tanggal));
                       $nama=$i['wartafix_nama'];
                       $isi=$i['wartafix_isi'];
                       $kategori_id=$i['wartafix_kat_id'];
                       $minggu_id=$i['wartafix_minggu_id'];
                       $status=$i['wartafix_status'];

                       $daftar_hari = array(
                        'Sunday' => 'Minggu',
                        'Monday' => 'Senin',
                        'Tuesday' => 'Selasa',
                        'Wednesday' => 'Rabu',
                        'Thursday' => 'Kamis',
                        'Friday' => 'Jumat',
                        'Saturday' => 'Sabtu' );

                       $hari = date('l', strtotime($tanggal));
                       
                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $daftar_hari[$hari].', '.$tanggal_new;?></td>
                  <td><?php echo $nama;?></td>
                  <td><?php echo $isi;?></td>
                  
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


<!-- TAMBAH DATA SURAT KETERANGAN -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Warta Jemaat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'pendeta/wartafix/simpan_wartafix_wartalain'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tanggal</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xtanggal" class="form-control" id="inputUserName" placeholder="Tanggal" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama Pewarta" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Isi Warta</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xisi" class="form-control" id="inputUserName" placeholder="Isi Warta Jemaat" required>
                                </div>
                            </div>

                            <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori Warta</label>
                                        <div class="col-sm-7">
                                          <select name="xkategori" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kategori->result_array() as $k) {
                                                  $id=$k['kategori_warta_id'];
                                                  $nama=$k['kategori_warta_nama'];
                                             ?>
                                            <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                            <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Minggu Ke</label>
                                        <div class="col-sm-7">
                                          <select name="xminggu" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($minggu->result_array() as $k) {
                                                  $id=$k['minggu_id'];
                                                  $nama=$k['minggu_nama'];
                                             ?>
                                            <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label"> ON/OFF</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="xstatus" required>
                                                <option value="1">ON</option>
                                                <option value="0">OFF</option>
                                            </select>
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
                $id=$i['wartafix_id'];
                       $tanggal=$i['wartafix_tgl'];
                       $nama=$i['wartafix_nama'];
                       $isi=$i['wartafix_isi'];
                       $kategori_id=$i['wartafix_kat_id'];
                       $minggu_id=$i['wartafix_minggu_id'];
                       $status=$i['wartafix_status'];
            ?>

        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Warta Jemaat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'pendeta/wartafix/update_wartafix_wartalain'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtanggal" value="<?php echo $tanggal;?>" class="form-control" id="inputUserName" placeholder="Tanggal" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Pewarta</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama Pewarta" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Isi Warta</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xisi" value="<?php echo $isi;?>" class="form-control" id="inputUserName" placeholder="Isi Warta Jemaat" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                                        <div class="col-sm-7">
                                          <select name="xkategori" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kategori->result_array() as $k) {
                                                  $id=$k['kategori_warta_id'];
                                                  $nama=$k['kategori_warta_nama'];                    
                                           ?>
                                            <?php if($id==$kategori_id):?>
                                              <option value="<?php echo $id;?>" selected><?php echo $nama;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $id;?>"> <?php echo $nama;?></option>
                                            <?php endif;?>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Minggu Ke</label>
                                        <div class="col-sm-7">
                                          <select name="xminggu" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($minggu->result_array() as $k) {
                                                  $id=$k['minggu_id'];
                                                  $nama=$k['minggu_nama'];                    
                                           ?>
                                            <?php if($id==$minggu_id):?>
                                              <option value="<?php echo $id;?>" selected><?php echo $nama;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $id;?>"> <?php echo $nama;?></option>
                                            <?php endif;?>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">ON/OFF</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="xstatus" required>
                                                <?php if($status=='1'):?>
                                                <option value="1" selected>ON</option>
                                                <option value="0">OFF</option>
                                                <?php else:?>
                                                <option value="1">ON</option>
                                                <option value="0" selected>OFF</option>
                                                <?php endif;?>
                                            </select>
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
                 $id=$i['wartafix_id'];
                       $tanggal=$i['wartafix_tgl'];
                       $nama=$i['wartafix_nama'];
                       $isi=$i['wartafix_isi'];
                       $kategori_id=$i['wartafix_kat_id'];
                       $kategori_nama=$i['kategori_warta_nama'];
                       $minggu_id=$i['wartafix_minggu_id'];
                       $status=$i['wartafix_status'];
           ?>
  <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Warta Jemaat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'pendeta/wartafix/hapus_wartafix_wartalain'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                     <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Warta <b><?php echo $kategori_nama;?></b> oleh <b><?php echo $nama;?></b>?</p>
                            

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
                    text: "Warta Berhasil disimpan ke database.",
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
                    text: "Warta berhasil di update",
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
                    text: "Warta Berhasil dihapus.",
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Warta Jemaat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'pendeta/wartafix/simpan_wartafix'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tanggal</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xtanggal" class="form-control" id="inputUserName" placeholder="Tanggal" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama Pewarta" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Isi Warta</label>
                                <div class="col-sm-7">
                                  <!-- <input type="text" name="xisi" class="form-control" id="inputUserName" placeholder="Isi Warta Jemaat" required> -->
                                  <textarea class="form-control" rows="3" name="xisi" placeholder="Isi Warta Jemaat ..." required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori Warta</label>
                                        <div class="col-sm-7">
                                          <select name="xkategori" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kategori->result_array() as $k) {
                                                  $id=$k['kategori_warta_id'];
                                                  $nama=$k['kategori_warta_nama'];
                                             ?>
                                            <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Minggu Ke</label>
                                        <div class="col-sm-7">
                                          <select name="xminggu" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($minggu->result_array() as $k) {
                                                  $id=$k['minggu_id'];
                                                  $nama=$k['minggu_nama'];
                                             ?>
                                            <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label"> ON/OFF</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="xstatus" required>
                                                <option value="1">ON</option>
                                                <option value="0">OFF</option>
                                            </select>
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
                $id=$i['wartafix_id'];
                       $tanggal=$i['wartafix_tgl'];
                       $nama=$i['wartafix_nama'];
                       $isi=$i['wartafix_isi'];
                       $kategori_id=$i['wartafix_kat_id'];
                       $minggu_id=$i['wartafix_minggu_id'];
                       $status=$i['wartafix_status'];
            ?>

        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Warta Jemaat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'pendeta/wartafix/update_wartafix'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtanggal" value="<?php echo $tanggal;?>" class="form-control" id="inputUserName" placeholder="Tanggal" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Pewarta</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama Pewarta" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Isi Warta</label>
                                        <div class="col-sm-7">
                                           <!--  <input type="text" name="xisi" value="<?php echo $isi;?>" class="form-control" id="inputUserName" placeholder="Isi Warta Jemaat" required> -->
                                           <textarea class="form-control" rows="3" name="xisi" placeholder="Isi Warta Jemaat ..." required><?php echo $isi;?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                                        <div class="col-sm-7">
                                          <select name="xkategori" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kategori->result_array() as $k) {
                                                  $id=$k['kategori_warta_id'];
                                                  $nama=$k['kategori_warta_nama'];                    
                                           ?>
                                            <?php if($id==$kategori_id):?>
                                              <option value="<?php echo $id;?>" selected><?php echo $nama;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $id;?>"> <?php echo $nama;?></option>
                                            <?php endif;?>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Minggu Ke</label>
                                        <div class="col-sm-7">
                                          <select name="xminggu" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($minggu->result_array() as $k) {
                                                  $id=$k['minggu_id'];
                                                  $nama=$k['minggu_nama'];                    
                                           ?>
                                            <?php if($id==$minggu_id):?>
                                              <option value="<?php echo $id;?>" selected><?php echo $nama;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $id;?>"> <?php echo $nama;?></option>
                                            <?php endif;?>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">ON/OFF</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="xstatus" required>
                                                <?php if($status=='1'):?>
                                                <option value="1" selected>ON</option>
                                                <option value="0">OFF</option>
                                                <?php else:?>
                                                <option value="1">ON</option>
                                                <option value="0" selected>OFF</option>
                                                <?php endif;?>
                                            </select>
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
                 $id=$i['wartafix_id'];
                       $tanggal=$i['wartafix_tgl'];
                       $nama=$i['wartafix_nama'];
                       $isi=$i['wartafix_isi'];
                       $kategori_id=$i['wartafix_kat_id'];
                       $kategori_nama=$i['kategori_warta_nama'];
                       $minggu_id=$i['wartafix_minggu_id'];
                       $status=$i['wartafix_status'];
           ?>
  <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Warta Jemaat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'pendeta/wartafix/hapus_wartafix'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                     <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Warta <b><?php echo $kategori_nama;?></b> oleh <b><?php echo $nama;?></b>?</p>
                            

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
                    text: "Warta Berhasil disimpan ke database.",
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
                    text: "Warta berhasil di update",
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
                    text: "Warta Berhasil dihapus.",
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

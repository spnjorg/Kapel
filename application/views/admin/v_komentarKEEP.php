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
  <title>HKBP II - Komentar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'theme/images/HKBP2.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
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

         <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/pengguna'?>"><i class="fa fa-star-o"></i> Admin</a></li>
            <li><a href="<?php echo base_url().'admin/kepalakeluarga'?>"><i class="fa fa-list"></i>Kepala Keluarga</a></li>
            <li><a href="<?php echo base_url().'admin/jemaat'?>"><i class="fa fa-users"></i>Data Jemaat</a></li>
            <li><a href="<?php echo base_url().'admin/parhalado'?>"><i class="fa fa-book"></i>Parhalado</a></li>
            <li><a href="<?php echo base_url().'admin/jemaat/pewarta'?>"><i class="fa fa-star"></i> Pewarta</a></li>
            <!-- <li><a href="<?php echo base_url().'admin/jemaat'?>"><i class="fa fa-user"></i>Jemaat</a></li> 
            <a href="<?php echo base_url().'admin/kepalakeluarga'?>"><i class="fa fa-list"></i>Kepala Keluarga</a></li>-->
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
            <li><a href="<?php echo base_url().'admin/files'?>"><i class="fa fa-download"></i> Download</a></li>
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
            <li><a href="<?php echo base_url().'admin/jpindah'?>"><i class="fa fa-tags"></i> Pindah Jemaat</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/surat'?>">
            <i class="fa fa-pencil"></i> <span>Surat Pengantar</span>
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
          <a href="<?php echo base_url().'admin/laporan'?>">
            <i class="fa fa-print"></i> <span> Cetak Laporan</span>
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

        <li class="active">
          <a href="<?php echo base_url().'admin/komentar'?>">
            <i class="fa fa-star-o fa-pulse"></i> <span>Komentar</span>
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
        Komentar
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Komentar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Komentar</th>
                    <th>Tanggapan Untuk</th>
                    <th>Dikirimkan Pada</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
  					foreach ($data->result() as $row) :?>
                <tr>
                  <td><?php echo $row->komentar_nama;?></td>
                  <td><?php echo $row->komentar_isi;?></td>
                  <!-- <td><a href="<?php echo site_url('renungan/'.$row->renungan_slug);?>" target="_blank"><?php echo $row->renungan_judul;?></a></td> -->

                  <td><a href="<?php echo site_url('artikel/'.$row->renungan_slug);?>" target="_blank"><?php echo $row->renungan_judul;?></a></td>
                  <td><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal));?></td>
                  <td style="text-align:right;">
                    <?php if($row->komentar_status=='1' && $row->komentar_parent=='0'):?>
                      <a class="btn btn-reply" href="javascript:void(0);" data-id="<?php echo $row->komentar_id;?>" data-post_id="<?php echo $row->komentar_tulisan_id;?>" title="Balas"><span class="fa fa-reply"></span></a>
                      <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?php echo $row->komentar_id;?>" title="Hapus"><span class="fa fa-trash"></span></a>
                    <?php elseif($row->komentar_status=='1'):?>
                      <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?php echo $row->komentar_id;?>" title="Hapus"><span class="fa fa-trash"></span></a>
                    <?php else:?>
                      <a class="btn" href="<?php echo site_url('admin/komentar/publish/'.$row->komentar_id);?>" title="Publish"><span class="fa fa-send"></span></a>
                      <a class="btn btn-hapus" href="javascript:void(0);" data-id="<?php echo $row->komentar_id;?>" title="Hapus"><span class="fa fa-trash"></span></a>
                    <?php endif;?>
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

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


        <!--Modal Relpy-->
        <div class="modal fade" id="ModalReply" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Reply</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/komentar/reply'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="komenid" value=""/>
                     <input type="hidden" name="postid" value=""/>
                        <textarea name="komentar" class="form-control" rows="8" cols="80" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Relpy</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
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

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
    });

    $('#example1').on('click','.btn-reply',function(){
      var komentar_id = $(this).data('id');
      var post_id = $(this).data('post_id');
      $('#ModalReply').modal('show');
      $('[name="komenid"]').val(komentar_id);
      $('[name="postid"]').val(post_id);
    });

    $('#example1').on('click','.btn-hapus',function(){
      var komentar_id = $(this).data('id');
      $('#ModalHapus').modal('show');
      $('[name="kode"]').val(komentar_id);
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

    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Komentar berhasil di Balas",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
      <?php elseif($this->session->flashdata('msg')=='success'):?>
          <script type="text/javascript">
                  $.toast({
                      heading: 'Success',
                      text: "Komentar Berhasil Publish.",
                      showHideTransition: 'slide',
                      icon: 'success',
                      hideAfter: false,
                      position: 'bottom-right',
                      bgColor: '#7EC857'
                  });
          </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Komentar Berhasil dihapus.",
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

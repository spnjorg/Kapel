<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
    <title>Document</title>
</head>
<body>

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li class="active">
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-star-o fa-pulse"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
        <!-- <li class="treeview">
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
        </li> -->

         <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/pengguna'?>"><i class="fa fa-star-o"></i> Super Admin</a></li>
            <li><a href="<?php echo base_url().'admin/kepalakeluarga'?>"><i class="fa fa-list"></i> Admin Fakultas</a></li>
          </ul>
        </li>

        <!-- <li class="treeview">
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
        </li> -->

  
        <!-- <li class="treeview">
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
        </li> -->

        
        
        <li class="treeview">
            <a href="#">
                <i class="fa fa-user"></i>
                <span>Input Petugas Misa</span>
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

       <!-- <li>
          <a href="<?php echo base_url().'admin/surat'?>">
            <i class="fa fa-pencil"></i> <span>Surat Pengantar</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li> -->

         <!-- <li>
          <a href="<?php echo base_url().'admin/lingkungan'?>">
            <i class="fa fa-book"></i> <span>Lingkungan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li> -->

        
        <li>
            <a href="<?php echo base_url().'admin/pengumuman'?>">
                <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
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
        
        <li>
          <a href="<?php echo base_url().'admin/laporan'?>">
            <i class="fa fa-print"></i> <span> Cetak </span>
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

  <div class="control-sidebar-bg"></div>
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
</body>
</html>
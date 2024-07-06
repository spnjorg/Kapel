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
  <title>HKBP II - Laporan SKM</title>
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

       <li class="treeview">
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
            <li><a href="<?php echo base_url().'pendeta/wartafix'?>"><i class="fa fa-book"></i> Warta Jemaat</a></li>
            <li><a href="<?php echo base_url().'pendeta/kategoriwarta'?>"><i class="fa fa-wrench"></i> Kategori Warta</a></li>
            <li><a href="<?php echo base_url().'pendeta/files'?>"><i class="fa fa-download"></i> Download</a></li>
          </ul>
        </li>

        <li class="active">
          <a href="<?php echo base_url().'pendeta/laporan'?>">
            <i class="fa fa-star-o fa-pulse"></i> <span> Cetak Laporan</span>
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
      <h1 style="text-align:center; font-family:square721 bt;">
       <br><b>CETAK LAPORAN JEMAAT</b> <br>
     <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cetak Laporan</li>
      </ol>
    </section>


<!--  ----------------------------------------------------START ------------------------------------------ -->
    <section class="content-header">
      <h1>
        Rekapitulasi Data Jemaat
        <small>/Kategori Usia</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">            
               <div class="box-header">  
            <label class="label-control"><h4>Filter Berdasarkan : </h4></label>
               <ul class="pull-right"><a href="<?php echo base_url('pendeta/laporan/laporan_skm');?>" class="btn btn-primary" style="background-color: ; color: white;"><span class="glyphicon glyphicon-save fa fa-print"></span> Print </a>
               </ul>   

               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/laporan'?>" style="background-color: darkcyan; color: white;">Ama</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/laporan/ina'?>" style="background-color: darkcyan; color: white;">Ina</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/laporan/naposo'?>" style="background-color: darkcyan; color: white">Naposo</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/laporan/remaja'?>" style="background-color: darkcyan; color: white;">Remaja</a>
               <a class="btn btn-flat" href="<?php echo base_url().'pendeta/laporan/skm'?>" style="background-color: lightcyan; color: black;">Sekolah Minggu</a>
               <a class="btn btn-success btn-flat" href="<?php echo base_url().'pendeta/laporan/lansia'?>" style="background-color: darkcyan; color: white">Lansia</a>
             </div>

           <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tempat/Tgl Lahir</th>
                    <th>Alamat</th>
                    <th>No.Telepon</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Umur</th>
                 </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    foreach ($data->result_array() as $i) :
                       $no++;
                       $id=$i['jemaat_id'];
                       $nokk=$i['jemaat_nokk'];
                       $nama=$i['jemaat_nama'];
                       $jenkel=$i['jemaat_jenkel'];
                       $tmptlahir=$i['jemaat_tmptlahir'];
                       $tgllahir=$i['jemaat_tgllahir'];
                       $lahir_new= date('d F Y', strtotime($tgllahir));
                       $tgltardidi=$i['jemaat_tgltardidi'];
                       $tardidi_new= date('d F Y', strtotime($tgltardidi));
                       $tglmalua=$i['jemaat_tglmalua'];
                       $malua_new= date('d F Y', strtotime($tglmalua));
                       $pendidikan=$i['jemaat_pendidikan'];
                       $pekerjaan=$i['jemaat_pekerjaan'];
                       $status=$i['jemaat_statuskel'];
                       $notelp=$i['jemaat_notelp'];
                       $nourutkk=$i['jemaat_nourutkk'];
                       $lingkungan_nama=$i['lingkungan_nama'];
                       $alamat=$i['kk_alamat'];
                       $flag_id=$i['jemaat_flag_id'];
                       $flag_nama=$i['flag_nama'];
                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $nama;?></td>
                  <td><?php echo $tmptlahir.', '.$tgllahir;?></td>
                  <td><?php echo $alamat.', Lk-'.$lingkungan_nama;?></td>
                  <td><?php echo $notelp;?></td>
                  <td><?php echo $pendidikan;?></td>
                  <td><?php echo $pekerjaan;?></td>
                  <td><?php
                  $tanggal_lahir = new DateTime($tgllahir);
                  $sekarang = new DateTime("today");
                  if ($tanggal_lahir > $sekarang) { 
                    $thn = "0";
                    $bln = "0";
                    $tgl = "0";
                  }
                  $thn = $sekarang->diff($tanggal_lahir)->y;
                  $bln = $sekarang->diff($tanggal_lahir)->m;
                  $tgl = $sekarang->diff($tanggal_lahir)->d;
                  echo $thn." tahun ".$bln." bulan ".$tgl." hari";
                  ?>                 
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
<!-- --------------------------------------------------------END ------------------------------------------------------->


<!--  ----------------------------------------------------START LAPORAN ------------------------------------------ -->

    <!-- Main content -->
    <section class="content-header">
      <h3>
        <span class="fa fa-filter"></span> Filter Data Berdasarkan :
      </h1>
    </section>

    <section class="content">
      <div class="row">

         <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

              <!------------------------------------------------------- START ---------------------------------------------------->
             <div class="col-md-6">
               <!-- <div class="box-header">   -->
                <form class="form-horizontal" action="<?php echo base_url().'pendeta/laporan/laporan_jemaat'?>" method="post" enctype="multipart/form-data"> 
                  <div class="col-xs-6" style="margin-top:;">
                    <span style="font-size: 17px;"><b>Lingkungan</b></span>
                    <select name="xlingkungan" class="form-control">
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($lingkungan->result_array() as $k) {
                                                  $id=$k['lingkungan_id'];
                                                  $nama=$k['lingkungan_nama'];
                                                  $jalan=$k['lingkungan_jalan'];
                                            ?>
                                            <option value="<?php echo $id;?>"><?php echo $nama;?> - <?php echo $jalan;?></option>
                                            <?php } ?>
                    </select>
                  </div>
                  
                  <button type="submit" class="btn btn-primary" id="simpan" style="background-color: ; color: white; margin-top: 25px; "> <span class="glyphicon glyphicon-save fa fa-print"></span> Print</button>

               </form>
             </div>

             <div class="col-md-6">
             <!-- <div class="box-header"> -->
                <form class="form-horizontal" action="<?php echo base_url().'pendeta/laporan/laporan_kk'?>" method="post" enctype="multipart/form-data"> 
                  <div class="col-xs-6" style="margin-top:;">
                    <span style="font-size: 15px;"><b>Kepala Keluarga</b></span>
                    <select name="xkk" class="form-control">
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kk->result_array() as $k) {
                                                  $id=$k['kk_id'];
                                                  $nama=$k['kk_username'];
                                            ?>
                                            <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                                            <?php } ?>
                    </select>
                  </div>
                  
                  <button type="submit" class="btn btn-primary" id="simpan" style="background-color:; color: white; margin-top: 25px; "> <span class="glyphicon glyphicon-save fa fa-print"></span> Print</button>

               </form>
             </div>

            <div class="box-body">
            </div>
          </div>
        </div>
      </div>

      <!-- ----------------------------------------------------------------  END ----------------------------------------->


      <!-- ----------------------------------------------------------------  START ----------------------------------------->
      <!-- 1 -->
        <div class="col-xs-4">
            <span><h4>Data Kelahiran</h4></span>
          <div class="box">
            <div class="box-header">
             <div class="col-md-12">
              <div class="box-header">
               <img src="<?=base_url()?>theme/icon/baby.png" alt="img" class="img-fluid" style="width: 80px;margin-top:;margin-bottom:; margin-left:130px;">
               </div>
                <form class="form-horizontal" action="<?php echo base_url().'pendeta/laporan/laporan_kelahiran'?>" method="post" enctype="multipart/form-data"> 
                  <div style="margin-top:">
                   

                    <span style="font-size: xx-small;">Dari Tanggal :</span>
                   <input class="form-control" type="date" name="xtglawal" placeholder="Tanggal Awal"requiredd>

                   <span style="font-size: xx-small;">Hingga Tanggal :</span>
                    <input class="form-control" type="date" name="xtglakhir" placeholder="Tanggal Akhir"requiredd>

                    <ul>
                     <div>
                       <button type="submit" class="btn-primary" id="simpan" style="background-color: ; color: white; margin-top: 25px;margin-left:; width: 280px;">Download</button>
                     </div>
                    </ul> 

                  </div>                        
                  </form>
                </div>
           
          </div>
        </div>
      </div>


      <!-- 2 -->
        <div class="col-xs-4">
            <span><h4>Data Tardidi</h4></span>
          <div class="box">
            <div class="box-header">
             <div class="col-md-12">
              <div class="box-header">
               <img src="<?=base_url()?>theme/icon/church.png" alt="img" class="img-fluid" style="width: 80px;margin-top:;margin-bottom:; margin-left:130px;">
               </div>
                <form class="form-horizontal" action="<?php echo base_url().'pendeta/laporan/laporan_datatardidi'?>" method="post" enctype="multipart/form-data"> 
                  <div style="margin-top:">
                   

                    <span style="font-size: xx-small;">Dari Tanggal :</span>
                   <input class="form-control" type="date" name="xtglawal" placeholder="Tanggal Awal"requiredd>

                   <span style="font-size: xx-small;">Hingga Tanggal :</span>
                    <input class="form-control" type="date" name="xtglakhir" placeholder="Tanggal Akhir"requiredd>

                    <ul>
                     <div>
                       <button type="submit" class="btn-primary" id="simpan" style="background-color: ; color: white; margin-top: 25px;margin-left:; width: 280px;">Download</button>
                     </div>
                    </ul> 

                  </div>                        
                  </form>
                </div>
           
          </div>
        </div>
      </div>

      <!-- 3 -->
        <div class="col-xs-4">
            <span><h4>Data Malua</h4></span>
          <div class="box">
            <div class="box-header">
             <div class="col-md-12">
              <div class="box-header">
               <img src="<?=base_url()?>theme/icon/validation.png" alt="img" class="img-fluid" style="width: 80px;margin-top:;margin-bottom:; margin-left:130px;">
               </div>
                <form class="form-horizontal" action="<?php echo base_url().'pendeta/laporan/laporan_datasidi'?>" method="post" enctype="multipart/form-data"> 
                  <div style="margin-top:">
                   

                  <span style="font-size: xx-small;">Dari Bulan :</span>
                   <select class="form-control" name="xbulan">
                            <option>Pilih Bulan</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                   </select>


                   <span style="font-size: xx-small;">Hingga Tanggal :</span>
                    <!-- <input class="form-control" type="date" name="xtglakhir" placeholder="Tanggal Akhir"requiredd> -->
                    <select class="form-control" name="xtahun">
                            <option>Pilih Tahun</option>
                            <?php
                                for ($tahun=2020;$tahun<=2025;$tahun++)
                                      {
                                       echo  '<option value="'.$tahun.'">'.$tahun.'</option>';
                                      }
                            ?>
                    </select>


                    <ul>
                     <div>
                       <button type="submit" class="btn-primary" id="simpan" style="background-color: ; color: white; margin-top: 25px;margin-left:; width: 280px;">Download</button>
                     </div>
                    </ul> 

                  </div>                        
                  </form>
                </div>
           
          </div>
        </div>
      </div>


      <!-- 4 -->
        <div class="col-xs-4">
            <span><h4>Data Jemaat Menikah</h4></span>
          <div class="box">
            <div class="box-header">
             <div class="col-md-12">
              <div class="box-header">
               <img src="<?=base_url()?>theme/icon/wedding-bells.png" alt="img" class="img-fluid" style="width: 80px;margin-top:;margin-bottom:; margin-left:130px;">
               </div>
                <form class="form-horizontal" action="<?php echo base_url().'pendeta/laporan/laporan_jmenikah'?>" method="post" enctype="multipart/form-data"> 
                  <div style="margin-top:">
                   

                    <span style="font-size: xx-small;">Dari Tanggal :</span>
                   <input class="form-control" type="date" name="xtglawal" placeholder="Tanggal Awal"requiredd>

                   <span style="font-size: xx-small;">Hingga Tanggal :</span>
                    <input class="form-control" type="date" name="xtglakhir" placeholder="Tanggal Akhir"requiredd>

                    <ul>
                     <div>
                       <button type="submit" class="btn-primary" id="simpan" style="background-color: ; color: white; margin-top: 25px;margin-left:; width: 280px;">Download</button>
                     </div>
                    </ul> 

                  </div>                        
                  </form>
                </div>
           
          </div>
        </div>
      </div>

      <!-- 5 -->
        <div class="col-xs-4">
            <span><h4>Data Jemaat Pindah</h4></span>
          <div class="box">
            <div class="box-header">
             <div class="col-md-12">
              <div class="box-header">
               <img src="<?=base_url()?>theme/icon/dismissal.png" alt="img" class="img-fluid" style="width: 80px;margin-top:;margin-bottom:; margin-left:130px;">
               </div>
                <form class="form-horizontal" action="<?php echo base_url().'pendeta/laporan/laporan_jpindah'?>" method="post" enctype="multipart/form-data"> 
                  <div style="margin-top:">
                   

                    <span style="font-size: xx-small;">Dari Tanggal :</span>
                   <input class="form-control" type="date" name="xtglawal" placeholder="Tanggal Awal"requiredd>

                   <span style="font-size: xx-small;">Hingga Tanggal :</span>
                    <input class="form-control" type="date" name="xtglakhir" placeholder="Tanggal Akhir"requiredd>

                    <ul>
                     <div>
                       <button type="submit" class="btn-primary" id="simpan" style="background-color: ; color: white; margin-top: 25px;margin-left:; width: 280px;">Download</button>
                     </div>
                    </ul> 

                  </div>                        
                  </form>
                </div>
           
          </div>
        </div>
      </div>

      <!-- 6 -->
        <div class="col-xs-4">
            <span><h4>Data Jemaat Meninggal Dunia</h4></span>
          <div class="box">
            <div class="box-header">
             <div class="col-md-12">
              <div class="box-header">
               <img src="<?=base_url()?>theme/icon/tombstone.png" alt="img" class="img-fluid" style="width: 80px;margin-top:;margin-bottom:; margin-left:130px;">
               </div>
                <form class="form-horizontal" action="<?php echo base_url().'pendeta/laporan/laporan_data'?>" method="post" enctype="multipart/form-data"> 
                  <div style="margin-top:">
                   

                    <span style="font-size: xx-small;">Dari Tanggal :</span>
                   <input class="form-control" type="date" name="xtglawal" placeholder="Tanggal Awal"requiredd>

                   <span style="font-size: xx-small;">Hingga Tanggal :</span>
                    <input class="form-control" type="date" name="xtglakhir" placeholder="Tanggal Akhir"requiredd>

                    <ul>
                     <div>
                       <button type="submit" class="btn-primary" id="simpan" style="background-color: ; color: white; margin-top: 25px;margin-left:; width: 280px;">Download</button>
                     </div>
                    </ul> 

                  </div>                        
                  </form>
                </div>
           
          </div>
        </div>
      </div>



    </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<!-- --------------------------------------------------------END ------------------------------------------------------->





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


  <!--Modal Edit Album-->
  
  
  <!--Modal Edit Album-->


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

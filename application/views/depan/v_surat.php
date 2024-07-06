<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HKBP II - Surat Pengantar</title>
  <link rel="shorcut icon" href="<?php echo base_url().'theme/images/HKBP2.png'?>">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
  <!-- Simple Line Font -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
  <!-- Image Hover CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/normalize.css'?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/set2.css'?>" />

  <!-- Masonry Gallery -->
  <link href="<?php echo base_url().'theme/css/animated-masonry-gallery.css'?>" rel="stylesheet" type="text/css" />
  <!-- Main CSS -->
  <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
  <!--============================= HEADER =============================-->
  <?php
    $this->load->view('depan/v_header');
  ?>
<!--//END HEADER -->


<!--=================================================== SURAT KETERANGAN  ===============================================-->
 <div class="gallery-wrap">
       <div class="row">
        <div class="col-md-12">
          <h2 class="gallery-style">Daftar Surat Pengantar</h2>
          <p class="separator" style="text-align: center;margin-top:-20px;">Berikut Daftar Surat Pengantar yang dapat diurus oleh Jemaat Gereja</p>
        </div>
      </div>
 </div>

 <section id="get-started" class="padd-section text-center wow fadeInUp">
   <div class="containers">
    <div class="row" style="margin-top:20px;">

      <div class="col-md- col-lg-4 mb-5">
        <div class="feature-block">
          <a href="<?=base_url("surat/surat_kelahiran")?>"><img src="<?=base_url()?>assets/icon/about-img.png" alt="img" class="img-fluid" style="width: 200px;"></a>
          <a href="<?=base_url("surat/surat_kelahiran")?>"><h4><br>Surat Pengantar<br/>" Kelahiran "</h4></a>          
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-5">
        <div class="feature-block">
          <a href="<?=base_url("surat/surat_tardidi")?>"><img src="<?=base_url()?>assets/icon/analytics.png" alt="img" class="img-fluid" style="width: 200px;"></a>
          <a href="<?=base_url("surat/surat_tardidi")?>"><h4><br>Surat Pengantar <br/>" Marguru Tardidi "</h4></a>          
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-5">
        <div class="feature-block">
          <a href="<?=base_url("surat/surat_sidi")?>"><img src="<?=base_url()?>assets/icon/analytics.png" alt="img" class="img-fluid" style="width: 200px;"></a>
          <a href="<?=base_url("surat/surat_sidi")?>"><h4><br>Surat Pengantar <br/>" Marguru Mangatindagkon <br> Haporseaon "</h4></a>
        </div>
      </div>


      <div class="col-md-6 col-lg-6 mb-5">
        <div class="feature-block">
          <a href="<?=base_url("surat/surat_jpindah")?>"><img src="<?=base_url()?>assets/icon/info.png" alt="img" class="img-fluid" style="width: 200px;"></a>
          <a href="<?=base_url("surat/surat_jpindah")?>"><h4><br>Surat Pengantar <br/>" Pindah Keanggota Jemaat "</h4></a>          
        </div>
      </div>

      <div class="col-md-6 col-lg-6 mb-5">
        <div class="feature-block">
          <a href="<?=base_url("surat/surat_jmenikah")?>"><img src="<?=base_url()?>assets/icon/analytics.png" alt="img" class="img-fluid" style="width: 200px;"></a>
          <a href="<?=base_url("surat/surat_jmenikah")?>"><h4><br>Surat Pengantar <br/>" Hendak Menikah "</h4></a>          
        </div>
      </div>


    </div>
   </div>
 </section>

<!--=================================================== END/SURAT KETERANGAN  ===============================================-->


<!--============================= FOOTER =============================-->
<?php
    $this->load->view('depan/v_footer');
  ?>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>

    <script src="<?php echo base_url().'theme/js/jquery-ui-1.10.4.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/jquery.isotope.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/animated-masonry-gallery.js'?>"></script>
    <!-- Magnific popup JS -->
    <script src="<?php echo base_url().'theme/js/jquery.magnific-popup.js'?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>

  </body>

  </html>
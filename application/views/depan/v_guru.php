<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HKBP II - Parhalado</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/HKBP2.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
<!--============================= STYLE =============================-->
<style type="text/css">
    html,body{
        padding: 0;
        margin:0;
        font-family: sans-serif;
    }
 
    .menu-navbar{
        background-color: black;
    }
 
    .navbar-nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
 
    .navbar-nav > ul > li {
        float:right;
    }
 
    
    .navbar-nav li a {
        display: block;
        color: white;
        text-align: center;
        text-decoration: none;
    }
 
    .navbar-nav li a:hover{
        background-color: white;
        color : black;
    }
 
    li.dropdown {
        display: block;
        list-style: none;

    }
 
    .dropdown:hover .isi-dropdown {
        display: block;
        list-style: none;
        text-align: center; 

    }
 
    .isi-dropdown a:hover {
        color: #fff !important;
        text-align: center;
        list-style: none;
    }
 
    .isi-dropdown {
        position: absolute;
        display: none;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        list-style: none;
        background-color: #f9f9f9;

    }
 
    .isi-dropdown a {
        color: #3c3c3c !important;
        list-style: none;
    }
 
    .isi-dropdown a:hover {
        color: white !important;
        background: grey !important;
        list-style: none;
    }
</style>



  <!--============================= HEADER =============================-->
  <div class="header-topbar">
      <div class="container">
          <div class="row">
              <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <!--<div class="header-top_list">
                            <span class="icon-phone"></span>+62
                        </div>-->
                        <div class="header-top_list">
                            <span class="icon-home"></span>DISTRIK VI - RESSORT SIDIKALANG II
                        </div>
                        <!--<div class="header-top_list">
                            <span class="icon-envelope-open"></span>info@hkbp2sidikalang
                        </div> -->
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Jl. Damai No. 51 Sidikalang - Kab.DAIRI
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
              </div>
          </div>
      </div>
  </div>
  <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
      <div class="container nav-menu2">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                      <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                          <span class="icon-menu"></span>
                      </button>
                      <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/themahkbp.png'?>"></a>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">Tentang
                                      <span class="fa fa-sort-down" style="font-size:20px; text-align: center;"></span>
                                    </a>
                                    <ul class="isi-dropdown">
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Sejarah HKBP II</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('guru');?>">Parhalado</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Jadwal</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Tingting</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="nav-link" href="<?php echo site_url('#');?>">Koinonia
                                      <span class="fa fa-sort-down" style="font-size:20px; text-align: center;"></span>
                                    </a>
                                    <ul class="isi-dropdown">
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Sekolah Minggu</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Remaja</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Naposo</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Ina</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Ama</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('about');?>">Lansia</a></li>

                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="nav-link" href="<?php echo site_url('#');?>">Marturia
                                      <span class="fa fa-sort-down" style="font-size:20px; text-align: center;"></span>
                                    </a>
                                    <ul class="isi-dropdown">
                                        <li><a class="nav-link" href="<?php echo site_url('siswa');?>">Zending</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('siswa');?>">Musik</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="nav-link" href="<?php echo site_url('#');?>">Diakonia
                                      <span class="fa fa-sort-down" style="font-size:20px; text-align: center;"></span>
                                    </a>
                                    <ul class="isi-dropdown">
                                        <li><a class="nav-link" href="<?php echo site_url('blog');?>">Sosial</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('blog');?>">Pendidikan</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('blog');?>">Kesehatan</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('blog');?>">Kemasyarakatan</a></li>

                                    </ul>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>

                               <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact');?>">Layanan</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">DIAKONIA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li>-->
                               
                                <!--<li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                                </li> -->
                             </ul>
                        </div>
                    </nav>
              </div>
            </div>
          </div>
        </div>
    <section>
</section>
<!--//END HEADER -->

    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Parhalado HKBP Sidikalang II</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="admission_insruction">
                          <?php if(empty($row->guru_photo)):?>
                            <img src="<?php echo base_url().'assets/images/blank.png';?>" class="img-fluid" alt="#">
                          <?php else:?>
                            <img src="<?php echo base_url().'assets/images/'.$row->guru_photo;?>" class="img-fluid" alt="#">
                          <?php endif;?>
                            <p class="text-center mt-3"><span><?php echo $row->guru_nama;?></span>
                                <br>
                                <?php echo $row->guru_mapel;?></p>
                        </div>
                    </div>
                <?php endforeach;?>
              </div>
            <!-- End row -->
            <nav><?php echo $page;?></nav>
        </div>
    </section>

    <!--//End Style 2 -->
    <!--============================= FOOTER =============================-->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/HKBP2.png'?>" class="img-fluid"  width="160px;" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by <a href="http://mfikri.com" target="_blank">Steffanny Putri</a> <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Beranda</a></li>
                            <li><a href="<?php echo site_url('about');?>">Tentang</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">KOINONIA </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">MARTURIA</a></li>
                            <li><a href="<?php echo site_url('contact');?>">DIAKONIA</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                  <div class="sitemap">
                      <h3>Sub Menu</h3>
                      <ul>
                          <li><a href="<?php echo site_url('guru');?>">Parhalado</a></li>
                          <!--<li><a href="<?php echo site_url('siswa');?>">Siswa </a></li>-->
                          <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                          <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p>
                        <span class="icon-location-pin"> Alamat: Jl. Damai No. 51 Sidikalang - Kab. DAIRI</span> <br><br>
                        <span class="icon-envelope-open"> Email : hkbpsdk2@gmail.com</span><br><br>
                        <span class="icon-phone"> Phone : (021) </span></p>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
    <!-- Script JS -->
    <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
</body>

</html>

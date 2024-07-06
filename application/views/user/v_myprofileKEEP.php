<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HKBP II - My Profile</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/HKBP2.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">


</head>

<body>
    <!--============================= HEADER =============================-->
    <?php
    $this->load->view('user/v_header');
  ?>
   <!--============================= END HEADER =============================-->
                    <?php
                        $id_admin=$this->session->userdata('idadmin');
                        $q=$this->db->query("SELECT tbl_pengguna.*, tbl_jemaat.*,IF(jemaat_jenkel='L','Laki-Laki','Perempuan') AS jenkel, tbl_kk.*
                         FROM tbl_pengguna JOIN tbl_jemaat
                         ON tbl_pengguna.pengguna_jemaat_id=tbl_jemaat.jemaat_id
                         INNER JOIN tbl_kk
                         ON tbl_jemaat.jemaat_nokk=tbl_kk.kk_id
                         WHERE pengguna_id='$id_admin'");
                        $c=$q->row_array();
                    ?>

<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <!-- <h2>Sejarah Singkat HKBP Sidikalang II</h2> -->
                <h2>My Profile , <b><?php echo $c['pengguna_nama'];?></b> <hr></h2>

                <table>
                    <thead style="font-size:20px;">
                        <tr>
                            <td>ID Jemaat</td>
                            <td> : </td>
                            <td><b><?php echo $c['pengguna_jemaat_id'];?></b></td>
                        </tr>

                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><?php echo $c['pengguna_nama'];?></td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td> : </td>
                            <td><?php echo $c['pengguna_username'];?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td> : </td>
                            <td><?php echo $c['pengguna_email'];?></td>
                        </tr>

                        <tr>
                            <td>Jenis Kelamin</td>
                            <td> : </td>
                            <td><?php echo $c['jenkel'];?></td>
                        </tr>

                        <tr>
                            <td>Tempat/Tgl.Lahir</td>
                            <td> : </td>
                            <td><?php echo $c['jemaat_tmptlahir'].','.$c['jemaat_tgllahir'];?></td>
                        </tr>

                        <tr>
                            <td>No. Telepon</td>
                            <td> : </td>
                            <td><?php echo $c['jemaat_notelp'];?></td>
                        </tr>

                        <tr>
                            <td><br></td>
                        </tr>

                        <tr>
                            <td>ID Keluarga</td>
                            <td> : </td>
                            <td><b><?php echo $c['jemaat_nokk'];?></b></td>
                        </tr>

                        <tr>
                            <td>Nama Keluarga</td>
                            <td> : </td>
                            <td><?php echo $c['kk_username'];?></td>
                        </tr>

                        <tr>
                            <td>Status Keluarga</td>
                            <td> : </td>
                            <td>Sebagai <?php echo $c['jemaat_statuskel'];?></td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td> : </td>
                            <td><?php echo $c['kk_alamat'].',Lk- '.$c['kk_lingk_id'];?></td>
                        </tr>



                    </thead>
                </table>

                <!-- <p><span>Nama     : <input type="text" name="" value="<?php echo $c['pengguna_nama'];?>"></span>  </p> -->
                


                <!-- <p style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;Gereja HKBP Sidikalang II terletak di Jl.Damai No.51 Sidikalang, Kab.DAIRI. Bermula dari adanya kerinduan jemaat untuk berdoa dan memuliakan nama Tuhan, para Parhalado gereja membuat partangiangan (Perkumpulan Doa) disekitaran gereja yaitu pada jalan Trikora, Pekan, Sekolah, Kalasen, Boang, Pakpak Ujung dan Kalang baru. St.A.Lumbangaol, St.M.Silalahi, St.M.Nainggolan, St.J.Sianturi dengan senang hati bersedia untuk memimpin partangiangan tersebut di rumah jemaat. Tentunya perkumpulan partangiangan kurang lengkap dan tidak meriah jika tidak adanya Nyanyian-nyanyian Pujian untuk memuliakan nama Tuhan, maka dengan itu Bpk B.Panjaitan mengusulkan pembentukan Koor untuk setiap partangiangan lingkungan.
                <br> &nbsp;&nbsp;&nbsp;&nbsp;Pada tanggal 17 oktober 1976, dilaksanakan Peletakan Batu Pertama untuk Pembangunan Gereja yang beralamat di Jl.Trikora, yang diresmikan oleh Praeses Pdt. F. Manalu dengan dukungan semangat dari Bupati KDH Tk.II. Dairi Drs.M.T.Pardede. Seiring perjalanan tahun ke tahun segala pelayanan dan kegiatan yang dilakukan oleh HKBP Sidikalang II telah sesuai dengan harapan, dengan begitu pada tanggal 20 oktober 1985, jemaat beserta Parhalado mengusulkan untuk mengembangkan gereja menjadi Ressort. Dengan segala keputusan yang telah dilakukan bersama, maka dengan itu huria HKBP Sidikalang II melakukan persiapan menjadi Ressort. Dan mulai saat itu hanya HKBP Huta Raja yang menjadi pagaran dari Ressort HKBP II hingga Juli 2021.
                <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada tanggal 7 Juli 1985, Gereja HKBP Sidikalang II resmi menjadi Ressort yang diresmikan oleh Bapak Praeses Distrik Dairi Pdt.S.B.Siregar, tidak ada pesta yang dilaksanakan pada tanggal tersebut. Tetapi di tanggal 20 Oktober 1985 lah diadakan pesta peresmian sekaligus peletakan batu pertama. Oleh karena Kasih Karunia Allah yang  memberikan sukacita terhadap segala pelayanan yang dilakukan oleh huria sehingga dapat melaksanakan ulang tahun/jubileum 25 tahun HKBP Sidikalang II yang dilaksanakan pada tanggal 21 oktober 2001. Dari hasil pesta Jubileum tersebut maka adanya kesepakatan untuk mendirikan Pendidikan PAUD – TK HKBP Sidikalang mulai Tahun Ajaran 2002/2003 yang dipimpin oleh Diakones Ristauli Br.Sianturi. 
                </p> -->
                </div>
                <div class="col-md-5">
                    <!-- <img src="<?php echo base_url().'theme/images/gereja.png'?>" class="img-fluid" alt="#"> -->
                    <img src="<?php echo base_url().'assets/images/'.$c['pengguna_photo'];?>" class="user-image" alt="">
                    <h4 style="text-align: center;">
                        <span class="hidden-xs"><br><b><?php echo $c['pengguna_nama'];?></b></span>
                        </h4>
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= TESTIMONIAL =============================-->
   <!--  <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonial</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">MSCHOOL benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan MSCHOOL dan menjadi siswa terbaik tahun 2018.</p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-1.png'?>" class="img-fluid" alt="#">
                                <p><span>Hernandez Alvaro</span>Siswa Terbaik 2018</p>
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">MSCHOOL benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan MSCHOOL dan menjadi siswa terbaik tahun 2017. </p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-2.png'?>" class="img-fluid" alt="#">
                                <p><span>Elanoar Rigby</span>Siswa Terbaik 2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--//END TESTIMONIAL -->

    <!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_parhalado;?></span> Parhalado
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_kk;?></span> Kepala Keluarga
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_jemaat;?></span> Jemaat
                    </p>
                </div>
            </div>
            <!--<div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_files;?></span> Download
                    </p>
                </div>
            </div>-->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_4.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda;?></span> Agenda</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END DETAILED CHART -->

    <!--============================= FOOTER =============================-->
    <?php
    $this->load->view('user/v_footer');
  ?>
   <!--============================= END FOOTER =============================-->
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

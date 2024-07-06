<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HKBP II - Welcome to HKBP Resort Sidikalang II</title>
        <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/UNIKA1.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>

</head>

<body>
<!--============================= STYLE =============================-->
<style>
    #navigation {
          background:  #F5F5F5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, white, #FFE4C4);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left,  #F5F5F5,  #F8F8FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #header {

            background: #F5F5F5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, white, #FAEBD7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, white, white); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #top-header {


            background: #F5F5F5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,white,#FAEBD7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, black, black); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #000000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #000000, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: white;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {

            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }

        .glyphicon{
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }

    #Modal_welcome{
        display: flex;
        /* width: 50% ; */
        overflow: hidden;
        justify-content : center;
        text-align : center;
        align-items: center;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 15px;

        p{
            font-size:15px;
        }

        blockquote {
            background-color: #638889;
            color: #fff;
            border-radius: 10px;
            max-height: 150px;
        }
    }

    #Modal_welcome .modal-content {
        overflow: auto;
        background-color: #F7DCB9;
        height: auto;
        border-radius: 15px;

    }

    .modal-body img {
        width: 30%;
        margin-top: 0;
        vertical-align: middle;
        display: block;
        margin: 0 auto;
    }

    @media(max-width: 600) {
        #Modal_welcome {
            width: 50%;
        }
    }

    .button {
        padding: 3px 25px;
        font-size: 15px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #638889;
        border: none;
        border-radius: 10px;
        box-shadow: 0 2px #AF8F6F;
    }
    .button:hover {background-color: #ECB176}
    .button:active {
        background-color: #ECB176;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>

<!--============================= END STYLE =============================-->

    <!--============================= HEADER =============================-->
    <?php
$this->load->view('depan/v_header');
?>
   <!--============================= END HEADER =============================-->
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
                <li data-target="#carousel" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                   <img class="d-block" src="<?php echo base_url() . 'theme/images/boho1.gif' ?>" style="height: 540px;" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <div class="new">
                            </div>
                            <h1 style="color: white; font-family:square721 bt; margin-bottom:10px;"><b>Selamat Datang di Website</b></h1>
                            <h2 style="color: skyblue; font-family:square721 bt;margin-bottom:20px;"><b>HKBP Ressort Sidikalang II</b></h2>
                            <h5 style="font-family:Palatino Linotype; color: white"><b>Ibrani 11 : 1</b><br>
                            Iman adalah dasar dari segala sesuatu yang kita harapkan <br> dan bukti dari segala sesuatu yang tidak kita lihat</h5>

                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'theme/foto/parhalado.png' ?>" alt="Second slide" >
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <div class="new">
                            </div>
                            <h1></h1>
                            <h2 style="font-family:Cooper;"><b>Parhalado</b></h2>
                            <h5 style="font-family:Palatino Linotype;"><b>Korintus 15:58</b><br>
                            Karena itu, saudara-saudaraku yang kekasih, berdirilah teguh,jangan goyah, dan giatlah selalu <br>dalam pekerjaan Tuhan! Sebab kamu tahu, bahwa dalam persekutuan dengan Tuhan jerih payahmu tidak sia-sia</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'theme/foto/nh.png' ?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <div class="new">
                            </div>
                            <h1></h1>
                            <h2 style="font-family:Cooper;"><b>Naposo Bulung</b></h2>
                            <div class="new">
                            </div>
                            <h5 style="font-family:Palatino Linotype;"><b>Amsal 16:3</b><br>
                             Serahkanlah perbuatanmu kepada TUHAN, maka terlaksanalah segala rencanamu</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'theme/foto/eli.png' ?>" alt="Forth slide" >
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <div class="new">
                            </div>
                            <h2><br></h2>
                            <h2 style="font-family:Cooper;"><b>Eliezer</b></h2>
                            <h5 style="font-family:Palatino Linotype;"><b>Amsal 3:5-6</b><br>
                            Percayalah kepada TUHAN dengan segenap hatimu, dan janganlah bersandar kepada pengertianmu sendiri.<br>Akuilah Dia dalam segala lakumu, maka Ia akan meluruskan jalanmu</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row"s>
            <div class="col-md-8">
            <blockquote>
                <h2 style="font-family: MV Boli; color: white;">Ayat Bulanan</h2>
               Sebab Aku ini mengetahui rancangan-rancangan apa yang ada pada-Ku mengenai kamu,demikianlah firman Tuham yaitu rancangan damai sejahtera dan bukan rancangan kecelakaan, untuk memberikan kepadamu hari depan yang penuh harapan.
               <br>(Yeremia 29:11)
           </blockquote>
            </div>

            <div class="col-md-4">
                <a href="<?=base_url("sejarahgereja")?>"><img src="<?php echo base_url() . 'theme/images/hkbpsdk2.png' ?>" class="img-fluid about-img" alt="#"> </a>
            </div>


        </div>
    </div>
</section>
<!--//END ABOUT -->

<!-- MODAL WELCOME -->
    <?php
date_default_timezone_set('Asia/Jakarta');
$waktu_sekarang = date('H:i');
$reminder_query = $this->db->query("SELECT ket FROM tbl_reminder WHERE time_reminder <= '$waktu_sekarang' AND end_reminder >= '$waktu_sekarang' AND status_reminder = 'Y'");
$reminder = $reminder_query->row();
$keterangan = !empty($reminder) ? $reminder->ket : '';
?>

    <div class="modal fade" id="Modal_welcome" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="<?php echo base_url() . 'theme/images/notification.png' ?>">
                    <br>
                    <h4 class="alert-heading"><b>Dear All!</b></h4>
                    <small><i>Jam menunjukkan Pukul</i> <span id="jamSekarang"></span></small>
                    <blockquote>
                        <span id="keterangan"><?php echo $keterangan; ?></span>
                    </blockquote>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button" style="width:100%" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<!-- END MODAL WELCOME -->

<!--============================= Jadwal Ibadah =============================-->
<section>
    <div id='jadwal' class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <!--<h2 style="font-family: Gill Sans MT ;"> Jadwal Ibadah </h2> -->
                <hr>
                <br>
                <h4 style="font-family: Gill Sans MT ; text-align: center;"><b> Jadwal Ibadah di Gereja HKBP Ressort Sidikalang II </b></h4><br>
                <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th style="width:500px;text-align: center;"> Ibadah</th>
                    <th style="width:300px;text-align: center;">Hari</th>
                    <th style="width:500px;text-align: center;">Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    <?php
foreach ($jadwalibadah->result_array() as $i):
    $jadwal_ibadah_id = $i['jadwal_ibadah_id'];
    $nama_ibadah = $i['nama_ibadah'];
    $ibadah_tanggal = $i['ibadah_tanggal'];
    $ibadah_waktu = $i['ibadah_waktu'];
    $ibadah_keterangan = $i['ibadah_keterangan'];
    $tanggal = date('d F', strtotime($ibadah_tanggal));
    $hari = date('l', strtotime($ibadah_tanggal));

    $daftar_hari = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu');

    $namahari = date('l', strtotime($ibadah_tanggal));

    ?>																																																																																																																																												                <?php
endforeach;
?>

                </tbody>
              </table>
            </div>
            </div>
        </div>
    </div>
</section>
<!--//END Jadwal Ibadah -->

<!--============================= Jadwal Petugas =============================-->
<section>
    <div id='jadwal' class="container">
        <div class="row">
            <div class="col-md-12">
                <!--<h2 style="font-family: Gill Sans MT ;"> Jadwal Petugas </h2> -->
                <hr>
                <br>
                <h4 style="font-family: Gill Sans MT ; text-align: center;"><b> Namanghobasi Parmingguon Umum </b></h4><br>
                <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th style="width:200px;text-align: center;"> PELAYAN </th>
                    <th style="width:500px;text-align: center;"> Gelombang I <br>(Pkl.08.30-09.15 Wib)</th>
                    <th style="width:300px;text-align: center;"> Gelombang II <br>(Pkl.10.00-11.15 Wib)</th>
                    <th style="width:500px;text-align: center;"> Gelombang III <br>(Pkl.11.30-12.30 Wib)</th>
                </tr>
                </thead>
                <tbody>
                    <?php
foreach ($jadwalpetugas->result_array() as $i):
    $petugas = $i['petugas_id'];
    $tanggal = $i['petugas_tgl'];
    $tanggal_new = date('d F Y', strtotime($tanggal));
    $jamita1 = $i['petugas_jamita1'];
    $jamita2 = $i['petugas_jamita2'];
    $jamita3 = $i['petugas_jamita3'];
    $agenda1 = $i['petugas_agenda1'];
    $agenda2 = $i['petugas_agenda2'];
    $agenda3 = $i['petugas_agenda3'];
    $tingting1 = $i['petugas_tingting1'];
    $tingting2 = $i['petugas_tingting2'];
    $tingting3 = $i['petugas_tingting3'];
    $pelean1 = $i['petugas_pelean1'];
    $pelean2 = $i['petugas_pelean2'];
    $pelean3 = $i['petugas_pelean3'];
    $balkon1 = $i['petugas_balkon1'];
    $balkon2 = $i['petugas_balkon2'];
    $balkon3 = $i['petugas_balkon3'];
    $dlmgereja1 = $i['petugas_dlmgereja1'];
    $dlmgereja2 = $i['petugas_dlmgereja2'];
    $dlmgereja3 = $i['petugas_dlmgereja3'];
    $musik = $i['petugas_musik'];
    $ket = $i['petugas_ket'];

    $daftar_hari = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu');

    $namahari = date('l', strtotime($tanggal));
    ?>																																																																																																																																														                <?php
endforeach;
?>

                </tbody>
              </table>
              <hr>
            </div>
            </div>
        </div>
    </div>
</section>
<!--//END Jadwal Petugas -->


<!--============================= RENUNGAN =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Renungan</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($renungan->result() as $row): ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url() . 'assets/images/' . $row->renungan_gambar; ?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/' . $row->renungan_slug); ?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->renungan_judul; ?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>


    </div>
</section>
<!--//END RENUNGAN -->

<!--============================= VIDEO RENUNGAN =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Video</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($video->result() as $row): ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="mb-8">
                    <div class="">
                        <iframe width="560" height="315" src="<?php echo $row->video_link; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
            </div>
        </div>


    </div>
</section>

<!--//END VIDEO RENUNGAN -->
<!--============================= Tingting Namaragam =============================-->
<section class="event">
    <div class="container">
        <div class="row">

          <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($agenda->result() as $row): ?>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p><?php echo date("d", strtotime($row->agenda_mulai)); ?></p>
                                <span><?php echo date("M. y", strtotime($row->agenda_mulai)); ?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                            <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                            <hr class="event_line">
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="event-img2">
                <?php foreach ($pengumuman->result() as $row): ?>
                <div class="row">
                    <div class="col-sm-3"> <img src="<?php echo base_url() . 'theme/icon/loudspeaker.png' ?>" class="img-fluid" alt="event-img"></div>
                    <div class="col-sm-9"> <h3 style="font-size:20px;"><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h3>
                      <span><?php echo $row->tanggal; ?></span>
                      <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>

                    </div>
                </div>
                <?php endforeach;?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="event-img2">
                <?php foreach ($warta->result() as $row): ?>
                <div class="row">
                    <div class="col-sm-3"> <img src="<?php echo base_url() . 'theme/icon/newspaper.png' ?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                    <div class="col-sm-9"> <h3 style="font-size:20px;"><a href="<?php echo site_url('wartafix'); ?>"><?php echo $row->kategori_warta_nama; ?></a></h3>
                      <span><?php echo $row->wartafix_tgl; ?></span>
                      <p><?php echo limit_words($row->wartafix_isi, 10) . '...'; ?></p>
                    </div><!-- // end .col-sm-7 -->
                </div><!-- // end .row -->
                <?php endforeach;?>
                </div>
            </div>





        </div>
    </div>
</section>
<!--//END Tingting Namargaram -->

<!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_1.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_parhalado; ?></span> Parhalado
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_2.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_kk; ?></span> Kepala Keluarga
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_2.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_jemaat; ?></span> Jemaat
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url() . 'theme/images/chart-icon_4.png' ?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--============================= END DETAILED CHART =============================-->

<!--============================= FOOTER =============================-->
<?php
$this->load->view('depan/v_footer');
?>
    <!--============================= END FOOTER =============================-->

    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>

    <script>
    $(document).ready(function(){
        $('#Modal_welcome').modal('show');
        var now = new Date();
        var jam = now.getHours() + ':' + now.getMinutes();
        $('#jamSekarang').text(jam);
    });
    </script>

    <?php if ($this->session->flashdata('msg') == 'success'): ?>
        echo "<script>
    alert('TERIMA KASIH! Anda Berhasil Mendaftar Akun. Silahkan Login menunggunakan Username dan Password dengan Benar!');
        </script> ";
    <?php else: ?>
    <?php endif;?>

    </body>

    </html>

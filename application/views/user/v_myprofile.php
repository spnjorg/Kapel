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
                        $q=$this->db->query("SELECT tbl_pengguna.*, tbl_jemaat.*,IF(jemaat_jenkel='L','Laki-Laki','Perempuan') AS jenkel, tbl_kk.*, DATE_FORMAT(jemaat_tgllahir,'%d %m %Y') AS tgl_lahir
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
                            <td><?php echo $c['jemaat_tmptlahir'].', '.date('d F Y', strtotime($c['jemaat_tgllahir']));?></td>
                        </tr>

                        <tr>
                            <td>No. Telepon</td>
                            <td> : </td>
                            <td><?php echo $c['jemaat_notelp'];?></td>
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



    <!--============================= DATA KELUARGA =============================-->

<section class="contact" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h3 style="text-align: center;margin-top: -100px;"><b>DATA KELUARGA - <span style="color: brown;"> <?php echo $c['kk_username'];?> </span></b></h3>
                </div>

                <div>
                    <p class="pull-right"> <b>NO. KK : <?php echo $c['jemaat_nokk'];?> </b></p> <br>
                </div>

            </div>
        </div>
                  <tbody>
                    <?php
                      $idkk= $c['jemaat_nokk'];
                      $no=0;

                      include 'koneksikedb.php';

                      $sql1="SELECT jemaat_id,jemaat_nama,jemaat_tmptlahir, jemaat_tgllahir, jemaat_jenkel,jemaat_statuskel,IF(jemaat_jenkel='L','Laki-Laki','Perempuan') AS jenkel FROM tbl_jemaat WHERE jemaat_nokk='$idkk'";
                      $result =  mysqli_query($conn, $sql1);

                      echo "<div class='container'>";
                      echo "<div class='row'>";
                      echo "<div class='col-md-12'>";
                      echo "<div class='table-responsive'>";
                      echo "<table class='table table-striped' id='display'>";

                      echo "<thead>";
                      echo "<tr>";
                      echo "<th>No.</th>";
                      echo "<th>ID Jemaat</th>";
                      echo "<th>Nama</th>";
                      echo "<th>Tempat/Tgl.Lahir</th>";
                      echo "<th>Jenis Kelamin</th>";
                      echo "<th>Status Keluarga</th>";
                      echo "</tr>";

                      while ($data =mysqli_fetch_array($result)) {
                        $no++;
                        echo '<tr>';
                        echo '<td style="width:5px;">'.$no.'</td>';
                        echo '<td style="width:2px;">'.$data['jemaat_id'].'</td>';
                        echo '<td style="width:20px;">'.$data['jemaat_nama'].'</td>';
                        echo '<td style="width:20px;">'.$data['jemaat_tmptlahir'].', '.date('d F Y', strtotime($data['jemaat_tgllahir'])).'</td>';
                        echo '<td style="width:10px;">'.$data['jenkel'].'</td>';
                        echo '<td style="width:10px;text-align:center;">'.$data['jemaat_statuskel'].'</td>';
                        echo '<tr>';
                      }
                      echo '</table>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>'

                     
                    ?>
        </div>
    </section>

    <!--============================= END DATA KELUARGA =============================-->


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

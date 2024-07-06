<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HKBP II - SP Kelahiran</title>
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
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
    
</head>

<body>
  <!--============================= HEADER =============================-->
    <?php
    $this->load->view('depan/v_header');
  ?>
   <!--============================= END HEADER =============================-->


         <!--============================= CEK SURAT =============================-->

<section class="contact" style="margin-bottom:-50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h3><b>Cek Surat</b></h3>
                    <br>
                </div>
            </div>
        </div>


         <div class="form-group col-md-20">
            <form action="<?php echo site_url('surat/cek_suratlahir');?>" method="post">
              <div class="modal-footer">

                <label for="" class="control-label" style="color: dimgray;">Username Anda <span class="text-danger"></span> </label>
                <input type="text" class="form-control" placeholder="Masukkan Username yang telah Anda daftar" name="xusername" required>

                
                <button type="submit" class="btn btn-flat pull-right" id="simpan" style="background-color: saddlebrown; color: white;"> <span class="glyphicon glyphicon-save fa fa-search" ></span> Cek</button>
                </div>



           </form>
       </div>


        <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped" id="display">
                  <thead>
                    <tr>
                      
                      <th style="text-align:center;">Nama Keluarga</th>
                      <th style="text-align:center;">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>

                    <tr>
                     
                      <td style="text-align:center;"><?php echo $row->surat_ayah.' / '.$row->surat_ibu;?></td>
                
                      <?php if($row->surat_status==1):?>
                      <td style="text-align:center;"> Selesai <a href="<?php echo site_url('surat/get_suratkelahiran/'.$row->surat_id);?>" class="btn btn-info pull-right">Download</a></td>
                      <?php else:?>
                      <td style="text-align:center;">Menunggu Konfirmasi</td>
                      <?php endif;?>

                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </section>
    
   <!--============================= END CEK SURAT=============================-->



<section class="contact">
    <div class="container">

         <div class="row">
            <div class="col-md-12">
                <div class="contact-title" style="margin-top:50px;">
                    <h3 style="text-align:center;"><b>Surat Pengantar Kelahiran</b></h3>
                </div>
            </div>
        </div>


    </div>
</section>

   <!--============================= FORM SURAT KETERANGAN =============================-->
   

        <div class="row-center" >
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <br/>

                        <div class="col-xs-12 col-sm-6 col-md-6 contact-option">
                            <form action="<?php echo site_url('admin/surat/simpan_skkelahiran');?>" method="post">
                            <div class="contact-option_rsp">
                                <h3>NA SORANG</h3>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;">Username <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" placeholder="Contoh : keluargakasih123" name="xusername" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;">Nama Ayah <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" placeholder="Name Ayah" name="xnamaayah" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;">Nama Ibu <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" placeholder="Name Ibu" name="xnamaibu" required>
                                    </div>  

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;">Tanggal Lahir <span class="text-danger">*</span> </label>
                                        <input class="form-control" type="date" name="xtgllahir" placeholder="Tanggal Lahir"requiredd> 
                                    </div>

                                    <div class="modal-footer">
                                    </div>
                            </div>
                        </div>


                         <div class="col-xs-12 col-sm-6 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3><br></h3>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;">Jenis Kelamin <span class="text-danger">*</span> </label>
                                        <select class="form-control" name="xjenkel" requiredd>
                                            <option value=" ">-- Pilih--</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;">Alamat <span class="text-danger">*</span> </label>
                                        <input class="form-control" type="text" name="xalamat" placeholder="Alamat" requiredd> 
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;">Lingkungan <span class="text-danger">*</span> </label>
                                        <select class="form-control" name="xlingkungan" requiredd>
                                             <option value="">--Pilih--</option>
                                            <?php
                                                foreach ($lingkungan->result_array() as $k) {
                                                  $id_lingkungan=$k['lingkungan_id'];
                                                  $nm_lingkungan=$k['lingkungan_nama'];
                                                  $jln_lingkungan=$k['lingkungan_jalan'];
                                            ?>
                                            <option value="<?php echo $id_lingkungan;?>"><?php echo $nm_lingkungan;?> - <?php echo $jln_lingkungan;?></option>
                                            <?php } ?>
                                          </select>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-flat pull-right" id="simpan" style="background-color: saddlebrown; color: white;"> <span class="glyphicon glyphicon-save fa fa-save"></span>  SUBMIT</button>
                                    </div>

                            </div>
                        </div> 

                   </form> 

                        <!--============================= CEK SURAT KONFIRMASI SURAT =============================-->

                        
                   <!--============================= END CEK SURAT KONFIRMASI SURAT =============================-->


                        </div>
                    </div>
                </div>
            </div>

   <!--============================= END FORM SURAT KETERANGAN =============================-->


<section class="contact">
    <div class="container">
    </div>
</section>



  <!--============================= FOOTER =============================-->
<?php
    $this->load->view('depan/v_footer');
  ?>
    <!--============================= END FOOTER =============================-->

            <!-- jQuery, Bootstrap JS. -->
            <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>


    <?php if($this->session->flashdata('msg')=='success'):?>
        echo "<script> 
      alert('TERIMA KASIH! PERMINTAAN SURAT KETERANGAN ANDA TELAH MASUK KE SERVER KAMI. DAN AKAN SEGERA DI PROSES. INFORMASI SELANJUTNYA BISA ANDA LIHAT PADA CEK SURAT KETERANGAN MENGGUNAKAN USERNAMME ANDA!');
        </script> ";
        
    <?php else:?>

    <?php endif;?>




        </body>

        </html>

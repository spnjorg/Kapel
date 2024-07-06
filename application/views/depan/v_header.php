<!--============================= STYLE =============================-->
<style type="text/css">
    html,body{
        padding: 0;
        margin:0;
        font-family: sans-serif;
    }
 
 .new{
    padding-top: 70px;
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
        position: relative;
        background: transparent;
    }
 
    .isi-dropdown a:hover {
        color: white !important;
        background: black !important;
        list-style: none;
    }

blockquote {
    max-width: 1000px;
    margin: 0;
    width: 100%;
    padding: 40px 70px;
    background: #3E7DB3;
    color: #FFFFFF; 
    position: relative;
}
blockquote::before,
blockquote::after {
    font-size: 350%;
    font-family: Arial Unicode MS;
    display:block;
    position: absolute;
}
blockquote::before {
    content: open-quote;
    left: 30px;
    line-height: 40px;
}
blockquote::after {
    content: close-quote;
    right: 30px;
    line-height: 30px;
}

</style>

 <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <!--<div class="header-top_list">
                            <span class="icon-phone"></span>+62 
                        </div>-->
                        <div class="header-top_list">
                            <span class="fa fa-institution"></span> DISTRIK VI - RESSORT SIDIKALANG II
                        </div>
                        <!--<div class="header-top_list">
                            <span class="icon-envelope-open"></span>hkbp2sidikalang@gmail.com
                        </div> -->
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Jl. Damai No. 51 Sidikalang - Kab.DAIRI
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                    <div class="header-top_login2">
                    </div>

                    <div class="header-top_login2">
                        <a href="<?php echo site_url('administrator');?>">Login</a>
                    </div>

                </div>

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">

                        <ul class="navbar-nav">
                            <li class="dropdown" style="margin-top: 0px; margin-bottom: 0px;">
                             <a href="#"  data-toggle="modal" data-target="#myModal"><i class="fa fa-user-o" ></i> Akun Saya</a>
                                  <ul class="isi-dropdown">
                                    <li>
                                        <a href="<?php echo site_url('administrator');?>" class="nav-link" style="font-size: 13px;"><i class="fa fa-dashboard" aria-hidden="true"></i> Administrator </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('login');?>" data-toggle="modal" data-target="#Modal_login" class="nav-link"><i class="fa fa-sign-in" aria-hidden="true" ></i> Login </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('daftar');?>" data-toggle="modal" data-target="#Modal_register" class="nav-link"><i class="fa fa-user-plus" aria-hidden="true"></i> Daftar</a>
                                    </li>
                                  </ul>
                            </li>
                        </ul>

                         <!-- <ul class="navbar-nav">
                            <li class="dropdown">
                                <a href="<?php echo site_url('');?>"><span class="fa fa-user-o"></span> Login</a>
                                <ul class="isi-dropdown">
                                        <li><a class="nav-link" href="<?php echo site_url('sejarahgereja');?>">Sejarah HKBP II</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('parhalado');?>">Parhalado</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('#jadwal');?>">Jadwal</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('download');?>">Tingting</a></li>
                                </ul>
                            </li>

                         </ul> -->

                    </div>

                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="165px;" src="<?php echo base_url().'theme/images/themahkbp.png'?>"></a>
                       <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                                </li>

                                <li class="dropdown">
                                    <a class="nav-link" href="<?php echo site_url('#');?>">Tentang
                                        <span class="fa fa-sort-down" style="font-size:20px; text-align: center;"></span>
                                    </a>
                                    <ul class="isi-dropdown">
                                        <li><a class="nav-link" href="<?php echo site_url('sejarahgereja');?>">Sejarah HKBP II</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('parhalado');?>">Parhalado</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('#jadwal');?>">Jadwal</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('download');?>">Tingting</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="nav-link" href="<?php echo site_url('dewan');?>">Dewan
                                        <span class="fa fa-sort-down" style="font-size:20px; text-align: center;"></span>
                                    </a>
                                    <ul class="isi-dropdown">
                                        <li><a class="nav-link" href="<?php echo site_url('dewan/#koinonia');?>">Koinonia</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('dewan/#marturia');?>">Marturia</a></li>
                                        <li><a class="nav-link" href="<?php echo site_url('dewan/#diakonia');?>">Diakonia</a></li>
                                    </ul>
                                </li>                               

                                 <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Renungan</a>
                                </li>

                               <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>

                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('surat');?>">Surat Pengantar</a>
                                </li> -->
                                
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>



                 <div class="modal fade" id="Modal_login" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                            <?php
                                $this->load->view('depan/v_login_form');
                             ?>
                            </div>
                            
                        </div>
                                                    
                    </div>
                </div>



                <div class="modal fade" id="Modal_register" role="dialog">
                    <div class="modal-dialog" style="">
                        <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button> 
                            </div>

                            <div class="modal-body">
                            <?php
                                $this->load->view('depan/v_register_form');
                             ?>
                            </div>
                            
                        </div>

                    </div>
                </div>
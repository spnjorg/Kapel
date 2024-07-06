    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <style>
    .input-borders{
        border-radius:30px;
    }
    </style>	
                <div class="container-fluid">
								
								<form action="<?php echo base_url().'registrasi/simpan_registrasi'?>" method="post" enctype="multipart/form-data">
									<div class="billing-details jumbotron" style="background-color:;">
                                    <div class="section-title">
                                        <h2 style="text-align:center; font-family:square721; margin-top:-60px;"><b> Registrasi</b><hr></h2>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;font-size: x-small;">ID Jemaat<span class="text-danger">*</span> </label>
                                         <input type="text" name="xidjemaat" class="form-control" id="inputEmail3" placeholder="Masukkan ID Jemaat Anda" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;font-size: x-small;">Nama Lengkap<span class="text-danger">*</span> </label>
                                        <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama Lengkap" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;font-size: x-small;">Email <span class="text-danger">*</span> </label>
                                         <input type="email" name="xemail" class="form-control" id="inputEmail3" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;font-size: x-small;">Username <span class="text-danger">*</span> </label>
                                        <input type="text" name="xusername" class="form-control" id="inputUserName" placeholder="Username" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;font-size: x-small;">Password <span class="text-danger">*</span> </label>
                                        <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label" style="color: dimgray;font-size: x-small;">Ulangi Password <span class="text-danger">*</span> </label>
                                        <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="filefoto" required/> <hr>
                                    </div>

                                            
                                    <div style="form-group">
                                       <input class="btn btn-primary btn-block btn-flat"  value="Sign Up" type="submit" name="signup_button" style="background-color:;">
                                    </div>
                                    <div class="text-pad pull-right">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><br>Punya Akun ? Login disini</a>
                                       
                                    </div>
                                    
                                
								</form>
                                <div class="login-marg">
						<!-- Billing Details -->
						<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" id="signup_msg">
                                    

                                </div>
                                <!--Alert from signup form-->
                            </div>
                            <div class="col-md-2"></div>
                        </div>

						
					</div>
                    </div> 

					
				
				<!-- /row -->

			

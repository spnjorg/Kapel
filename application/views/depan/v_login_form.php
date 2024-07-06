<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="container-fluid">
				<!-- row -->
				

					<div class="login-marg">
						
						<div class="login-box">
  <div>
   <p><?php echo $this->session->flashdata('msg');?></p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg" align="center"><img width="100px;" src="<?php echo base_url().'theme/images/HKBP.png'?>"></p>
    <p style="text-align: center; font-family: Gill Sans; font-size: 30px;"><b>Login Jemaat</b></p><hr>
    <!-- <p style="text-align: center; font-family: verdata;">HKBP Resort Sidikalang II</p><hr/> -->

    <form action="<?php echo site_url().'admin/login/auth'?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label></label>
            <label></label>
            <label></label>
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input class="btn btn-primary btn-block btn-flat" type="submit" Value="Login" style="margin-left: 120px;">
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->
    <hr/>
    <!-- <p><center>Copyright <?php echo date('Y');?> by Steffanny Putri <br/> All Right Reserved</center></p> -->
  </div>
  <!-- /.login-box-body -->
</div>
                           
					</div>

			</div>


<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '10%' // optional
    });
  });
</script>
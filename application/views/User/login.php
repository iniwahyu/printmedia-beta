<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <title>Print Media - Layanan Jasa Cetak Masa Kini</title>
    <link rel="shortcut icon" href="<?php echo base_url('asset/iconprintmedia.png');?>">    

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('asset/member/vendor/bootstrap/css/bootstrap.min.css');?>">
    
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('asset/member/vendor/font-awesome/css/font-awesome.min.css');?>">
    
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url('asset/member/css/fontastic.css');?>">
    
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('asset/member/css/style.blue.css');?>" id="theme-stylesheet">
    
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('asset/member/css/custom.css');?>">
      
  
    
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Print Media</h1>
                  </div>
                  <h2>We Make Your Paper Better.</h2>
                </div>
              </div>
            </div>

            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">                  
                  <form method="post" class="form-validate" action="<?php echo base_url('welcome/member'); ?>">
                    
                    <div class="form-group">
                      <h3>Masuk Member Print Media</h3>
                    </div>
                    
                    <div class="form-group">
                      <input id="login-username" type="email" required data-msg="Please enter your email" class="input-material">
                      <label for="login-username" class="label-material">Email Mahasiswa</label>
                      <small>*Gunakan Email .ac.id atau .edu</small>
                    </div>
                    
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                      <small>*Password Minimal 8 Karakter</small>
                    </div>
                    <button class="btn btn-primary form-control" type="submit">Masuk</button>                    
                  </form>
                  <br><small>Belum Jadi Member ? Silahkan klik </small>
                  <a href="<?php echo base_url('welcome/register');?>" class="signup">disini</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Company <a href="<?php echo base_url('welcome/index');?>" class="external">Print Media</a>                   
        </p>
      </div>
    </div>

    <!-- JavaScript files-->
    <script src="<?php echo base_url('asset/member/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('asset/member/vendor/popper.js/umd/popper.min.js');?>"> </script>
    <script src="<?php echo base_url('asset/member/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('asset/member/vendor/jquery.cookie/jquery.cookie.js');?>"> </script>
    <script src="<?php echo base_url('asset/member/vendor/chart.js/Chart.min.js');?>"></script>
    <script src="<?php echo base_url('asset/member/vendor/jquery-validation/jquery.validate.min.js');?>"></script>
    
    <!-- Main File-->
    <script src="<?php echo base_url('asset/member/js/front.js');?>"></script>
  </body>
</html>
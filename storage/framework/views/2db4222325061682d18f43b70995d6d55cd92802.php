
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="<?php echo e(asset('logo.jpg')); ?>">
    <title>Login - OppikLaundry</title>
    <!-- Base Css Files -->
    <link href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <!-- Font Icons -->
    <link href="<?php echo e(asset('admin/assets/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/assets/ionicon/css/ionicons.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet">
    <!-- animate css -->
    <link href="<?php echo e(asset('admin/css/animate.css')); ?>" rel="stylesheet" />
    <!-- Waves-effect -->
    <link href="<?php echo e(asset('admin/css/waves-effect.css')); ?>" rel="stylesheet">
    <!-- Custom Files -->
    <link href="<?php echo e(asset('admin/css/helper.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(asset('admin/js/modernizr.min.js')); ?>"></script>
  </head>
  <style>
    .wrapper-page{margin-top:70px;}
    body{background-color:#212121;}
    .bg-img{height:160px;border-radius:0px;}
    .bg-overlay{background-image:url('<?php echo e(asset("logo.jpg")); ?>');border-radius:0px;}
    .panel-body{border:1px solid white;border-radius:0px;}
    input.form-control,textarea.form-control{border:1px solid #212121;border-radius:0px;}
    .btn{border-radius:0px;}
  </style>
  <body>
    <div class="wrapper-page">
      <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img"> 
          <div class="bg-overlay"></div>
          <h3 class="text-center m-t-10 text-white"></h3>
        </div> 
        <div class="panel-body">
          <form class="form-horizontal m-t-50" action="<?php echo e(url(action('RegisterController@postRegister'))); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <?php if($message = Session::get('sukses')): ?>
              <div class="alert alert-success alert-block" id="pesan">
              <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo e($message); ?></strong>
              </div>
            <?php endif; ?>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control input-lg" name="name" type="text" required="" placeholder="Nama">
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control input-lg" name="kontak" type="text" required="" placeholder="Kontak">
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <textarea class="form-control input-lg" name="alamat" required="" placeholder="Alamat"></textarea>
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control input-lg" name="email" type="email" required="" placeholder="Email">
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control input-lg" name="username" type="text" required="" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
              </div>
            </div>
            <div class="form-group m-t-40">
              <div class="col-xs-12">
                <button class="btn btn-primary" type="submit">Register</button>
                <a href="<?php echo e(url('/login')); ?>" class="btn btn-success">Login</a>
                <a href="<?php echo e(url('/')); ?>" class="pull-right" style="margin-top:7px;">Back To Beranda</a>
              </div>
            </div>
          </form> 
        </div>                                 
      </div>
    </div>
    <script>
      var resizefunc = [];
    </script>
    <script src="<?php echo e(asset('admin/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/waves.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/jquery.nicescroll.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('admin/js/jquery.scrollTo.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/jquery-detectmobile/detect.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/fastclick/fastclick.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/jquery-blockui/jquery.blockUI.js')); ?>"></script>
    <!-- CUSTOM JS -->
    <script src="<?php echo e(asset('admin/js/jquery.app.js')); ?>"></script>

	</body>
</html>
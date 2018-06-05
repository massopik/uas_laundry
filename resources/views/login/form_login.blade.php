
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="{{ asset('logo.jpg') }}">
    <title>Login - OppikLaundry</title>
    <!-- Base Css Files -->
    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Font Icons -->
    <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
    <!-- animate css -->
    <link href="{{ asset('admin/css/animate.css')}}" rel="stylesheet" />
    <!-- Waves-effect -->
    <link href="{{ asset('admin/css/waves-effect.css')}}" rel="stylesheet">
    <!-- Custom Files -->
    <link href="{{ asset('admin/css/helper.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin/js/modernizr.min.js')}}"></script>
  </head>
  <style>
    body{background-color:#212121;}
    .bg-img{height:160px;border-radius:0px;}
    .bg-overlay{background-image:url('{{ asset("logo.jpg") }}');border-radius:0px;}
    .panel-body{border:1px solid white;border-radius:0px;}
    input.form-control{border:1px solid #212121;border-radius:0px;}
    .btn, .alert{border-radius:0px;}
  </style>
  <body>
    <div class="wrapper-page">
      <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img"> 
          <div class="bg-overlay"></div>
          <h3 class="text-center m-t-10 text-white"></h3>
        </div> 
        <div class="panel-body">
          <form class="form-horizontal m-t-20" action="{{url(action('LoginController@postLogin'))}}" method="post">
            {{csrf_field()}}
            @if ($message = Session::get('gagal'))
              <div class="alert alert-danger alert-block" id="pesan">
              <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
              </div>
            @endif
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
                <button class="btn btn-primary" type="submit">Login</button>
                <a href="{{url('/register')}}" class="btn btn-success">Register</a>
                <a href="{{url('/')}}" class="pull-right" style="margin-top:7px;">Back To Beranda</a>
              </div>
            </div>
          </form> 
        </div>                                 
      </div>
    </div>
    <script>
      var resizefunc = [];
    </script>
    <script src="{{ asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/js/waves.js')}}"></script>
    <script src="{{ asset('admin/js/wow.min.js')}}"></script>
    <script src="{{ asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('admin/assets/jquery-detectmobile/detect.js')}}"></script>
    <script src="{{ asset('admin/assets/fastclick/fastclick.js')}}"></script>
    <script src="{{ asset('admin/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('admin/assets/jquery-blockui/jquery.blockUI.js')}}"></script>
    <!-- CUSTOM JS -->
    <script src="{{ asset('admin/js/jquery.app.js')}}"></script>

	</body>
</html>
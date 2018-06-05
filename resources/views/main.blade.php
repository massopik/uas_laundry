@include('layouts.head')
@include('layouts.sidebar')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      {{-- <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">{{$title}}</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Moltran</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Datatable</li>
          </ol>
        </div>
      </div> --}}

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">{{$title}}</h3>
            </div>
            @yield('content')
            
          </div>
        </div>
      </div> <!-- End Row -->
    </div> <!-- container -->
  </div> <!-- content -->
  <footer class="footer text-right">
    2015 © Moltran.
  </footer>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->



@include('layouts.footer')
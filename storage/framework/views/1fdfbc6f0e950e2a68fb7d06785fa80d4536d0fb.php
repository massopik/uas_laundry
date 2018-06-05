<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <?php /* <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title"><?php echo e($title); ?></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Moltran</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Datatable</li>
          </ol>
        </div>
      </div> */ ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo e($title); ?></h3>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
            
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



<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
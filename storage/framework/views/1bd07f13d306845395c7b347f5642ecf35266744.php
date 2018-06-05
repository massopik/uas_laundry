<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
  <div class="sidebar-inner slimscrollleft">
    <div class="user-details">
      <div class="pull-left">
        <img src="<?php echo e(asset('logo.jpg')); ?>" alt="" class="thumb-md img-circle">
      </div>
      <div class="user-info">
        <div class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo e(Auth::user()->name); ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
            <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
            <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
            <li><a href="<?php echo e(url('/logout')); ?>"><i class="md md-settings-power"></i> Logout</a></li>
          </ul>
        </div>
        <p class="text-muted m-0"><?php echo e(Auth::user()->hak_akses); ?></p>
      </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
      <ul>
        <?php 
          $user = Auth::user();
          if ($user->hak_akses == 'admin') {
        ?>
        <li>
          <a href="<?php echo e(url('/home')); ?>" class="waves-effect"><i class="md md-dashboard"></i><span> Dashboard </span></a>
        </li>
        <li>
          <a href="<?php echo e(url('/')); ?>" class="waves-effect" target="__blank"><i class="md md-home"></i><span> Beranda </span></a>
        </li>
        <li>
          <a href="<?php echo e(url('/konsumen')); ?>" class="waves-effect"><i class="fa fa-users"></i><span> Konsumen </span></a>
        </li>
        <li>
          <a href="<?php echo e(url('/transaksi')); ?>" class="waves-effect"><i class="fa fa-exchange"></i><span> Transaksi </span></a>
        </li>
      <?php }else{ ?>
        <li>
          <a href="<?php echo e(url('/home')); ?>" class="waves-effect"><i class="md md-dashboard"></i><span> Dashboard </span></a>
        </li>
        <li>
          <a href="<?php echo e(url('/')); ?>" class="waves-effect"><i class="md md-home"></i><span> Beranda </span></a>
        </li>
        <li>
          <a href="<?php echo e(url('/transaksi')); ?>" class="waves-effect"><i class="fa fa-exchange"></i><span> Transaksi </span></a>
        </li>

        <li>
            <a href="<?php echo e(url('/history')); ?>" class="waves-effect"><i class="fa fa-history"></i><span> History Transaksi </span></a>
          </li>
      <?php } ?>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- Left Sidebar End --> 

<?php $__env->startSection('content'); ?>
<?php 
	$user = Auth::user();
	if ($user->hak_akses != 'admin') {
?>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="alert alert-success alert-block" style="background-color:#1976d2">
				<button type="button" class="close" data-dismiss="alert">×</button> 
				<strong><h3 class="text-center" style="color:white!important;">Hai <?php echo e(Auth::user()->name); ?> , Selamat Datang dan Selamat Bertransaksi Di OppikLaundry</h3></strong>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
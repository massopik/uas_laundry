<?php $__env->startSection('content'); ?>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>nama</th>
						<th>username</th>
						<th>alamat</th>
						<th>kontak</th>
					</tr>
				</thead>
				<tbody>
          <?php foreach($konsumens as $k): ?>
					<tr>
            <td><?php echo e($no++); ?></td>
            <td><?php echo e($k->name); ?></td>
						<td><?php echo e($k->username); ?></td>
						<td><?php echo e($k->alamat); ?></td>
						<td><?php echo e($k->kontak); ?></td>
          </tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
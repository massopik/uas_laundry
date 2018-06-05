<?php $__env->startSection('content'); ?>
<div class="panel-body">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Jenis Barang</th>
						<th>Berat per Kg</th>
						<th>Status</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
          <?php foreach($transaksis as $t): ?>
					<tr>
            <td><?php echo e($no++); ?></td>
            <td><?php echo e($t->jenis_barang); ?></td>
						<td><?php echo e($t->berat_baju); ?></td>
						<td><?php echo e($t->status); ?></td>
						<td><?php echo e('Rp.'.number_format($t->total_harga)); ?></td>
          </tr>
         
          <?php endforeach; ?>
        </tbody>
          <tr>
              <td colspan="4">Total Harga</td>
              <td colspan="1"><?php echo e('Rp.'.number_format($total[0]->total)); ?></td>
            </tr>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
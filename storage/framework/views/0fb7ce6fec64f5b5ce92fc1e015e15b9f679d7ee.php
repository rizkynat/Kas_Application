  <?php $__env->startSection("content"); ?>
  <div style="padding-left:20px;">
  <div class="card container mt-3" style="width:810pt; background:#FFC947">
    <div class="card container ">
        <div class="card-header">Data Pengeluaran</div>
        <div class="card-body">
        <form action="<?php echo e(url('cari')); ?>" method="GET">
		<?php echo e(@csrf_field()); ?>

		<input type="text" name="name" placeholder="Ingin mencari apa ?" class="form-control"><br>
		<input type="submit" class="btn btn-md btn-outline-primary" >
	</form>
        <table class="table table-bordered border-primary">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Barang</th>
                    <th>Harga</th>
                    <th>Jumlah barang</th>
                    <th>Tanggal</th>
                    <th>Total harga</th>
                    <th width="130px">Action</th>
                </tr>
                <?php $no = 1;$jumlah=0; ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $RS): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no); ?></td>
                    <td><?php echo e($RS->nama); ?></td>
                    <td><?php echo e($RS->no_brg); ?></td>
                    <td>Rp.<?php echo e($RS->harga); ?></td>
                    <td><?php echo e($RS->jumlah); ?></td> 
                    <td><?php echo e($RS->tanggal); ?></td> 
                    <td>Rp.<?php echo e($RS->total_hrg); ?></td> 
                    <?php $no++;$jumlah=$RS->total_hrg+$jumlah; ?>
                    <td><a class="btn btn-primary" href="../public/edit/<?php echo e($RS->id_brg); ?>" style="width:40px; height:30px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('DELETE'); ?>
                     <a class="btn btn-danger" href="../public/hapus/<?php echo e($RS->id_brg); ?>" style="width:45px; height:30px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" style="margin-bottom:12px;">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <div class="card-body">
          <h5>Jumlah pengeluaran:</h5><b>Rp <?php print  $jumlah;?></b>
</div>
    </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/uasLar/resources/views//data.blade.php ENDPATH**/ ?>
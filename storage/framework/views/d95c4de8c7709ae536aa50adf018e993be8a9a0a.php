  <?php $__env->startSection("content"); ?>
<div style="padding-left:20px;">
<div class="card container mt-3" style="width:810pt;">
     
        <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard, <strong><?php echo e(Auth::user()->name); ?></strong></h5>
                    <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger">Keluar</a>
                </div>
      
    </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/uasLar/resources/views/dashboard.blade.php ENDPATH**/ ?>
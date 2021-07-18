  <?php $__env->startSection("content"); ?>
<div style="padding-left:20px;">
<div class="card container mt-3" style="width:810pt;">
        <div class="card-header ">Edit data pengeluaran</div>
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $RS): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="../updatePengeluaran" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="id_brg"  value="<?php echo e($RS->id_brg); ?>">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Nama barang</label>
                    <input type="text" name="nama" value="<?php echo e($RS->nama); ?>" class="form-control" id="exampleFormControlInput1" style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput2" class="form-label">No Barang</label>
                    <input type="number" name="no_brg" value="<?php echo e($RS->no_brg); ?>" class="form-control" id="exampleFormControlInput2"style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput3" class="form-label">Harga</label>
                    <input type="text" name="harga" value="<?php echo e($RS->harga); ?>" class="form-control" id="exampleFormControlInput3"style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" value="<?php echo e($RS->jumlah); ?>" class="form-control" id="exampleFormControlInput1" style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput3" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" value="<?php echo e($RS->tanggal); ?>" class="form-control" id="exampleFormControlInput3"style="height:30px;">
                </div>
                <input type="submit" class="btn-primary" value="Simpan Data" style="border-radius:3px;margin-top:5px;margin-bottom:10px;margin-left:315pt;">
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/uasLar/resources/views/edit.blade.php ENDPATH**/ ?>
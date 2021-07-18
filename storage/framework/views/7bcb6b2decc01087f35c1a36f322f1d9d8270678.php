  <?php $__env->startSection("content"); ?>
<div style="padding-left:20px;">
<div class="card container mt-3" style="width:810pt;">
        <div class="card-header ">Input Kas</div>
            <form action="../public/storeKas" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">No Kas</label>
                    <input type="text" name="no_kas" class="form-control" id="exampleFormControlInput1" style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput2" class="form-label">Jumlah Kas</label>
                    <input type="number" name="jumlah_kas" class="form-control" id="exampleFormControlInput2"style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput3" class="form-label">Tanggal Kas</label>
                    <input type="date" name="tgl_kas" class="form-control" id="exampleFormControlInput3"style="height:30px;">
                </div>
                <input type="submit" class="btn-primary" value="Simpan Data" style="border-radius:3px;margin-top:5px;margin-bottom:10px;margin-left:315pt;">
            </form>
        </div>
    </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/uasLar/resources/views/tambahKas.blade.php ENDPATH**/ ?>
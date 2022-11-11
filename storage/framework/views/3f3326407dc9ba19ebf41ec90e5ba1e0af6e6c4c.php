<?php $__env->startSection('title','result'); ?>

<?php $__env->startSection('home'); ?>

<div class="container">
    <div class="row">
        <div class="col -md-8 col-md-ffset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Info Siswa</div>
                <div class="panel-body">

                    <div> Nama : <?php echo e($q->name); ?></div>
                    <div> Score : <?php echo e($q->score); ?></div>
                    <?php if($q->score <= 50): ?>
                        <div class="alert alert-danger d-inline-block">
                            Maaf, Nilai anda tidak cukup
                        </div>
                    <?php elseif(($q->score > 51) and ($q->score <=60)): ?>
                    <div class="alert alert-warning d-inline-block">
                        Nilai kamu kurang sedikit
                    </div>
                    <?php else: ?>
                    <div class="alert alert-success d-inline-block">
                        Selamat, nilai kamu lulus
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gslc\resources\views/view.blade.php ENDPATH**/ ?>
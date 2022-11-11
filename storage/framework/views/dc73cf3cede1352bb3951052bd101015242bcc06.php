<?php $__env->startSection('title','result'); ?>

<?php $__env->startSection('home'); ?>

<div class="container">
    <div class="row">
        <div class="col -md-8 col-md-ffset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Info Siswa</h3> </div>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card col m-1">
                    <div class="card-body">
                        <h5 class="card-title; card-body-content">Name : <?php echo e($q->name); ?> </h5>
                        <h5 class="card-subtitle mb-2 text-muted; card-body-content">Score :  <?php echo e($q->score); ?></h5>
                        <div class="card-body-content">
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gslc\resources\views/listsiswa.blade.php ENDPATH**/ ?>
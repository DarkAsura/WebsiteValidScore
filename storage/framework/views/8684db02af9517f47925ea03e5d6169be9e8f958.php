<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('home'); ?>
<div class="container">
    <div class="row">
        <div class="col -md-8 col-md-ffset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Input Siswa</h3></div>

                <div class="panel-body">
                    <form action="/insert" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label name="name" id="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Siswa">
                            <label name="score" id="score">Score</label>
                            <input type="text" name="score" id="score" class="form-control" placeholder="Nilai Siswa">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success ">Sent</button>
                        </div>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li> <?php echo e($err); ?> </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gslc\resources\views/home.blade.php ENDPATH**/ ?>
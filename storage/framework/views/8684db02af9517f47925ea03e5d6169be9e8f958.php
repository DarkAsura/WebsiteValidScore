<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('home'); ?>
<div class="container">
    <div class="row">
        <div class="col -md-8 col-md-ffset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Siswa</div>

                <div class="panel-body">
                    <form action="users" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label name="name" id="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="Budi">
                            <label name="score" id="score">score</label>
                            <input type="text" name="score" id="score" class="form-control" value="50">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success ">Sent</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gslc\resources\views/home.blade.php ENDPATH**/ ?>
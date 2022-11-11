<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/asset.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
    <body>
        <div class="header">
            <div class="header-logo">
                <a href="/">
                    <img src="data:image/png;base64,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" alt="">
                </a>
                <div class="Button_Nav">
                    <a href="/list">
                        <div class="link">
                            <h4>List Siswa</h4>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <?php echo $__env->yieldContent('home'); ?>

        <div class="footer">
            <div>
                <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

    </body>

</html>
<?php /**PATH C:\xampp\htdocs\gslc\resources\views/template.blade.php ENDPATH**/ ?>
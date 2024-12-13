<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(env('APP_NAME')); ?></title>
    <link rel="icon" href="<?php echo e(asset('assets/images/LOGO_SAPEN.png')); ?>">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    
    


    
    <?php $__currentLoopData = \App\Helpers\ViterHelper::viteAssets(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo app('Illuminate\Foundation\Vite')($asset); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->yieldContent('extend-header'); ?>

</head>

<body class="font-abeezee" style="background: url('<?php echo e(asset('assets/images/body-bg.png')); ?>')">
    <?php echo $__env->make('frontend.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class=" dark:bg-gray-900 min-h-96">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('extend-script'); ?>
</body>

</html>
<?php /**PATH D:\web\sdmuhsapen\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- CSS files -->
    <link href="<?php echo e(asset('assets/backend')); ?>/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/backend')); ?>/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/backend')); ?>/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/backend')); ?>/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/backend')); ?>/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
	<?php echo $__env->yieldContent('css'); ?>
</head>

<body>
    <script src="<?php echo e(asset('assets/backend')); ?>/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Sidebar -->
        <?php echo $__env->make('backend.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">
            <!-- Page header -->
            <?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xxl">
                    <div class="row row-deck row-cards">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('backend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <!-- Libs JS -->
    
    <!-- Tabler Core -->
    <script src="<?php echo e(asset('assets/backend')); ?>/js/tabler.min.js?1692870487" defer></script>
    <script src="<?php echo e(asset('assets/backend')); ?>/js/demo.min.js?1692870487" defer></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH D:\web\sdmuhsapen\resources\views/backend/layout/main.blade.php ENDPATH**/ ?>
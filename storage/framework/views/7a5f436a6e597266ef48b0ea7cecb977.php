;
<?php $__env->startSection('css'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <form class="card" method="POST" action="<?php echo e(route('slider.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card-header">
                <h3 class="card-title">Add Menu</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Title Slider</label>
                    <div>
                        <input type="text" class="form-control" name="title" aria-describedby="title" placeholder="Enter Name" value="<?php echo e(old('menu_name')); ?>">
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>     
                            <div class="invalid-feedback" style="display: block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <div>
                        <input type="file" name="image" class="form-control dropzone" aria-describedby="title" placeholder="Enter Parent" value="<?php echo e(old('image')); ?>">
                    </div>
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>     
                    <div class="invalid-feedback" style="display: block"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\sdmuhsapen\resources\views/backend/pages/management/slider/create.blade.php ENDPATH**/ ?>
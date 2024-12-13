<?php $__env->startSection('breadcrumbs'); ?>
    <h2 class="page-title">
        Management Slider
    </h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Slider</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                      <a href="<?php echo e(route('slider.create')); ?>" class="btn btn-primary d-none d-sm-inline-block">
                        Add Slider
                      </a>
                    </div>
                  </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = ($sliders->currentPage() - 1) * $sliders->perPage() + 1;
                    ?>
                        <?php $__empty_1 = true; $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($row->title); ?></td>
                                <td><img src="<?php echo e($row->path.'/'.$row->image); ?>" style="width: 150px; height: auto"><?php echo e($row->slider); ?></td>
                                <td>
                                    <?php if(!$row->delete_at): ?>
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            
                                            <form action="<?php echo e(route('slider.destroy', $row->id)); ?>" method="POST" style="display: inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-pill w-120" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    Hapus
                                                </button>
                                            </form>
                                            
                                        </div>
                                    <?php else: ?>
                                        <div class="col-6 col-sm-4 col-md- col-xl py-3">
                                            <a href=""
                                                class="btn btn-warning btn-pill w-200">
                                                Restore
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" style="text-align: center">Tidak Ada Data</td>
                            </tr>
                            <?php endif; ?>
                </table>
            </div>
            <?php echo $sliders->links('backend.layout.pagination'); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\sdmuhsapen\resources\views/backend/pages/management/slider/index.blade.php ENDPATH**/ ?>
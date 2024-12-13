<?php $__env->startSection('breadcrumbs'); ?>
    <h2 class="page-title">
        Management Menu
    </h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Menu</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                      <a href="<?php echo e(route('management-menu.create')); ?>" class="btn btn-primary d-none d-sm-inline-block">
                        Add Menu
                      </a>
                    </div>
                  </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>ID Menu</th>
                            <th>Nama Menu</th>
                            <th>Route</th>
                            <th>Parent</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($menu->id); ?></td>
                                <td><?php echo e($menu->menu_name); ?></td>
                                <td><?php echo e($menu->route); ?></td>
                                <td><?php echo e($menu->parent ? $menu->parent->menu_name : '-'); ?></td>
                                <td><?php echo e($menu->icon); ?></td>
                                <td>
                                    <?php if($menu->is_active != 1): ?>
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            <a href="<?php echo e(route('management-menu.edit',$menu)); ?>" class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a>
                                            <a href="<?php echo e(route('softdel.menu',$menu)); ?>" class="btn btn-danger btn-pill w-120">
                                                Hapus
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-6 col-sm-4 col-md- col-xl py-3">
                                            <a href="#" class="btn btn-warning btn-pill w-200">
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
            <?php echo $menus->links('backend.layout.pagination'); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\sdmuhsapen\resources\views/backend/pages/management/menu/index.blade.php ENDPATH**/ ?>
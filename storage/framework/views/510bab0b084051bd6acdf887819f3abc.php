<?php $__env->startSection('breadcrumbs'); ?>
    <h2 class="page-title">
        Management Category Content
    </h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Category Content</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="<?php echo e(route('category-content.create')); ?>" class="btn btn-primary d-none d-sm-inline-block">
                            Add Category Content
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Category Content</th>
                            <th>Slug</th>
                            <th>Icon</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = ($data->currentPage() - 1) * $data->perPage() + 1;
                        ?>
                        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($row->title); ?></td>
                                <td><?php echo e($row->slug); ?></td>
                                <td><?php echo e($row->icon ? $row->icon : '-'); ?></td>
                                <td>
                                    
                                    <?php if(!$row->is_delete): ?>
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            <a href="<?php echo e(route('category-content.edit',$row)); ?>"
                                                class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a>
                                            <form action="<?php echo e(route('category-content.destroy', $row)); ?>" method="POST" style="display: inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-pill w-120" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-6 col-sm-4 col-md- col-xl py-3">
                                            <a href="<?php echo e(route('softdel.category', ['status' => 'active', 'id' => $row->category_id])); ?>"
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
            <?php echo $data->links('backend.layout.pagination'); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\sdmuhsapen\resources\views/backend/pages/management/category/content/index.blade.php ENDPATH**/ ?>
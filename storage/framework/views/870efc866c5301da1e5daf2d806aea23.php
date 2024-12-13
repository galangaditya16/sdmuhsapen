<?php if($paginator->lastPage() > 1): ?>
<div class="card-body">
    <ul class="pagination ">
        <li class="page-item <?php echo e($paginator->currentPage() == 1 ? 'disabled' : ''); ?>">
            <a class="page-link" href="<?php echo e($paginator->url(1)); ?>" tabindex="-1" aria-disabled="true">
                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                </svg>
                prev
            </a>
        </li>
        <?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
        <li class="page-item <?php echo e($paginator->currentPage() == $i ? 'active' : ''); ?>"><a class="page-link" href="<?php echo e($paginator->url($i)); ?>"><?php echo e($i); ?></a></li>
        <?php endfor; ?>

        <li class="page-item <?php echo e($paginator->lastPage() == $paginator->currentPage() ? 'disabled' : ''); ?>">
            <a class="page-link" href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>">
                next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 6l6 6l-6 6" />
                </svg>
            </a>
        </li>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH D:\web\sdmuhsapen\resources\views/backend/layout/pagination.blade.php ENDPATH**/ ?>
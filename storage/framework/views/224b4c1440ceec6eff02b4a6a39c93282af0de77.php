<?php $__env->startSection('content'); ?>
    <h1>This is About Page, with shared Header, Footer</h1>
    <?php echo e($x = 1); ?>

    <?php if($x > 2): ?>
        <h3>x is greater than 2</h3>
    <?php elseif($x == 2): ?>
        </h3>
        <h3>x is equal 2</h3>
    <?php else: ?>
        <h3>x is less than 2</h3>
    <?php endif; ?>

    
    

    

    
    
    

    

    

    

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emoi/Documents/Projects/PHP/Laravel-app/resources/views/about.blade.php ENDPATH**/ ?>
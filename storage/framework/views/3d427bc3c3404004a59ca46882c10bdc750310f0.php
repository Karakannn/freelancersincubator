<?php $__env->startSection('main'); ?>

    <h2>Error</h2>

    <p>Object not found. Please return to <a href="/">homepage</a>.</p>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
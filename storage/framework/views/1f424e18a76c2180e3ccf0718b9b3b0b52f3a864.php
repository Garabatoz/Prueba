<?php $__env->startSection('title', 'Curso ' . $course); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido al curso <?php echo e($course); ?> </h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sancho/Escritorio/Code/silver/resources/views/courses/show.blade.php ENDPATH**/ ?>
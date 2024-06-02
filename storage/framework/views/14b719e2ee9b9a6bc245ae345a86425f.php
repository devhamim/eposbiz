<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About us</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->
<div class="container">
    <div class="page-header page-header-big text-center" style="background-image: url('<?php echo e(asset('uploads/about')); ?>/<?php echo e($abouts->image); ?>')">
        <h1 class="page-title text-white">About us<span class="text-white"><?php echo e($abouts->title); ?></span></h1>
    </div><!-- End .page-header -->
</div><!-- End .container -->

<div class="page-content pb-0">
    <?php echo $abouts->description; ?>


</div><!-- End .page-content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\nitebiz\resources\views/frontend/about.blade.php ENDPATH**/ ?>
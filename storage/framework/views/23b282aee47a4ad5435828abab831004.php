<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Mail</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Mail</h2>
                </div>
                <div class="card-body">
                    <?php if($mails): ?>
                        <form class="row g-3" method="POST" action="<?php echo e(route('mails.update', $mails->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <input type="hidden" name="id" value="<?php echo e($mails->id); ?>">
                    <?php else: ?>
                        <form action="<?php echo e(route('mails.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                    <?php endif; ?>
                        <div class="row ec-vendor-uploads">

                            <div class="col-lg-12">
                                <div class="ec-vendor-upload-detail">
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="mail">Mail <span class="text-danger">*</span></label>
                                                <?php if($mails): ?>
                                                    <input type="email" id="mail" class="form-control" name="mail" value="<?php echo e($mails->mail); ?>">
                                                <?php else: ?>
                                                    <input type="email" id="mail" class="form-control" name="mail" value="<?php echo e(old('mail')); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\nitebiz\resources\views/backend/mail.blade.php ENDPATH**/ ?>
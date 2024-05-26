<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>About</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>About</h2>
                </div>

                <div class="card-body">
                    <form class="row g-3" method="POST" action="<?php echo e(route('about.update', $abouts->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <input type="hidden" name="id" value="<?php echo e($abouts->id); ?>">
                        <div class="row ec-vendor-uploads">

                            <div class="col-lg-12">
                                <div class="ec-vendor-upload-detail">
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="ec-vendor-img-upload">
                                                <div class="ec-vendor-main-img attribute_image">
                                                    <div class="avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file'  name="image" class="ec-image-upload <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('image')); ?>" />
                                                            <input type="file" class="ec-image-upload <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                            <label for="imageUpload">
                                                                <img src="<?php echo e(asset('backend')); ?>/img/icons/edit.svg" class="svg_img header_svg" alt="edit" />
                                                            </label>
                                                        </div>
                                                        <div class="avatar-preview ec-preview">
                                                            <div class="imagePreview ec-div-preview">
                                                                <img class="ec-image-preview" src="<?php echo e(asset('uploads/about')); ?>/<?php echo e($abouts->image); ?>" alt="edit" />
                                                            </div>
                                                        </div>
                                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="title">Title <span class="text-danger">*</span></label>
                                                <input type="text" id="title" class="form-control" name="title" value="<?php echo e($abouts->title); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="summernote" name="description" required rows="4"><?php echo $abouts->description; ?></textarea>
                                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\marhaba ecommerce\nitebiz\resources\views/backend/addtionalpage/about.blade.php ENDPATH**/ ?>
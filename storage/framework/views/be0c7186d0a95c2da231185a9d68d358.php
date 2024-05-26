<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Add Product</h1>
            <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Product</p>
        </div>
        <div>
            <a href="<?php echo e(route('product.index')); ?>" class="btn btn-primary"> View All
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Add Product</h2>
                </div>

                <div class="card-body">
                    <form class="row g-3" method="POST" action="<?php echo e(route('product.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row ec-vendor-uploads">
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img attribute_image">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="image" class="ec-image-upload <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('image')); ?>" required />
                                                <label for="imageUpload">
                                                    <img src="<?php echo e(asset('backend')); ?>/img/icons/edit.svg" class="svg_img header_svg" alt="edit" />
                                                </label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview" src="<?php echo e(asset('backend')); ?>/img/products/vender-upload-preview.jpg" alt="edit" />
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
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Product name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control slug-title <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"  value="<?php echo e(old('name')); ?>" required>
                                            <?php $__errorArgs = ['name'];
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
                                        <div class="col-md-6">
                                            <label class="form-label">Attribute <span class="text-danger">*</span></label>
                                            <select name="inventorie_id" id="inventorie_id" class="form-select" value="<?php echo e(old('inventorie_id')); ?>" required>
                                                <option value="">-- Selected Attribute --</option>
                                                <?php $__currentLoopData = $inventorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($inventory->id); ?>"><?php echo e($inventory->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Categories <span class="text-danger">*</span></label>
                                            <select name="category_id" id="category_id" class="form-select <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('category_id')); ?>" required>
                                                <option value="">-- Selected Category --</option>
                                                <?php $__currentLoopData = $categoreys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($categorey->id); ?>"><?php echo e($categorey->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['category_id'];
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
                                        <div class="col-md-6">
                                            <label class="form-label">Subcategories <span class="text-secondary">(Optional)</span></label>
                                            <select name="subcategory_id" id="subcategory_id" class="form-select <?php $__errorArgs = ['subcategory_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('subcategory_id')); ?>" required>
                                                <option value="">-- Selected Subcategory --</option>
                                            </select>
                                            <?php $__errorArgs = ['subcategory_id'];
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
                                        <div class="col-md-6">
                                            <label for="sku" class="col-12 col-form-label">SKU</label>
                                            <div class="col-12">
                                                <input id="sku" name="sku" class="form-control here  <?php $__errorArgs = ['sku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" value="<?php echo e(old('sku')); ?>" required>
                                                <?php $__errorArgs = ['sku'];
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
                                        <div class="col-md-6">
                                            <label for="brand" class="col-12 col-form-label">Brand</label>
                                            <div class="col-12">
                                                
                                                <input id="brand" name="brand" class="form-control" type="text" value="<?php echo e(old('brand')); ?>">
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
unset($__errorArgs, $__bag); ?>" name="description" value="<?php echo e(old('description')); ?>" required rows="4"></textarea>
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
                                        <div class="col-md-12">
                                            <label class="form-label">Product Tags <span>( Type and make comma to separate tags )</span></label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['tag'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tag" name="tag" value="<?php echo e(old('tag')); ?>" required data-role="tagsinput" />
                                            <?php $__errorArgs = ['tag'];
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
                                        <div class="attribute-fields">
                                            
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

<?php $__env->startSection('footer_scripts'); ?>
<script>
    $(document).ready(function(){
         $('#category_id').change(function(){
             var category_id = $(this).val();

             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
             $.ajax({
                 type:'POST',
                 url:'/admin/getsubcategory',
                 data:{'category_id':category_id},
                 success:function(data){
                     $('#subcategory_id').html(data);
                 }
             })
         })
     });

 </script>

<script>
   $(document).ready(function(){
    $('#inventorie_id').change(function(){
        var inventorie_id = $(this).val();

        $.ajax({
            type: 'POST',
            url: '/admin/getinventorydata',
            data: {'inventorie_id': inventorie_id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data){
                $('#brand').val(data.brand);
                $('#sku').val(data.sku);

                // Clear existing attribute fields
                $('.attribute-fields').empty();
                $('.attribute_image').empty();

                // attribute_image
                if (data.attributes.length > 0) {
                    data.attributes.forEach(function(attribute, index) {
                        var attributeHtml = `
                            <div class="attribute row">
                                <div class="thumb-upload-set colo-md-4">
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload01"  class="ec-image-upload" value="${attribute.image}" />
                                            <label for="imageUpload">
                                                <img  src="<?php echo e(asset('backend')); ?>/img/icons/edit.svg" class="svg_img header_svg" alt="edit" />
                                            </label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview" src="<?php echo e(asset('uploads/product')); ?>/${attribute.image}" alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        $('.attribute_image').append(attributeHtml);
                    });
                };

                // Populate attribute fields
                if (data.attributes.length > 0) {
                    data.attributes.forEach(function(attribute, index) {
                        var attributeHtml = `
                            <div class="attribute">
                                <p class="my-3">Variation ${index + 1}</p>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 mb-25">
                                        <label class="form-label">Colors</label>
                                        <input type="hidden" value="${attribute.color_id}">
                                        <label class="inventory_color" style="background: ${attribute.color_code}">${attribute.color_name}</label>
                                    </div>
                                    <div class="col-md-4 mb-25">
                                        <label class="form-label">Size</label>
                                        <input type="hidden" value="${attribute.size_id}">
                                        <label>${attribute.size_name}</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Weight </label>
                                        <input type="text" class="form-control" value="${attribute.weight}" id="weight">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" value="${attribute.quantity}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Price <span>( In BDT )</span></label>
                                        <input type="number" class="form-control" id="price1" value="${attribute.price}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Sell Price <span>( In BDT )</span></label>
                                        <input type="number" class="form-control" id="sell_price" value="${attribute.sell_price}">
                                    </div>

                                </div>

                            </div>
                        `;
                        $('.attribute-fields').append(attributeHtml);

                        // Populate price fields based on index
                        if (index === 0) {
                            $('#price1').val(attribute.price);
                        } else {
                            $('#price' + (index + 1)).val(attribute.price);
                        }
                    });
                }
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\marhaba ecommerce\nitebiz\resources\views/backend/product/addproduct.blade.php ENDPATH**/ ?>
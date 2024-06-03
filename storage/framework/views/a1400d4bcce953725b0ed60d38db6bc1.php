<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="toolbox">
        <div class="toolbox-center">
            <div class="toolbox-info">
                <a href="<?php echo e(url('/')); ?>">Home</a> / <span>Category</span>
            </div><!-- End .toolbox-info -->
        </div><!-- End .toolbox-center -->
    </div><!-- End .toolbox -->

    <div class="products">
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                    <div class="product home_product_shadwo" style="border-radius: 10px;">
                        <figure class="product-media">
                            
                            <a href="<?php echo e(route('product.details', $product->slug)); ?>">
                                <?php if($product->inventorie_id != null): ?>
                                    <?php if($product->rel_to_inventorie): ?>
                                        <?php
                                            $inventorie = $product->rel_to_inventorie
                                        ?>
                                        <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" alt="Product image" class="product-image">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <img src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($product->image); ?>" alt="Product image" class="product-image">
                                <?php endif; ?>
                            </a>
                            <div class="product-action-vertical">
                                <p style="background-image: url( '<?php echo e(asset('frontend/assets/images/discount.png')); ?>' )"></p>
                            </div>
                        </figure>

                        <div class="product-body">
                            <h3 class="product-title pb-1"><a href="<?php echo e(route('product.details', $product->slug)); ?>"><?php echo e(Str::limit($product->name, '15', '')); ?></a></h3>
                            <?php if($product->inventorie_id != null): ?>
                                <?php if($product->rel_to_inventorie): ?>
                                    <?php
                                        $inventorie = $product->rel_to_inventorie
                                    ?>
                                    <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($attribute->sell_price != null): ?>
                                            <span class="new-price">Tk <?php echo e($attribute->sell_price); ?></span>
                                            <del style="color: #cccccc">Tk <?php echo e($attribute->price); ?></del>
                                        <?php else: ?>
                                            <span class="product-price">Tk <?php echo e($attribute->price); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if($product->sell_price != null): ?>
                                    <span class="new-price">Tk <?php echo e($product->sell_price); ?></span>
                                    <del style="color: #cccccc">Tk <?php echo e($product->price); ?></del>
                                <?php else: ?>
                                    <span class="product-price">Tk <?php echo e($product->price); ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="text-center">
                            <form action="#" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                <input type="hidden" name="quantity" value="1">
                                <a href="<?php echo e(route('product.details', $product->slug)); ?>" class="btn-product btn-cart btn-buy mr-5 w-100" name="btn" value="2"><span>Order Now</span></a>
                            </form>
                        </div>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div><!-- End .row -->

        <div class="load-more-container text-center">
            
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\nitebiz\resources\views/frontend/category_product.blade.php ENDPATH**/ ?>
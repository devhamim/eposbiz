<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="container mt-2">
            <div class="product-details-top">
                <div class="product_data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row" style="border: 1px solid #E5E7EB; margin-right: 10px">
                                <div class="col-lg-10 mt-2 m-auto">
                                    <div class="product-gallery product-gallery-vertical">
                                        <div class="row">
                                            
                                            <?php if($products->first()->inventorie_id != null): ?>
                                                <?php if($products->first()->rel_to_inventorie): ?>
                                                    <?php
                                                        $inventorie = $products->first()->rel_to_inventorie
                                                    ?>

                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <figure id="productDetailsImage" class="product-main-image productDetailsImageemptey">
                                                            <img id="product-zoom" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" data-zoom-image="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" alt="product image">

                                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                                <i class="icon-arrows"></i>
                                                            </a>
                                                        </figure>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                                        <?php $__currentLoopData = $inventorie->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <a class="product-gallery-item active" href="#" data-image="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" data-zoom-image="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>">
                                                                <img src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" alt="product side">
                                                            </a>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <figure class="product-main-image">
                                                    <img id="product-zoom"
                                                        src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($products->first()->image); ?>"
                                                        data-zoom-image="<?php echo e(asset('uploads/product')); ?>/<?php echo e($products->first()->image); ?>"
                                                        alt="product image">
                                                    <a href="" id="btn-product-gallery" class="btn-product-gallery">
                                                        <i class="icon-arrows"></i>
                                                    </a>
                                                </figure>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 pt-3" style="border: 1px solid #E5E7EB; margin-left: 10px">
                            <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product_id" class="product_id" value="<?php echo e($products->first()->id); ?>">
                                <div class="product-details">
                                <h1 class="product-title"><?php echo e($products->first()->name); ?></h1>
                                <?php if($products->first()->inventorie_id != null): ?>
                                    <input type="hidden" name="inventory_id" class="inventorie_id" value="<?php echo e($products->first()->inventorie_id); ?>">
                                    <div class="product_code" style="border-bottom: 1px solid #E5E7EB; padding-bottom: 10px; margin-bottom: 10px">
                                        <p class="sku_text"><strong>SKU: </strong>
                                            <?php if($products->first()->rel_to_inventorie): ?>
                                                <span style="font-weight: 400"><?php echo e($products->first()->rel_to_inventorie->sku); ?></span>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <div class="product-price">
                                        <?php if($products->first()->rel_to_inventorie): ?>
                                            <?php
                                                $inventorie = $products->first()->rel_to_inventorie
                                            ?>
                                            <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($attribute->sell_price != null): ?>
                                                    Price: <span class="line-through pl-3 text-dark" style="font-size: 14px">Tk <?php echo e($attribute->price); ?></span>
                                                    <span class="pl-3">Tk <?php echo e($attribute->sell_price); ?></span>
                                                <?php else: ?>
                                                    Price: <span class="pl-3">Tk <?php echo e($attribute->sell_price); ?></span>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Brand:</label>
                                            <?php if($products->first()->rel_to_inventorie): ?>
                                                <span style="font-weight: 400"><?php echo e($products->first()->rel_to_inventorie->brand); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Status:</label>
                                            <?php if($products->first()->rel_to_inventorie): ?>
                                                <?php
                                                    $inventorie = $products->first()->rel_to_inventorie
                                                ?>
                                                <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($attribute->quantity != 0): ?>
                                                        <span style="font-weight: 400" class="text-success">In Stock</span>
                                                    <?php else: ?>
                                                        <span style="font-weight: 400" class="text-danger">Out Of Stock</span>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                    <?php if($products->first()->rel_to_inventorie): ?>
                                        <?php
                                            $inventorie = $products->first()->rel_to_inventorie;
                                        ?>
                                        <?php if($inventorie->rel_to_attribute->where('weight', '!=', null)->isNotEmpty()): ?>
                                            <div class="details-filter-row details-row-size">
                                                <label>Package:</label>
                                                <div class="product-nav product-nav-thumbs product_details_weight">
                                                    <?php $__currentLoopData = $inventorie->rel_to_attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <input type="radio" id="weight_details_<?php echo e($attribute->id); ?>" class="px-2 weight-option inpute_weight" name="attribute_id" value="<?php echo e($attribute->id); ?>"  required>
                                                        <label for="weight_details_<?php echo e($attribute->id); ?>"><?php echo e($attribute->weight); ?></label>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        <?php elseif($inventorie->rel_to_attribute->where('rel_to_color', '!=', null)->isNotEmpty()): ?>
                                            <?php if($available_colors->isNotEmpty()): ?>
                                                <div class="details-filter-row details-row-size">
                                                    <?php
                                                        $color = null;
                                                    ?>
                                                    <label>Color:</label>
                                                    <div class="product-nav product-nav-thumbs product_details_color">
                                                        <?php $__currentLoopData = $available_colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colorId => $colorAttributes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $color = $colorAttributes->first()->rel_to_color;
                                                            ?>
                                                            <label for="color_details_<?php echo e($colorId); ?>" class="color-option" data-color="<?php echo e($color->name); ?>" style="background: <?php echo e($color->code); ?>"><?php echo e($color->name); ?></label>
                                                            <input id="color_details_<?php echo e($colorId); ?>" class="color_id" type="radio" name="color_id" value="<?php echo e($color->id); ?>" required>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $__errorArgs = ['color_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="details-filter-row details-row-size" id="size_id">

                                                </div>

                                                <div class="details-filter-row details-row-size" id="size-options">
                                                    <!-- Size options will be dynamically populated here -->
                                                </div>

                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <div id="productDetails">
                                            <!-- Display dynamic content here (image, price, quantity) -->
                                        </div>
                                    <?php endif; ?>

                                    <div class="details-filter-row details-row-size pro_details_ico">
                                        <label for="qty">পরিমান :</label>
                                        <div class="product-details-quantity">
                                            <input type="number" name="quantity" id="qty"
                                                class="form-control qty-input" value="1" min="1" max="10"
                                                step="1" data-decimals="0" required>

                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="product_code"
                                        style="border-bottom: 1px solid #E5E7EB; padding-bottom: 10px; margin-bottom: 10px">
                                        <p class="sku_text"><strong>SKU: </strong>
                                            <span style="font-weight: 400"><?php echo e($products->first()->sku); ?></span>
                                        </p>
                                    </div>
                                    <div class="product-price">
                                        <?php if($products->first()->sell_price != null): ?>
                                            Price: <span class="line-through pl-3 text-dark"
                                                style="font-size: 14px">Tk<?php echo e($products->first()->price); ?></span>
                                            <span class="pl-3">Tk <?php echo e($products->first()->sell_price); ?></span>
                                        <?php else: ?>
                                            Price: <span class="pl-3">Tk <?php echo e($products->first()->sell_price); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Brand:</label>
                                            <span ><?php echo e($products->first()->brand); ?></span>
                                        </div><!-- End .product-nav -->
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Status:</label>
                                            <?php if($products->first()->quantity != 0): ?>
                                                <span style="font-weight: 400" class="text-success">In Stock</span>
                                            <?php else: ?>
                                                <span style="font-weight: 400" class="text-danger">Out Of Stock</span>
                                            <?php endif; ?>
                                        </div><!-- End .product-nav -->
                                    </div>
                                    <?php if($products->first()->weight != null): ?>
                                        <div class="details-filter-row details-row-size">
                                            <label>Package:</label>
                                            <div class="product-nav product-nav-thumbs product_details_weight">
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="radio" id="weight_details_<?php echo e($product->id); ?>" class="px-2 weight-option inpute_weight" name="attribute_id" value="<?php echo e($product->id); ?>"  required>
                                                    <label for="weight_details_<?php echo e($product->id); ?>"><?php echo e($product->weight); ?></label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    <?php elseif($products->first()->color_id != null): ?>
                                        <div class="details-filter-row details-row-size">
                                            <label>Color:</label>
                                            <div class="product-nav product-nav-thumbs">
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($product->rel_to_color != null): ?>
                                                    <label for="color_details_<?php echo e($product->id); ?>" class="color-option" data-color="<?php echo e($product->rel_to_color->name); ?>" style="background: <?php echo e($product->rel_to_color->code); ?>"><?php echo e($product->rel_to_color->name); ?></label>
                                                    <input id="color_details_<?php echo e($product->id); ?>" type="radio" name="attribute_id" class="inpute_color" value="<?php echo e($product->id); ?>" required>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="details-filter-row details-row-size">
                                        <input type="hidden" name="inventory_id" class="inventory_id" value="<?php echo e($products->first()->inventory_id); ?>">
                                    </div><!-- End .details-filter-row -->

                                    <div class="details-filter-row details-row-size pro_details_ico">
                                        <label for="qty">পরিমান :</label>
                                        <div class="product-details-quantity">
                                            <input type="number" name="quantity" id="qty"
                                                class="form-control qty-input" value="1" min="1" max="10"
                                                step="1" data-decimals="0" required>

                                        </div><!-- End .product-details-quantity -->
                                    </div>
                                <?php endif; ?>

                                    <div class="mt-3" style="border-top: 2px solid #E5E7EB; padding-top: 10px; display: flex; width: 100%">
                                        <button type="submit" class="btn-cart mr-3 product_details_card" name="btn" value="1" id="load"><span>Add to cart</span></button>
                                        <button type="submit" class=" btn-cart btn-buy product_details_buy" name="btn" value="2"><span>Order Now</span></button>
                                    </div><!-- End .product-details-action -->
                                    <div class="my-3 call-btn product_details_chat">
                                        <a href="tel: <?php echo e($setting->first()->number_two); ?>">Call Now</a>
                                    </div>
                                    <div class="my-3 call-btn product_details_chat">
                                        <a href="https://api.whatsapp.com/send?phone=88<?php echo e($setting->first()->number_two); ?>&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20<?php echo e($products->first()->name); ?>%20service." target="_blank">WhatsApp</a>
                                    </div>
                                </div><!-- End .product-details -->
                            </form>
                        </div><!-- End .col-md-6 -->
                    </div>
                </div>
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">পন্যের বিবরণ</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Product Information</h3>
                            <p><?php echo $products->first()->description; ?></p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_script'); ?>

<script>
    $('.color_id').click(function(){
        var color_id = $(this).val();
        var inventorie_id = '<?php echo e($products->first()->inventorie_id); ?>';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url:'/getsize',
            data:{'color_id':color_id, 'inventorie_id':inventorie_id},
            success:function(data){
                $('#size_id').html(data);
            }
        });
    });
</script>

    <script>
        $('input[name="color"]').on('click', function() {
            var attribute_id = $(this).val();
            var inventorie_id = '<?php echo e($products->first()->inventorie_id); ?>';
            $.ajax({
                url: '<?php echo e(route("getProductDetails")); ?>',
                method: 'GET',
                data: { attribute_id: attribute_id, inventorie_id: inventorie_id},
                success: function(response) {
                    updateProductDetails(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        $('input[name="attribute_id"]').on('click', function() {
            var attribute_id = $(this).val();
            var inventorie_id = '<?php echo e($products->first()->inventorie_id); ?>';
            $.ajax({
                url: '<?php echo e(route("getProductDetails")); ?>',
                method: 'GET',
                data: { attribute_id: attribute_id, inventorie_id: inventorie_id},
                success: function(response) {
                    updateProductDetails(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
                    // <p>Quantity: ${response.quantity}</p>
        function updateProductDetails(response) {
            $('.productDetailsImageemptey').empty();
            $('#productDetails').html(`
                <figure>
                    <del style="font-size:22px; font-weight:600; color:#9d9d9d; margin-right:10px">${response.price} Tk </del>
                    <span style="font-size:22px; font-weight:600; color:#000"> ${response.sell_price} Tk </span>
                    <input type="hidden" name="price" value="${response.sell_price}" >
                </figure>
            `);
            $('#productDetailsImage').html(`
                <img id="product-zoom" src="<?php echo e(asset('uploads/product')); ?>/${response.image}" data-zoom-image="<?php echo e(asset('uploads/product')); ?>/${response.image}" alt="product image">

                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                    <i class="icon-arrows"></i>
                </a>
            `);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\nitebiz\resources\views/frontend/product_details.blade.php ENDPATH**/ ?>
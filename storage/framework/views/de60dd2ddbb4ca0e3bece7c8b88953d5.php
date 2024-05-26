<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
        <h1>Order Detail</h1>
        <p class="breadcrumbs"><span><a href="<?php echo e(route('dashboard')); ?>">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Orders
        </p>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="ec-odr-dtl card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2 class="ec-odr">Order Detail<br>
                        <form action="<?php echo e(route('order.status.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="order_id" value="<?php echo e($orders->id); ?>">
                            <div class="dropdown">
                                <button class="border-0 bg-body" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    if($orders->status == 0){
                                        echo '<span class="btn btn-secondary">Pending</span>';
                                    }
                                    elseif ($orders->status == 1) {
                                        echo '<span class="btn btn-info">Confirmed Order</span>';
                                    }
                                    elseif ($orders->status == 2) {
                                        echo '<span class="btn btn-primary">Processing Order</span>';
                                    }
                                    elseif ($orders->status == 3) {
                                        echo '<span class="btn btn-warning ">On Delivery</span>';
                                    }
                                    elseif ($orders->status == 4) {
                                        echo '<span class="btn btn-success">Product Delivered</span>';
                                    }
                                    else {
                                        echo '<span class="btn btn-danger">Cancel Order</span>';
                                    }
                                ?>
                                </button>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                  <li>
                                        <button name="status" value="<?php echo e($orders->order_id .','. '0'); ?>" class="dropdown-item status">Pending</button>
                                    </li>
                                    <li>
                                        <button name="status" value="<?php echo e($orders->order_id .','. '1'); ?>" class="dropdown-item status">Confirmed Order</button>
                                    </li>
                                    <li>
                                        <button name="status" value="<?php echo e($orders->order_id .','. '2'); ?>" class="dropdown-item status">Processing Order</button>
                                    </li>
                                    <li>
                                        <button name="status" value="<?php echo e($orders->order_id .','. '3'); ?>" class="dropdown-item status">On Delivery</button>
                                    </li>
                                    <li>
                                        <button name="status" value="<?php echo e($orders->order_id .','. '4'); ?>" class="dropdown-item status">Product Delivered</button>
                                    </li>
                                    <li>
                                        <button name="status" value="<?php echo e($orders->order_id .','. '5'); ?>" class="dropdown-item status">Cancel Order</button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        
                        <a href="<?php echo e(route('print.invoice',$orders->id )); ?>" class="btn btn-success">Download Invoice</a>
                        <span class="small">Order ID: #<?php echo e($orders->order_id); ?></span>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <address class="info-grid">
                                <div class="info-title"><strong>Shipped To:</strong></div><br>
                                <div class="info-content">
                                    <?php echo e($bllingdetails->name); ?><br>
                                    <?php echo e($bllingdetails->district); ?><br>
                                    <?php echo e($bllingdetails->address); ?><br>
                                    <abbr title="Phone">P:</abbr> <?php echo e($bllingdetails->mobile); ?>

                                </div>
                            </address>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <address class="info-grid">
                                <div class="info-title"><strong>Note:</strong></div><br>
                                <div class="info-content">
                                    <?php echo e($bllingdetails->note); ?>

                                </div>
                            </address>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <address class="info-grid">
                                <div class="info-title"><strong>Order Date:</strong></div><br>
                                <div class="info-content">
                                    <?php echo e($orders->created_at->format('h:i:s')); ?><br>
                                    <?php echo e($orders->created_at->format('d M Y')); ?>

                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="tbl-title">PRODUCT SUMMARY</h3>
                            <div class="table-responsive">
                                <table class="table table-striped o-tbl">
                                    <thead>
                                        <tr class="line">
                                            <td><strong>#</strong></td>
                                            <td class="text-center"><strong>IMAGE</strong></td>
                                            <td class="text-center"><strong>PRODUCT</strong></td>
                                            <td class="text-center"><strong>QUANTITY</strong></td>
                                            <td class="text-center"><strong>PRICE/UNIT</strong></td>
                                            <td class="text-right"><strong>SUBTOTAL</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $orderproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><img class="product-img"
                                                        src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($product->rel_to_attribute->image); ?>" alt="" /></td>
                                                <td>
                                                    <strong><?php echo e($product->rel_to_pro->name); ?></strong><br>
                                                    <?php if($product->rel_to_attribute->color_id): ?>
                                                       Color: <?php echo e($product->rel_to_attribute->rel_to_color->name); ?>,
                                                       Size:  <?php echo e($product->rel_to_attribute->rel_to_size->name); ?>

                                                    <?php elseif($product->rel_to_attribute->weight): ?>
                                                       Weight: <?php echo e($product->rel_to_attribute->weight); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center"><?php echo e($product->quantity); ?></td>
                                                <td class="text-center"><?php echo e(number_format($product->rel_to_attribute->sell_price ?? $product->rel_to_attribute->price, 2)); ?> Tk</td>
                                                <td class="text-right"><?php echo e(number_format(($product->rel_to_attribute->sell_price ?? $product->rel_to_attribute->price) * $product->quantity, 2)); ?> Tk</td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td class="text-right"><strong>Charge (+)</strong></td>
                                            <td class="text-right"><strong><?php echo e($orders->delivery_charge); ?> Tk</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td class="text-right"><strong>Discount (-)</strong></td>
                                            <td class="text-right"><strong><?php echo e($orders->discount); ?> Tk</strong></td>
                                        </tr>
                                        <?php if($orders->due != 0): ?>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td class="text-right"><strong>Paid (-)</strong></td>
                                                <td class="text-right"><strong><?php echo e(number_format($orders->paid)); ?> Tk</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td class="text-right"><strong>Due (-)</strong></td>
                                                <td class="text-right"><strong><?php echo e(number_format($orders->due)); ?> Tk</strong></td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td colspan="4">
                                            </td>
                                            <td class="text-right"><strong>Total</strong></td>
                                            <td class="text-right"><strong><?php echo e(number_format($orders->total)); ?> Tk</strong></td>
                                        </tr>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tracking Detail -->
            <div class="card mt-4 trk-order">
                <div class="p-4 text-center text-white text-lg bg-dark rounded-top">
                    <span class="text-uppercase">Tracking Order No - </span>
                    <span class="text-medium"><?php echo e($orders->order_id); ?></span>
                </div>
                
                <div class="card-body mt-5">
                    <div
                        class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                        <div class="step <?php echo e($orders->status != 5 ? 'completed':''); ?>">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-gift"></i></div>
                            </div>
                            <h4 class="step-title">Pending</h4>
                        </div>
                        <div class="step <?php echo e($orders->status >= 1 && $orders->status != 5 ? 'completed':''); ?>">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-cart"></i></div>
                            </div>
                            <h4 class="step-title">Confirmed Order</h4>
                        </div>
                        <div class="step <?php echo e($orders->status >= 2 && $orders->status != 5 ? 'completed':''); ?>">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-tumblr-reblog"></i></div>
                            </div>
                            <h4 class="step-title">Processing Order</h4>
                        </div>

                        <div class="step <?php echo e($orders->status >= 3 && $orders->status != 5 ? 'completed':''); ?>">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-truck-delivery"></i></div>
                            </div>
                            <h4 class="step-title">On Delivery</h4>
                        </div>
                        <div class="step <?php echo e($orders->status >= 4 && $orders->status != 5 ? 'completed':''); ?>">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-hail"></i></div>
                            </div>
                            <h4 class="step-title">Product Delivered</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\all project\marhaba ecommerce\nitebiz\resources\views/backend/order/editorder.blade.php ENDPATH**/ ?>
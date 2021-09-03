<?php $__env->startSection('title', 'Edit posts'); ?>



<?php $__env->startSection('content'); ?>

    <?php
    $categories = get_books_categories();
    ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">View order</div>
                </div>

                <div>
                    <input type="hidden" name="id" value="<?php echo e($order->id); ?>">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mb-3">Infomation: </label>
                                    <div class="row">
                                        <div class="col-12 col-md-5 mb-4">
                                            <label>Name</label>
                                            <input value="<?php echo e($order->name); ?>" type="text" class="form-control" disabled>
                                        </div>
                                        <div class="col-12 col-md-5 mb-4">
                                            <label>Phone</label>
                                            <input value="<?php echo e($order->phone); ?>" type="text" class="form-control" disabled>
                                        </div>
                                        <div class="col-12 col-md-10 mb-4">
                                            <label>Email</label>
                                            <input value="<?php echo e($order->email); ?>" type="text" class="form-control" disabled>
                                        </div>
                                        <div class="col-md-12"></div>
                                        <div class="col-12 col-md-10">
                                            <label for="content">Address</label>
                                            <textarea class="form-control" rows="5"
                                                disabled><?php echo e($order->address); ?> <?php echo e($order->ls_ward); ?> <?php echo e($order->ls_district); ?> <?php echo e($order->ls_province); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3">Product: </label>
                                    <div class="row">
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item[1]>0): ?>
                                                <div class="col-12">
                                                    <div class="row border">
                                                        <div class="col-4">
                                                            <img class="img-fluid" src="/storage/<?php echo e($item[0]->image); ?>"
                                                                alt="">
                                                        </div>
                                                        <div class="col-8">
                                                            <div>
                                                                <p><?php echo e($item[0]->name); ?></p>
                                                                <p>Qty: <?php echo e($item[1]); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-12">
                                            <p class="mt-5 mb-2">Total: <?php echo e(number_format($order->price)); ?> vnđ</p>
                                            <p class="mb-2">Time: <?php echo e($order->created_at); ?></p>
                                            <p class="mb-2">Note: <?php echo e($order->note); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-5">
                                <form action="<?php echo e(route('get.update.status.order')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" value="<?php echo e($order->id); ?>" name="id">
                                    <label class="mb-3">Status</label>
                                    <select class="form-control text-white" name="status" value="<?php echo e($order->status); ?>"
                                        style="background-color: <?php echo e($order->status == -1 ? '#ed6b75' : ''); ?> <?php echo e($order->status == 2 ? '#36c6d3' : ''); ?> <?php echo e($order->status == 0 ? '#f1c40f' : ''); ?> <?php echo e($order->status == 1 ? '#659be0' : ''); ?>"
                                        <?php echo e($order->status == 2 || $order->status == -1 ? 'disabled' : ''); ?>>
                                        <option value="-1" <?php echo e($order->status == -1 ? 'selected' : ''); ?>>Canceled</option>
                                        <option value="0" <?php echo e($order->status == 0 ? 'selected' : ''); ?>>Pending</option>
                                        <option value="1" <?php echo e($order->status == 1 ? 'selected' : ''); ?>>Delivering</option>
                                        <option value="2" <?php echo e($order->status == 2 ? 'selected' : ''); ?>>Completed</option>
                                    </select>
                                    <div class="text-center mt-5">
                                        <?php if($order->status != 2 && $order->status != -1): ?>
                                            <button type="submit" class="btm btn-primary pl-4 pr-4">Lưu</button>
                                        <?php endif; ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/order/edit.blade.php ENDPATH**/ ?>
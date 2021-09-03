<?php $__env->startSection('title', 'List posts'); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">

                <div class="row p-5">

                    <div class="col-4">
                        <div class="border d-flex flex-column justify-content-center align-items-center bg-primary text-white position-relative"
                            style="height: 150px; border-radius: 10px">
                            <h4><?php echo e(number_format($report['revenue'])); ?> vnđ</h4><i class="fa fa-money position-absolute"
                                style="right: 15px; top: 15px"></i>
                            <h6 class="text-white-50">TODAY REVENUE</h6>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="border d-flex flex-column justify-content-center align-items-center bg-secondary text-white position-relative"
                            style="height: 150px; border-radius: 10px">
                            <h4><?php echo e($report['qty_order']); ?></h4><i class="fa fa-shopping-cart position-absolute"
                                style="right: 15px; top: 15px"></i>
                            <h6 class="text-white-50">TODAY ORDERS</h6>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="border d-flex flex-column justify-content-center align-items-center bg-warning text-white position-relative"
                            style="height: 150px; border-radius: 10px">
                            <h4><?php echo e($report['qty_book']); ?></h4><i class="fa fa-book position-absolute"
                                style="right: 15px; top: 15px"></i>
                            <h6 class="text-white-50">TOTAL PRODUCTS</h6>
                        </div>
                    </div>

                    <form action="<?php echo e(route('get.order.search')); ?>">
                        <div class="col-12 mt-3">
                            <label class="mr-4">Date</label>
                            from:
                            <input class="date" type="text" name="from" value="<?php if(request()->input('from')): ?> <?php echo e(request()->input('from')); ?> <?php endif; ?>">
                            to:
                            <input class="date" type="text" name="to" value="<?php if(request()->input('to')): ?> <?php echo e(request()->input('to')); ?> <?php endif; ?>">
                        </div>
                        <div class="col-12 mt-3">
                            <label class="mr-4">Info</label>
                            Name:
                            <input class="mr-2" type="text" name="name" value="<?php if(request()->input('name')): ?> <?php echo e(request()->input('name')); ?> <?php endif; ?>">
                            Phone:
                            <input class="mr-2" type="text" name="phone" value="<?php if(request()->input('phone')): ?> <?php echo e(request()->input('phone')); ?> <?php endif; ?>">
                            Email:
                            <input class="mr-2" type="text" name="email" value="<?php if(request()->input('email')): ?> <?php echo e(request()->input('email')); ?> <?php endif; ?>">
                        </div>
                        <div class="col-12 mt-3 text-center mb-5">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    <?php if(isset($orders_search)): ?>
                        <table class="table" ui-jq="footable" ui-options='{
                                "paging": {
                                "enabled": true
                                },
                                "filtering": {
                                "enabled": true
                                },
                                "sorting": {
                                "enabled": true
                                }}'>
                            <thead>
                                <tr>
                                    <th style="width: 20px">ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th class="text-center" style="width: 150px">Created_at</th>
                                    <th style="width: 20px">View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders_search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr data-expanded="true">
                                        <td><?php echo e($item->id); ?></td>
                                        <td><a href="<?php echo e(route('get.details.order', $item->id)); ?>"><?php echo e($item->name); ?></a>
                                        </td>
                                        <td><?php echo e($item->phone); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->status == 0 ? 'Pending' : ''); ?>

                                            <?php echo e($item->status == 1 ? 'Delivering' : ''); ?>

                                            <?php echo e($item->status == 2 ? 'Completed' : ''); ?></td>
                                        <td class="text-center"><?php echo e($item->created_at); ?></td>
                                        <td><a href="<?php echo e(route('get.details.order', $item->id)); ?>">xem</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/order/report.blade.php ENDPATH**/ ?>
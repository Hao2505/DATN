<?php $__env->startSection('title', 'List posts'); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">List orders</div>
                </div>
                
                <div>
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
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-expanded="true">
                                    <td><?php echo e($item->id); ?></td>
                                    <td><a href="<?php echo e(route('get.details.order', $item->id)); ?>"><?php echo e($item->name); ?></a></td>
                                    <td><?php echo e($item->phone); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><a style=" width: 105px; text-align: center;color: white;display: inline-block;padding: 5px 0;background-color: <?php echo e($item->status == -1 ? '#ed6b75' : ''); ?> <?php echo e($item->status == 2 ? '#36c6d3' : ''); ?> <?php echo e($item->status == 0 ? '#f1c40f' : ''); ?> <?php echo e($item->status == 1 ? '#659be0' : ''); ?>"><?php echo e($item->status == -1 ? 'Canceled' : ''); ?> <?php echo e($item->status == 0 ? 'Pending' : ''); ?> <?php echo e($item->status == 1 ? 'Delivering' : ''); ?> <?php echo e($item->status == 2 ? 'Completed' : ''); ?></a></td>
                                    <td class="text-center"><?php echo e($item->created_at); ?></td>
                                    <td><a href="<?php echo e(route('get.details.order', $item->id)); ?>">xem</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <?php echo e($orders->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/order/list.blade.php ENDPATH**/ ?>
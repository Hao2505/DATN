<?php $__env->startSection('title', 'List posts'); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">List newsletter</div>
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
                                <th>email</th>
                                <th>phone</th>
                                <th class="text-center" style="width: 150px">created_at</th>
                                <th style="width: 20px">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $newsletter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-expanded="true">
                                    <td><?php echo e($item->id); ?></td>
                                    <td>
                                        <?php echo e($item->name); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->email); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->phone); ?>

                                    </td>
                                    <td class="text-center"><?php echo e($item->created_at); ?></td>
                                    <td><a href="<?php echo e(route('newsletter.delete.post', $item->id)); ?>">Xóa</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <?php echo e($newsletter->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/newsletter/list.blade.php ENDPATH**/ ?>
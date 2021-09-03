<?php $__env->startSection('title', 'List posts'); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">List slider</div>
                    <a href="<?php echo e(route('get.create.slider')); ?>" style="position: absolute; right: 30px;top: 50%; transform: translateY(-50%)">create</a>
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
                                <th style="width: 100px">Image</th>
                                <th>title</th>
                                <th class="text-center" style="width: 150px">updated_at</th>
                                <th class="text-center" style="width: 150px">created_at</th>
                                <th style="width: 20px">edit</th>
                                <th style="width: 20px">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-expanded="true">
                                    <td><?php echo e($item->id); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('get.edit.slider', $item->id)); ?>">
                                            <img style="width: 100px; height: 100px; object-fit: cover;" src="/storage/<?php echo e($item->image); ?>" alt="">
                                        </a>
                                    </td>
                                    <td><a href="<?php echo e(route('get.edit.slider', $item->id)); ?>"><?php echo e($item->title); ?></a></td>
                                    <td class="text-center"><?php echo e($item->updated_at); ?></td>
                                    <td class="text-center"><?php echo e($item->created_at); ?></td>
                                    <td><a href="<?php echo e(route('get.edit.slider', $item->id)); ?>">Sửa</a></td>
                                    <td><a href="<?php echo e(route('post.delete.slider', $item->id)); ?>">Xóa</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/slider/list.blade.php ENDPATH**/ ?>
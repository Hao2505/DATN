<?php $__env->startSection('main'); ?>

    <div style="padding: 20px 0 100px 0">
        <div class="container">
            <h1 class="text-center text-black" style="padding-bottom: 40px">GIỎ HÀNG</h1>
            <?php if(count($books) > 0): ?>
                <form action="<?php echo e(route('frontend.update.cart')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
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
                                <th style="width: 20px">STT</th>
                                <th style="width: 100px">Hình ảnh</th>
                                <th>Tên sách</th>
                                <th class="text-center" style="width: 150px">Số lượng</th>
                                <th class="text-center" style="width: 150px">Đơn giá</th>
                                <th class="text-center" style="width: 150px">Thành tiền</th>
                                <th style="width: 20px">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="hidden" name="id[]" value="<?php echo e($item->id); ?>">
                                <tr data-expanded="true" class="item-cart">
                                    <td><?php echo e($key + 1); ?></td>
                                    <td>
                                        <a href="">
                                            <img style="width: 100px; height: 100px; object-fit: cover;"
                                                src="/storage/<?php echo e($item->image); ?>" alt="">
                                        </a>
                                    </td>
                                    <td><a href=""><?php echo e($item->name); ?></a></td>
                                    <td class="text-center">
                                        <input type="number" class="qty-cart" value="<?php echo e($qty[$item->id]); ?>" max="<?php echo e($item->qty); ?>"
                                            name="qty[<?php echo e($item->id); ?>]" min="0" style="width: 50px" onkeydown="return false">
                                    </td>
                                    <td class="text-center"><?php echo e(number_format($item->price)); ?> vnđ</td>
                                    <td class="text-center"><?php echo e(number_format($item->price * $qty[$item->id])); ?> vnđ</td>
                                    <td><a class="delete_cart" data-id="<?php echo e($item->id); ?>">Xóa</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Cập nhập giỏ hàng</button>
                        <button class="btn btn-primary" onclick="javascript:location.href='<?php echo e(route('frontend.checkout')); ?>'" type="button">Tiến hành đặt hàng</button>
                    </div>
                </form>
            <?php else: ?>

            <div class="text-center">
                Chưa có sản phẩm nào
            </div>

            <?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.no-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/frontend/book/cart.blade.php ENDPATH**/ ?>
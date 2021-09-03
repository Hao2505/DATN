<?php $__env->startSection('main'); ?>

    <?php
        $related_book = get_books_by_category($book->categories, 4, $book->id);
    ?>

    <section class="tts-box-payment">
        <div class="container">
            <div class="tts-make-center">

                <div class="tts-title-payment">
                    <h1 class="text-uppercase"><?php echo e($book->name); ?></h1>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="/storage/<?php echo e($book->image); ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <?php echo $book->description; ?>

                                <?php echo $book->content; ?>

                                <form action="<?php echo e(route('frontend.add.to.cart')); ?>" class="form-add-to-cart" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" value="<?php echo e($book->id); ?>" name="id">
                                    <?php if((isset(session('cart_df')[$book->id]) && session('cart_df')[$book->id] ==
                                    $book->qty) || $book->qty == 0): ?>
                                    <button class="btn btn-primary" disabled>Sách đã bán hết</button>
                                <?php else: ?>
                                    <button class="btn btn-primary" type="submit">Thêm vào giỏ hàng</button>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <h3>SÁCH CÙNG THỂ LOẠI</h3>
            <div class="row">
                <?php $__currentLoopData = $related_book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 tts-col-box-item">
                        <div class="tts-item-book" style="height: 100%; position: relative;">
                            <img class="img-fluid" src="/storage/<?php echo e($item->image); ?>"
                                onclick="javascript:location.href='<?php echo e(route('frontend.get.post', $item->id)); ?>'"
                                style="height: 300px; object-fit: cover; cursor: pointer" alt="">
                            <form action="<?php echo e(route('frontend.add.to.cart')); ?>" class="form-add-to-cart" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($item->id); ?>" name="id">
                                <?php if((isset(session('cart_df')[$item->id]) && session('cart_df')[$item->id] == $item->qty)
                                || $item->qty == 0): ?>
                                <button class="btn btn-primary" disabled>Thêm</button>
                            <?php else: ?>
                                <button class="btn btn-primary" type="submit">Thêm</button>
                <?php endif; ?>
                <a class="btn btn-light" type="button" href="<?php echo e(route('frontend.get.book', $item->id)); ?>">Xem</a>
                </form>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.no-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/frontend/book/book.blade.php ENDPATH**/ ?>
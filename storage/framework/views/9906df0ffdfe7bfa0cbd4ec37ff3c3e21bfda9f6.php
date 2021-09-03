<?php $__env->startSection('main'); ?>

    <section class="tts-box-payment">
        <div class="container">
            <div class="tts-make-center">
                <?php if(session('cart_df')): ?>
                    <div class="tts-title-payment">
                        <h1 class="text-uppercase">Thông tin đơn hàng</h1>
                        <hr>
                    </div>
                    <form method="POST" action="<?php echo e(route('frontend.checkout.post')); ?>" id="checkout-form">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-12">
                                <label class="tts-text-primary-color" for="name">Họ và tên *</label>
                                <input type="text" id="name" name="name" required>

                            </div>
                            <div class="col-sm-6">
                                <label class="tts-text-primary-color" for="phone">Số điện thoại *</label>
                                <input type="text" id="phone" name="phone" required>

                            </div>
                            <div class="col-sm-6">
                                <label class="tts-text-primary-color" for="email">Email *</label>
                                <input type="email" id="email" name="email" required>

                            </div>
                        </div>
                        <div class="row tts-box-border">
                            <div class="col-12">
                                <p>Chọn địa chỉ giao hàng đến cho Quý Khách</p>
                            </div>

                            <div class="col-md-6 tts-select-custom">
                                <select name="ls_province" required></select>
                                <span class="tts-custom-arrow">
                                    <img src="https://demo.navaco.vn/../themes/martfury/images/static/icons/icon-arrow-down.svg"
                                        alt="">
                                </span>
                            </div>
                            <div class="col-md-6 tts-select-custom">
                                <select name="ls_district" required></select>
                                <span class="tts-custom-arrow">
                                    <img src="https://demo.navaco.vn/../themes/martfury/images/static/icons/icon-arrow-down.svg"
                                        alt="">
                                </span>
                            </div>
                            <div class="col-md-6 tts-select-custom">
                                <select name="ls_ward" required></select>
                                <span class="tts-custom-arrow">
                                    <img src="https://demo.navaco.vn/../themes/martfury/images/static/icons/icon-arrow-down.svg"
                                        alt="">
                                </span>
                            </div>
                            <div class="col-md-6 tts-select-custom">
                                <input type="text" name="address" placeholder="Số nhà, tên đường" required>
                            </div>
                        </div>

                        <div class="row tts-box-border">
                            <div class="col-12">
                                <p>Ghi chú</p>
                            </div>

                            <div class="col-12 tts-select-custom">
                                <textarea class="form-control mb-5" name="note" cols="30" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 offset-md-6 tts-box-btn">
                                <div class="row">
                                    <button type="button" class="col-6 tts-btn-go-cart"
                                        onclick="javascript:location.href='<?php echo e(route('frontend.public.cart')); ?>'">Quay lại
                                        trang giỏ hàng</button>
                                    <button type="submit" class="col-6 tts-btn-order"
                                        data-processing-text="Đang xử lý. Vui lòng đợi..." data-error-header="Lỗi">
                                        Đặt hàng
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.no-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/frontend/book/checkout.blade.php ENDPATH**/ ?>
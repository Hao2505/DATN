<?php $__env->startSection('main'); ?>
    <?php if($errors->any()): ?>
        <div id="box_message" class="pl-3 pr-3 pt-1 pb-1" style="position: fixed; top: 50px; right: 50px; z-index: 9999; width: auto; background-color: #ac5500; border-radius: 5px">
            <h4 class="text-white mb-0 pb-0" style="font-size: 16px"><?php echo e($errors->first()); ?></h4>
        </div>
    <?php endif; ?>
    <?php
        $info = get_info_donation();
    ?>

    <section class="tts-contact">
        <section class="tts-contact-item">
            <div class="container">
                <div class="tts-home-title text-center">
                    <h2 class="mb-0">LIÊN HỆ</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425 85">
                        <image id="frame"
                            xlink:href="data:image/png;base64,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" />
                    </svg>
                </div>
            </div>
        </section>

        <section class="tts-contact-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tts-contact-box-item-info">
                            <h3>ĐỊA CHỈ</h3>
                            <p><?php echo e($info->address); ?></p>
                            <h3>EMAIL</h3>
                            <P><?php echo e($info->email); ?></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tts-contact-box-item-info">
                            <h3>ĐIỆN THOẠI</h3>
                            <p class="mb-0">Trụ Trì</p>
                            <P><?php echo e($info->abbot_phone); ?></P>
                            <P class="mb-0">Văn Phòng</P>
                            <P><?php echo e($info->office_phone); ?></P>
                            <P class="mb-0">Thư Ký</P>
                            <P><?php echo e($info->secretary_phone); ?></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tts-contact-box-item-info">
                            <h3>THÔNG TIN NGÂN HÀNG</h3>
                            <p>CHỦ TK: <?php echo e($info->Bank_account); ?></p>
                            <P>STK: <?php echo e($info->Bank_number); ?></P>
                            <P><?php echo e($info->Bank_nane); ?></P>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-3 mt-5">
                        <div class="tts-contact-box-item-info">
                            <h3>ĐĂNG KÝ NHẬN THÔNG TIN</h3>
                            <form action="<?php echo e(route('frontend.post.newsletter')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input class="form-control mt-2" type="text" name="name" placeholder="Họ tên" required>
                                <input class="form-control mt-2" type="number" name="phone" placeholder="Số điện thoại" required>
                                <input class="form-control mt-2" type="email" name="email" placeholder="email" required>
                                <button class="btn btn-primary mt-4">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tts-contact-item">
            <section class="tts-contact-map">
                <div class="container">
                    <div>
                        <h3>CHÙA DIỆU PHÁP LINH NGHĨA</h3>
                    </div>
                </div>
                <div>
                    <div class="tts-map">
                        <iframe width="100%" height="600"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.301202240366!2d106.03659191533616!3d11.312681152158348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b6c5e0d5d7099%3A0xa33c0f567105e6e8!2zQ2jDuWEgTGluaCBOZ2jEqWEgRGnhu4d1IFBow6Fw!5e0!3m2!1svi!2s!4v1627029973295!5m2!1svi!2s"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>

        </section>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/frontend/contact.blade.php ENDPATH**/ ?>
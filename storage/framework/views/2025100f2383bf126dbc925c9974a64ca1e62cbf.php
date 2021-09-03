<?php $__env->startSection('main'); ?>

    <?php
        $aboutushome = get_about_us_home();
    ?>

    <section class="tts-intro-home" data-aos="fade-up" data-aos-offset="10">
        <div class="container">
            <div class="tts-intro-home-box-content">
                <div class="tts-home-title text-center">
                    <h2 class="mb-0" data-aos="fade-up" data-aos-offset="10"><?php echo e($aboutushome->title); ?></h2>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425 85">
                        <image id="frame"
                            xlink:href="data:image/png;base64,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" />
                    </svg>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tts-intro-home-content-left" data-aos="fade-up" data-aos-offset="10">
                            <?php echo $aboutushome->content; ?>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tts-intro-home-content-right">
                            <div class="row">
                                <div class="col-6" data-aos="fade-up" data-aos-offset="10">
                                    <img src="/storage/<?php echo e($aboutushome->image_1); ?>" alt="">
                                </div>
                                <div class="col-6" data-aos="fade-up" data-aos-offset="10">
                                    <img src="/storage/<?php echo e($aboutushome->image_2); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tts-intro-home-content-right">
                            <div class="row">
                                <div class="col-4" data-aos="fade-up" data-aos-offset="10">
                                    <img src="/storage/<?php echo e($aboutushome->image_3); ?>" alt="">
                                </div>
                                <div class="col-4"  data-aos="fade-up" data-aos-offset="10">
                                    <img src="/storage/<?php echo e($aboutushome->image_4); ?>" alt="">
                                </div>
                                <div class="col-4"  data-aos="fade-up" data-aos-offset="10">
                                    <img src="/storage/<?php echo e($aboutushome->image_5); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $info = get_info_donation();
    ?>

    <section class="tts-info-home">
        <section class="tts-box-info-home-content">
            <div class="container">
                <div class="tts-info-home-content">
                    <div class="tts-info-contact">
                        <h2 data-aos="fade-up" data-aos-offset="10"><?php echo e($info->title); ?></h2>
                        <div class="row">
                            <div class="col-lg-4" data-aos="fade-up" data-aos-offset="10">
                                <p>TRỤ TRÌ: <?php echo e($info->abbot_phone); ?></p>
                            </div>
                            <div class="col-lg-4" data-aos="fade-up" data-aos-offset="10">
                                <p>VĂN PHÒNG: <?php echo e($info->office_phone); ?></p>
                            </div>
                            <div class="col-lg-4" data-aos="fade-up" data-aos-offset="10">
                                <p>THƯ KÝ: <?php echo e($info->secretary_phone); ?></p>
                            </div>
                            <div class="col-12" data-aos="fade-up" data-aos-offset="10">
                                <p>Gmail: <?php echo e($info->email); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tts-info-bank">
                        <p data-aos="fade-up" data-aos-offset="10">Thông tin tài khoản</p>
                        <p data-aos="fade-up" data-aos-offset="10">Tên tài khoản: <?php echo e($info->Bank_account); ?></p>
                        <p data-aos="fade-up" data-aos-offset="10">Số tài khoản: <?php echo e($info->Bank_number); ?> </p>
                        <p data-aos="fade-up" data-aos-offset="10"><?php echo e($info->Bank_nane); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php
        $posts = get_posts_by_category(2, 4);
    ?>

    <section class="tts-even-home" data-aos="fade-up" data-aos-offset="10">
        <div class="container">
            <div class="tts-even-home-box-content">
                <div class="tts-home-title text-center">
                    <h2 class="mb-0" data-aos="fade-up" data-aos-offset="10">THÔNG BẠCH</h2>
                    <svg data-aos="fade-up" data-aos-offset="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425 85">
                        <image id="frame"
                            xlink:href="data:image/png;base64,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" />
                    </svg>
                </div>
                <div class="tts-even-home-content d-none d-lg-block">
                    <div class="row">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6 pt-3 pb-3 pl-4 pr-4">
                                <div class="row">
                                    <div class="col-lg-6 tts-box-content-text p-0" data-aos="fade-up" data-aos-offset="10">
                                        <div class="tts-content-text">
                                            <h3><?php echo e($item->name); ?></h3>
                                            <p><?php echo e($item->description); ?></p>
                                            <a href="<?php echo e(route('frontend.get.post', $item->id)); ?>">read more</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0 tts-box-content-img" data-aos="fade-up" data-aos-offset="10">
                                        <img src="/storage/<?php echo e($item->image); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="tts-even-home-content-slider tts-action-control d-block d-lg-none">
                    <div class="tts-even-home-content tts-even-home-content-mobile">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tts-even-slder-item pt-3 pb-3 pl-4 pr-4">
                                <div class="row">
                                    <div class="col-lg-6 tts-box-content-text p-0" data-aos="fade-up" data-aos-offset="10">
                                        <div class="tts-content-text">
                                            <h3><?php echo e($item->name); ?></h3>
                                            <p><?php echo e($item->description); ?></p>
                                            <a href="">read more</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0 tts-box-content-img" data-aos="fade-up" data-aos-offset="10">
                                        <img src="/storage/<?php echo e($item->image); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="tts-action-control-slider">
                        <div class="tts-control-slider">
                            <div class="tts-btn tts-btn-prev">
                                <span class="icon-icon-left"></span>
                            </div>
                            <div class="tts-btn tts-btn-next">
                                <span class="icon-icon-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tts-service-home">
        <div class="tts-box-service-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-6">
                        <img class="img-fluid" data-aos="fade-up" data-aos-offset="10" src="/images/home/Group 255.png" alt="">
                        <h3 data-aos="fade-up" data-aos-offset="10">TỪ THIỆN</h3>
                    </div>
                    <div class="col-sm-4 col-6">
                        <img class="img-fluid" data-aos="fade-up" data-aos-offset="10" src="/images/home/Group 263.png" alt="">
                        <h3 data-aos="fade-up" data-aos-offset="10">PHẬT SỰ</h3>
                    </div>
                    <div class="col-sm-4 col-12">
                        <img class="img-fluid" data-aos="fade-up" data-aos-offset="10" src="/images/home/Group 357.png" alt="">
                        <h3 data-aos="fade-up" data-aos-offset="10">XÂY DỰNG</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $posts = get_posts_by_category(6, 4);
    ?>

    <section class="tts-blog-home">
        <div class="tts-box-blog-content">
            <div class="container">
                <div class="tts-home-title text-center">
                    <h2 class="mb-0" data-aos="fade-up" data-aos-offset="10">TIN TỨC</h2>
                    <svg data-aos="fade-up" data-aos-offset="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425 85">
                        <image id="frame"
                            xlink:href="data:image/png;base64,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" />
                    </svg>
                </div>
                <div class="tts-blog-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="tts-blog-content-left">
                                <div class="row">
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-6" data-aos="fade-up" data-aos-offset="10">
                                            <div class="tts-item-blog-home">
                                                <img onclick="javascript:location.href='<?php echo e(route('frontend.get.post', $item->id)); ?>'" src="/storage/<?php echo e($item->image); ?>" alt="" style="cursor: pointer">
                                                <h3 onclick="javascript:location.href='<?php echo e(route('frontend.get.post', $item->id)); ?>'" style="cursor: pointer"><?php echo e($item->name); ?></h3>
                                            </div>
                                        </div>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>

                        <?php
                            $posts = get_posts_by_category(6, 12);
                        ?>

                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="tts-blog-content-right">
                                <div class="title-blog-menu">
                                    <h3 data-aos="fade-up" data-aos-offset="10">THÔNG TIN MỚI</h3>
                                </div>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div data-aos="fade-up" data-aos-offset="10" class="tts-item-blog-menu" onclick="javascript:location.href='<?php echo e(route('frontend.get.post', $item->id)); ?>'" style="cursor: pointer">
                                        <p><?php echo e($item->name); ?></p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tts-rule-home">
        <div class="tts-box-rule-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 offset-md-1 d-flex align-items-center justify-content-center">
                        <h3 data-aos="fade-up" data-aos-offset="10">
                            <p>14</p> điều răn của Phật
                        </h3>
                    </div>
                    <div class="col-lg-7 offset-md-1">
                        <p data-aos="fade-up" data-aos-offset="10">> Kẻ thù lớn nhất của đời người là chính mình</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Ngu dốt lớn nhất của đời người là dối trá</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Thất bại lớn nhất của đời người là tự đại</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Bi ai lớn nhất của đời người là ghen tị</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Sai lầm lớn nhất của đời người là đánh mất mình</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Tội lỗi lớn nhất của đời người là bất hiếu</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Đáng thương lớn nhất của đời người là tự ti</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Khâm phục lớn nhất của đời người là vươn lên sau khi ngã</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Phá sản lớn nhất của đời người là tuyệt vọng</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Tài sản lớn nhất của đời người là sức khỏe, trí tuệ</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Món nợ lớn nhất của đời người là tình cảm</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Lễ vật lớn nhất của đời người là sự khoan dung</p>
                        <p data-aos="fade-up" data-aos-offset="10">> Khiếm khuyết lớn nhất của đời người là kém hiểu biết</p>
                        <p data-aos="fade-up" data-aos-offset="10">> An ủi lớn nhất của đời người là bố thí</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $posts = get_posts_by_category(7, 3);
    ?>

    <section class="tts-event-blog-home" data-aos="fade-up" data-aos-offset="10">
        <div class="tts-box-event-blog-content">
            <div class="container">
                <div class="tts-home-title text-center">
                    <h2 class="mb-0" data-aos="fade-up" data-aos-offset="10">PHẬT SỰ</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425 85">
                        <image id="frame"
                            xlink:href="data:image/png;base64,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" />
                    </svg>
                </div>
                <div class="tts-event-blog-content d-none d-lg-block">
                    <div class="row">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 tts-col-event-blog">
                                <div class="tts-item-event-blog" data-aos="fade-up" data-aos-offset="10">
                                    <img onclick="javascript:location.href='<?php echo e(route('frontend.get.post', $item->id)); ?>'" style="cursor: pointer" class="img-fluid" src="/storage/<?php echo e($item->image); ?>" alt="">
                                    <div onclick="javascript:location.href='<?php echo e(route('frontend.get.post', $item->id)); ?>'" class="tts-item-content" style="cursor: pointer">
                                        <h3><?php echo e($item->name); ?></h3>
                                        <p><?php echo e($item->description); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="tts-event-blog-slider tts-action-control d-block d-lg-none">
                    <div class="tts-event-blog-content tts-event-blog-content-mobile">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tts-col-event-blog" data-aos="fade-up" data-aos-offset="10">
                                <div class="tts-item-event-blog">
                                    <img class="img-fluid" src="/storage/<?php echo e($item->image); ?>" alt="">
                                    <div class="tts-item-content">
                                        <h3 onclick="javascript:location.href='<?php echo e(route('frontend.get.post', $item->id)); ?>'" style="cursor: pointer"><?php echo e($item->name); ?></h3>
                                        <p onclick="javascript:location.href='<?php echo e(route('frontend.get.post', $item->id)); ?>'" style="cursor: pointer"><?php echo e($item->description); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="tts-action-control-slider">
                        <div class="tts-control-slider">
                            <div class="tts-btn tts-btn-prev">
                                <span class="icon-icon-left"></span>
                            </div>
                            <div class="tts-btn tts-btn-next">
                                <span class="icon-icon-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tts-gallery">
        <div class="tts-box-gallery-content">
            <div class="container">
                <div class="tts-home-title text-center">
                    <h2 class="mb-0" data-aos="fade-up" data-aos-offset="10">HÌNH ẢNH CHÙA</h2>
                    <svg data-aos="fade-up" data-aos-offset="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425 85">
                        <image id="frame"
                            xlink:href="data:image/png;base64,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" />
                    </svg>
                </div>
                <div class="tts-gallery-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="tts-item-gallery">
                                <a href="/images/home/Mask Group 35.png" data-lightbox="gallery2">
                                    <img src="/images/home/Mask Group 35.png" data-aos="fade-up" data-aos-offset="10" alt="">
                                </a>
                            </div>
                            <div class="tts-item-gallery">
                                <a href="/images/home/Mask Group 34.png" data-lightbox="gallery2">
                                    <img src="/images/home/Mask Group 34.png" data-aos="fade-up" data-aos-offset="10" alt="">
                                </a>
                            </div>
                            <div class="tts-item-gallery">
                                <a href="/images/home/Mask Group 33.png" data-lightbox="gallery2">
                                    <img src="/images/home/Mask Group 33.png" data-aos="fade-up" data-aos-offset="10" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tts-item-gallery">
                                <a href="/images/home/Mask Group 30.png" data-lightbox="gallery2">
                                    <img src="/images/home/Mask Group 30.png" data-aos="fade-up" data-aos-offset="10" alt="">
                                </a>
                            </div>
                            <div class="tts-item-gallery">
                                <a href="/images/home/Mask Group 37.png" data-lightbox="gallery2">
                                    <img src="/images/home/Mask Group 37.png" data-aos="fade-up" data-aos-offset="10" alt="">
                                </a>
                            </div>
                            <div class="tts-item-gallery">
                                <a href="/images/home/Mask Group 36.png" data-lightbox="gallery2">
                                    <img src="/images/home/Mask Group 36.png" data-aos="fade-up" data-aos-offset="10" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tts-item-gallery">
                                <a href="/images/home/Mask Group 38.png" data-lightbox="gallery2">
                                    <img src="/images/home/Mask Group 38.png" data-aos="fade-up" data-aos-offset="10" alt="">
                                </a>
                            </div>
                            <div class="tts-item-gallery">
                                <a href="/images/home/Mask Group 39.png" data-lightbox="gallery2">
                                    <img src="/images/home/Mask Group 39.png" data-aos="fade-up" data-aos-offset="10" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/frontend/home.blade.php ENDPATH**/ ?>
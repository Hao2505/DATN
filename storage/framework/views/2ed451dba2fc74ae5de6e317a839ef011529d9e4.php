<?php $__env->startSection('title', 'Edit posts'); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Edit post</div>
                </div>
                
                <div>
                    <form action="<?php echo e(route('post.edit.aboutushome')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12 mb-5">
                                        <label for="name">Title</label>
                                        <input value="<?php if(isset($aboutushome->title)): ?><?php echo e($aboutushome->title); ?><?php endif; ?>" id="name" name="title" type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="content">content</label>
                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php if(isset($aboutushome->content)): ?><?php echo e($aboutushome->content); ?><?php endif; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div  class="mb-5">
                                    <label>Image 1</label>
                                    <input name="image_1" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            <?php if(isset($aboutushome->image_1)): ?>
                                                <img class="img-fluid" src="/storage/<?php echo e($aboutushome->image_1); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div  class="mb-5">
                                    <label>Image 2</label>
                                    <input name="image_2" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            <?php if(isset($aboutushome->image_2)): ?>
                                                <img class="img-fluid" src="/storage/<?php echo e($aboutushome->image_2); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div  class="mb-5">
                                    <label>Image 3</label>
                                    <input name="image_3" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            <?php if(isset($aboutushome->image_3)): ?>
                                                <img class="img-fluid" src="/storage/<?php echo e($aboutushome->image_3); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div  class="mb-5">
                                    <label>Image 4</label>
                                    <input name="image_4" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            <?php if(isset($aboutushome->image_4)): ?>
                                                <img class="img-fluid" src="/storage/<?php echo e($aboutushome->image_4); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div  class="mb-5">
                                    <label>Image 5</label>
                                    <input name="image_5" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            <?php if(isset($aboutushome->image_5)): ?>
                                                <img class="img-fluid" src="/storage/<?php echo e($aboutushome->image_5); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-9 mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btm btn-primary pl-4 pr-4">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/aboutushome/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Create posts'); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Create slider</div>
                </div>
                
                <div>
                    <form action="<?php echo e(route('post.store.slider')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>  
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12 mb-5">
                                        <label for="name">Title</label>
                                        <input id="name" name="title" type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <label for="description">description</label>
                                        <textarea name="description" id="description" style="width: 100%; padding: 12px" rows="5"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="content">content</label>
                                        <textarea class="form-control" name="content" id="content" cols="30" rows="50"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <label>Image</label>
                                    <input name="image" type="file">
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


<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/slider/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Create category'); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Create category</div>
                </div>
                
                <div>
                    <form action="<?php echo e(route('post.store.category')); ?>" method="post">
                        <?php echo csrf_field(); ?>  
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="description">description</label>
                                        <input id="description" name="description" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                
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


<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/category/create.blade.php ENDPATH**/ ?>
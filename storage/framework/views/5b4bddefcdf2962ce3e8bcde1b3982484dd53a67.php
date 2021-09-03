<?php $__env->startSection('title', 'Edit posts'); ?>



<?php $__env->startSection('content'); ?>

    <?php
        $categories = get_books_categories();
    ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Edit books</div>
                </div>
                
                <div>
                    <form action="<?php echo e(route('post.edit.book')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($book->id); ?>">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12 mb-5">
                                        <label for="name">Name</label>
                                        <input value="<?php echo e($book->name); ?>" id="name" name="name" type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <label for="description">description</label>
                                        <textarea name="description" id="description" style="width: 100%; padding: 12px" rows="5"><?php echo e($book->description); ?></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="content">content</label>
                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php echo e($book->content); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <label for="name">category</label>
                                    <select class="form-control" name="category" value="<?php echo e($book->categories); ?>">
                                        <option hidden <?php echo e($book->categories == null ? 'selected' : ''); ?> value="">Select category</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>" <?php echo e($book->categories == $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>                                          
                                </div>
                                <div class="mb-5">
                                    <label for="qty">Qty</label>
                                    <input id="qty" name="qty" value="<?php echo e($book->qty); ?>" type="text" class="form-control">
                                </div>
                                <div class="mb-5">
                                    <label for="price">Price</label>
                                    <input id="price" name="price" value="<?php echo e($book->price); ?>" type="text" class="form-control">
                                </div>
                                <div  class="mb-5">
                                    <label>Image</label>
                                    <input name="image" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            <img class="img-fluid" src="/storage/<?php echo e($book->image); ?>" alt="">
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


<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/books/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Edit posts'); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Edit post</div>
                </div>
                
                <div>
                    <form action="<?php echo e(route('post.edit.donationinfomation')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <table style="width: 100%">
                                    <tr>
                                        <td class="pb-3" style="width: 20%"><label class="mr-5" for="name">Title:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->title)): ?><?php echo e($info->title); ?><?php endif; ?>" id="name" name="title" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="abbot_phone">Abbot's phone:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->abbot_phone)): ?><?php echo e($info->abbot_phone); ?><?php endif; ?>" id="abbot_phone" name="abbot_phone" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="office_phone">Office's phone:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->office_phone)): ?><?php echo e($info->office_phone); ?><?php endif; ?>" id="office_phone" name="office_phone" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="secretary_phone">Secretary's phone:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->secretary_phone)): ?><?php echo e($info->secretary_phone); ?><?php endif; ?>" id="secretary_phone" name="secretary_phone" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="email">Email:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->email)): ?><?php echo e($info->email); ?><?php endif; ?>" id="email" name="email" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="address">Address:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->address)): ?><?php echo e($info->address); ?><?php endif; ?>" id="address" name="address" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="Bank_account">Bank account:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->Bank_account)): ?><?php echo e($info->Bank_account); ?><?php endif; ?>" id="Bank_account" name="Bank_account" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="Bank_number">Bank number:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->Bank_number)): ?><?php echo e($info->Bank_number); ?><?php endif; ?>" id="Bank_number" name="Bank_number" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="Bank_name">Bank name:</label></td>
                                        <td class="pb-3"><input value="<?php if(isset($info->Bank_nane)): ?><?php echo e($info->Bank_nane); ?><?php endif; ?>" id="Bank_name" name="Bank_name" type="text" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-lg-12 mt-4">
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


<?php echo $__env->make('backend.layout.basic_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\DATN\blog\resources\views/backend/donationInfomation/edit.blade.php ENDPATH**/ ?>
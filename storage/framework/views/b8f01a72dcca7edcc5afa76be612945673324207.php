<?php $__env->startSection('content'); ?>
    <div class="card shadow mb-4" style="width: 100%">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('admin.comments.update',$findComments->id)); ?>" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" value="<?php echo e($findComments->name); ?>" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">E-Mail</label>
                    <input type="text" value="<?php echo e($findComments->e_mail); ?>" name="e_mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Comment</label>
                    <input type="text" value="<?php echo e($findComments->comment); ?>" name="comment" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Article</label>
                    <select class="form-control" name="post_id" required>
                        <option value="">Choose Category</option>
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if($findComments->post_id == $article->id): ?> selected <?php endif; ?> value="<?php echo e($article->id); ?>"><?php echo e($article->title); ?></option>                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="from-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Comment</button>
                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card shadow mb-4" style="width: 100%">
        <div class="card-header py-3">
            <h3 style="color: white; text-align: center">Edit <?php echo e($findArticle->title); ?> Post</h3>
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('admin.blogs.update',$findArticle->id)); ?>" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <?php echo e(method_field('PUT')); ?>

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="<?php echo e($findArticle->title); ?>" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" value="<?php echo e($findArticle->slug); ?>" name="slug" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Short Info</label>
                    <input type="text" value="<?php echo e($findArticle->short_info); ?>" name="short_info" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select class="form-control" name="category" required>
                        <option value="">Choose Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if($findArticle->category_id == $category->id): ?> selected <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="from-group">
                    <label for="">Header Image</label><br/>
                    <img class="img-thumbnail rounded" width="500px" src="<?php echo e(asset($findArticle->header_image)); ?>" alt="">

                    <input type="file" name="header_image" class="form-control" >
                </div>
                <div class="from-group">
                    <label for="">Main Image</label><br/>
                    <img class="img-thumbnail rounded" width="500px" src="<?php echo e(asset($findArticle->main_image)); ?>" alt="">
                    <input type="file" name="main_image" class="form-control" >
                </div>

                <div class="from-group">
                    <label for="">Body</label>
                    <textarea name="body"  id="editor" class="form-control editor" cols="30" rows="10"><?php echo $findArticle->body; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Tags</label>
                    <input type="text" value="<?php echo e($findArticle->tags); ?>" name="tags" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" value="<?php echo e($findArticle->author_id); ?>" name="author" class="form-control">
                </div>

                <div class="from-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Article</button>
                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<script>
    $('.editor').each(function() {
        CKEDITOR.replace($(this).attr('id'), {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=0tD5JmSzSVHDEF3QbY4XE18q6jyTgVvWtJBS0DXc',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=0tD5JmSzSVHDEF3QbY4XE18q6jyTgVvWtJBS0DXc'
        });
    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
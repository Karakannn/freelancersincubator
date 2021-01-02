<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo app('translator')->getFromJson('global.blog.title'); ?></h3>
<?php echo Form::open(['method' => 'POST', 'route' => ['admin.blogs.store'], 'files' => true,]); ?>


<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo app('translator')->getFromJson('global.app_create'); ?>
    </div>
    
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('title', 'Title*', ['class' => 'control-label']); ?>

                <?php echo Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('title')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('title')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('slug', 'Slug', ['class' => 'control-label']); ?>

                <?php echo Form::text('slug', old('slug'), ['class' => 'form-control', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('slug')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('slug')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('body', 'Body', ['class' => 'control-label']); ?>

                <?php echo Form::textarea('body', old('body'), ['class' => 'form-control editor', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('body')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('body')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('header_image', 'Header image', ['class' => 'control-label']); ?>

                <?php echo Form::file('header_image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                <?php echo Form::hidden('header_image_max_size', 8); ?>

                <?php echo Form::hidden('header_image_max_width', 4000); ?>

                <?php echo Form::hidden('header_image_max_height', 4000); ?>

                <p class="help-block"></p>
                <?php if($errors->has('header_image')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('header_image')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('image', 'Image', ['class' => 'control-label']); ?>

                <?php echo Form::file('image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                <?php echo Form::hidden('image_max_size', 8); ?>

                <?php echo Form::hidden('image_max_width', 4000); ?>

                <?php echo Form::hidden('image_max_height', 4000); ?>

                <p class="help-block"></p>
                <?php if($errors->has('image')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('image')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']); ?>

<?php echo Form::close(); ?>

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
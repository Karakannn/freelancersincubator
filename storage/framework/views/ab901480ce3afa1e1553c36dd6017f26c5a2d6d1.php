<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.courses.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.courses.store'], 'files' => true,]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_create'); ?>
        </div>
        
        <div class="panel-body">
            <?php if(Auth::user()->isAdmin()): ?>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('teachers', 'Teachers', ['class' => 'control-label']); ?>

                    <?php echo Form::select('teachers[]', $teachers, old('teachers'), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('teachers')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('teachers')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
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
                    <?php echo Form::label('description', 'Description', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('description')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('description')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('price', 'Price*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('price', old('price'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('price')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('price')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('duration', 'Duration*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('duration', old('duration'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('duration')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('duration')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('course_image', 'Course image', ['class' => 'control-label']); ?>

                    <?php echo Form::file('course_image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                    <?php echo Form::hidden('course_image_max_size', 8); ?>

                    <?php echo Form::hidden('course_image_max_width', 4000); ?>

                    <?php echo Form::hidden('course_image_max_height', 4000); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('course_image')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('course_image')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('start_date', 'Start date', ['class' => 'control-label']); ?>

                    <?php echo Form::text('start_date', old('start_date'), ['class' => 'form-control date', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('start_date')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('start_date')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('start_time', 'Start time', ['class' => 'control-label']); ?>

                    <?php echo Form::text('start_time', old('start_time'), ['class' => 'form-control time', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('start_time')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('start_time')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('published', 'Published', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('published', 0); ?>

                    <?php echo Form::checkbox('published', 1, false, []); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('published')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('published')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('course_type', 'Course Type', ['class' => 'control-label']); ?>

                    <?php echo Form::select('course_type', $course_type, old('course_type'), ['class' => 'form-control select2', 'multiple' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('course_type')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('course_type')); ?>

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
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "<?php echo e(config('app.date_format_js')); ?>"
        });
    </script>
<script>
        $('.time').datetimepicker({
            format: 'HH:mm:ss'
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
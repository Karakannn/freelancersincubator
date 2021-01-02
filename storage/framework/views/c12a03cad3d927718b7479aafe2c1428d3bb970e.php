<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.slider.title'); ?></h3>
    
    <?php echo Form::model($slider, ['method' => 'PUT', 'route' => ['admin.slider.update', $slider->id], 'files' => true,]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('line_1', 'Line 1*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('line_1', old('line_1'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('line_1')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('line_1')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('line_2', 'Line 2*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('line_2', old('line_2'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('line_2')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('line_2')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('line_3', 'Line 3*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('line_3', old('line_3'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('line_3')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('line_3')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('button_text', 'Button Text', ['class' => 'control-label']); ?>

                    <?php echo Form::text('button_text', old('button_text'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('button_text')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('button_text')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('button_url', 'Button URL', ['class' => 'control-label']); ?>

                    <?php echo Form::text('button_url', old('button_url'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('button_url')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('button_url')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php if($slider->image): ?>
                        <a href="<?php echo e(asset('uploads/'.$slider->image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/'.$slider->image)); ?>"></a>
                    <?php endif; ?>
                    <?php echo Form::label('image', 'Slider Image', ['class' => 'control-label']); ?>

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

    <?php echo Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
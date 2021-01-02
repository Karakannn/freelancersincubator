<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.info.title'); ?></h3>
    
    <?php echo Form::model($info, ['method' => 'PUT', 'route' => ['admin.info.update', $info->id], 'files' => true,]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('contact_number', 'Contact Number*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('contact_number', old('contact_number'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('contact_number')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('contact_number')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('office_location', 'Office Location*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('office_location', old('office_location'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('office_location')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('office_location')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('email', 'Email*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('email')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('email')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('linkedin_url', 'Linkedin url', ['class' => 'control-label']); ?>

                    <?php echo Form::text('linkedin_url', old('linkedin_url'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('linkedin_url')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('linkedin_url')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('facebook_url', 'Facebook url', ['class' => 'control-label']); ?>

                    <?php echo Form::text('facebook_url', old('facebook_url'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('facebook_url')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('facebook_url')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('twitter_url', 'Twitter url', ['class' => 'control-label']); ?>

                    <?php echo Form::text('twitter_url', old('twitter_url'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('twitter_url')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('twitter_url')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('youtube_url', 'Youtube url', ['class' => 'control-label']); ?>

                    <?php echo Form::text('youtube_url', old('youtube_url'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('youtube_url')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('youtube_url')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php if($info->image): ?>
                        <a href="<?php echo e(asset('uploads/'.$info->image)); ?>" target="_blank"><img class="img-square" src="<?php echo e(asset('uploads/'.$info->image)); ?>"></a>
                    <?php endif; ?>
                    <?php echo Form::label('image', 'Logo Image', ['class' => 'control-label']); ?>

                    <?php echo Form::file('image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('image')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('image')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php if($info->footer_image): ?>
                        <a href="<?php echo e(asset('uploads/'.$info->footer_image)); ?>" target="_blank"><img class="img-square" src="<?php echo e(asset('uploads/'.$info->footer_image)); ?>"></a>
                    <?php endif; ?>
                    <?php echo Form::label('footer_image', 'Footer Image', ['class' => 'control-label']); ?>

                    <?php echo Form::file('footer_image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('footer_image')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('footer_image')); ?>

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
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
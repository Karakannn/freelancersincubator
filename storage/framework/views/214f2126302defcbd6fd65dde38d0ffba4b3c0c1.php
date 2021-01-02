<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo app('translator')->getFromJson('global.users.title'); ?></h3>

<?php echo Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id], 'files' => true,]); ?>


<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo app('translator')->getFromJson('global.app_edit'); ?>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('name', 'Name*', ['class' => 'control-label']); ?>

                <?php echo Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('name')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('name')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('email', 'Email*', ['class' => 'control-label']); ?>

                <?php echo Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

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
                <?php echo Form::label('password', 'Password', ['class' => 'control-label']); ?>

                <?php echo Form::password('password', ['class' => 'form-control', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('password')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('password')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('role', 'Role*', ['class' => 'control-label']); ?>

                <?php echo Form::select('role[]', $roles, old('role') ? old('role') : $user->role->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('role')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('role')); ?>

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
                <?php echo Form::label('website_url', 'Website url', ['class' => 'control-label']); ?>

                <?php echo Form::text('website_url', old('website_url'), ['class' => 'form-control', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('website_url')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('website_url')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('phone', 'Phone*', ['class' => 'control-label']); ?>

                <?php echo Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('phone')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('phone')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('presentation', 'Presentation', ['class' => 'control-label']); ?>

                <?php echo Form::textarea('presentation', old('presentation'), ['class' => 'form-control', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('presentation')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('presentation')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php if($user->profile_image): ?>
                <a href="<?php echo e(asset('uploads/'.$user->profile_image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/'.$user->profile_image)); ?>"></a>
                <?php endif; ?>
                <?php echo Form::label('profile_image', 'Profile image', ['class' => 'control-label']); ?>

                <?php echo Form::file('profile_image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                <?php echo Form::hidden('profile_image_max_size', 8); ?>

                <?php echo Form::hidden('profile_image_max_width', 4000); ?>

                <?php echo Form::hidden('profile_image_max_height', 4000); ?>

                <p class="help-block"></p>
                <?php if($errors->has('profile_image')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('profile_image')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
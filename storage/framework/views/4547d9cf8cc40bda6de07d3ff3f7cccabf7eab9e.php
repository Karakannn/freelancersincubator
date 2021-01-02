<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.testimonials.title'); ?></h3>
    <?php echo Form::open(['method' => 'PUT', 'route' => ['admin.testimonials.update', $testimonial->id], 'files' => true,]); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_create'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('client', 'Client*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('client', $testimonial->client, ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('client')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('client')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('position', 'Position*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('position', $testimonial->position, ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('position')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('position')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('title', 'Testimonial*', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('title', $testimonial->title, ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

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
                    <?php echo Form::label('image', 'Client image', ['class' => 'control-label']); ?>

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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.header.title'); ?></h3>
    
    <?php echo Form::model($header, ['method' => 'PUT', 'route' => ['admin.header.update', $header->id], 'files' => true,]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php if($header->image): ?>
                        <a href="<?php echo e(asset('uploads/'.$header->image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/'.$header->image)); ?>"></a>
                    <?php endif; ?>
                    <?php echo Form::label('image', 'Header Image', ['class' => 'control-label']); ?>

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
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
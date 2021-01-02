<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.slider.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_view'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.slider.fields.line_1'); ?></th>
                            <td><?php echo e($slider->line_1); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.slider.fields.line_2'); ?></th>
                            <td><?php echo e($slider->line_2); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.slider.fields.line_3'); ?></th>
                            <td><?php echo e($slider->line_3); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.slider.fields.button_text'); ?></th>
                            <td><?php echo e($slider->button_text); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.slider.fields.button_url'); ?></th>
                            <td><?php echo e($slider->button_url); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.slider.fields.image'); ?></th>
                            <td><?php if($slider->image): ?><a href="<?php echo e(asset('uploads/' . $slider->image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/' . $slider->image)); ?>"/></a><?php endif; ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <a href="<?php echo e(route('admin.slider.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('global.app_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo app('translator')->getFromJson('global.testimonials.title'); ?></h3>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo app('translator')->getFromJson('global.app_view'); ?>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.image'); ?></th>
                        <td><?php echo e($testimonials->image); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.client'); ?></th>
                        <td><?php echo e($testimonials->client); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.position'); ?></th>
                        <td><?php echo e($testimonials->position); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.title'); ?></th>
                        <td><?php echo e($testimonials->title); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.created_at'); ?></th>
                        <td><?php echo e($testimonials->created_at); ?></td>
                    </tr>
                </table>
            </div>
        </div><!-- Nav tabs -->
        <p>&nbsp;</p>
        <a href="<?php echo e(route('admin.testimonials.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('global.app_back_to_list'); ?></a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
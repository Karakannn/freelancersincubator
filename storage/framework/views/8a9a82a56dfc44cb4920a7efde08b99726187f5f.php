<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo app('translator')->getFromJson('global.header.title'); ?></h3>
<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo app('translator')->getFromJson('global.app_list'); ?>
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped <?php echo e(count($header) > 0 ? 'datatable' : ''); ?>">
            <thead>
                <tr>
                    <th><?php echo app('translator')->getFromJson('global.header.fields.image'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.header.fields.page'); ?></th>
                </tr>
            </thead>

            <tbody>
                <?php if(count($header) > 0): ?>
                <?php $__currentLoopData = $header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($single_header->id); ?>">
                    <td><?php if($single_header->image): ?><a href="<?php echo e(asset('uploads/' . $single_header->image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/' . $single_header->image)); ?>" /></a><?php endif; ?></td>
                    <td><?php echo e($single_header->page); ?></td>
                    <td>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('header_edit')): ?>
                        <a href="<?php echo e(route('admin.header.edit',[$single_header->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <td colspan="12"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
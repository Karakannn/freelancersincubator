<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo app('translator')->getFromJson('global.info.title'); ?></h3>
<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo app('translator')->getFromJson('global.app_list'); ?>
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped <?php echo e(count($info) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('info_delete')): ?> <?php if( request('info_delete') != 1 ): ?> dt-select <?php endif; ?> <?php endif; ?>">
            <thead>
                <tr>
                    <th><?php echo app('translator')->getFromJson('global.info.fields.logo'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.info.fields.phone'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.info.fields.address'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.info.fields.email'); ?></th>
                    <?php if( request('show_deleted') == 1 ): ?>
                    <th>&nbsp;</th>
                    <?php else: ?>
                    <th>&nbsp;</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php if(count($info) > 0): ?>
                <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($single_info->id); ?>">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('info_delete')): ?>
                    <?php if( request('show_deleted') != 1 ): ?><td></td><?php endif; ?>
                    <?php endif; ?>

                    <td><?php if($single_info->image): ?><a href="<?php echo e(asset('uploads/' . $single_info->image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/' . $single_info->image)); ?>" /></a><?php endif; ?></td>
                    <td><?php echo e($single_info->contact_number); ?></td>
                    <td><?php echo e($single_info->office_location); ?></td>
                    <td><?php echo e($single_info->email); ?></td>
                    <?php if( request('show_deleted') == 1 ): ?>
                    <td>
                        <?php echo Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'POST',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.info.restore', $single_info->id])); ?>

                        <?php echo Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                        <?php echo Form::close(); ?>

                        <?php echo Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.info.perma_del', $single_info->id])); ?>

                        <?php echo Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                        <?php echo Form::close(); ?>

                    </td>
                    <?php else: ?>
                    <td>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('info_view')): ?>
                        <a href="<?php echo e(route('admin.info.show',['id' => $single_info->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('info_edit')): ?>
                        <a href="<?php echo e(route('admin.info.edit',[$single_info->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('info_delete')): ?>
                        <?php echo Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.info.destroy', $single_info->id])); ?>

                        <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                        <?php echo Form::close(); ?>

                        <?php endif; ?>
                    </td>
                    <?php endif; ?>
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

<?php $__env->startSection('javascript'); ?>
<script>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('info_delete')): ?>
    window.route_mass_crud_entries_destroy = '<?php echo e(route('
    admin.info.mass_destroy ')); ?>';
    <?php endif; ?>

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
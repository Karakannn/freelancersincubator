<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo app('translator')->getFromJson('global.slider.title'); ?></h3>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider_create')): ?>
<p>
    <a href="<?php echo e(route('admin.slider.create')); ?>" class="btn btn-success"><?php echo app('translator')->getFromJson('global.app_add_new'); ?></a>
</p>
<?php endif; ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo app('translator')->getFromJson('global.app_list'); ?>
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped <?php echo e(count($slider) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider_delete')): ?> <?php if( request('slider_delete') != 1 ): ?> dt-select <?php endif; ?> <?php endif; ?>">
            <thead>
                <tr>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider_delete')): ?>
                    <?php if( request('show_deleted') != 1 ): ?><th style="text-align:center;"><input type="checkbox" id="select-all" /></th><?php endif; ?>
                    <?php endif; ?>

                    <th><?php echo app('translator')->getFromJson('global.slider.fields.image'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.slider.fields.line_1'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.slider.fields.line_2'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.slider.fields.line_3'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.slider.fields.button_text'); ?></th>
                    <th><?php echo app('translator')->getFromJson('global.slider.fields.button_url'); ?></th>
                    <?php if( request('show_deleted') == 1 ): ?>
                    <th>&nbsp;</th>
                    <?php else: ?>
                    <th>&nbsp;</th>
                    <?php endif; ?>
                </tr>
            </thead>

            <tbody>
                <?php if(count($slider) > 0): ?>
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($single_slider->id); ?>">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider_delete')): ?>
                    <?php if( request('show_deleted') != 1 ): ?><td></td><?php endif; ?>
                    <?php endif; ?>

                    <td><?php if($single_slider->image): ?><a href="<?php echo e(asset('uploads/' . $single_slider->image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/' . $single_slider->image)); ?>" /></a><?php endif; ?></td>
                    <td><?php echo e($single_slider->line_1); ?></td>
                    <td><?php echo e($single_slider->line_2); ?></td>
                    <td><?php echo e($single_slider->line_3); ?></td>
                    <td><?php echo e($single_slider->button_text); ?></td>
                    <td><?php echo e($single_slider->button_url); ?></td>
                    <?php if( request('show_deleted') == 1 ): ?>
                    <td>
                        <?php echo Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'POST',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.slider.restore', $single_slider->id])); ?>

                        <?php echo Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                        <?php echo Form::close(); ?>

                        <?php echo Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.slider.perma_del', $single_slider->id])); ?>

                        <?php echo Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                        <?php echo Form::close(); ?>

                    </td>
                    <?php else: ?>
                    <td>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider_view')): ?>
                        <a href="<?php echo e(route('admin.slider.show',['id' => $single_slider->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider_edit')): ?>
                        <a href="<?php echo e(route('admin.slider.edit',[$single_slider->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider_delete')): ?>
                        <?php echo Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.slider.destroy', $single_slider->id])); ?>

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
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.slider.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
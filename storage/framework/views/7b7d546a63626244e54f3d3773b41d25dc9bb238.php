<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.testimonials.title'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonials_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.testimonials.create')); ?>" class="btn btn-success"><?php echo app('translator')->getFromJson('global.app_add_new'); ?></a>
        
    </p>
    <?php endif; ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_list'); ?>
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($testimonials) > 0 ? 'datatable' : ''); ?> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonials_delete')): ?> dt-select <?php endif; ?>">
                <thead>
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonials_delete')): ?>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <?php endif; ?>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.image'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.client'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.position'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.title'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.testimonials.fields.created_at'); ?></th>
                                                <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php if(count($testimonials) > 0): ?>
                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($testimonial->id); ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonials_delete')): ?>
                                    <td></td>
                                <?php endif; ?>

                                <td><?php if($testimonial->image): ?><a href="<?php echo e(asset('uploads/' . $testimonial->image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/' . $testimonial->image)); ?>"/></a><?php endif; ?></td>
                                <td><?php echo e($testimonial->client); ?></td>
                                <td><?php echo e($testimonial->position); ?></td>
                                <td><?php echo e($testimonial->title); ?></td>
                                <td><?php echo e($testimonial->created_at); ?></td>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonials_view')): ?>
                                    <a href="<?php echo e(route('admin.testimonials.show',[$testimonial->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonials_edit')): ?>
                                    <a href="<?php echo e(route('admin.testimonials.edit',[$testimonial->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonials_delete')): ?>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.testimonials.destroy', $testimonial->id])); ?>

                                    <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonials_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.testimonials.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
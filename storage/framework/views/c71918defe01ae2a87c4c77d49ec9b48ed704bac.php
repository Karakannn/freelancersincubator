<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo app('translator')->getFromJson('global.users.title'); ?></h3>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo app('translator')->getFromJson('global.app_view'); ?>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.name'); ?></th>
                        <td><?php echo e($user->name); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.email'); ?></th>
                        <td><?php echo e($user->email); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.role'); ?></th>
                        <td>
                            <?php $__currentLoopData = $user->role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleRole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="label label-info label-many"><?php echo e($singleRole->title); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.linkedin_url'); ?></th>
                        <td><?php echo e($user->linkedin_url); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.facebook_url'); ?></th>
                        <td><?php echo e($user->facebook_url); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.twitter_url'); ?></th>
                        <td><?php echo e($user->twitter_url); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.website_url'); ?></th>
                        <td><?php echo e($user->website_url); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.phone'); ?></th>
                        <td><?php echo e($user->phone); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.presentation'); ?></th>
                        <td><?php echo e($user->presentation); ?></td>
                    </tr>
                </table>
            </div>
        </div><!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active"><a href="#courses" aria-controls="courses" role="tab" data-toggle="tab">Courses</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="courses">
                <table class="table table-bordered table-striped <?php echo e(count($courses) > 0 ? 'datatable' : ''); ?>">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.courses.fields.teachers'); ?></th>
                            <th><?php echo app('translator')->getFromJson('global.courses.fields.title'); ?></th>
                            <th><?php echo app('translator')->getFromJson('global.courses.fields.slug'); ?></th>
                            <th><?php echo app('translator')->getFromJson('global.courses.fields.description'); ?></th>
                            <th><?php echo app('translator')->getFromJson('global.courses.fields.price'); ?></th>
                            <th><?php echo app('translator')->getFromJson('global.courses.fields.course-image'); ?></th>
                            <th><?php echo app('translator')->getFromJson('global.courses.fields.start-date'); ?></th>
                            <th><?php echo app('translator')->getFromJson('global.courses.fields.published'); ?></th>
                            <?php if( request('show_deleted') == 1 ): ?>
                            <th>&nbsp;</th>
                            <?php else: ?>
                            <th>&nbsp;</th>
                            <?php endif; ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(count($courses) > 0): ?>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($course->id); ?>">
                            <td>
                                <?php $__currentLoopData = $course->teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleTeachers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="label label-info label-many"><?php echo e($singleTeachers->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><?php echo e($course->title); ?></td>
                            <td><?php echo e($course->slug); ?></td>
                            <td><?php echo $course->description; ?></td>
                            <td><?php echo e($course->price); ?></td>
                            <td><?php if($course->course_image): ?><a href="<?php echo e(asset('uploads/' . $course->course_image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/' . $course->course_image)); ?>" /></a><?php endif; ?></td>
                            <td><?php echo e($course->start_date); ?></td>
                            <td><?php echo e(Form::checkbox("published", 1, $course->published == 1 ? true : false, ["disabled"])); ?></td>
                            <?php if( request('show_deleted') == 1 ): ?>
                            <td>
                                <?php echo Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'POST',
                                'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                'route' => ['admin.courses.restore', $course->id])); ?>

                                <?php echo Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                <?php echo Form::close(); ?>

                                <?php echo Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                'route' => ['admin.courses.perma_del', $course->id])); ?>

                                <?php echo Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                <?php echo Form::close(); ?>

                            </td>
                            <?php else: ?>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('course_view')): ?>
                                <a href="<?php echo e(route('admin.courses.show',[$course->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('course_edit')): ?>
                                <a href="<?php echo e(route('admin.courses.edit',[$course->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('course_delete')): ?>
                                <?php echo Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                'route' => ['admin.courses.destroy', $course->id])); ?>

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

        <p>&nbsp;</p>

        <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('global.app_back_to_list'); ?></a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
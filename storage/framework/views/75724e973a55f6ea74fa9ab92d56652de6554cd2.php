<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.lessons.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_view'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.course'); ?></th>
                            <td><?php echo e(isset($lesson->course->title) ? $lesson->course->title : ''); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.title'); ?></th>
                            <td><?php echo e($lesson->title); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.slug'); ?></th>
                            <td><?php echo e($lesson->slug); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.lesson-image'); ?></th>
                            <td><?php if($lesson->lesson_image): ?><a href="<?php echo e(asset('uploads/' . $lesson->lesson_image)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/thumb/' . $lesson->lesson_image)); ?>"/></a><?php endif; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.short-text'); ?></th>
                            <td><?php echo $lesson->short_text; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.full-text'); ?></th>
                            <td><?php echo $lesson->full_text; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.position'); ?></th>
                            <td><?php echo e($lesson->position); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.downloadable-files'); ?></th>
                            <td> <?php $__currentLoopData = $lesson->getMedia('downloadable_files'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="form-group">
                                    <a href="<?php echo e($media->getUrl()); ?>" target="_blank"><?php echo e($media->name); ?> (<?php echo e($media->size); ?> KB)</a>
                                </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.free-lesson'); ?></th>
                            <td><?php echo e(Form::checkbox("free_lesson", 1, $lesson->free_lesson == 1 ? true : false, ["disabled"])); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.published'); ?></th>
                            <td><?php echo e(Form::checkbox("published", 1, $lesson->published == 1 ? true : false, ["disabled"])); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.is_live'); ?></th>
                            <td><?php echo e(Form::checkbox("is_live", 1, $lesson->is_live == 1 ? true : false, ["disabled"])); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.lessons.fields.url'); ?></th>
                            <td><?php echo e($lesson->url); ?></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#tests" aria-controls="tests" role="tab" data-toggle="tab">Tests</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="tests">
<table class="table table-bordered table-striped <?php echo e(count($tests) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('global.tests.fields.course'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.tests.fields.lesson'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.tests.fields.title'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.tests.fields.description'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.tests.fields.questions'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.tests.fields.published'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($tests) > 0): ?>
            <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($test->id); ?>">
                    <td><?php echo e(isset($test->course->title) ? $test->course->title : ''); ?></td>
                                <td><?php echo e(isset($test->lesson->title) ? $test->lesson->title : ''); ?></td>
                                <td><?php echo e($test->title); ?></td>
                                <td><?php echo $test->description; ?></td>
                                <td>
                                    <?php $__currentLoopData = $test->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleQuestions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleQuestions->question); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td><?php echo e(Form::checkbox("published", 1, $test->published == 1 ? true : false, ["disabled"])); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.tests.restore', $test->id])); ?>

                                    <?php echo Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.tests.perma_del', $test->id])); ?>

                                    <?php echo Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_view')): ?>
                                    <a href="<?php echo e(route('admin.tests.show',[$test->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_edit')): ?>
                                    <a href="<?php echo e(route('admin.tests.edit',[$test->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.tests.destroy', $test->id])); ?>

                                    <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="10"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.lessons.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('global.app_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
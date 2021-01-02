<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.tests.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_view'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.tests.fields.course'); ?></th>
                            <td><?php echo e(isset($test->course->title) ? $test->course->title : ''); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.tests.fields.lesson'); ?></th>
                            <td><?php echo e(isset($test->lesson->title) ? $test->lesson->title : ''); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.tests.fields.title'); ?></th>
                            <td><?php echo e($test->title); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.tests.fields.description'); ?></th>
                            <td><?php echo $test->description; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.tests.fields.questions'); ?></th>
                            <td>
                                <?php $__currentLoopData = $test->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleQuestions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singleQuestions->question); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.tests.fields.published'); ?></th>
                            <td><?php echo e(Form::checkbox("published", 1, $test->published == 1 ? true : false, ["disabled"])); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.tests.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('global.app_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
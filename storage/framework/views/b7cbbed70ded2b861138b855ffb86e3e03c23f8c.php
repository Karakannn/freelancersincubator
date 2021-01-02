<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.questions-options.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_view'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.questions-options.fields.question'); ?></th>
                            <td><?php echo e(isset($questions_option->question->question) ? $questions_option->question->question : ''); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.questions-options.fields.option-text'); ?></th>
                            <td><?php echo $questions_option->option_text; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.questions-options.fields.correct'); ?></th>
                            <td><?php echo e(Form::checkbox("correct", 1, $questions_option->correct == 1 ? true : false, ["disabled"])); ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.questions_options.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('global.app_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
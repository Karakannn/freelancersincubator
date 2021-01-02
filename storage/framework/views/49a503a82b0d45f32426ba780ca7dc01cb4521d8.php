<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.questions-options.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.questions_options.store']]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_create'); ?>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('question_id', 'Question', ['class' => 'control-label']); ?>

                    <?php echo Form::select('question_id', $questions, old('question_id'), ['class' => 'form-control select2']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('question_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('question_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('option_text', 'Option text*', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('option_text', old('option_text'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('option_text')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('option_text')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('correct', 'Correct', ['class' => 'control-label']); ?>

                    <?php echo Form::hidden('correct', 0); ?>

                    <?php echo Form::checkbox('correct', 1, false, []); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('correct')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('correct')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
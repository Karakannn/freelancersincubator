<?php $__env->startSection('content'); ?>
<h3 class="page-title"><?php echo app('translator')->getFromJson('global.lessons.title'); ?></h3>
<?php echo Form::open(['method' => 'POST', 'route' => ['admin.lessons.store'], 'files' => true,]); ?>


<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo app('translator')->getFromJson('global.app_create'); ?>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('course_id', 'Course', ['class' => 'control-label']); ?>

                <?php echo Form::select('course_id', $courses, old('course_id'), ['class' => 'form-control select2']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('course_id')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('course_id')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('title', 'Title*', ['class' => 'control-label']); ?>

                <?php echo Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('title')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('title')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('slug', 'Slug', ['class' => 'control-label']); ?>

                <?php echo Form::text('slug', old('slug'), ['class' => 'form-control', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('slug')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('slug')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('lesson_image', 'Lesson image', ['class' => 'control-label']); ?>

                <?php echo Form::file('lesson_image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']); ?>

                <?php echo Form::hidden('lesson_image_max_size', 8); ?>

                <?php echo Form::hidden('lesson_image_max_width', 4000); ?>

                <?php echo Form::hidden('lesson_image_max_height', 4000); ?>

                <p class="help-block"></p>
                <?php if($errors->has('lesson_image')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('lesson_image')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('short_text', 'Short text', ['class' => 'control-label']); ?>

                <?php echo Form::textarea('short_text', old('short_text'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('short_text')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('short_text')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('full_text', 'Full text', ['class' => 'control-label']); ?>

                <?php echo Form::textarea('full_text', old('full_text'), ['class' => 'form-control editor', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('full_text')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('full_text')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('downloadable_files', 'Downloadable files', ['class' => 'control-label']); ?>

                <?php echo Form::file('downloadable_files[]', [
                'multiple',
                'class' => 'form-control file-upload',
                'data-url' => route('admin.media.upload'),
                'data-bucket' => 'downloadable_files',
                'data-filekey' => 'downloadable_files',
                ]); ?>

                <p class="help-block"></p>
                <div class="photo-block">
                    <div class="progress-bar form-group">&nbsp;</div>
                    <div class="files-list"></div>
                </div>
                <?php if($errors->has('downloadable_files')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('downloadable_files')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('free_lesson', 'Free lesson', ['class' => 'control-label']); ?>

                <?php echo Form::hidden('free_lesson', 0); ?>

                <?php echo Form::checkbox('free_lesson', 1, false, []); ?>

                <p class="help-block"></p>
                <?php if($errors->has('free_lesson')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('free_lesson')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('published', 'Published', ['class' => 'control-label']); ?>

                <?php echo Form::hidden('published', 0); ?>

                <?php echo Form::checkbox('published', 1, false, []); ?>

                <p class="help-block"></p>
                <?php if($errors->has('published')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('published')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('is_live', 'Live ?', ['class' => 'control-label']); ?>

                <?php echo Form::hidden('is_live', 0); ?>

                <?php echo Form::checkbox('is_live', 1, false, []); ?>

                <p class="help-block"></p>
                <?php if($errors->has('is_live')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('is_live')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('url', 'URL', ['class' => 'control-label']); ?>

                <?php echo Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('url')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('url')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('start_date', 'Start date', ['class' => 'control-label']); ?>

                <?php echo Form::text('start_date', old('start_date'), ['class' => 'form-control date', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('start_date')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('start_date')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <?php echo Form::label('start_time', 'Start time EST', ['class' => 'control-label']); ?>

                <?php echo Form::text('start_time', old('start_time'), ['class' => 'form-control time', 'placeholder' => '']); ?>

                <p class="help-block"></p>
                <?php if($errors->has('start_time')): ?>
                <p class="help-block">
                    <?php echo e($errors->first('start_time')); ?>

                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##
<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<script>
    $('.editor').each(function() {
        CKEDITOR.replace($(this).attr('id'), {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=<?php echo e(csrf_token()); ?>',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=<?php echo e(csrf_token()); ?>'
        });
    });

</script>

<script src="<?php echo e(asset('adminlte/plugins/fileUpload/js/jquery.iframe-transport.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/fileUpload/js/jquery.fileupload.js')); ?>"></script>
<script>
    $(function() {
        $('.file-upload').each(function() {
            var $this = $(this);
            var $parent = $(this).parent();

            $(this).fileupload({
                dataType: 'json',
                formData: {
                    model_name: 'Lesson',
                    bucket: $this.data('bucket'),
                    file_key: $this.data('filekey'),
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                add: function(e, data) {
                    data.submit();
                },
                done: function(e, data) {
                    $.each(data.result.files, function(index, file) {
                        var $line = $($('<p/>', {
                            class: "form-group"
                        }).html(file.name + ' (' + file.size + ' KB)').appendTo($parent.find('.files-list')));
                        $line.append('<a href="#" class="btn btn-xs btn-danger remove-file">Remove</a>');
                        $line.append('<input type="hidden" name="' + $this.data('bucket') + '_id[]" value="' + file.id + '"/>');
                        if ($parent.find('.' + $this.data('bucket') + '-ids').val() != '') {
                            $parent.find('.' + $this.data('bucket') + '-ids').val($parent.find('.' + $this.data('bucket') + '-ids').val() + ',');
                        }
                        $parent.find('.' + $this.data('bucket') + '-ids').val($parent.find('.' + $this.data('bucket') + '-ids').val() + file.id);
                    });
                    $parent.find('.progress-bar').hide().css(
                        'width',
                        '0%'
                    );
                }
            }).on('fileuploadprogressall', function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $parent.find('.progress-bar').show().css(
                    'width',
                    progress + '%'
                );
            });
        });
        $(document).on('click', '.remove-file', function() {
            var $parent = $(this).parent();
            $parent.remove();
            return false;
        });
    });

</script>

<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "<?php echo e(config('app.date_format_js')); ?>"
    });

</script>
<script>
    $('.time').datetimepicker({
        format: 'HH:mm:ss'
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
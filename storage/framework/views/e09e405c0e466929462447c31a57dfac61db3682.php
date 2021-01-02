<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title">Comments</h3>



    

    <div class="panel panel-default">
        <div class="panel-heading">
            Comment List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Comment</th>
                        <th>Created At</th>
                        <th>Status</th>



                    </tr>
                </thead>
                
                <tbody>
                <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td class="text-center align-items-center"><?php echo e($comment->name); ?></td>
                        <td class="text-center align-items-center"><?php echo e($comment->e_mail); ?></td>
                        <td class="text-center align-items-center"><?php echo e($comment->comment); ?></td>
                        <td class="text-center align-items-center"><?php echo e($comment->created_at->diffForHumans()); ?></td>
                        <td class="text-center align-items-center">
                            <input class="switch" comment-id="<?php echo e($comment->id); ?>" type="checkbox" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Passive"
                                   <?php if($comment->approved == 1): ?> checked <?php endif; ?> data-toggle="toggle">
                        </td>
                        <td class="text-center align-items-center">
                            <a href="<?php echo e(route('admin.comments.edit', $comment->id)); ?>" title="Edit Comment" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>

                            <a href="<?php echo e(route('admin.comments.delete', $comment->id)); ?>" title="Delete Comment" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.switch').change(function() {
                const id = $(this)[0].getAttribute('comment-id');
                const statu = $(this).prop('checked');
                $.get("<?php echo e(route('admin.comments.switch')); ?>",{id:id,statu:statu}, function (data, status){
                    console.log(data);
                });
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
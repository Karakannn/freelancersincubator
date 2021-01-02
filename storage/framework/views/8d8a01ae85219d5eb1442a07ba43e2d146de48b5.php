<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.menu.blog'); ?></h3>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blogs_create')): ?>
    <p>
        <a href="<?php echo e(route('admin.blogs.create')); ?>" class="btn btn-success"><?php echo app('translator')->getFromJson('global.app_add_new'); ?></a>
        <a href="<?php echo e(route('admin.blogs.trashed')); ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Trashed Articles</a>

    </p>
    <?php endif; ?>

    <p>
        <ul class="list-inline">
            <li><a href="<?php echo e(route('admin.blogs.index')); ?>" style="<?php echo e(request('show_deleted') == 1 ? '' : 'font-weight: 700'); ?>">All</a></li>
        </ul>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            Blog List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($articles) > 0 ? 'datatable' : ''); ?>">
                <thead>
                    <tr>
                        <th>Header Image</th>
                        <th>Main Image</th>
                        <th>Title</th>
                        <th>Short Info</th>
                        <th>Body</th>
                        <th>Slug</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>Hit</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Settings</th>

                    </tr>
                </thead>
                
                <tbody>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e(asset($article->header_image)); ?>" width="200" alt=""></td>
                        <td><img src="<?php echo e(asset($article->main_image)); ?>" width="200" alt=""></td>
                        <td class="text-center align-items-center"><?php echo e($article->title); ?></td>
                        <td class="text-center align-items-center"><?php echo e($article->short_info); ?></td>
                        <td class="text-center align-items-center"><?php echo e($article->body); ?></td>
                        <td class="text-center align-items-center"><?php echo e($article->slug); ?></td>
                        <td class="text-center align-items-center"><?php echo e($article->getCategory->name); ?></td>
                        <td class="text-center align-items-center"><?php echo e($article->tags); ?></td>
                        <td class="text-center align-items-center"><?php echo e($article->hit); ?></td>
                        <td class="text-center align-items-center"><?php echo e($article->created_at->diffForHumans()); ?></td>
                        <td class="text-center align-items-center">
                            <input class="switch" article-id="<?php echo e($article->id); ?>" type="checkbox" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Passive"
                                   <?php if($article->status == 1): ?> checked <?php endif; ?> data-toggle="toggle">
                        </td>
                        <td class="text-center align-items-center">
                            <a href="<?php echo e(route('blogs.show',$article->id)); ?>" title="Show Blog" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="<?php echo e(route('admin.blogs.edit', $article->id)); ?>" title="Edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <a href="<?php echo e(route('admin.blogs.delete', $article->id)); ?>" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            <a href="<?php echo e(route('admin.comment.show', $article->id)); ?>" title="Comments" class="btn btn-sm btn-warning"><i class="fas fa-comments"></i></a>
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
                const id = $(this)[0].getAttribute('article-id');
                const statu = $(this).prop('checked');
                $.get("<?php echo e(route('admin.blogs.switch')); ?>",{id:id,statu:statu}, function (data, status){
                    console.log(data);
                });
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
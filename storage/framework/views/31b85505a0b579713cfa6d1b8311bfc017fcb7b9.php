<?php $__env->startSection('content'); ?>
    <h3 class="page-title">Trashed Posts</h3>


    <p>
    <ul class="list-inline">
        <li><a href="<?php echo e(route('admin.blogs.index')); ?>" style="<?php echo e(request('show_deleted') == 1 ? '' : 'font-weight: 700'); ?>">All</a></li>
    </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
            Trashed Blog List
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
                            <a href="<?php echo e(route('admin.blogs.recover', $article->id)); ?>" title="Recover Post" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i></a>
                            <a href="<?php echo e(route('admin.blogs.harddelete', $article->id)); ?>" title="Delete Completely" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('main'); ?>

<meta property="og:image" content="<?php echo e(asset($blog->header_image)); ?>" />
<meta property="og:description" content="" />
<meta property="og:title" content="<?php echo e($blog->title); ?>" />
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($blog->header_image == '' ? 'http://placehold.it/1920x1280' : asset($blog->header_image)); ?>">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">
                            <?php echo e($blog->title); ?>

                        </h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('global.menu.home'); ?></a></li>
                            <li class="active"><?php echo app('translator')->getFromJson('global.blog_details.LABEL_DETAILS'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Services Details -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb">
                                    <div class="post-date"><span><?php echo e($blog->created_at == '' ? '' : date('d', strtotime($blog->created_at))); ?> </span><br> <?php echo e($blog->created_at == '' ? '' : date('M', strtotime($blog->created_at))); ?></div>
                                    <div class="post-description border-1px p-20">
                                        <h3 class="post-title font-weight-600 mt-0 mb-5"><?php echo e($blog->title); ?></h3>
                                    </div>
                                    <div class="post-meta">
                                        <ul class="list-inline pull-left flip">
                                            <li><i class="lnr lnr-users text-theme-colored2 font-20"></i><?php echo app('translator')->getFromJson('global.blog_details.LABEL_BY'); ?> <?php echo e($blog->title); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-content">
                                <?php echo e(strip_tags($blog->body)); ?>

                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left mt-10 mr-20 text-theme-colored2">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li><a href="https://www.facebook.com/How-to-start-as-a-Freelancer-FreelancersIncubatorcom-391466288385318" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <div class="tagline p-0 pt-20 mt-5">
                            <div class="row">
                                <div class="col-md-8">

                                    <div class="tags">
                                        <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> <?php echo e($blog->tags); ?></p>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="share text-right flip">
                                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="author-details media-post">
                            <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="images/blog/author.jpg"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18"><?php echo e($blog->author_id); ?></a></h5>
                                <ul class="styled-icons square-sm m-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
-->

                                                <div class="comments-area">
                                                    <h5 class="comments-title">Comments</h5>
                                                    <ul class="comment-list">
                                                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment1.jpg" alt=""></a>
                                                                <div class="media-body">
                                                                    <h5 class="media-heading comment-heading"><?php echo e($comment->name); ?> says:</h5>
                                                                    <div class="comment-date"><?php echo e($comment->created_at); ?></div>
                                                                    <p><?php echo e($comment->comment); ?>.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </ul>
                                                </div>
                                                <div class="comment-box">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5>Leave a Comment</h5>
                                                            <div class="row">
                                                                <form role="form" action="<?php echo e(route('comments.store',$blog->id)); ?>" method="POST" id="comment-form">
                                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                                    <div class="col-sm-6 pt-0 pb-0">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" required name="name" id="contact_name" placeholder="Enter Name">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" required class="form-control" name="e_mail" id="contact_email2" placeholder="Enter Email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" required name="comment" id="contact_message2" placeholder="Enter Message" rows="5"></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">



                        <div class="widget">
                            <h5 class="widget-title">Categories</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <li><a href="<?php echo e(route('category.index',$category->slug)); ?>"><?php echo e($category->name); ?><span>(<?php echo e($category->articles->count()); ?>)</span></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title">Latest Blog</h5>
                            <div class="latest-posts">
                                <li><a href="<?php echo e(route('blogs.show', $lastBlog->id)); ?>"><?php echo e($lastBlog->title); ?></a></li>
                                <p>
                                    <?php echo e($lastBlog->short_info); ?>

                                </p>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('main'); ?>

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['Blog']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Blog']->image)); ?>">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36"><?php echo app('translator')->getFromJson('global.menu.blog'); ?></h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="<?php echo e(route('/')); ?>">Home</a></li>
                            <li class="active"><?php echo app('translator')->getFromJson('global.menu.blog'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row blog-posts">
                <div class="col-md-12">
                    <!-- Blog Masonry -->
                    <div id="grid" class="gallery-isotope default-animation-effect grid-3 masonry gutter-30 clearfix">
                        <!-- grid sizer for Masonry -->
                        <div class="gallery-item gallery-item-sizer"></div>
                        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Blog Item Start -->
                        <div class="gallery-item">
                            <article class="post clearfix mb-30 bg-lighter">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <img src="<?php echo e($single_blog->image == '' ? 'http://placehold.it/540x480' : asset('uploads/' . $single_blog->image)); ?>" alt="" class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content border-1px p-20 pr-10">
                                    <div class="entry-meta media mt-0 no-bg no-border">
                                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600"><?php echo e($single_blog->created_at == '' ? '' : date('d', strtotime($single_blog->created_at))); ?></li>
                                                <li class="font-12 text-white text-uppercase"><?php echo e($single_blog->created_at == '' ? '' : date('M', strtotime($single_blog->created_at))); ?></li>
                                            </ul>
                                        </div>
                                        <div class="media-body pl-15">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="<?php echo e(route('blogs.show', [$single_blog->slug])); ?>"><?php echo e($single_blog->title); ?></a></h4>
<!--                                                <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>-->
<!--                                                <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-10"><?php echo e(str_limit(strip_tags($single_blog->body), $limit = 80, $end = '...')); ?></p>
                                    <a href="<?php echo e(route('blogs.show', [$single_blog->slug])); ?>" class="btn-read-more">Read more</a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Blog Item End -->

                    </div>
                    <!-- Blog Masonry -->
                </div>
            </div>
<!--
            <div class="row">
                <div class="col-sm-12">
                    <nav>
                        <ul class="pagination theme-colored xs-pull-center m-0">
                            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">...</a></li>
                            <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
-->
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
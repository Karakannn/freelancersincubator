<?php $__env->startSection('main'); ?>

<meta property="og:image" content="<?php echo e(asset('uploads/' . $blog->image)); ?>" />
<meta property="og:description" content="" />
<meta property="og:title" content="<?php echo e($blog->title); ?>" />
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($blog->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $blog->image)); ?>">
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
                                    <img src="<?php echo e($blog->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $blog->image)); ?>" class="img-fullwidth" alt="">
                                    <div class="post-date"><span><?php echo e($blog->created_at == '' ? '' : date('d', strtotime($blog->created_at))); ?> </span><br> <?php echo e($blog->created_at == '' ? '' : date('M', strtotime($blog->created_at))); ?></div>
                                    <div class="post-description border-1px p-20">
                                        <h3 class="post-title font-weight-600 mt-0 mb-5"><?php echo e($blog->title); ?></h3>
                                    </div>
                                    <div class="post-meta">
                                        <ul class="list-inline pull-left flip">
                                            <li><i class="lnr lnr-users text-theme-colored2 font-20"></i><?php echo app('translator')->getFromJson('global.blog_details.LABEL_BY'); ?> <?php echo e($blog->name); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-content">
                                <?php echo e(strip_tags($blog->body)); ?>

                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left mt-10 mr-20 text-theme-colored2">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <div class="tagline p-0 pt-20 mt-5">
                            <div class="row">
                                <div class="col-md-8">
<!--
                                    <div class="tags">
                                        <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> Law, Juggement, lawyer, Cases</p>
                                    </div>
-->
                                </div>
                                <div class="col-md-4">
                                    <div class="share text-right flip">
                                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--
                        <div class="author-details media-post">
                            <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="images/blog/author.jpg"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18">John Doe</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul class="styled-icons square-sm m-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
-->
<!--
                        <div class="comments-area">
                            <h5 class="comments-title">Comments</h5>
                            <ul class="comment-list">
                                <li>
                                    <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment1.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                            <div class="clearfix"></div>
                                            <div class="media comment-author nested-comment"> <a href="#" class="media-left"><img class="media-object img-thumbnail" src="images/blog/comment3.jpg" alt=""></a>
                                                <div class="media-body p-20 bg-lighter">
                                                    <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                    <div class="comment-date">23/06/2014</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                    <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                                </div>
                                            </div>
                                            <div class="media comment-author nested-comment"> <a href="#" class="media-left"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                                                <div class="media-body p-20 bg-lighter">
                                                    <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                    <div class="comment-date">23/06/2014</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                    <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>Leave a Comment</h5>
                                    <div class="row">
                                        <form role="form" id="comment-form">
                                            <div class="col-sm-6 pt-0 pb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" required name="contact_name" id="contact_name" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required class="form-control" name="contact_email2" id="contact_email2" placeholder="Enter Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter Website" required class="form-control" name="subject">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" required name="contact_message2" id="contact_message2" placeholder="Enter Message" rows="7"></textarea>
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
<!--
                        <div class="widget">
                            <h5 class="widget-title">Search box</h5>
                            <div class="search-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" placeholder="Click to Search" class="form-control search-input">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
-->
<!--
                        <div class="widget">
                            <h5 class="widget-title">Categories</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    <li><a href="#">Creative<span>(19)</span></a></li>
                                    <li><a href="#">Portfolio<span>(21)</span></a></li>
                                    <li><a href="#">Fitness<span>(15)</span></a></li>
                                    <li><a href="#">Gym<span>(35)</span></a></li>
                                    <li><a href="#">Personal<span>(16)</span></a></li>
                                </ul>
                            </div>
                        </div>
-->
                        <div class="widget">
                            <h5 class="widget-title">Latest Blog</h5>
                            <div class="latest-posts">
                                <?php $__currentLoopData = $blogs_right; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="<?php echo e(route('blogs.show', [$single_blog->slug])); ?>"><img src="<?php echo e($single_blog->image == '' ? 'http://placehold.it/75x75' : asset('uploads/' . $single_blog->image)); ?>" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="<?php echo e(route('blogs.show', [$single_blog->slug])); ?>"><?php echo e($single_blog->title); ?></a></h5>
                                        <p><?php echo e(str_limit(strip_tags($single_blog->body), $limit = 40, $end = '...')); ?></p>
                                    </div>
                                </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
<!--
                        <div class="widget">
                            <h5 class="widget-title">Photos from Flickr</h5>
                            <div id="flickr-feed" class="clearfix">
                                 Flickr Link 
                                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                                </script>
                            </div>
                        </div>
-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
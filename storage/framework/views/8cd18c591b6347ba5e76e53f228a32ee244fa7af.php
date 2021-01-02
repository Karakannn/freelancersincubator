<!-- Footer -->
        <footer id="footer" class="footer" data-bg-color="#20232E">
            <div class="container pt-60 pb-20">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <img alt="" src="<?php echo e(asset('uploads/' . $info[0]->footer_image)); ?>">
                        <p class="mt-20"><?php echo e($info[0]->office_location); ?></p>
                        <ul class="list-inline">
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone mr-5"></i><?php echo e($info[0]->contact_number); ?></li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o mr-5"></i><?php echo e($info[0]->email); ?></li>
                        </ul>
                        <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled clearfix mt-10">
                            <?php if($info[0]->facebook_url != ""): ?>
                            <li><a href="<?php echo e($info[0]->facebook_url); ?>"><i class="fa fa-facebook"></i></a></li>
                            <?php endif; ?>
                            <?php if($info[0]->twitter_url != ""): ?>
                            <li><a href="<?php echo e($info[0]->twitter_url); ?>"><i class="fa fa-twitter"></i></a></li>
                            <?php endif; ?>
                            <?php if($info[0]->linkedin_url != ""): ?>
                            <li><a href="<?php echo e($info[0]->linkedin_url); ?>"><i class="fa fa-linkedin"></i></a></li>
                            <?php endif; ?>
                            <?php if($info[0]->youtube_url != ""): ?>
                            <li><a href="<?php echo e($info[0]->youtube_url); ?>"><i class="fa fa-youtube"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored2"><?php echo app('translator')->getFromJson('global.home.UPCOMING_EVENTS.UPCOMING_EVENTS_TITLE'); ?></h4>
                        <?php $__currentLoopData = $courses->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="latest-posts col-md-6 pl-0">
                            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a class="post-thumb" href="<?php echo e(route('courses.show', [$single_course->slug])); ?>"><img class="img-55" src="<?php echo e($single_course->course_image == '' ? 'http://placehold.it/80x55' : asset('uploads/' . $single_course->course_image)); ?>" alt=""></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="<?php echo e(route('courses.show', [$single_course->slug])); ?>"><?php echo e($single_course->title); ?></a></h5>
                                    <p class="post-date mb-0 font-12"><?php echo e($single_course->start_date == '' ? '' : date('F d, Y', strtotime($single_course->start_date))); ?></p>
                                </div>
                            </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="latest-posts col-md-6 pl-0">
                        </div>
                    </div>
                </div>
                        
            </div>
            <div class="footer-bottom" data-bg-color="#1B1D26">
                <div class="container pt-20 pb-20">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-14 sm-text-center m-0">Copyright &copy;
                                <?php echo date('Y'); ?> <span class="text-theme-colored2"></span>. All Rights Reserved</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5 font-14">
                                    <li>
                                       <a href="<?php echo e(route('terms.index')); ?>"><?php echo app('translator')->getFromJson('global.home.REGISTER.T_AND_C_LINK_FOOTER'); ?></a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="<?php echo e(route('privacy.index')); ?>"><?php echo app('translator')->getFromJson('global.footer.PRIVACY'); ?></a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->getFromJson('global.footer.SUPPORT'); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139850583-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139850583-1');
</script>

        </footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
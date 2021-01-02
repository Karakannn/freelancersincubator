<?php $__env->startSection('main'); ?>

     <meta property="og:image" content="<?php echo e(asset('uploads/' . $course->header_image)); ?>" />
<meta property="og:description" content="" />
<meta property="og:title" content="<?php echo e($course->title); ?>" /> 
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($course->header_image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $course->header_image)); ?>">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">
                            <?php echo e($course->title); ?>

                        </h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('global.menu.home'); ?></a></li>
                            <li class="active"><?php echo app('translator')->getFromJson('global.course_details.LABEL_DETAILS'); ?></li>
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
                <div class="col-md-8">
                    <div class="single-service">
                        <h3 class="text-uppercase mt-0 mb-30">
                        </h3>
                        <img src="<?php echo e($course->course_image == '' ? 'http://placehold.it/750x435' : asset('uploads/' . $course->course_image)); ?>" alt="">
                        <ul class="list-inline mt-20 mb-15">
                            <?php if($course->name): ?>
                            <li>
                                <i class="pe-7s-user text-theme-colored2 font-48"></i>
                                <div class="pull-right ml-5">
                                    <span><?php echo app('translator')->getFromJson('global.course_details.LABEL_INSTRUCTOR'); ?></span>
                                    <h5 class="mt-0">
                                        <?php echo e($course->name); ?>

                                    </h5>
                                </div>
                            </li>
                            <?php endif; ?>
                            <li>
                                <i class="pe-7s-cash text-theme-colored2 font-48"></i>
                                <div class="pull-right ml-10">
                                    <span><?php echo app('translator')->getFromJson('global.course_details.LABEL_PRICE'); ?></span>
                                    <h5 class="mt-0">
                                        <?php if($course == "" || $course->price == 0): ?>
                                        <?php echo app('translator')->getFromJson('global.course_details.LABEL_FREE'); ?>
                                        <?php else: ?>
                                        <?php echo app('translator')->getFromJson('global.course_details.CURRENCY_SYMBOL'); ?> <?php echo e($course->price); ?>

                                        <?php endif; ?>

                                    </h5>
                                </div>
                            </li>
                            <li>
                                <i class="pe-7s-clock text-theme-colored2 font-48"></i>
                                <div class="pull-right ml-10">
                                    <span><?php echo app('translator')->getFromJson('global.course_details.LABEL_DURATION'); ?></span>
                                    <h5 class="mt-0">
                                        <?php echo e($course->duration); ?>

                                    </h5>
                                </div>
                            </li>
                            <li>
                                <i class="pe-7s-rocket text-theme-colored2 font-48" style="margin-left:10px;"></i>
                                <div class="pull-right ml-10">
                                    <span><?php echo app('translator')->getFromJson('global.course_details.LABEL_START'); ?></span>
                                    <h5 class="mt-0">
                                        <?php echo e(date('F dS, Y', strtotime($course->start_date))); ?>

                                    </h5>
                                </div>
                            </li>
                        </ul>
                        <p>
                            <?php echo $course->description; ?>

                        </p>
                        <ul id="myTab" class="nav nav-tabs mt-30">
                            <?php if($lessons->count() != 0): ?>
                            <li class="active"><a href="#tab1" data-toggle="tab"><?php echo app('translator')->getFromJson('global.course_details.LABEL_LESSONS'); ?> (<?php echo e($lessons->count()); ?>)</a></li>
                            <?php endif; ?>
                        </ul>
                        <?php if($lessons->count() != 0): ?>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <h4 class="line-bottom-theme-colored2 mb-15"><?php echo app('translator')->getFromJson('global.course_details.LABEL_LESSONS'); ?></h4>
                                <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $single_lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h5 class="line-bottom-theme-colored2 mb-15">(<?php echo e($index + 1); ?>) <?php echo e($single_lesson -> title); ?></h5>
                                <?php echo e($single_lesson -> short_text); ?>

                                <br>
                                
                                <?php if($single_lesson -> url != '' && $single_lesson -> is_live == 1 && $single_lesson -> free_lesson == 1 && $is_registered != '' && strtotime($single_lesson->start_date.' '.$single_lesson->start_time) <= strtotime("now")): ?>
                                    <a target="_blank" href="<?php echo e(Auth::check() ? $single_lesson -> url : route('auth.login')); ?>" class="btn btn-default mt-20" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-check"></i> <?php echo app('translator')->getFromJson('global.course_details.LESSONS_BUTTON'); ?></a>
                                <?php else: ?>
                                
                                <a target="_blank" class="btn btn-default mt-20 disabled" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-check"></i> <?php echo app('translator')->getFromJson('global.lessons.fields.availabiliy'); ?> <?php echo e($single_lesson->start_date == '' ? '' : date('d.m.Y', strtotime($single_lesson->start_date))); ?> <?php if($single_lesson->start_time): ?> @ <?php echo e(date('h:m A', strtotime($single_lesson->start_time))); ?> <?php endif; ?> EST </a>
                                <?php endif; ?>
                                <?php if($index + 1 != $lessons->count()): ?>
                                <div class="separator separator-rouned">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div>
                            <?php if($is_registered == ''): ?>
                            <a class="btn btn-xl btn-theme-colored2 mt-30 pr-40 pl-40" href="<?php echo e(route('courses.register', $course->slug)); ?>"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_SUBTITLE'); ?></a>
                            <?php else: ?>
                            <div id="form-result" class="alert alert-success mt-30 pr-40" role="alert"><?php echo app('translator')->getFromJson('global.courses.registered'); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                        <div class="widget bg-silver-deep">
                            <?php if($is_registered == ''): ?>
                            <a class="btn-block btn btn-xl btn-theme-colored2 mt-30 pr-40 pl-40" href="<?php echo e(route('courses.register', $course->slug)); ?>"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_SUBTITLE'); ?></a>
                            <?php else: ?>
                            <div id="form-result" class="alert alert-success mt-30 pr-40" role="alert"><?php echo app('translator')->getFromJson('global.courses.registered'); ?></div>
                            <?php endif; ?>
                        </div>

                        <?php if($course->name): ?>
                        <div class="widget border-1px bg-silver-deep p-15">
                            <h4 class="widget-title line-bottom-theme-colored2"><?php echo app('translator')->getFromJson('global.course_details.LABEL_INSTRUCTOR'); ?></h4>
                            <div class="team-members">
                                <div class="team-thumb mr-0">
                                    <img src="<?php echo e($course->profile_image == '' ? 'http://placehold.it/270x225' : asset('uploads/' . $course->profile_image)); ?>" alt="">
                                </div>
                                <div class="team-bottom-part p-15">
                                    <h4 class="text-uppercase font-weight-600 m-0 pb-5"><?php echo e($course->name); ?></h4>
                                    <p class="font-13 text-gray mt-0"><?php echo e($course->presentation); ?></p>
                                    <ul class="list-inline mt-15">
                                        <li class="m-0 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo e($course->phone); ?></a> </li>
                                        <li class="m-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo e($course->email); ?></a> </li>
                                    </ul>
                                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                                        <?php if($course->facebook_url != ""): ?>
                                        <li><a href="<?php echo e($course->facebook_url); ?>"><i class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($course->twitter_url != ""): ?>
                                        <li><a href="<?php echo e($course->twitter_url); ?>"><i class="fa fa-twitter"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($course->linkedin_url != ""): ?>
                                        <li><a href="<?php echo e($course->linkedin_url); ?>"><i class="fa fa-linkedin"></i></a></li>
                                        <?php endif; ?>
                                        <?php if($course->website_url != ""): ?>
                                        <li><a href="<?php echo e($course->website_url); ?>"><i class="fa fa-globe"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="widget border-1px bg-silver-deep p-15">
                        <h4 class="widget-title line-bottom-theme-colored2"><?php echo app('translator')->getFromJson('global.course_details.SIMILAR_COURSES'); ?></h4>
                         <?php $__currentLoopData = $courses_right; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $singcour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <article class="post media-post clearfix pb-0 mb-10">
                                <a class="post-thumb" href="<?php echo e(route('courses.show', [$singcour->slug])); ?>"><img class="img-55" style="height:60px;" src="<?php echo e($singcour->course_image == '' ? 'http://placehold.it/80x55' : asset('uploads/' . $singcour->course_image)); ?>" alt=""></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="<?php echo e(route('courses.show', [$singcour->slug])); ?>"><?php echo e($singcour->title); ?></a></h5>
                                    <p class="post-date mb-0 font-12"><?php echo e($singcour->start_date == '' ? '' : date('F d, Y', strtotime($singcour->start_date))); ?></p>
                                </div>
                            </article>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                        <div class="widget border-1px bg-silver-deep p-15">
                            <?php if(session('message')): ?>
                            <div class='alert alert-success'>
                                <?php echo e(session('message')); ?>

                            </div>
                            <?php endif; ?>
                            <h4 class="widget-title line-bottom-theme-colored2"><?php echo app('translator')->getFromJson('global.course_details.LABEL_QUICK_CONTACT'); ?></h4>
                            <form role="form" class="quick-contact-form" action="<?php echo e(route('contact.admin')); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <input name="email" class="form-control" type="email" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Enter Message" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="<?php echo app('translator')->getFromJson('global.home.REGISTER.SITE_KEY'); ?>"></div>
                                </div>
                                <div class="form-group">
                                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5" data-loading-text="Please wait..."><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_SEND'); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
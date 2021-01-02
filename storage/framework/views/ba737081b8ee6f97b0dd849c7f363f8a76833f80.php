<?php $__env->startSection('main'); ?>
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: home -->
    <section class="divider">
        <div class="container-fluid p-0">

            <!-- START REVOLUTION SLIDER 5.0.7 -->
            <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- SLIDE 1 -->
                        <li data-index="rs-<?php echo e($single_slider->id); ?>" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo e(asset('uploads/' . $single_slider->image)); ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Slide One">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo e(asset('uploads/' . $single_slider->image)); ?>" alt="" data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['215','130','110','120']" data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['700','700','700','700']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: normal;">
                                <?php echo e($single_slider->line_1); ?>

                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0" id="slide-1-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['250','160','140','150']" data-fontsize="['52','46','40','28']" data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">
                                <?php echo e($single_slider->line_2); ?>

                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['325','220','195','195']" data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']" data-fontweight="['400','400','400','400']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: normal;">
                                <?php echo e($single_slider->line_3); ?>

                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-4" data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['410','290','260','250']" data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: normal;"><a href="<?php echo e($single_slider->button_url); ?>" class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">
                                    <?php echo e($single_slider->button_text); ?></a>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.4);"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </section>

    <!-- Section: home-boxes -->
    <section class="bg-silver-light">
        <div class="container pt-0 pb-40">
            <div class="section-content">
                <div class="row mt-sm-30" data-margin-top="-120px">
                    <div class="col-sm-12 col-md-4">
                        <div class="icon-box hover-effect features-icon-box iconbox-theme-colored bg-white border-1px text-center p-40">
                            <a class="icon icon-sm mb-20" href="#">
                                <img src="/backend/resources/assets/images/icons/1.png" alt="">
                            </a>
                            <h4 class="text-uppercase font-weight-700 mt-0"><?php echo app('translator')->getFromJson('global.home.HOME_BOX.HOME_BOX_1_TITLE'); ?></h4>
                            <p><?php echo app('translator')->getFromJson('global.home.HOME_BOX.HOME_BOX_1_BODY'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="icon-box hover-effect features-icon-box iconbox-theme-colored bg-white border-1px text-center p-40">
                            <a class="icon icon-sm mb-20" href="#">
                                <img src="/backend/resources/assets/images/icons/2.png" alt="">
                            </a>
                            <h4 class="text-uppercase font-weight-700 mt-0"><?php echo app('translator')->getFromJson('global.home.HOME_BOX.HOME_BOX_2_TITLE'); ?></h4>
                            <p><?php echo app('translator')->getFromJson('global.home.HOME_BOX.HOME_BOX_2_BODY'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="icon-box hover-effect features-icon-box iconbox-theme-colored bg-white border-1px text-center p-40">
                            <a class="icon icon-sm mb-20" href="#">
                                <img src="/backend/resources/assets/images/icons/3.png" alt="">
                            </a>
                            <h4 class="text-uppercase font-weight-700 mt-0"><?php echo app('translator')->getFromJson('global.home.HOME_BOX.HOME_BOX_3_TITLE'); ?></h4>
                            <p><?php echo app('translator')->getFromJson('global.home.HOME_BOX.HOME_BOX_3_BODY'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Upcoming Events -->
    <section>
        <div class="container">
            <div class="section-title text-center mb-40">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title text-uppercase mb-5"><?php echo app('translator')->getFromJson('global.home.UPCOMING_EVENTS.UPCOMING_EVENTS_TITLE'); ?></h2>
                        <h5 class="font-16 text-gray-darkgray mt-5"><?php echo app('translator')->getFromJson('global.home.UPCOMING_EVENTS.UPCOMING_EVENTS_SUBTITLE'); ?></h5>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="course-single-item bg-white border-1px clearfix mb-30 cut-text">
                            <div class="course-thumb">
                                <img class="img-fullwidth img-250" alt="" src="<?php echo e($single_course->course_image == '' ? 'http://placehold.it/360x250' : asset('uploads/' . $single_course->course_image)); ?>">
                            </div>
                            <div class="course-details clearfix p-20 pt-15">
                                <div class="course-top-part">
                                    <a href="<?php echo e(route('courses.show', [$single_course->slug])); ?>">
                                        <h4 class="mt-5 mb-5">
                                            <?php echo e($single_course->title); ?>

                                        </h4>
                                    </a>
                                    <h5 class="text-gray font-12 mt-0"><?php echo e($single_course->start_date == '' ? '' : date('dS F', strtotime($single_course->start_date))); ?></h5>
                                </div>
                                <p class="course-description mt-15 mb-0">
                                    <?php echo e($single_course->description); ?>

                                </p>
                                <div class="author-thumb">
                                    <img src="<?php echo e($single_course->profile_image == '' ? 'http://placehold.it/55x55' : asset('uploads/' . $single_course->profile_image)); ?>" alt="" class="img-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.4">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mt-70 mt-sm-0 mb-0"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_TITLE'); ?></h3>
                        <h2 class="text-theme-colored2 font-54 mt-0"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_SUBTITLE'); ?></h2>
                        <p class="text-white font-16 mb-sm-30"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_BODY'); ?></p>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-dark-transparent-4 p-30 mt-0" style="min-height: 400px;">
                            <h3 class="font-28 text-white mt-0"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_TITLE'); ?></h3>
                            <h4 class="font-16 text-gray-darkgray mt-5"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_SUBTITLE'); ?></h4>
                            <form role="form" name="form" class="reservation-form mt-20" method="POST" action="<?php echo e(url('/register')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="redirect_url" value="<?php echo e(request('redirect_url', 'account')); ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_NAME'); ?>" name="name" value="<?php echo e(old('name')); ?>" required class="form-control" type="text">
                                            <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_EMAIL'); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>" required class="form-control" type="email">
                                            <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_PASSWORD'); ?>" name="password" class="form-control" aria-required="true" type="password" required>
                                            <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_CONFIRM'); ?>" name="password_confirmation" class="form-control" aria-required="true" type="password" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="g-recaptcha" data-sitekey="<?php echo app('translator')->getFromJson('global.home.REGISTER.SITE_KEY'); ?>"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>
                                            <input type="checkbox" name="terms_accepted" value="1" required>
                                            <a target="_blank" href="<?php echo e(route('terms.index')); ?>"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_T&C'); ?></a>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-10">
                                            <button name="register" type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block"> <?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_REGISTER'); ?></button>
                                            <a href="<?php echo e(route('auth.login')); ?>">Existing user? Log in here</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Latest Video Courses -->
    <section>
        <div class="container">
            <div class="section-title text-center mb-40">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title text-uppercase mb-5"><?php echo app('translator')->getFromJson('global.home.LATEST_VIDEOS.LATEST_VIDEOS_TITLE'); ?></h2>
                        <h5 class="font-16 text-gray-darkgray mt-5"><?php echo app('translator')->getFromJson('global.home.LATEST_VIDEOS.LATEST_VIDEOS_SUBTITLE'); ?></h5>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="course-single-item bg-white border-1px clearfix mb-30 cut-text">
                            <div class="course-thumb">
                                <img class="img-fullwidth img-250" alt="" src="<?php echo e($single_video->course_image == '' ? 'http://placehold.it/360x250' : asset('uploads/' . $single_video->course_image)); ?>">
                            </div>
                            <div class="course-details clearfix p-20 pt-15">
                                <div class="course-top-part">
                                    <a href="<?php echo e(route('courses.show', [$single_video->slug])); ?>">
                                        <h4 class="mt-5 mb-5">
                                            <?php echo e($single_video->title); ?>

                                        </h4>
                                    </a>
                                </div>
                                <p class="course-description mt-15 mb-0">
                                    <?php echo e($single_video->description); ?>

                                </p>
                                <div class="author-thumb">
                                    <img src="<?php echo e($single_video->profile_image == '' ? 'http://placehold.it/55x55' : asset('uploads/' . $single_video->profile_image)); ?>" alt="" class="img-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Testimonials -->
    <section class="bg-silver-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title font-28 font-weight-700 text-uppercase"><?php echo app('translator')->getFromJson('global.home.TESTIMONIALS.TESTIMONIALS_TITLE'); ?></h3>
                    <div class="line-bottom-theme-colored2"></div>
                    <div class="owl-carousel-1col boxed" data-dots="false">
                        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <p class="mt-0 font-16">
                                        <?php echo e($single_testimonial->title); ?>

                                    </p>
                                </div>
                                <div class="testimonial-details mb-0 mr-0">
                                    <img alt="" src="<?php echo e($single_testimonial->image == '' ? 'http://placehold.it/55x55' : asset('uploads/' . $single_testimonial->image)); ?>" class="img-thumbnail img-circle pull-left mr-15 mt-15" style="height: 55px;">
                                    <div class="author-info pt-15">
                                        <h5 class="mt-10 font-16 mb-0">
                                            <?php echo e($single_testimonial->client); ?>

                                        </h5>
                                        <h6 class="mt-5">
                                            <?php echo e($single_testimonial->position); ?>

                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    var tpj = jQuery;
    var revapi34;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_home").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_home");
        } else {
            revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/revolution-slider/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        enable: true,
                        style: 'gyges',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        style: 'hebe',
                        tmp: '<span class="tp-bullet-image"></span>',
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [660, 550, 500, 450],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/

</script>
<!-- END REVOLUTION SLIDER -->
<!-- end main-content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
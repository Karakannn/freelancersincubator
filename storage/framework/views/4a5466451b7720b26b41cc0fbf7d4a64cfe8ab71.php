<?php $__env->startSection('main'); ?>

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['Webinars']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Webinars']->image)); ?>">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36"><?php echo app('translator')->getFromJson('global.menu.webinars'); ?></h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="<?php echo e(route('/')); ?>">Home</a></li>
                            <li class="active"><?php echo app('translator')->getFromJson('global.menu.webinars'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Courses -->
    <section id="courses">
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
                                    <h5 class="text-gray font-12 mt-0"><?php echo e($single_course->start_date == '' ? '' : date('dS F', strtotime($single_course->start_date))); ?> <?php if($single_course->start_time): ?> @ <?php echo e(date('H:m', strtotime($single_course->start_time))); ?> <?php endif; ?></h5>
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
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
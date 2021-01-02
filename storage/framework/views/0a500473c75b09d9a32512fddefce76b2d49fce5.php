<?php $__env->startSection('main'); ?>

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['My Profile']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['My Profile']->image)); ?>">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36"><?php echo app('translator')->getFromJson('global.menu.my_profile'); ?></h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('global.menu.home'); ?></a></li>
                                <li class="active"><?php echo app('translator')->getFromJson('global.menu.my_profile'); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Doctor Details -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sx-12 col-sm-4 col-md-4">
                            <div class="doctor-thumb">
                                <img src="images/about/profile1.jpg" alt="">
                            </div>
                            <div class="info p-20 bg-black-333">
                                <h4 class="text-uppercase text-white">
                                   <?php echo e(Auth::user()->name); ?>

                                </h4>
                                <ul class="list angle-double-right m-0">
                                    <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter"><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_EMAIL_LABEL'); ?></strong><br>
                                       <?php echo e(Auth::user()->email); ?>

                                    </li>
                                </ul>
                                <a class="btn btn-info btn-flat mt-10 mb-sm-30" href="<?php echo e(route('edit.index')); ?>"><?php echo app('translator')->getFromJson('global.ACCOUNT.ACCOUNT_PROFILE'); ?></a>
                                <a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="#logout" onclick="$('#logout').submit();"><?php echo app('translator')->getFromJson('global.app_logout'); ?></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <h3 class="line-bottom mt-0 mb-30"><?php echo app('translator')->getFromJson('global.ACCOUNT.YOUR_COURSES'); ?></h3>
                            <div class="pt-20">
                                    <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-6">
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
                </div>
            </div>
        </section>
    </div>
    <?php echo Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']); ?>

    <button type="submit"><?php echo app('translator')->getFromJson('global.logout'); ?></button>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
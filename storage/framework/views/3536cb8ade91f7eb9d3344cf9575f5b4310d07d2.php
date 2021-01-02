<?php $__env->startSection('main'); ?>

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['Become A Lecturer']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Become A Lecturer']->image)); ?>" data-parallax-ratio="0.4" style="padding-top:100px;">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mt-70 mt-sm-0 mb-0">
                            <?php echo app('translator')->getFromJson('global.webinar.WEBINAR_TITLE'); ?>
                        </h3>
                        <h2 class="text-theme-colored2 font-54 mt-0">
                            <?php echo app('translator')->getFromJson('global.webinar.WEBINAR_SUBTITLE'); ?>
                        </h2>
                        <p class="text-white font-16 mb-sm-30">
                            <?php echo app('translator')->getFromJson('global.webinar.WEBINAR_BODY'); ?>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-dark-transparent-4 p-30 mt-0" style="min-height: 400px;">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if(session('message')): ?>
                                    <div class='alert alert-success'>
                                        <?php echo e(session('message')); ?>

                                    </div>
                                <?php endif; ?>
                            <h3 class="font-28 text-white mt-0"><?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_TITLE'); ?></h3>
                            <h4 class="font-18 text-white mt-0" id="header_div"><?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_SUBTITLE'); ?></h4>
                            <!-- Appilication Form Start-->
                            <form role="form" class="mt-20" method="POST" action="<?php echo e(url('lecturer')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_NAME'); ?>" name="name" value="" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_EMAIL'); ?>" name="email" value="" class="form-control" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_PHONE'); ?>" name="phone" value="" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_COUNTRY'); ?>" name="country" class="form-control" aria-required="true" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_WEBINAR_TITLE'); ?>" name="webinar_title" class="form-control" aria-required="true" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_HOURS_LONG'); ?>" name="hours" class="form-control" aria-required="true" type="number" step="any" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea rows="4" placeholder="<?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_INTEREST'); ?>" name="join_reason" class="form-control" aria-required="true" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea rows="4" placeholder="<?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_EXPERIENCE'); ?>" name="freelance_experience" class="form-control" aria-required="true" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea rows="4" placeholder="<?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_BRIEF'); ?>" name="description" class="form-control" aria-required="true" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea rows="4" placeholder="<?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_DETAIL'); ?>" name="detailed_description" class="form-control" aria-required="true" required></textarea>
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
                                            <button name="submit" type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait..."><?php echo app('translator')->getFromJson('global.webinar.WEBINAR_FORM_SUBMIT'); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Application Form End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('_sec_2_reg_log', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
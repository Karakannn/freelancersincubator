<?php $__env->startSection('main'); ?>

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['Forgot Password']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Forgot Password']->image)); ?>" data-parallax-ratio="0.4" style="padding-top:100px;">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mt-70 mt-sm-0 mb-0">Lorem</h3>
                        <h2 class="text-theme-colored2 font-54 mt-0">Lorem</h2>
                        <p class="text-white font-16 mb-sm-30">Lorem</p>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-dark-transparent-4 p-30 mt-0" style="min-height: 400px;">
                            <h3 class="font-28 text-white mt-0">Lorem</h3>
                            <h4 class="font-16 text-gray-darkgray mt-5">Lorem</h4>
                            <?php if(session('status')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were problems with input:
                                    <br><br>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <!-- Appilication Form Start-->
                            <form role="form" id="form" class="mt-20" method="POST" action="<?php echo e(url('password/email')); ?>">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.login.LOGIN_FORM_EMAIL'); ?>" id="email" name="email" class="form-control" type="email" value="<?php echo e(old('email')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="g-recaptcha" data-sitekey="<?php echo app('translator')->getFromJson('global.home.REGISTER.SITE_KEY'); ?>"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-10">
                                            <button name="reset" type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait..."> <?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_RESET'); ?></button>
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
<?php $__env->startSection('main'); ?>

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['Register']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Register']->image)); ?>" data-parallax-ratio="0.4" style="padding-top:100px;">
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
                            <?php if(session('message')): ?>
                            <div class='alert alert-success'>
                                <?php echo e(session('message')); ?>

                            </div>
                            <?php endif; ?>
                            <h3 class="font-28 text-white mt-0"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_TITLE'); ?></h3>
                            <h4 class="font-16 text-gray-darkgray mt-5" id="header_div"><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_SUBTITLE'); ?></h4>
                            <!-- Appilication Form Start-->
                            <form id="form" name="form" class="reservation-form mt-20" method="post" action="<?php echo e(url('/register')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="redirect_url" value="<?php echo e(request('redirect_url', '/')); ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_NAME'); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>" required autofocus class="form-control" type="text">
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
                                            <input name="form_botcheck" class="form-control" value="" type="hidden">
                                            <button name="register" type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">
                                                <?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_REGISTER'); ?></button>
                                            <a href="<?php echo e(route('auth.login')); ?>">Existing user? Log in here</a>
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
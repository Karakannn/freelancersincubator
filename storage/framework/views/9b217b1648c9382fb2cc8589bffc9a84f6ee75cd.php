<?php $__env->startSection('main'); ?>

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['Login']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Login']->image)); ?>" data-parallax-ratio="0.4" style="padding-top:100px;">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mt-70 mt-sm-0 mb-0"><?php echo app('translator')->getFromJson('global.login.LOGIN_TITLE'); ?></h3>
                        <h2 class="text-theme-colored2 font-54 mt-0"><?php echo app('translator')->getFromJson('global.login.LOGIN_SUBTITLE'); ?></h2>
                        <p class="text-white font-16 mb-sm-30"><?php echo app('translator')->getFromJson('global.login.LOGIN_BODY'); ?></p>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-dark-transparent-4 p-30 mt-0" style="min-height: 400px;">
                            <h3 class="font-28 text-white mt-0"><?php echo app('translator')->getFromJson('global.login.LOGIN_FORM_TITLE'); ?></h3>
                            <h4 class="font-16 text-gray-darkgray mt-5" id="header_div"><?php echo app('translator')->getFromJson('global.login.LOGIN_FORM_SUBTITLE'); ?></h4>
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
                            <form role="form" class="reservation-form mt-20" method="post" action="<?php echo e(url('login')); ?>">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.login.LOGIN_FORM_EMAIL'); ?>" name="email" value="<?php echo e(old('email')); ?>" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="<?php echo app('translator')->getFromJson('global.login.LOGIN_FORM_PASSWORD'); ?>" name="password" class="form-control" aria-required="true" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label> <input type="checkbox" name="remember"> Remember me </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>
                                            <i class="fa fa-arrow-circle-right mr-5"></i> <a href="<?php echo e(route('auth.password.email')); ?>"><?php echo app('translator')->getFromJson('global.login.LOGIN_FORM_FORGOT_PASS'); ?></a> <i class="fa fa-arrow-circle-right mr-5" style="margin-left:20px;"></i> <a href="<?php echo e(route('auth.register')); ?>"><?php echo app('translator')->getFromJson('global.login.LOGIN_FORM_REGISTER'); ?></a>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-10">
                                            <input name="form_botcheck" class="form-control" value="" type="hidden">
                                            <button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait..."><?php echo app('translator')->getFromJson('global.login.LOGIN_FORM_LOGIN'); ?></button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="login" value="login_user_submit" />
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
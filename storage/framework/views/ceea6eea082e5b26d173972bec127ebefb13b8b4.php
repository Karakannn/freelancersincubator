<?php $__env->startSection('main'); ?>

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['Edit Profile']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Edit Profile']->image)); ?>">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36"><?php echo app('translator')->getFromJson('global.ACCOUNT.ACCOUNT_PROFILE'); ?></h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('global.menu.home'); ?></a></li>
                            <li class="active"><?php echo app('translator')->getFromJson('global.ACCOUNT.ACCOUNT_PROFILE'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Doctor Details -->
    <section class="">
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
                                <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Email</strong><br>
                                    <?php echo e(Auth::user()->email); ?>

                                </li>
                            </ul>
                            <a class="btn btn-info btn-flat mt-10 mb-sm-30" href="<?php echo e(route('account')); ?>">Back To Profile</a>
                            <a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="#logout" onclick="$('#logout').submit();"><?php echo app('translator')->getFromJson('global.app_logout'); ?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <form role="form" method="POST" action="<?php echo e(route('edit')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="icon-box mb-0 p-0">
                                <a class="icon icon-rounded icon-sm pull-left mb-0 mr-10">
                                    <i class="fa fa-user"></i>
                                </a>
                                <h4 class="text-gray pt-10 mt-0 mb-30" id="header_div"><?php echo app('translator')->getFromJson('global.ACCOUNT.ACCOUNT_PROFILE'); ?></h4>
                            </div>
                            <hr>
                            <?php if(session('a_message')): ?>
                            <div class='alert alert-success'>
                                <?php echo e(session('a_message')); ?>

                            </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_NAME_LABEL'); ?></label>
                                    <input name="name" type="text" class="form-control" value="<?php echo e(Auth::user()->name); ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_EMAIL_LABEL'); ?></label>
                                    <input name="email" class="form-control" type="email" value="<?php echo e(Auth::user()->email); ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_PHONE_LABEL'); ?></label>
                                    <input name="phone" class="form-control" type="tel" value="<?php echo e(Auth::user()->phone); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-dark btn-lg mt-15" type="submit" data-loading-text="Please wait..."><?php echo app('translator')->getFromJson('global.ACCOUNT.ACCOUNT_UPDATE'); ?></button>
                            </div>
                        </form>

                        <hr class="mt-70 mb-70">
                        <form role="form" method="POST" action="<?php echo e(route('edit.password')); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="icon-box mb-0 p-0">
                                <a class="icon icon-rounded icon-sm pull-left mb-0 mr-10">
                                    <i class="fa fa-key"></i>
                                </a>
                                <h4 class="text-gray pt-10 mt-0 mb-30"><?php echo app('translator')->getFromJson('global.ACCOUNT.ACCOUNT_CHANGE_PASS'); ?></h4>
                            </div>
                            <hr>
                            <?php if(session('p_message')): ?>
                            <div class='alert alert-success'>
                                <?php echo e(session('p_message')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(session('p_message_error')): ?>
                            <div class='alert alert-danger'>
                                <?php echo e(session('p_message_error')); ?>

                            </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label><?php echo app('translator')->getFromJson('global.ACCOUNT.REGISTER_FORM_ENTER_PASSWORD'); ?></label>
                                    <input name="password" id="password" class="form-control" type="password" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><?php echo app('translator')->getFromJson('global.home.REGISTER.REGISTER_FORM_CONFIRM'); ?></label>
                                    <input name="password_confirmation" id="password_confirmation" class="form-control" type="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-dark btn-lg mt-15" type="submit" data-loading-text="Please wait..."><?php echo app('translator')->getFromJson('global.ACCOUNT.ACCOUNT_UPDATE'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']); ?>

    <button type="submit"><?php echo app('translator')->getFromJson('global.logout'); ?></button>
    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
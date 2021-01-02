<?php $__env->startSection('main'); ?>

<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo e($header['Contact']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Contact']->image)); ?>">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36"><?php echo app('translator')->getFromJson('global.menu.contact'); ?></h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active"><?php echo app('translator')->getFromJson('global.menu.contact'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0"><?php echo app('translator')->getFromJson('global.contact.OFFICE_LOCATION'); ?></h5>
                                    <p><?php echo e($info[0]->office_location); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"> <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0"><?php echo app('translator')->getFromJson('global.contact.CONTACT_NUMBER'); ?></h5>
                                    <p><?php echo e($info[0]->contact_number); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0"><?php echo app('translator')->getFromJson('global.contact.EMAIL_ADDRESS'); ?></h5>
                                    <p><?php echo e($info[0]->email); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <?php if(session('message')): ?>
                        <div class='alert alert-success'>
                            <?php echo e(session('message')); ?>

                        </div>
                    <?php endif; ?>
                    <h3 class="line-bottom mt-0 mb-30"><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_TITLE'); ?></h3>
                    <!-- Contact Form -->
                    <form role="form" action="<?php echo e(url('contact')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_NAME_LABEL'); ?> <small>*</small></label>
                                    <input name="name" class="form-control required" type="text" placeholder="<?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_NAME'); ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_EMAIL_LABEL'); ?> <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email" placeholder="<?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_EMAIL'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_SUBJECT_LABEL'); ?> <small>*</small></label>
                                    <input name="subject" class="form-control required" type="text" placeholder="<?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_SUBJECT'); ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_PHONE_LABEL'); ?></label>
                                    <input name="phone" class="form-control" type="text" placeholder="<?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_PHONE'); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_MESSAGE_LABEL'); ?></label>
                            <textarea name="message" class="form-control required" rows="5" placeholder="<?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_MESSAGE'); ?>" required></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait..."><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_SEND'); ?></button>
                            <button type="reset" class="btn btn-default btn-flat btn-theme-colored"><?php echo app('translator')->getFromJson('global.contact.CONTACT_FORM_RESET'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
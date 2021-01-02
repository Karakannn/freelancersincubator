        <header id="header" class="header header-floating">
            <div class="header-nav navbar-sticky navbar-sticky-animated">
                <div class="header-nav-wrapper">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default no-bg">
                            <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="<?php echo e(url('/')); ?>">
                                <img class="logo-default" src="<?php echo e(asset('uploads/' . $info[0]->image)); ?>" alt="">
                                <img class="logo-scrolled-to-fixed" src="<?php echo e(asset('uploads/' . $info[0]->image)); ?>" alt="">
                            </a>
                            <ul class="menuzord-menu sm-padding">
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('global.menu.home'); ?></a></li>
                                <li><a href="<?php echo e(route('webinar')); ?>"><?php echo app('translator')->getFromJson('global.menu.webinars'); ?></a></li>
                                <li><a href="<?php echo e(route('video_courses')); ?>"><?php echo app('translator')->getFromJson('global.menu.video_courses'); ?></a></li>
                                <li><a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->getFromJson('global.menu.about'); ?></a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->getFromJson('global.menu.contact'); ?></a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('lecturer')); ?>"><?php echo app('translator')->getFromJson('global.menu.lecturer'); ?></a></li>
                                <li>
                                    <?php if(Auth::check()): ?>
                                    <a href="<?php echo e(route('account')); ?>"> <?php echo app('translator')->getFromJson('global.menu.my_profile'); ?></a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(route('edit.index')); ?>">Edit Profile</a></li>
                                        <li><a href="#logout" onclick="$('#logout').submit();">Logout</a></li>
                                    </ul>
                                    <?php else: ?>
                                    <a href="<?php echo e(route('auth.login')); ?>"> <?php echo app('translator')->getFromJson('global.menu.auth'); ?></a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

<?php $__env->startSection('main'); ?>

  <!-- Start main-content -->
  <div class="main-content">     
    <!-- Section: home -->
    <section id="home" class="fullscreen bg-lightest">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <h1 class="text-theme-colored font-weight-600 font-100">404</h1>
                <h3 class="mt-0 mb-5">Oops! Page Not Found</h3>
                <p>The page you were looking for could not be found.</p>
                <a class="btn btn-default smooth-scroll" href="<?php echo e(url('/')); ?>"><i class="fa fa-hand-o-left font-16 mr-10"></i>Return Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
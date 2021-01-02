<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['home']], function () {
    Route::get('/', ['uses' => 'HomeController@index', 'as' => '/']);
    Route::get('webinar', ['uses' => 'HomeController@webinar', 'as' => 'webinar']);
    Route::get('blogs', ['uses' => 'HomeController@blogs', 'as' => 'blogs']);
    Route::get('video_courses', ['uses' => 'HomeController@videoCourses', 'as' => 'video_courses']);
    Route::get('about', ['uses' => 'HomeController@about', 'as' => 'about']);
    Route::get('account', ['uses' => 'AccountController@index', 'as' => 'account']);
    Route::get('edit', ['uses' => 'EditAccountController@index', 'as' => 'edit.index']);
    Route::post('edit', ['uses' => 'EditAccountController@edit', 'as' => 'edit']);
    Route::post('editpassword', ['uses' => 'EditAccountController@editpassword', 'as' => 'edit.password']);
    Route::get('lecturer', ['uses' => 'HomeController@lecturer', 'as' => 'lecturer']);
    Route::post('lecturer', ['uses' => 'LecturerController@register', 'as' => 'lecturer']);
    Route::get('privacy', ['uses' => 'PrivacyController@index', 'as' => 'privacy.index']);
    Route::get('terms', 'TermsController@index')->name('terms.index');
    Route::get('error', 'ErrorController@index')->name('error.index');
    Route::get('contact', ['uses' => 'ContactController@index', 'as' => 'contact']);
    Route::post('contact', ['uses' => 'ContactController@mailToAdmin', 'as' => 'contact.admin']);
    Route::get('category/{slug}', ['uses' => 'BlogsController@category', 'as' => 'category.index']);


    Route::post('comments/{post_id}',['uses'=>'CommentsController@store','as'=> 'comments.store']);

    Route::get('course/{slug}', ['uses' => 'CoursesController@show', 'as' => 'courses.show']);
    Route::get('course/{slug}/register', ['uses' => 'CoursesController@register', 'as' => 'courses.register']);
    
    Route::get('lesson/{course_id}/{slug}', ['uses' => 'LessonsController@show', 'as' => 'lessons.show']);
    Route::post('lesson/{slug}/test', ['uses' => 'LessonsController@test', 'as' => 'lessons.test']);
    
    Route::get('blogs/{id}', ['uses' => 'BlogsController@show', 'as' => 'blogs.show']);
    
    // Authentication Routes...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
    $this->post('login', 'Auth\LoginController@login')->name('auth.login');
    $this->get('login/resend/{id}', ['uses' => 'Auth\LoginController@resendemail', 'as' => 'auth.resendemail']);
    $this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

    $this->get('verify/{code}', 'Auth\VerifyController@verify')->name('auth.verify');

    // Registration Routes...
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
    $this->post('register', 'Auth\RegisterController@register')->name('auth.register');

    // Change Password Routes...
    $this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
    $this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

    // Password Reset Routes...
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
    $this->get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.email');
    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');
});

Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'Admin\DashboardController@index');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('courses', 'Admin\CoursesController');
    Route::post('courses_mass_destroy', ['uses' => 'Admin\CoursesController@massDestroy', 'as' => 'courses.mass_destroy']);
    Route::post('courses_restore/{id}', ['uses' => 'Admin\CoursesController@restore', 'as' => 'courses.restore']);
    Route::delete('courses_perma_del/{id}', ['uses' => 'Admin\CoursesController@perma_del', 'as' => 'courses.perma_del']);
    Route::resource('lessons', 'Admin\LessonsController');
    Route::post('lessons_mass_destroy', ['uses' => 'Admin\LessonsController@massDestroy', 'as' => 'lessons.mass_destroy']);
    Route::post('lessons_restore/{id}', ['uses' => 'Admin\LessonsController@restore', 'as' => 'lessons.restore']);
    Route::delete('lessons_perma_del/{id}', ['uses' => 'Admin\LessonsController@perma_del', 'as' => 'lessons.perma_del']);
    Route::resource('questions', 'Admin\QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'Admin\QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::post('questions_restore/{id}', ['uses' => 'Admin\QuestionsController@restore', 'as' => 'questions.restore']);
    Route::delete('questions_perma_del/{id}', ['uses' => 'Admin\QuestionsController@perma_del', 'as' => 'questions.perma_del']);
    Route::resource('questions_options', 'Admin\QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'Admin\QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::post('questions_options_restore/{id}', ['uses' => 'Admin\QuestionsOptionsController@restore', 'as' => 'questions_options.restore']);
    Route::delete('questions_options_perma_del/{id}', ['uses' => 'Admin\QuestionsOptionsController@perma_del', 'as' => 'questions_options.perma_del']);
    Route::resource('tests', 'Admin\TestsController');
    Route::post('tests_mass_destroy', ['uses' => 'Admin\TestsController@massDestroy', 'as' => 'tests.mass_destroy']);
    Route::post('tests_restore/{id}', ['uses' => 'Admin\TestsController@restore', 'as' => 'tests.restore']);
    Route::delete('tests_perma_del/{id}', ['uses' => 'Admin\TestsController@perma_del', 'as' => 'tests.perma_del']);
    
    Route::resource('testimonials', 'Admin\TestimonialsController');
    Route::post('testimonials_mass_destroy', ['uses' => 'Admin\TestimonialsController@massDestroy', 'as' => 'testimonials.mass_destroy']);
    Route::post('testimonials_restore/{id}', ['uses' => 'Admin\TestimonialsController@restore', 'as' => 'testimonials.restore']);
    Route::delete('testimonials_perma_del/{id}', ['uses' => 'Admin\TestimonialsController@perma_del', 'as' => 'testimonials.perma_del']);
    Route::resource('settings', 'Admin\SettingsController');
    Route::resource('blogs', 'Admin\BlogsController');

    Route::get('/switch/articles', 'Admin\BlogsController@switch')->name('blogs.switch');
    Route::get('/deletearticle/{id}','Admin\BlogsController@delete')->name('blogs.delete');
    Route::get('/articles/deleted','Admin\BlogsController@trashed')->name('blogs.trashed');
    Route::get('/article/recover/{id}','Admin\BlogsController@recover')->name('blogs.recover');
    Route::get('/harddelete/{id}','Admin\BlogsController@hardDelete')->name('blogs.harddelete');



    Route::post('blogs_mass_destroy', ['uses' => 'Admin\BlogsController@massDestroy', 'as' => 'blogs.mass_destroy']);
    Route::post('blogs_restore/{id}', ['uses' => 'Admin\BlogsController@restore', 'as' => 'blogs.restore']);
    Route::delete('blogs_perma_del/{id}', ['uses' => 'Admin\BlogsController@perma_del', 'as' => 'blogs.perma_del']);
    Route::resource('header', 'Admin\HeaderController');
    Route::resource('slider', 'Admin\SliderController');
    Route::post('slider_mass_destroy', ['uses' => 'Admin\SliderController@massDestroy', 'as' => 'slider.mass_destroy']);
    Route::post('slider_restore/{id}', ['uses' => 'Admin\SliderController@restore', 'as' => 'slider.restore']);
    Route::delete('slider_perma_del/{id}', ['uses' => 'Admin\SliderController@perma_del', 'as' => 'slider.perma_del']);
    Route::resource('info', 'Admin\InfoController');
    
    Route::post('/spatie/media/upload', 'Admin\SpatieMediaController@create')->name('media.upload');
    Route::post('/spatie/media/remove', 'Admin\SpatieMediaController@destroy')->name('media.remove');

    Route::get('/category', 'CategoryController@index')->name('category.index');
    Route::get('/category/switch', 'CategoryController@switch')->name('category.switch');
    Route::post('/category/update', 'CategoryController@update')->name('category.update');
    Route::get('/category/getData', 'CategoryController@getData')->name('category.getData');
    Route::post('/category/create', 'CategoryController@create')->name('category.create');
    Route::post('/category/delete', 'CategoryController@delete')->name('category.delete');

    Route::get('comments/show/{id}', ['uses' => 'CommentsController@show', 'as' => 'comment.show']);

    Route::get('comments/delete/{id}',['uses'=>'CommentsController@delete','as'=> 'comments.delete']);
    Route::get('comments/switch',['uses'=>'CommentsController@switch','as'=> 'comments.switch']);
    Route::get('comments/edit/{id}',['uses'=>'CommentsController@edit','as'=> 'comments.edit']);
    Route::post('comments/update/{id}',['uses'=>'CommentsController@update','as'=> 'comments.update']);







});

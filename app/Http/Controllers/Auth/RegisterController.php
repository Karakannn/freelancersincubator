<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'terms_accepted' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'terms_accepted' => $data['terms_accepted']
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $user->role()->sync([3]);
        $user->verification_code = str_random(25);
        $user->save();

        Mail::to($user->email)->send(new VerifyEmail($user));

        /* $this->guard()->login($user); */
    
        return $this->registered($request, $user)
            ?: redirect()->back()->with('message', 'Thank you for your registration! We have sent an email with a confirmation link to your email address. Please allow 5-10 minutes for this message to arrive.');
    }

    public function showRegistrationForm()
    {
        $info = DB::table('info')->get();
        $slider = DB::table('sliders')->get();
        $testimonial = DB::table('testimonials')->get();
        $header = DB::table('headers')->get()->keyBy('page');
        $course = DB::table('courses')
            ->join('course_user', 'courses.id', '=', 'course_user.course_id')
            ->join('users', 'course_user.user_id', '=', 'users.id')
            ->select('courses.slug', 'courses.id', 'courses.title', 'courses.course_image', 'courses.description', 'courses.price', 'courses.start_date', 'users.name', 'users.profile_image')
            ->where('courses.course_type', '=', '1')
            ->orderBy('courses.id', 'DESC')
            ->get();
        $video = DB::table('courses')
            ->join('course_user', 'courses.id', '=', 'course_user.course_id')
            ->join('users', 'course_user.user_id', '=', 'users.id')
            ->select('courses.slug', 'courses.id', 'courses.title', 'courses.course_image', 'courses.description', 'courses.price', 'courses.start_date', 'users.name', 'users.profile_image')
            ->where('courses.course_type', '=', '2')
            ->orderBy('courses.id', 'DESC')
            ->get();
            return view('auth.register', [
                'info' => $info,
                'slider' => $slider, 
                'testimonial' => $testimonial,
                'courses' => $course,
                'video' => $video,
                'header' => $header
            ]);
    }
}

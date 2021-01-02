<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Hash;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $linkedin_url
 * @property string $facebook_url
 * @property string $twitter_url
 * @property string $phone
 * @property string $presentation
 * @property string $profile_image
 * @property string $remember_token
*/
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'linkedin_url', 
        'facebook_url', 
        'twitter_url', 
        'website_url', 
        'phone', 
        'presentation', 
        'profile_image', 
        'remember_token',
        'verification_code',
        'code'
    ];
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    
    
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }


    public function isAdmin()
    {
        return $this->role()->where('role_id', 1)->first();
    }

    public function lessons()
    {
        return $this->belongsToMany('App\Lesson', 'lesson_student');
    }

}

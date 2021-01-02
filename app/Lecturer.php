<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lecturer
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $webinar_title
 * @property string $hours
 * @property string $join_reason
 * @property string $freelance_experience
 * @property string $description
 * @property string $detailed_description
 * @property integer $terms_accepted
 */
class Lecturer extends Model {
    use SoftDeletes;

    protected $fillable = [
            'name',
            'email',
            'phone',
            'country',
            'webinar_title',
            'hours',
            'join_reason',
            'freelance_experience',
            'description',
            'detailed_description',
            'terms_accepted'];
}

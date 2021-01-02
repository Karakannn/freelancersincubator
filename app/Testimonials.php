<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Class Testimonials
 *
 * @package App
 * @property string $title
 * @property string $position
 * @property string $client
*/
class Testimonials extends Model {
    
    use SoftDeletes;
    
    protected $fillable = ['title','position','client','image'];

    protected $table = 'testimonials';
    
    public function getTestimonials() {
        return $this->belongsToMany(Testimonials::class, 'testimonials');
    }
}
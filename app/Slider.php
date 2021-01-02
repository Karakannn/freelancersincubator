<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Class Slider
 *
 * @package App
 * @property string $line_1
 * @property string $line_2
 * @property string $line_3
 * @property string $button_text
 * @property string $button_url
*/
class Slider extends Model {
    
    use SoftDeletes;
    
    protected $fillable = ['image','line_1','line_2','line_3','button_text','button_url'];
    protected $table = 'sliders';
}
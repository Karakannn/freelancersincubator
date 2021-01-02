<?php
namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Class Blogs
 *
 * @package App
 * @property string $title
 * @property string $body
*/
class Blogs extends Model {
    
    use SoftDeletes;
    
    protected $table = 'articles';

    public function getCategory(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'post_id','id');
    }
    protected $fillable = ['header_image'];
}
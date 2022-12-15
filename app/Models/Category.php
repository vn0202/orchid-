<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Category extends Model
{

    use HasFactory;
    use AsSource;
    protected $fillable = ['title','slug','category_id','user_id'];
    protected $allowedSorts = [

        'title',
        'slug',

    ];
    //Relationship
    public  function  categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class,'category_id');
    }


}

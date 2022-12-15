<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Tag extends Model
{
    use HasFactory;
    use AsSource;
    protected $fillable = [
        'name','slug'
    ];
    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_tag','tag_id','post_id');
    }
}

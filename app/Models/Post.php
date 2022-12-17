<?php

namespace App\Models;

use App\Orchid\Presenters\PostPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory;
    use AsSource;
    use Attachable;
    use Filterable;


    protected $fillable = [
        'title', 'description', 'content', 'slug', 'category_id', 'author', 'active', 'thumb'

    ];

    //RELATIONSHIP
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'author');
    }

    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'title',
        'description',
        'slug',
        'author',
        'active',


    ];
    protected $allowedFilters = [
        'title',
        'category_id',
        'active',
    ];
//searchable
    public function presenter()
    {
        return new PostPresenter($this);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}

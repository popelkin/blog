<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    
    protected $fillable = [
        'title',
        'slug',
        'description_short',
        'description',
        'image',
        'image_show',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'published',
        'created_by',
        'modified_by'
    ];
    
    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . '-' . Carbon::now()->format('dmyHi'), '-');
    }
    
    public function categories()
    {
        return $this->morphToMany('App\Category', 'categoryable');
    }
}

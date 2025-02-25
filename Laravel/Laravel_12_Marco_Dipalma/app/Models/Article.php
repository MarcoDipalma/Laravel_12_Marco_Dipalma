<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
        'title',
        'subtitle',
        'body',
        'img'
    ];

    public function Tags(){
        return $this->belongsToMany(Tag::class);
    }
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;

    protected $table = 'articles'; // Assurez-vous que cela correspond au nom de table Django


    protected $fillable = [ 
        'title', 'slug', 'content', 'author', 'image', 'published_at','article_id','catégorie'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
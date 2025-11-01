<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->article_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'catégorie' => $this->catégorie,
            'author' => $this->author,
            'image_url' => $this->image ? asset('http://localhost:8000/media/' . $this->image) : null, // Si vous stockez les images
            'published_at_formatted' => $this->published_at ? $this->published_at->translatedFormat('d F Y') : null,
            'created_at_for_humans' => $this->created_at->diffForHumans(),
        ];
    }
}

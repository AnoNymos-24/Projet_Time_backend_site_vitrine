<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource; // Import nécessaire pour la transformation en ressource API

class ArticleController extends Controller
{
    /**
     * Affiche une liste d'articles publiés.
     *
     * Cette méthode récupère uniquement les articles ayant une date de publication valide et passée.
     * On utilise `paginate(10)` pour limiter le nombre d'articles retournés par requête.
     *
     * @return \Illuminate\Http\Response
     */public function index(Request $request)
{
    $query = Article::whereNotNull('published_at')
                    ->where('published_at', '<=', now());

    if ($category = $request->get('category')) {
        $query->where('catégorie', $category);
    }

    if ($search = $request->get('q')) {
        $query->where('title', 'like', "%{$search}%");
    }

    $articles = $query->orderBy('published_at', 'desc')
                      ->paginate($request->get('per_page', 10));

    return ArticleResource::collection($articles);
}


    /**
     * Affiche un article spécifique.
     *
     * Vérifie que l'article est publié avant de le retourner.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        // Vérifie que l'article est bien publié
        if (!$article->published_at || $article->published_at > now()) {
            return response()->json(['message' => 'Article introuvable ou non publié.'], 404);
        }

        return new ArticleResource($article); // Retourne l'article en tant que ressource API
    }
}


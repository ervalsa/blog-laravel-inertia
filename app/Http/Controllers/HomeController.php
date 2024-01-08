<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleBlockResource;
use App\Models\Article;
use App\Models\Enums\ArticleStatus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $articles = Article::query()
            ->select('id', 'title', 'slug', 'excerpt', 'thumbnail', 'published_at', 'author_id', 'category_id', 'status')
            ->with('author', 'category')
            ->whereStatus(ArticleStatus::Published)
            ->latest()
            ->paginate(9);
        
        return inertia('Home', [
            'articles' => ArticleBlockResource::collection($articles)->additional([
                'meta' => [ 'has_pages' => $articles->hasPages() ]
            ])
        ]);
    }
}

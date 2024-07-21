<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query();

        if ($search = $request->search) {
            $posts->where(fn(Builder $query) => $query->where(
                'title',
                'LIKE',
                '%' . $search . '%'
            )->orWhere(
                'content',
                'LIKE',
                '%' . $search . '%'
            ));
        }

        return view('posts.index', [
            'posts' => $posts->latest()->paginate(5)
        ]);
    }

    public function postsByCategory(Category $category): View
    {
        return view('posts.index', [
            // 'posts' => $category->posts()->paginate(5)
            'posts' => Post::where(
                'category_id',
                $category->id
            )->latest()->paginate(5)
        ]);
    }

    public function postsByTag(Tag $tag): View
    {
        return view('posts.index', [
            // 'posts' => $category->posts()->paginate(5)
            'posts' => Post::whereRelation(
                'tags',
                'tags.id',
                $tag->id
            )->latest()->paginate(5)
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}

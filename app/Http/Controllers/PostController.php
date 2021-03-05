<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
                ->where('published', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        return view('site.main.index', ['posts' => $posts]);
    }

    /**
     * Jn
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list()
    {
        $posts = DB::table('posts')
                ->where('published', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        return view('site.main.index', ['posts' => $posts]);
    }

    public function single($id)
    {
        $post = Post::findOrFail($id);

        $breadcrumbs = [
                ['link' => "/", 'name' => "Главная"],
                ['link' => "/post", 'name' => " Статьи"],
                ['name' => $post->name],
        ];

        return view('site.post.single', ['post' => $post, 'breadcrumbs' => $breadcrumbs]);
    }
}

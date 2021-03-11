<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function test(){
        $post = Post::find(1);
        $tag = Tag::find([3, 5]);
        $post->tags()->sync($tag);
    }

    public function index()
    {

        $posts = DB::table('posts')
                ->where('active', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        return view('site.post.list', ['posts' => $posts]);
    }

    /**
     * Jn
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list()
    {
        $posts = Post::where('active', 1)
                ->orderBy('date_public', 'desc')
                ->paginate(10);

        return view('site.post.list', ['posts' => $posts]);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function single( $id)
    {
        $post = Post::findOrFail($id);

        $breadcrumbs = [
                ['link' => "/", 'name' => "Главная"],
                ['link' => "/post", 'name' => " Статьи"],
                ['name' => $post->name],
        ];
        $tags = Tag::where('active',1)->orderByDesc('hits')->limit(10)->get();

        return view('site.post.single', [
                'post' => $post,
                'tags' => $tags,
                'breadcrumbs' => $breadcrumbs
        ]);
    }
}

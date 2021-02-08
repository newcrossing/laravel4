<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {
    public function index() {

        $posts = DB::table('posts')
            ->where('published', 1)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('main.index', ['posts' => $posts]);
    }

    /**
     * Jn
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list() {

        $posts = DB::table('posts')
            ->where('published', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('main.index', ['posts' => $posts]);
    }

    public function single(Request $request, $id) {

        $posts = Post::findOrFail($id);
        return view('post.single', ['post' => $posts]);

    }
}

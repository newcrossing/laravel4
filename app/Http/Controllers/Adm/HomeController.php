<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Post;

use function React\Promise\all;

class HomeController extends Controller
{
    public function index()
    {
        $post_count = Post::all()->count();
        return view('adm.home.index', [
            'post_count' => $post_count
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EduController extends Controller
{
    public function sort()
    {

        return view('site.edu.sort');
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


}

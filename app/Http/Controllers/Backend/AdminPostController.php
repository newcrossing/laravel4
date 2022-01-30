<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;

class AdminPostController extends Controller
{


    public function index()
    {
        $posts = Post::where('active', 1)
                ->orderBy('date_public', 'desc')
                ->get();
        return view('backend.pages.page-users-list', compact('posts'));
    }


}

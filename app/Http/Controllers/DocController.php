<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocController extends Controller
{
    public function index()
    {
        $users = DB::table('content')->where('Id_Content', '129')->first();
        // $user= new Test;



        //$user->text = '456848';

        // $user->save();
        return view('main.index', ['users' => $users]);
        // return view('layouts.app');
    }

    public function list()
    {
        $docs = Doc::where('active', 1)
                ->orderBy('date_sign', 'desc')
                ->paginate(10);

        $tags = Tag::where('active', 1)->orderByDesc('hits')->limit(10)->get();

        $breadcrumbs = [
                ['link' => "/", 'name' => "Главная"],
                [ 'name' => " Документы"],

        ];

        return view('frontend.doc.list', compact('docs', 'tags','breadcrumbs'));
    }
}

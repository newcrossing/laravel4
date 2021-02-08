<?php

namespace App\Http\Controllers;

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
}

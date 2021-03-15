<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function loginPage()
    {
        return view('backend.auth.auth-login');
    }

    public function index()
    {
        return view('backend.pages.content-typography');
    }
}

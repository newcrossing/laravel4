<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {

    public function loginPage() {

        return view('admin.auth.auth-login');
    }


}

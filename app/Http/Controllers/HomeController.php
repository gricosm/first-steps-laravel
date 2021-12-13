<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    public function index () {
        // return view('home');
        $users = DB::table('users')->get();
        return  view ('user.index', ['users'=>$users]);
    }
}

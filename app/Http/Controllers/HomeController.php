<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Blog;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $blog = Blog::get();
        // foreach ($blog as $key => $value) {
        //     $data = $value->user;
        //     // dd($data);
        // }

        return view('home');
    }
}

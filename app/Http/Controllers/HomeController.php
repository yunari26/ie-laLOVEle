<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * ３つの屋台から選ぶ
     */
    public function select()
    {
        return view('select');
    }

    /**
     * 屋台で間違いを探す
     */
    public function find()
    {
        return view('find');
    }
}

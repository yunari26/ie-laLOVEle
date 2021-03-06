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
    public function select(Request $request)
    {
        $pageNum = $request->page;
        return view('select' . $pageNum);
    }

    /**
     * 屋台で間違いを探す
     */
    public function find(Request $request)
    {
        $shopNum = $request->shop;
        return view('find' . $shopNum);
    }

    /**
     * 正解
     *  一応コントローラ通すけど要らなかったらviewだけでおけ
     */
    public function yes()
    {
        return view('yes');
    }

    /**
     * 間違い
     * 一応コントローラ通すけど要らなかったらviewだけでおけ
     */
    public function false()
    {
        return view('false');
    }

    /**
     * エンディング
     */
    public function ending()
    {
        return view('ending');
    }

    /**
     * エンディング
     */
    public function member()
    {
        return view('member');
    }

    /**
     * エンディング
     */
    public function thanks()
    {
        return view('thanks');
    }
}

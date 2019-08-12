<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function home()
  {
        // $Article = Article::all();
        // $Article = Article::orderBy('id', 'DESC')->take(7)->get();
        // return view('article', compact('Article'));
        return view('article');
  }
  public function create()
  {
        // $Article = Article::all();
        // $Article = Article::orderBy('id', 'DESC')->take(7)->get();
        // return view('article', compact('Article'));
        return view('article');
  }

    
    
    
}

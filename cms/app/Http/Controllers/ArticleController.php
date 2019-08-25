<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Sample;
use Auth;

class ArticleController extends Controller
{
  public function home()
  {
        $Article = Article::all();
        // $Article = Article::where('userid', Auth::id())->get();
        // $Article = Article::where('userid', '2')->get();
        // ここで、ユーザーIDの記事だけ表示させる処理を作る
        $Article = Article::orderBy('id', 'DESC')->take(7)->get();
// 入れるとしたらここに入れる
        $Sample = Sample::all();
        // var_dump($Sample);
        return view('article', compact('Article','Sample'));

  }

  public function list()
  {
        $Article = Article::all();
        return view('article-list', compact('Article'));
  }


  public function create(Request $request)
  {
        $Article = new Article;
        $Article->id = $request->id;
        $Article->userid = $request->userid;
        $Article->category = $request->category;
        $Article->article = $request->article;
        $Article->save();
        return redirect('/article');
  }

    public function edit($id)
    {
        $Article = Article::find($id);
        return view('article-edit', ['Article'=>$Article ,'id'=>$id]);
    }

     public function update(Request $request)
    {
        $Article = Article::find($request->id);
        $Article->userid = $request->userid;
        $Article->category = $request->category;
        $Article->article = $request->article;
        $Article->update();
        
        return redirect('/article');
    }


    public function delete($id)
    {
        $Article = Article::find($id);
        return view('article-delete', ['Article'=>$Article ,'id'=>$id]);
    }
     public function deletepost(Request $request)
    {
        $Article = Article::find($request->id);
        $Article->userid = $request->userid;
        $Article->category = $request->category;
        $Article->article = $request->article;
        $Article->delete();
        
        return redirect('/article-list');
    }


    
}

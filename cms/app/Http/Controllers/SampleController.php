<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;

class SampleController extends Controller
{
  public function top()
  {
        $Sample = Sample::all();
        $Sample = Sample::orderBy('id', 'DESC')->take(7)->get();
        return view('top', compact('Sample'));
  }



    //
    public function add()
    {
        return view('sample');
    }

    public function create(Request $request)
    {
        $Sample = new Sample;
        $Sample->id = $request->id;
        $Sample->category = $request->category;
        $Sample->samplearticle = $request->samplearticle;
        $Sample->save();
        return redirect('/sample');
    }

    public function request()
    {
        $Sample = Sample::find(1);
        return view('admins', compact('Sample'));
    }


  public function list()
  {
        $Sample = Sample::all();
        return view('sample-list', compact('Sample'));
  }


    public function edit($id)
    {
        $Sample = Sample::find($id);
        //テーブルの中にある、変数IDの中の数字を、持ってきて
        return view('sample-edit', ['Sample'=>$Sample ,'id'=>$id]);
        //ブレードでの表示名：矢印左(今回はid）が呼び出されたら、$idを使って、となる。
        // 例えば['sampleid'=>$id]だったら、ブレードでsampleidとなっているものに、$idの値を渡して、となる。
    }
 


    // postのときは(Request $request)を使う。　　(Request $request)はpostのときに使う。全部じゃなく、必要なデータのみ送付するためにリクエストしている。
    // formを使うと、formの中身を$requestに入れる
    // ($request->id);は、idをリクエストする、という処理
    // $Sample->category = $request->category;　は、右の処理「飛んできた情報をカテゴリーに入れる」、のあと、左の処理「categoryをテーブルに入れる」をやる


     public function update(Request $request)
    {
        $Sample = Sample::find($request->id);
        $Sample->category = $request->category;
        $Sample->samplearticle = $request->samplearticle;
        $Sample->update();
        
        // var_dump($Sample,$request);
        return redirect('/sample-list');
    }
 


    public function delete($id)
    {
        $Sample = Sample::find($id);
        return view('sample-delete', ['Sample'=>$Sample ,'id'=>$id]);
    }

     public function deletepost(Request $request)
    {
        $Sample = Sample::find($request->id);
        $Sample->category = $request->category;
        $Sample->samplearticle = $request->samplearticle;
        $Sample->delete();
        return redirect('/sample-list');
    }


 
 
     public function get_user(){
        $Sample = Sample::find(1);  //Userのテーブルから、IDの1番をfindしなさい、という命令
        return view('sample-edit',['user'=>$user]);  //userの中のshowのページを表示してね、という命令
        // return view('users.show',['user'=>$user,'shop'=>$shop]);  //複数やるときは、こういう表現する
    }
        public function get_edit(){
            $user = User::find(1);  //Userのテーブルから、IDの1番をfindしなさい、という命令
            return view('users.edit',['user'=>$user]);  //userの中のshowのページを表示してね、という命令
        }
}




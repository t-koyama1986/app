<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Sample;
use App\Http\Controllers\Controller;

class SampleapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sample = Sample::all();
        return $Sample;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        $Sample = Sample::where('category', $category)->get();
        $count = count($Sample);
        $num = rand(0, $count-1);
        $array = $Sample[$num];
        // var_dump($array);


        return response()->json([$array]);
    }


        // $Sample = Sample::where('category', $category)->where('id', rand(1,9))->value('category');

        // $Sample = Sample::where('category', $category)->where('id', rand(1,9))->value('id');
        // $Sample = Sample::where('category', $category)->where('id', rand(1,9))->value('category');

        // $Sample = Sample::where('category', 'テスト')->where('id', rand(1,4))->value('id');
        // $Sample = Sample::where('category', 'test')->where('id', rand(5,9))->value('category');


        // ここで、ランダムに該当するまでループを回す必要がある。今のやり方だ恐らく空データにならないのが問題。
        // 解決策が思いつかないが、categoryのlengthが0の時はループ、といった感じになるのか・・・？do whileでよいならこれかもだが不明。。


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

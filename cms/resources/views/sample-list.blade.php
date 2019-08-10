@extends('layouts.app')
@section('content')

<table>
        <tr>
            <th>ID</th>
            <th>カテゴリー</th>
            <th>サンプル文</th>
        </tr>


        @foreach($Sample as $Sample)
        <tr>
            <th>{{$Sample->id}}</th>
            <th>{{$Sample->category}}</th>
            <th>{{$Sample->samplearticle}}</th>
            <th><a href="{{route('sample_edit', ['id'=>$Sample->id])}}">編集</a></th>
        </tr>
        @endforeach


            <!--<th><a href="{{ url('/sample-edit') }}">編集</a></th>-->
<!--routeでやるときは、web.phpの->name('sample_edit')　がついたものが必要-->



</table>

@endsection

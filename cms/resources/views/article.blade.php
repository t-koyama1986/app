@extends('layouts.app')
@section('content')

<div class=container>
<form action='{{ route('article_create') }}' method='post'>
        {{ csrf_field() }}
  <div class="jumbotron">
   <fieldset>
     <!--<label>ユーザーID：<input type="integer" name="userid"></label><br>-->
     <label>カテゴリー：<input type="text" name="category"></label>
     <input type="button" value="候補を表示" class="btn btn-primary"> <br><br>
     <label><textArea name="article" rows="5" cols="60"></textArea></label>
     <input type="submit" value="送信" class="btn btn-primary">
    </fieldset>
  </div>
</form>
</div>
<br>
<!--<a href="{{ url('/sample') }}">サンプル作成用画面へ</a></th>-->


<div class=container>
<table class="table">
        <tr>
            <th>記事ID</th>
            <th>ユーザーID</th>
            <th>カテゴリー</th>
            <th>文章</th>
            <th>日付</th>
        </tr>

        @foreach($Article as $Article)
        <tr>
            <th>{{$Article->id}}</th>
            <th>{{$Article->userid}}</th>
            <th>{{$Article->category}}</th>
            <th>{{$Article->article}}</th>
            <th>{{$Article->created_at}}</th>
            <!--<th><a href="{{route('article_edit', ['id'=>$Article->id])}}">編集</a></th>-->
        </tr>
        @endforeach
<a href="{{ url('/article-list') }}">過去の記事の閲覧・編集ページへ</a></th>
</table>
</div>



@endsection
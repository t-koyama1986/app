@extends('layouts.app')
@section('content')
<form action='{{ route('article_create') }}' method='post'>
  <div class="jumbotron">
   <fieldset>
    <legend>※ このままでも使用可能ですが、履歴を残したい場合は、ログインして使用してください。</legend>
     <label>ユーザーID：<input type="integer" name="user-id"></label><br>
     <label>カテゴリー：<input type="text" name="category"></label>

     <input id=random1 type="button" value="候補を表示"> <br><br>

     <label><textArea name="article" rows="5" cols="60"></textArea></label>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>

    <form action='{{ route('sample_create') }}' method='post'>
        {{ csrf_field() }}
            カテゴリー：<input type='text' name='category'><br>
            内容：<input type='text' name='samplearticle'><br>
            <input type='submit' value='サンプル入力'>
    </form>


<a href="{{ url('/article') }}">サンプル作成用画面へ</a></th>



@endsection
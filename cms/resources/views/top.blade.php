@extends('layouts.app')
@section('content')
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>※ このままでも使用可能ですが、履歴を残したい場合は、ログインして使用してください。</legend>
     <label>カテゴリー：<input type="text" name="category1"></label>
     <input id=random1 type="button" value="候補を表示"> <br><br>
     ここのボタンを押すと、候補が出るようにしたい。←そのためにDB登録が必要←その後、ボタンを押すとモデルに干渉しに行く仕組みが必要←モデル側での細工が必要<br>

     <label><textArea id=category1 name="category1" rows="5" cols="60"></textArea></label>
     <!--<input type="submit" value="送信">-->
    </fieldset>
  </div>
</form>

@endsection

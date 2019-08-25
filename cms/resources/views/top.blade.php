@extends('layouts.app')
@section('content')
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>※ このままでも使用可能ですが、履歴を残したい場合は、ログインして使用してください。</legend>
     <label>カテゴリー：<input type="text" name="category1"></label>
     <input id=random1 type="button" value="候補を表示"> <br><br>

     <label><textArea id=category1 name="category1" rows="5" cols="60"></textArea></label>
     <!--<input type="submit" value="送信">-->
    </fieldset>
  </div>
</form>


<!--==================以下、ajax用-->
<br>
    <button id="ajax">ajax</button>
<br>
    <div class="result"></div>
<br>
<!--==================以上、ajax用-->



@endsection

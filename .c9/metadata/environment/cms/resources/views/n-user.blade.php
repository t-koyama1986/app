{"filter":false,"title":"n-user.blade.php","tooltip":"/cms/resources/views/n-user.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":40,"column":0},"action":"insert","lines":["@extends('layouts.app')","@section('content')","<form method=\"post\" action=\"insert.php\">","  <div class=\"jumbotron\">","   <fieldset>","    <legend>※ このままでも使用可能ですが、履歴を残したい場合は、ログインして使用してください。</legend>","     <label>カテゴリー：<input type=\"text\" name=\"category1\"></label>","     <input id=random1 type=\"button\" value=\"候補を表示\"> <br><br>","","     <label><textArea id=category1 name=\"category1\" rows=\"5\" cols=\"60\"></textArea></label>","     <!--<input type=\"submit\" value=\"送信\">-->","    </fieldset>","  </div>","</form>","","","<a href=\"{{ url('/sample') }}\">サンプル作成用画面へ</a></th>","","<table border=\"1\">","        <tr>","            <font size=\"50px\">フォントサイズ</font>","            <th>ID</th>","            <th>カテゴリー</th>","            <th>サンプル文</th>","            <th>日付</th>","        </tr>","        @foreach($Sample as $Sample)","        <tr>","            <th>{{$Sample->id}}</th>","            <th>{{$Sample->category}}</th>","            <th>{{$Sample->samplearticle}}</th>","            <th>{{$Sample->created_at}}</th>","            <th><a href=\"{{route('sample_edit', ['id'=>$Sample->id])}}\">編集</a></th>","            <th><a href=\"{{route('sample_delete', ['id'=>$Sample->id])}}\">削除</a></th>","        </tr>","        @endforeach","</table>","","","@endsection",""],"id":1}],[{"start":{"row":39,"column":11},"end":{"row":40,"column":0},"action":"remove","lines":["",""],"id":2}]]},"ace":{"folds":[],"scrolltop":204.625,"scrollleft":0,"selection":{"start":{"row":39,"column":11},"end":{"row":39,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1565568219158,"hash":"49fb856b8daa47a4ab97173e88dcc83e8c98bfba"}
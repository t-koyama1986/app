{"filter":false,"title":"user.blade.php","tooltip":"/cms/resources/views/user.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":32,"column":0},"action":"insert","lines":["@extends('layouts.app')","@section('content')","<div class=container>","    <div class=abc>※ このままでも使用可能ですが、履歴を残したい場合は、ログインして使用してください。</div>","    <br>","  <div class=\"jumbotron\">","   <fieldset>","        カテゴリー：<select id=\"select\" name=\"example\">","            <option value=\"テスト\">テスト</option>","            <option value=\"test\">test</option>","            <option value=\"test5\">test5</option>","        </select>","        <button id=\"ajax\"  class=\"btn btn-primary\">候補を表示</button><br><br>","","   <fieldset>","         <label><textArea id=result name=\"article\" rows=\"5\" cols=\"60\"></textArea></label>","    </fieldset>","","","        <br>","        <br>","    </fieldset>","  </div>","","","","","<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>","<script src=\"{{secure_asset('/js/ajax.js') }}\"></script>","","","@endsection",""],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":19},"action":"remove","lines":["@extends('layouts.app')","@section('content')"],"id":2}],[{"start":{"row":29,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["","@endsection",""],"id":3}],[{"start":{"row":24,"column":0},"end":{"row":29,"column":0},"action":"remove","lines":["","","<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>","<script src=\"{{secure_asset('/js/ajax.js') }}\"></script>","",""],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":48},"end":{"row":9,"column":48},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1567606308051,"hash":"255b0da0883d37ac8e4a1e86ff80121934d411dd"}
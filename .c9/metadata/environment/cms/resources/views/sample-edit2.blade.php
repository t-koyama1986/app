{"filter":false,"title":"sample-edit2.blade.php","tooltip":"/cms/resources/views/sample-edit2.blade.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["@extends('layouts.app')","@section('content')","","","    <form action='{{ route('sample_editpost') }}' method='post'>","        {{ csrf_field() }}","            ユーザーID：{{$Sample->id}}<br>","                        <input type='hidden' name='id' value='{{$Sample->id}}'>","            カテゴリー：<input type='text' name='category' value='{{$Sample->category}}'><br>","            内容：<input type='text' name='samplearticle' value='{{$Sample->samplearticle}}'><br>","            <input type='submit' value='サンプル入力'>","    </form>","","","","","@endsection",""],"id":1}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":1},"action":"insert","lines":["a"],"id":2},{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":["a"]},{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"insert","lines":["a"]}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"remove","lines":["aaa"],"id":3},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"insert","lines":["あああ"]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":3},"action":"insert","lines":["あああ"],"id":4}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["あああ",""],"id":5}],[{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["あああ",""],"id":6}],[{"start":{"row":3,"column":43},"end":{"row":3,"column":44},"action":"insert","lines":["2"],"id":12}],[{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"insert","lines":["a"],"id":15},{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["a"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":16},"end":{"row":7,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1565529698626,"hash":"a7ceb091249fbcf6e694f56a1339ccad864ad3af"}
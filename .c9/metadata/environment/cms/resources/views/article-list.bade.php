{"filter":false,"title":"article-list.bade.php","tooltip":"/cms/resources/views/article-list.bade.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"insert","lines":["@extends('layouts.app')","@section('content')","","<table border=\"1\">","        <tr>","            <th>ID</th>","            <th>カテゴリー</th>","            <th>サンプル文</th>","        </tr>","","","        @foreach($Sample as $Sample)","        <tr>","            <th>{{$Sample->id}}</th>","            <th>{{$Sample->category}}</th>","            <th>{{$Sample->samplearticle}}</th>","            <th><a href=\"{{route('sample_edit', ['id'=>$Sample->id])}}\">編集</a></th>","            <th><a href=\"{{route('sample_delete', ['id'=>$Sample->id])}}\">削除</a></th>","        </tr>","        @endforeach","","","</table>","","@endsection"],"id":1}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":24},"action":"remove","lines":["Sample"],"id":2},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["A"]},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["r"]},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["t"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["i"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["c"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["l"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":36},"action":"remove","lines":["Sample"],"id":3},{"start":{"row":11,"column":30},"end":{"row":11,"column":37},"action":"insert","lines":["Article"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":25},"action":"remove","lines":["Sample"],"id":4},{"start":{"row":13,"column":19},"end":{"row":13,"column":26},"action":"insert","lines":["Article"]}],[{"start":{"row":14,"column":19},"end":{"row":14,"column":25},"action":"remove","lines":["Sample"],"id":5},{"start":{"row":14,"column":19},"end":{"row":14,"column":26},"action":"insert","lines":["Article"]}],[{"start":{"row":15,"column":19},"end":{"row":15,"column":25},"action":"remove","lines":["Sample"],"id":6},{"start":{"row":15,"column":19},"end":{"row":15,"column":26},"action":"insert","lines":["Article"]}],[{"start":{"row":3,"column":0},"end":{"row":21,"column":0},"action":"remove","lines":["<table border=\"1\">","        <tr>","            <th>ID</th>","            <th>カテゴリー</th>","            <th>サンプル文</th>","        </tr>","","","        @foreach($Article as $Article)","        <tr>","            <th>{{$Article->id}}</th>","            <th>{{$Article->category}}</th>","            <th>{{$Article->samplearticle}}</th>","            <th><a href=\"{{route('sample_edit', ['id'=>$Sample->id])}}\">編集</a></th>","            <th><a href=\"{{route('sample_delete', ['id'=>$Sample->id])}}\">削除</a></th>","        </tr>","        @endforeach","",""],"id":8}],[{"start":{"row":3,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["","</table>",""],"id":9}],[{"start":{"row":3,"column":0},"end":{"row":25,"column":8},"action":"insert","lines":["<table border=\"1\">","        <tr>","            <th>記事ID</th>","            <th>ユーザーID</th>","            <th>カテゴリー</th>","            <th>文章</th>","            <th>日付</th>","        </tr>","","        @foreach($Article as $Article)","        <tr>","            <th>{{$Article->id}}</th>","            <th>{{$Article->userid}}</th>","            <th>{{$Article->category}}</th>","            <th>{{$Article->article}}</th>","            <th>{{$Article->created_at}}</th>","            <th><a href=\"{{route('article_edit', ['id'=>$Article->id])}}\">編集</a></th>","        </tr>","        @endforeach","","ユーザーごとに、並べ替えるSQL式を作り、表示する","","</table>"],"id":10}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"remove","lines":["ユーザーごとに、並べ替えるSQL式を作り、表示する",""],"id":11},{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"remove","lines":["",""]},{"start":{"row":21,"column":19},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":0},"end":{"row":2,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1566378074641,"hash":"337a6f8e4c12dbf70dbfdd4fc14a09b13237eddd"}
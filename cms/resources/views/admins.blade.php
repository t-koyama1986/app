@extends('layouts.app')
@section('content')


<table>
        <!--<tr>-->
        <!--    <th>ID</th>-->
        <!--    <th>カテゴリー</th>-->
        <!--    <th>サンプル文</th>-->
        <!--</tr>-->

        <!--    <tr>-->
        <!--        <th>{{$Sample->id}}</th>-->
        <!--        <th>{{$Sample->name}}</th>-->
        <!--        <th>{{$Sample->samplearticle}}</th>-->
        <!--    </tr>-->
<br>
<br>
        @foreach($Sample as $key => $value)
        {{$key}}<br>{{$value}}
        @endforeach

</table






     <!--Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            本のタイトル
        </div>
        <!--バリデーションエラーの行、　エラー＆コモンズの行は後で対処-->
         
         
         本登録フォーム 
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

             本のタイトル 
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="item_name" class="form-control">
                </div>
            </div>

             本 登録ボタン 
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
     Book: 既に登録されてる本のリスト 


@endsection

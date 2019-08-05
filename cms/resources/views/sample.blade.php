@extends('layouts.app')
@section('content')
    サンプル作成<br>

    {{$Sample}}

    <form action='{{ route('sample_create') }}' method='post'>
        {{ csrf_field() }}
            ユーザーID：<input type='text' name='id'><br>
            カテゴリー：<input type='text' name='category'><br>
            内容：<input type='text' name='samplearticle'><br>
            <input type='submit' value='サンプル入力'>
    </form>
@endsection
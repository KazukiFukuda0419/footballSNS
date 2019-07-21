@extends('layouts.helloapp')
<style>
.comment{width:300px;height:100px;}
.com{border:thick double #32a1ce;}
    .board{
        padding-left:30px;
        padding-bottom:20px;
    }
    .board > table{
    color:black;
    }
    .board > table th{
    color:red;
    border:thick double #32a1ce;
    }
    .board > table td{
    padding:20px 100px 20px 20px;
    border:thick double #32a1ce;
    }
    .id{
    width:300px;
    }
    .button2{
    color:blue;
        text-decoration:none;
    }
    .button2:hover{
        color:red;
        text-decoration:none;
    }
    </style>
@section('title','Delete')

@section('menubar')
@parent
コメント削除ページ
@endsection

@section('board')
    <div class=board>
        <table border="1" class=tal>
            @if(isset($items))
            <th>NO.</th><th>ハンドルネーム</th><th>コメント</th>
            @foreach($items as $item)
            <tr>
            <td width="20">{{$item->id}}</td>
            <td width="30">{{$item->handle}}</td>
            <td width="400">{{$item->comment}}</td>
            </tr>
            @endforeach
            @endif
        </table>
    </div>
@endsection

@section('content')
<table>
<form method="post" action="/hello/del">
@csrf
    @if($errors->has('num'))
        <tr><th>ERROR</th><td>{{$errors->first('num')}}</td></tr>
    @endif
    <tr><th>NO.</th><td width="500"><input type="text" name="num" placeholder="コメント番号を入力してください。" class=id>
</td></tr>

<tr><th></th><td><input type="submit" value="送信">
</td></tr>
</form>
</table>
<p><a class=button2 href="{{action('HelloController@add')}}">コメント投稿ページ</a></p>
<p><a href="{{action('HelloController@question')}}">アンケート投票ページ</a></p>
@endsection

@section('footer')
copyright 2019 fukuda.
@endsection


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
    .button1{
        color:blue;
        text-decoration:none;
    }
    .button1:hover{
     color:red;
     text-decoration:none;
    }
    </style>
@section('title','Add')

@section('menubar')
   @parent
   新規投稿ページ
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
    <form method="post" action="/hello/add">
    @csrf
    @if($errors->has('name'))
        <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
    @endif
    <tr><th>ハンドルネーム: </th><td><input type="text" name="name" placeholder="名無し" value="名無し">
    </td></tr>
    @if($errors->has('comment'))
        <tr><th>ERROR</th><td>{{$errors->first('comment')}}</td></tr>
    @endif
    <tr><th>コメント: </th><td><textarea rows="5" type="text" name="comment" class=comment placeholder="コメント入力できます！（４００字まで）" value="{{old('comment')}}"></textarea>
    </td></tr>
    <tr><th></th><td><input type="submit" value="送信">
    </td></tr>
    </form>
    </table>
    <p><a class=button1 href="{{action('HelloController@remove')}}">コメント削除ページ</a></p>
    @endsection
@section('footer')
 copyright 2019 fukuda.
@endsection



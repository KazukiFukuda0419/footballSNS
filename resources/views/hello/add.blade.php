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
    .article{
     margin:55px auto;
    width:1100px;
    }
    .img{
        text-align:center;
    }
    h2{
        padding-left:90px;
    }
    </style>
@section('title','Add')

@section('menubar')
   @parent
   <h2>レアル、アザールの加入を正式発表！　念願の移籍がついに実現！</h2>
@endsection

@section('board')
    <p class=img>
        <img class="logo" src="{{ asset('image/アザール.jpg') }}" alt="アザールの画像">
    </p>
        <div class=article>
    <p>　レアル・マドリードはチェルシーに所属するベルギー代表MFエデン・アザールを獲得した。7日にクラブ公式HPにて発表している。なお、契約は2024年6月30日までの5年間となっている。<br>&emsp;アザールは2007－08シーズンにリールにてプロデビューを飾った。2011－12シーズンにリーグ戦で20ゴール18アシストと活躍した後、チェルシーへと移籍を果たした。同クラブでは8年間の在籍で352試合に出場110ゴール92アシストをマーク。2度のプレミアリーグ優勝やヨーロッパリーグ（EL）制覇など、計6度のタイトル獲得に貢献してきた。</p>
        <div>
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



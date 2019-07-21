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
    <h2>久保建英に想定以上の好評価。
    現地記者が明かすレアルの内部事情</h2>
    @endsection
    
    @section('board')
    <p class=img>
    <img class="logo" src="{{ asset('image/久保.jpg') }}" alt="久保ランニングの画像">
    </p>
    <div class=article>
    <p>　久保建英がレアル・マドリードでその名を刻み始めた。それは抽象的でも、具体的でもある。たとえば、彼はクラブスタッフやトップチームの面々にクボと呼ばれることを嫌い、その呼び名をタケに統一しようとしている。カナダ・モントリオールでの１週間余りの合宿で、この若きサムライは純然たる才能と、意思の強さを早々に誇示しているのだ。</p>
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
    
    


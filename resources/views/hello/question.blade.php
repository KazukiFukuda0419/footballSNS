@extends('layouts.helloapp')

@section('title','questionnaire')

@section('menubar')
@parent
アンケートページ
@endsection

@section('content')
<div class=ank1>
   <h2>史上最高の選手は、誰だと思いますか？</h2>
    <form method="post" action="/vote/add">
    @csrf
    @if($errors->has('que'))
    <tr><th>ERROR</th><td>{{$errors->first('que')}}</td></tr>
    @endif
　　　
　　@if(!empty($data))
      <p>{{$msg}}</p>
   @endif
　　　　　<ul>
             <li><label><input type="radio" name="que" value="メッシ" checked="checked">メッシ</label></li>
             <li><label><input type="radio" name="que" value="C・ロナウド">C・ロナウド</label></li>
             <li><label><input type="radio" name="que" value="マラドーナ">マラドーナ</label></li>
             <li><label><input type="radio" name="que" value="ペレ">ペレ</label></li>
             <li><label><input type="radio" name="que" value="ロナウド">ロナウド</label></li>
        </ul>
        <button type="submit">投票・結果</button>
    </form>
</div>
<p><a class=button1 href="{{action('HelloController@remove')}}">コメント削除ページ</a></p>
@endsection

@section('footer')
copyright 2019 fukuda.
@endsection

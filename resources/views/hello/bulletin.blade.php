@extends('layouts.helloapp')

@section('title','掲示板')

@section('board')
<p><a class=button2 href="{{action('HelloController@add1')}}">レアル、アザールの加入を正式発表！　念願の移籍がついに実現！</a></p>
<p><a class=button2 href="{{action('HelloController@add2')}}">コメント投稿ページ</a></p>


@endsection

@section('footer')
copyright 2019 fukuda.
@endsection

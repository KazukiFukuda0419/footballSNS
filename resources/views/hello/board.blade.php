@extends('layouts.helloapp')
@section('title','Bulletin boards')
<style>

</style>
@section('menubar')
@parent



<p><a class=button2 href="{{action('HelloController@add')}}">コメント投稿ページ</a></p>
<p><a href="{{action('HelloController@question')}}">アンケート投票ページ</a></p>
@endsection

@section('footer')
copyright 2019 fukuda.
@endsection


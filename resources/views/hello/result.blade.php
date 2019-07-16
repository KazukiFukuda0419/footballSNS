@extends('layouts.helloapp')
@section('title','questionnaire result')

@section('menubar')
@parent
<h2>Q.史上最高だと思う選手は誰ですか？</h2>
投票結果ページ
@foreach($counts as $count)
<tr>
  <td>{{$count}}票</td>
</tr>
@endforeach


@endsection

@section('footer')
copyright 2019 fukuda.
@endsection


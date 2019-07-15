@extends('layouts.helloapp')
<script src="soccerSNS/Chart.js"></script>

@section('title','questionnaire result')

@section('menubar')
@parent
投票結果ページ
<canvas id="bar" height="450" width="600"></canvas>
@endsection

@section('footer')
copyright 2019 fukuda.
@endsection


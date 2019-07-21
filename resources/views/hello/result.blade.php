@extends('layouts.helloapp')
@section('title','questionnaire result')
<style>
td.vote{
    text-align:center;
}
</style>
@section('menubar')
@parent
<h2>Q.史上最高だと思う選手は誰ですか？</h2>
投票結果ページ
<div>
    <table border="1">
        <th>メッシ</th><th>C・ロナウド</th><th>マラドーナ</th><th>ペレ</th><th>ロナウド</th>

            <tr>
              <td class=vote>{{$counts[0]}}票</td>
              <td class=vote>{{$counts[1]}}票</td>
              <td class=vote>{{$counts[2]}}票</td>
              <td class=vote>{{$counts[3]}}票</td>
              <td class=vote>{{$counts[4]}}票</td>
            </tr>

    </table>
</div>
<div>
<canvas id="chart" height="450" width="600"></canvas>
</div>
<script src="Chart.min.js">
var barChartData = {
labels:["メッシ","C・ロナウド","マラドーナ","ペレ","ロナウド"],
datasets:[
    
        {
            fillColor : /*"#d685b0"*/"rgba(214,133,176,0.7)",
            strokeColor : /*"#d685b0"*/"rgba(214,133,176,0.7)",
        highlightFill: /*"#eebdcb"*/"rgba(238,189,203,0.7)",
        highlightStroke: /*"#eebdcb"*/"rgba(238,189,203,0.7)",
            data : [$counts[0],$counts[1],$counts[2],$counts[3],$counts[4]]
        },
    
   ]
}
window.onload = function(){
    var ctx = document.getElementById("chart").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
                                      responsive : true,
                                      // アニメーションを停止させる場合は下記を追加
                                      /* animation : false */
                                      });
   
    var barChartData = {
    labels:["メッシ","C・ロナウド","マラドーナ","ペレ","ロナウド"],
    datasets:[
        
        {
            fillColor : /*"#d685b0"*/"rgba(214,133,176,0.7)",
            strokeColor : /*"#d685b0"*/"rgba(214,133,176,0.7)",
        highlightFill: /*"#eebdcb"*/"rgba(238,189,203,0.7)",
        highlightStroke: /*"#eebdcb"*/"rgba(238,189,203,0.7)",
            data : [$counts[0],$counts[1],$counts[2],$counts[3],$counts[4]]
        },
        
        ]
    }
}
</script>
<p><a class=button2 href="{{action('HelloController@add1')}}">コメント投稿ページ</a></p>
<p><a href="{{action('HelloController@question')}}">アンケート投票ページ</a></p>
@endsection

@section('footer')
copyright 2019 fukuda.
@endsection


@extends('layouts.app')

@section('content')
<h2 style="text-align:center;">−おみくじ–</h2>
<div class="kakomi-box12">
    <h4 style="text-align:center;">下のボタンをクリックして今日の運勢を占ってみましょう！</h4>
</div>
<div id="omikuji-submit">占う</div>
<div id="result_box9" style="width:80vw; margin: 30px auto;">
    <h2 style="text-align:center;"><div id="result"></div></h2>
</div>

@endsection
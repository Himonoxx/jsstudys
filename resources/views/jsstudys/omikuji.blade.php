@extends('layouts.app')

@section('content')
<h2 class="title" style="text-align:center; color: #BDC0BA;">おみくじ</h2>
    <div class="section section-tabs" style="box-shadow: 3px 3px 2px 3px #e1eef6; width: 80vw; margin:0 auto;">
        <h4 style="text-align:center;">下のボタンをクリックして今日の運勢を占ってみましょう！</h4>
    </div>
<div id="omikuji-submit">占う</div>
<div id="result_box9" style="width:80vw; margin: 30px auto;">
    <h2 style="text-align:center;"><div id="result"></div></h2>
</div>

@endsection
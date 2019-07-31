@extends('layouts.app')

@section('content')

<h2 style="text-align:center;">−Typing Game–</h2>
<div class="kakomi-box12">
    <p id="target">Click to Start</p>
    <P class="info">
        Letter Count : <span id="score">0</span>
        Miss Count : <span id="miss">0</span>
        Time Left : <span id="timer">0</span>
    </P>
    
    <h4 style="text-align:center;"></h4>
</div>

<div class="box9" style="width:80vw; margin:auto; margin-bottom:30px;">
    <h2 style="text-align:center; margin-top:0; margin-bottom:20px;">--Play Guide--</h2>
    <ul>
        <li style="list-style:none; padding-left:0;"><h4>1. 英単語のタイピング練習のための簡易ゲームになります。</h4></li>
        <li style="list-style:none; padding-left:0;"><h4>2. [Click to Play]でゲームを開始できます。</h4></li>
        <li style="list-style:none; padding-left:0;"><h4>3. scoreに正答数、missに誤答数、TimeLeftに残時間が表示されます。</h4></li>
        <li style="list-style:none; padding-left:0;"><h4>4. 終了後にアラートメッセージで結果を確認できます。</h4></li>
        <li style="list-style:none; padding-left:0;"><h4>5. もう一度プレイしたい場合は画面を再度クリックして下さい。</h4></li>
    </ul>
</div>


@endsection
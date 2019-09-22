@extends('layouts.app')

@section('content')

<script>
   var $data = <?php echo $words_eng; ?>;
</script>

<h2 class="category" style="text-align:center; color:#FFFFFB;">−Typing Game–</h2>
<div class="col-sm-10 offset-sm-1">
    <div class="section section-tabs mb-3" style="box-shadow: 3px 3px 2px 3px #e1eef6;">
        <p id="mean"></p>
        <p id="target">Click to Start</p>
        <P class="info">
            Letter Count : <span id="score">0</span>
            Miss Count : <span id="miss">0</span>
            Time Left : <span id="timer">0</span>
        </P>
        
        <h4 style="text-align:center;"></h4>
    </div>
    
    <div class="card mt-5 col-sm-10 offset-sm-1" style="margin-bottom:30px; box-shadow: 3px 3px 2px 3px #e1eef6;">
        <h2 style="text-align:center; margin-top:0; margin-bottom:20px;">--Play Guide--</h2>
        <ul>
            <li style="list-style:none; padding-left:0;"><h4 class="text-primary">1. 英単語のタイピング練習のための簡易ゲームになります。</h4></li>
            <li style="list-style:none; padding-left:0;"><h4 class="text-primary">2. [Click to Play]でゲームを開始できます。</h4></li>
            <li style="list-style:none; padding-left:0;"><h4 class="text-primary">3. scoreに正答数、missに誤答数、TimeLeftに残時間が表示されます。</h4></li>
            <li style="list-style:none; padding-left:0;"><h4 class="text-primary">4. 終了後にアラートメッセージで結果を確認できます。</h4></li>
            <li style="list-style:none; padding-left:0;"><h4 class="text-primary">5. もう一度プレイしたい場合は画面を再度クリックして下さい。</h4></li>
        </ul>
    </div>
</div>

@endsection
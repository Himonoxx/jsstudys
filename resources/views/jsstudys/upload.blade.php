@extends('layouts.app')

@section('content')
<div class="kakomi-box12">
    
    <h1>Upload Page</h1>
    <p>ファイルをアップロードしてください。</p>
    <form method="POST" action="/upload" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="file" id="photo" class="form-controll" style="margin:10px;">
        <h2 id="up_comment" style="text-align:center;"></h2>
        <div class="box6">
            <h4 class="text-center" id="upload_text">ここに画像プレビューが表示されます。</h4>
        </div>
        <div id="submit"></div>
    </form>
    
    
    
    
   
</div>



@endsection
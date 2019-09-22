@extends('layouts.app')

@section('content')
<h2 class="title text-center" style="color: #BDC0BA;">Upload Page</h2>
<div class="section section-tabs col-sm-10 offset-sm-1" style="box-shadow: 3px 3px 2px 3px #e1eef6;">
    <div class="col-sm-10 offset-sm-1">
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
    
    
    
    
   
</div>



@endsection
@extends('layouts.app')

@section('content')
<main>
    <section id="container">
        
        @if(Auth::check())
            
            <div class="flex" style="">
                <div id="itemA" class="kakomi-box12">
                    <h4>Main Menu</h4>
                    <ul class="msr_list02">
                        <h5><li>{!! link_to_route('jsstudys.upload_page','File Upload',[],['style'=>'text-decoration:none;']) !!}</li></h5>
                        <h5><li>{!! link_to_route('jsstudys.photolib','Photo Liblary',[],['style'=>'text-decoration:none;']) !!}</li></h5>
                        <h5><li>{!! link_to_route('jsstudys.omikuji','おみくじ',[],['style'=>'text-decoration:none;']) !!}</li></h5>
                        <h5><li>{!! link_to_route('jsstudys.typing','Typing Game',[],['style'=>'text-decoration:none;']) !!}</li></h5>
                    </ul>
                </div>
                <div id="resp">
                    <div id="itemB">
                        <div class="kakomi-box12">
                            <span class="title-box12">今後やりたいこと</span>フォトライブラリを作成、画像をクリックするとモーダル化してメッセージが表示される。
                        </div>
                    </div>
                    <div id="itemC">
                        <div class="kakomi-box12">
                            <span class="title-box12">タイトル</span>準備中
                        </div>
                    </div>
                    <div id="itemD">
                        <div class="kakomi-box12">
                            <span class="title-box12">タイトル</span>準備中
                        </div>
                    </div>
                    <div id="itemE">
                        <div class="kakomi-box12">
                            <span class="title-box12">簡易メモアプリ</span>メモが投稿できる機能を実装中です。
                        </div>
                    </div>
                </div>
            </div>
        @else
        <div id="toppage">
            <h1>Welcome!!</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['id' => 'btn-signup','class'=>'btn-brackets','style'=>'text-decoration:none;']) !!}
            {!! link_to_route('login', 'Login', [], ['id' => 'btn-login','class'=>'btn-brackets','style'=>'text-decoration:none;']) !!}
        </div>
        @endif
    </section>
</main>


@endsection
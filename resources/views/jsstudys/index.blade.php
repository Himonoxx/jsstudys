@extends('layouts.app')

@section('content')
<main>
    <section id="container">
        
        @if(Auth::check())
            
            <div class="flex" style="">
                <div id="itemA" class="kakomi-box12">
                    <h4>Main Menu</h4>
                    <ul class="msr_list02">
                        <h5><li class="">{!! link_to_route('jsstudys.upload_page','File Upload',[],['style'=>'text-decoration:none;']) !!}</li></h5>
                        <h5><li>{!! link_to_route('jsstudys.photolib','Photo Liblary',['class'=>'btn-animation-02'],['style'=>'text-decoration:none;']) !!}</li></h5>
                        <h5><li>{!! link_to_route('jsstudys.omikuji','おみくじ',['class'=>'btn-animation-02'],['style'=>'text-decoration:none;']) !!}</li></h5>
                        <h5><li>{!! link_to_route('jsstudys.typing','Typing Game',['class'=>'btn-animation-02'],['style'=>'text-decoration:none;']) !!}</li></h5>
                    </ul>
                </div>
                <div id="resp">
                    <div id="itemB">
                        <div class="kakomi-box12">
                            <span class="title-box12">今後やりたいこと</span>フォトライブラリに一言メモを入れられるようにしたい。
                        </div>
                    </div>
                    <div id="itemC">
                        <div class="kakomi-box12">
                            <span class="title-box12">Typing Game Ranking</span>ここにユーザーごとのランキングを載せる予定。
                        </div>
                    </div>
                    <div id="itemD">
                        <div class="kakomi-box12">
                            <span class="title-box12">一言メモ</span>
                                {!! Form::open(['route' => 'posts.store']) !!}
                                <div class="form-group parentb">
                                {!! Form::textarea('memo', old('memo'), ['class' => 'form-control', 'rows' => '2']) !!}
                                {!! Form::submit('Tweet', ['class' => 'btn-brackets childb', 'style' => 'witdh:auto;','id'=>'btn-hv']) !!}
                                {!! Form::close() !!}
                                </div>
                        </div>
                    </div>
                    <div id="itemE">
                        <div class="kakomi-box12">
                                <span class="title-box12">みんなの一言</span>
                                @if($posts->count() < 0)
                                    <h1 style="text-align:center;">----Nothing posts---</h1>
                                @else
                                    <ul>
                                      @foreach($posts as $post)
                                        @if($post->user_id !== \Auth::user()->id)
                                          <b>Tweet: {!! link_to_route('users.show',$post->user->name,['id'=>$post->user->id],['class'=>'btn-open2','style'=>'text-decoration: none;']) !!}</b><li style="text-align:center;">「 {{ $post->memo }} 」   {{ $post->created_at->format('Y/m/d H:i') }}</li>
                                        @else
                                          <b>Tweet: {!! link_to_route('users.show',$post->user->name,['id'=>$post->user->id],['class'=>'btn-open','style'=>'text-decoration: none;']) !!}</b><li style="text-align:center;">「 {{ $post->memo }} 」   {{ $post->created_at->format('Y/m/d H:i') }}</li>
                                        @endif
                                      @endforeach
                                    </ul>
                                    
                                @endif
                                <div>
                                    {{ $posts->render('pagination::bootstrap-4') }}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
        <div id="toppage">
            <h1 id="message" style="margin-bottom:30px; margin-top:0px;">JavaScript Study.</h1>
            <span style="font-size:20px; margin:10px;">{!! link_to_route('signup.get', 'Sign up', [], ['id' => 'btn-signup','class'=>'btn-brackets','style'=>'text-decoration:none;']) !!}</span>
            <span style="font-size:20px; margin:10px;">{!! link_to_route('login', 'Login', [], ['id' => 'btn-login','class'=>'btn-brackets','style'=>'text-decoration:none;']) !!}</span>
        </div>
        @endif
    </section>
</main>


@endsection
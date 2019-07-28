@extends('layouts.app')

@section('content')
<main>
    <section id="container">
        <h1 class="midashi">JSstudy</h1>
        
        <div class="flex" style=width:90%;>
            <div id="itemA" class="kakomi-box12">
                <h4>Main Menu</h4>
                <ul class="msr_list02">
                    <li>{!! link_to_route('jsstudys.upload','File Upload',[],['style'=>'text-decoration:none;']) !!}</li>
                    <li>{!! link_to_route('jsstudys.photolib','Photo Liblary',[],['style'=>'text-decoration:none;']) !!}</li>
                    <li>My box</li>
                    <li>サンプル</li>
                    <li>サンプル</li>
                </ul>
            </div>
            <div>
                <div id="itemB">
                    <div class="kakomi-box12">
                        <span class="title-box12">タイトル</span>テキスト
                    </div>
                </div>
                <div id="itemC">
                    <div class="kakomi-box12">
                        <span class="title-box12">タイトル</span>テキスト
                    </div>
                </div>
                <div id="itemD">
                    <div class="kakomi-box12">
                        <span class="title-box12">タイトル</span>テキスト
                    </div>
                </div>
                <div id="itemE">
                    <div class="kakomi-box12">
                        <span class="title-box12">タイトル</span>テキスト
                        <h1 class="midashi">JSstudy</h1>
                        <p class="str">段落</p>
                        <p class="note">注意書き</p>
                    </div>
                </div>
            </div>
            
        </div>
           
    </section>
</main>


@endsection
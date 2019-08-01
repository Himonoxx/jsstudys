@extends('layouts.app')

@section('content')

    <div style="text-align:center;">
        <h1>Log in</h1>
    </div>
    
    <div class="kakomi-box12" style="margin:auto; text-align:center; width:25vw; ">
        
    {!! Form::open(['route' => 'login.post']) !!}
        
        <div id="fg-email" style-"0 0 0 auto margin-bottom:10px;">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email',old('email')) !!}
        </div>
        <div id="fg-password" style="0 0 0 auto margin-bottom:10px;">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password') !!}
        </div>
        
        {!! Form::submit('Log in',['id' => 'submit-button','style'=>'margin:auto; text-align:center; witdh:25vw;']) !!}
    {!! Form::close() !!}
        
    </div>






@endsection
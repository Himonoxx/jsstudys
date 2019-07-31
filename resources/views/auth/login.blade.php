@extends('layouts.app')

@section('content')

    <div style="text-align:center;">
        <h1>Log in</h1>
    </div>
    
    <div class="kakomi-box12" style="margin:auto; width:50%; height:50vh;">
        
    {!! Form::open(['route' => 'login.post']) !!}
        
        <div id="fg-email" style="margin-bottom:10px; width:auto;">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email',old('email')) !!}
        </div>
        <div id="fg-password" style="margin-bottom:10px; width:auto;">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password') !!}
        </div>
        
        {!! Form::submit('Log in',['id' => 'submit-button','style'=>'margin:0 auto; text-align:center;']) !!}
    {!! Form::close() !!}
        
    </div>






@endsection
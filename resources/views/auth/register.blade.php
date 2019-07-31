@extends('layouts.app')

@section('content')

    <div style="text-align:center;">
        <h1>Sign Up</h1>
    </div>
    
    <div>
        
    {!! Form::open(['route' => 'signup.post']) !!}
        <div id="fg-name">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',old('name')) !!}
        </div>
        <div id="fg-email">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email',old('email')) !!}
        </div>
        <div id="fg-password">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password') !!}
        </div>
        <div id="fg-password-confirmation">
            {!! Form::label('password_confirmation','password_confirmation') !!}
            {!! Form::password('password_confirmation') !!}
        </div>
        
        {!! Form::submit('Sign up',['id' => 'submit-button']) !!}
    {!! Form::close() !!}
        
    </div>






@endsection
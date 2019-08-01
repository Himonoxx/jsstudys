@extends('layouts.app')

@section('content')
    <div id="form">
    <p class="form-title">Sign Up</p>
    {!! Form::open(['route' => 'signup.post']) !!}
    <div style="width:100%;">
        <div style="width:auto; margin-bottom:0;">
            {!! Form::label('name','Name') !!}
        </div>
        <div id="mail" style="width:100%;">
            {!! Form::text('name',old('name')) !!}
        </div>
        
        <div style="width:auto; margin-bottom:0;">
            {!! Form::label('email','Email') !!}
        </div>
        <div class="mail" name="mail" id="mail">
            {!! Form::text('email',old('email')) !!}
        </div>
        
        <div style="width:auto; margin-bottom:0;">
            {!! Form::label('password','Password') !!}
        </div>
        <div class="pass" name="pass" id="pass">
            {!! Form::password('password') !!}
        </div>
        
        <div style="width:auto; margin-bottom:0;">
            {!! Form::label('password_confirmation','Confirm') !!}
        </div>
        <div class="pass" name="pass" id="pass">
            {!! Form::password('password_confirmation') !!}
        </div>
    </div>
        
    <div class="submit" id="submit">
        {!! Form::submit('Sign up',['id' => 'submit-button']) !!}
    </div>
    {!! Form::close() !!}
    </div>

@endsection
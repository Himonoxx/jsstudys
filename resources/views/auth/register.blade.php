@extends('layouts.app')

@section('content')
    <div id="form">
    <p class="form-title">Sign Up</p>
    {!! Form::open(['route' => 'signup.post']) !!}
    <div style="width:100%;">
        <div id="name" class="name" name="name" style="width:auto; margin-bottom:0;">
            {!! Form::label('name','Name', ['class'=>'name-l']) !!}
            {!! Form::text('name',old('name'), ['class'=>'name']) !!}
        </div>
        
        <div id="mail" class="mail" name="mail" style="width:auto; margin-bottom:0;">
            {!! Form::label('email','Email', ['class'=>'em-l']) !!}
            {!! Form::text('email',old('email'),['class'=>'em']) !!}
        </div>
        
        <div class="pass" name="pass" id="pass" style="width:auto; margin-bottom:0;">
            {!! Form::label('password','Password',['class'=>'pass-l']) !!}
            {!! Form::password('password',['class'=>'pass']) !!}
        </div>
        
        <div class="pass" name="pass" id="pass" style="width:auto; margin-bottom:0;">
            {!! Form::label('password_confirmation','Confirm',['class'=>'pass-l']) !!}
            {!! Form::password('password_confirmation',['class'=>'pass']) !!}
        </div>
    </div>
        
    <div class="submit" id="submit">
        {!! Form::submit('Sign up',['id' => 'submit-button']) !!}
    </div>
    {!! Form::close() !!}
    </div>

@endsection
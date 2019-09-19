@extends('layouts.app')

@section('content')
    <div id="form">
    <p class="form-title">Login</p>
    {!! Form::open(['route' => 'login.post']) !!}
    <div class="mail" name="mail" id="mail">
        {!! Form::label('email','Email',['class'=>'em-l']) !!}
        {!! Form::text('email',old('email'), ['class'=>'em']) !!}
    </div>

    <div class="pass" name="pass" id="pass">
        {!! Form::label('password','Password', ['class'=>'pass-l']) !!}
        {!! Form::password('password', ['class'=>'pass']) !!}
    </div>
    <div class="submit" id="submit">
        {!! Form::submit('Log in',['id' => 'submit-button','style'=>'margin:auto; text-align:center; witdh:25vw;']) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection
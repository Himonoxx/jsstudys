@extends('layouts.app')

@section('content')
    <div id="form">
    <p class="form-title">Login</p>
    {!! Form::open(['route' => 'login.post']) !!}
    <div class="mail" name="mail" id="mail">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email',old('email')) !!}
    </div>

    <div class="pass" name="pass" id="pass">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password') !!}
    </div>
    <div class="submit" id="submit">
        {!! Form::submit('Log in',['id' => 'submit-button','style'=>'margin:auto; text-align:center; witdh:25vw;']) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection
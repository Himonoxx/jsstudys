@if(Auth::id() !== $user->id )
    @if(Auth::user()->is_following($user->id))
        {!! Form::open(['route' => ['user.unfollow',$user->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFollow', ['class'=>'btn btn-danger mx-auto btn-block', 'style'=>'background-color: #cb7575;']) !!}
    @else
        {!! Form::open(['route'=>['user.follow',$user->id]]) !!}
            {!! Form::submit('Follow', ['class'=>'btn btn-info btn-block mx-auto', 'style'=>'background-color: #3ac569;']) !!}
        {!! Form::close() !!}
    @endif
@else
  <p style="text-align:center;">Your Account</p>
@endif
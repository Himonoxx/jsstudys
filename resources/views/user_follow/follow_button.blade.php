@if(Auth::id() != $user->id )
    @if(Auth::user()->is_following($user->id))
        {!! Form::open(['route' => ['user.unfollow',$user->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFollow', ['class'=>'btn-social-long-twitter','style'=>'display:inline-block; margin:0 auto;']) !!}
    @else
        {!! Form::open(['route'=>['user.follow',$user->id]]) !!}
            {!! Form::submit('Follow', ['class'=>'btn-social-long-twitter-unf', 'style'=>'display:inline-block; margin:0 auto;']) !!}
        {!! Form::close() !!}
    @endif
@else
  <p style="text-align:center;">Your Account</p>
@endif
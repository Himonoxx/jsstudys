@extends('layouts.app')

@section('content')
<div class="col-sm-10 offset-sm-1">
<div class="panel panel-default">
    <div class="panel-heading" style="background:#16A6B6; color:#F8F8F8;"><h2>User List</h2></div>
    <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th><i class="fa fa-user-circle"></i> User Name</th>
                        <th><i class="fa fa-user-circle"></i> Followers</th>
                        <th><i class="fa fa-user-circle"></i> Followings</th>
                        <th><i class="fa fa-user-circle"></i> Follow / Unfollow</th>
                    </tr>
                </thead>
                @if( empty($users) )
                    <h4>Nothing users.</h4>
                @else
                    @foreach($users as $user)
                        <tr>
                            <td><i class="far fa-user"></i> {{ $user->name }}</td>
                            <td>{{ $user->followers()->count() }}</td>
                            <td>{{ $user->followings()->count() }}</td>
                            <td>@include('user_follow.follow_button',['user' => $user])</td>
                        </tr>
                        @endforeach
                @endif
            </table>
            {{ $users->render('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

@endsection
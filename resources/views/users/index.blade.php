@extends('layouts.app')

@section('content')
<div class="panel panel-default" style="width:50%; margin:0 auto;">
    <div class="panel-heading" style="background:#16A6B6; color:#F8F8F8;"><h2>User List</h2></div>
    <div class="panel-body">
            <table style="width:100%;">
                <tr>
                    <th style="width:50%;"><h3>User Name</h3></th>
                    <th style="width:50%;"><h3>Follow / UnFollow</h3></th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td style="width:50%;"><h4>{{ $user->name }}</h4></td>
                        <td style="width:50%; margin:auto;"><h4>@include('user_follow.follow_button', ['user'=>$user])</h4></td>
                    </tr>
                @endforeach
            </table>
            {{ $users->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
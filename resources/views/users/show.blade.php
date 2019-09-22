@extends('layouts.app')


@section('content')
<div class="row">
  <div class="col-sm-10 offset-1 section section-tabs">
    <div class="panel panel-default">
        <div class="panel-heading"><h3>User Profile</h3></div>
        <div class="panel-body">
            <table>
              <header>
                <tr>
                  <th>UserName</th>
                  <th>Email</th>
                  
                </tr>
              </header>
                <li class="list-group-item">UserName: {{ $user->name }}</li>
                <li class="list-group-item">Email: {{ $user->email }}</li>
                <li class="list-group-item">Tweet<br>
                  <div class="list-group list-group-flush">
                    @foreach($posts as $post)
                        <li class="list-group-item">{{ $post->memo }}</li>
                    @endforeach
                  </div>
                  {{ $posts->render('pagination::bootstrap-4') }}
                </li>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
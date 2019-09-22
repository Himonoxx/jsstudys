@extends('layouts.app')


@section('content')
<div class="row">
  <div class="col-sm-10 offset-1 section section-tabs">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="text-center">User Profile</h3></div>
        <div class="panel-body">
                <li class="list-group-item">UserName: {{ $user->name }}</li>
                <li class="list-group-item">Email: {{ $user->email }}</li>
                <li class="list-group-item">
                  <table class="table table-sm table-info">
                    <tr>
                      <th>tweet</th>
                      <th>posted at</th>
                    </tr>
                    @foreach($posts as $post)
                      <tr>
                          <td>{{ $post->memo }}</td>
                          <td>{{ $post->created_at }}</td>
                      </tr>
                    @endforeach
                  </table>
                  {{ $posts->render('pagination::bootstrap-4') }}
                </li>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
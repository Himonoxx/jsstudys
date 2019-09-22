@extends('layouts.app')

@section('content')
<main>
    <section id="container">
        
        @if(Auth::check())
                          <div class="row">
                          <div class="col-sm-10 offset-sm-1 ">
                            <h4 class="category text-center">Menu</h4>
                            <!-- Nav tabs -->
                            <div class="card" style="box-shadow: 3px 3px 2px 3px #e1eef6;">
                              <div class="card-header">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#typing" role="tab">
                                      <i class="fas fa-gamepad"></i> Typing Game
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#omikuji" role="tab">
                                      <i class="fas fa-hand-holding-heart"></i> おみくじ
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#photo" role="tab">
                                      <i class="fas fa-images"></i> Photo Liblary
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#picture_up" role="tab">
                                      <i class="fas fa-file-upload"></i> Picture Upload
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#user_list" role="tab">
                                      <i class="fas fa-users"></i> User List
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="card-body">
                                <div class="tab-content text-center">
                                  <div class="tab-pane active" id="typing" role="tabpanel">
                                    {{-- タイピングゲームの説明  --}}
                                    <p>JavaScriptを用いて作成した英単語専用タイピングゲームです。<br>SVL12000から抽出した12000語の英単語の中からランダムに出題されるのでTOEIC対策にも活用できます。</p>
                                    <div class="col-sm-4 offset-sm-4">
                                      <button class="btn btn-primary btn-round btn-block" type="button" onclick="window.location='{{ route("jsstudys.typing") }}'">Play now</button>
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="omikuji" role="tabpanel">
                                    {{-- おみくじの説明  --}}
                                    <p>JavaScriptとCSSで作成した簡易的なおみくじになります。<br>本日の運勢を占ってみてはいかが？</p>
                                    <div class="col-sm-4 offset-sm-4">
                                      <button class="btn btn-primary btn-round btn-block" type="button" onclick="window.location='{{ route("jsstudys.omikuji") }}'">Play now</button>
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="photo" role="tabpanel">
                                    {{-- フォトライブラリの説明  --}}
                                    <p>JavaScript(jQuery)を使用したフォトライブラリになります。<br>File Uploaderからアップロードした画像を一覧表示できます。</p>
                                    <div class="col-sm-4 offset-sm-4">
                                      <button class="btn btn-primary btn-round btn-block" type="button" onclick="window.location='{{ route("jsstudys.photolib") }}'">Show now</button>
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="picture_up" role="tabpanel">
                                    {{-- アップローダーの説明  --}}
                                    <p>
                                      画像アップロードはこちらから。<br>
                                      JavaScriptとAWS(S3)を使用しています。ここでアップロードされた画像はPhoto Liblaryにて閲覧可能です。
                                    </p>
                                    <div class="col-sm-4 offset-sm-4">
                                      <button class="btn btn-primary btn-round btn-block" type="button" onclick="window.location='{{ route("jsstudys.upload_page") }}'">Try now</button>
                                    </div>
                                  </div>
                                  {{-- User List  --}}
                                  <div class="tab-pane" id="user_list" role="tabpanel">
                                    <p><i class="fas fa-user-friends"></i>  All Users</p>
                                    <div class="col-sm-10 offset-sm-1">
                                      <table class="table table-sm">
                                        <thead>
                                          <tr>
                                            <th><i class="fa fa-user-circle"></i> User Name</th>
                                            <th><i class="fa fa-user-circle"></i> Followers</th>
                                            <th><i class="fa fa-user-circle"></i> Followings</th>
                                          </tr>
                                        </thead>
                                        @if( empty($all_users) )
                                          <h4>Nothing users.</h4>
                                        @else
                                          @foreach($all_users as $list_user)
                                            <tr>
                                              <td><i class="far fa-user"></i> {{ $list_user->name }}</td>
                                              <td>{{ $list_user->followers()->count() }}</td>
                                              <td>{{ $list_user->followings()->count() }}</td>
                                            </tr>
                                          @endforeach
                                        @endif
                                      </table>
                                      {{ $all_users->render('pagination::bootstrap-4') }}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
      <h4 class="category text-center">Followes tweets.</h4>
              <!-- Tabs with Background on Card -->
                <div class="col-sm-6 offset-sm-3">
                  {{-- ツイートフォーム開始  --}}
                  <div class="card p-3" id="tweet_f" style="box-shadow: 3px 3px 2px 3px #e1eef6;">
                    <div class="card-header"><h3 class="text-center">Tweet</h3></div>
                    <form action="{{ route('posts.store')}}" method="POST" class="form-horizontal">
                      {{ csrf_field() }}
                      <div class="input-group" id="tweet_box">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                      </div>
                      <input type="text" class="form-control" name="memo" placeholder="Left Font Awesome Icon">
                    </div>
                      <button class="btn btn-primary btn-round btn-block" type="submit" name="add"><i class="fas fa-envelope"></i> Post</button>
                    </form>
                  </div>
                  {{-- ツイートフォーム終了  --}}
                  {{-- ツイート表示  --}}
                  @foreach($posts as $post)
                    <div class="card">
                      <div class="card-header">
                        <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tweet{{ $post->id }}" role="tab">Tweet</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile{{ $post->id }}" role="tab">Profile</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#follower{{ $post->id }}" role="tab">Followers</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#following{{ $post->id }}" role="tab">Followings</a>
                          </li>
                          </ul>
                      </div>
                      {{-- ツイート文表示  --}}
                        <div class="card-body">
                        <!-- Tab panes -->
                          <div class="tab-content text-center">
                            <div class="tab-pane active" id="tweet{{ $post->id }}" role="tabpanel">
                              <p class="text-left">
                                <i class="fas fa-user"></i> <b>{{ $post->user->name }}</b>
                              </p>
                              <p>{{ $post->memo }}</p>
                              <p class="text-right">
                                <small><i class="far fa-clock"></i> <b>{{ $post->created_at }}</b></small>
                              </p>
                            </div>
                            {{-- プロファイル  --}}
                            <div class="tab-pane" id="profile{{ $post->id }}" role="tabpanel">
                              <ul class="list list-group list-group-flush">
                                <li class="list-group-item"><i class="fa fa-user-circle"></i> User Name : {{ $post->user->name }}</li>
                                <li class="list-group-item"><i class="far fa-envelope"></i> Email : {{ $post->user->email }}</li>
                              </ul>
                            </div>
                            {{-- フォロワー  --}}
                            <div class="tab-pane" id="follower{{ $post->id }}" role="tabpanel">
                              <p><b>{{ $post->user->followers()->count() }}</b> User followers.</p>
                              <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th><i class="fa fa-user-circle"></i> User Name</th>
                                    <th><i class="fa fa-user-circle"></i> Followers</th>
                                    <th><i class="fa fa-user-circle"></i> Followings</th>
                                  </tr>
                                </thead>
                                <?php $follow_users = $post->user->followings()->paginate(3); ?>
                                @if( empty($follow_users) )
                                  <h4>Nothing follow users.</h4>
                                @else
                                  @foreach($follow_users as $user)
                                    <tr>
                                      <td><i class="far fa-user"></i> {{ $user->name }}</td>
                                      <td>{{ $user->followers()->count() }}</td>
                                      <td>{{ $user->followings()->count() }}</td>
                                    </tr>
                                  @endforeach
                                  {{ $follow_users->render('pagination::bootstrap-4') }}
                                @endif
                              </table>
                            </div>
                            {{-- フォロー  --}}
                            <div class="tab-pane" id="following{{ $post->id }}" role="tabpanel">
                              <p>
                                <b>{{ $post->user->followings()->count() }}</b> User followings.
                              </p>
                              <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th><i class="fa fa-user-circle"></i> User Name</th>
                                    <th><i class="fa fa-user-circle"></i> Followers</th>
                                    <th><i class="fa fa-user-circle"></i> Followings</th>
                                  </tr>
                                </thead>
                                <?php $follower_users = $post->user->followers()->paginate(3); ?>
                                @if( empty($follower_users) )
                                  <h4>Nothing follower users.</h4>
                                @else
                                  @foreach($follower_users as $user2)
                                    <tr>
                                      <td><i class="far fa-user"></i> {{ $user2->name }}</td>
                                      <td>{{ $user2->followers()->count() }}</td>
                                      <td>{{ $user2->followings()->count() }}</td>
                                    </tr>
                                  @endforeach
                                  {{ $follower_users->render('pagination::bootstrap-4') }}
                                @endif
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>
                @endforeach
                <div class="card">
                  {{ $posts->render('pagination::bootstrap-4') }}
                </div>
                </div>
                {{-- ツイート表示終了  --}}
        </div>
    </div>
  </div>
        @else
        <div id="toppage">
            <h1 id="message" style="margin-bottom:30px; margin-top:0px; color:#DADDD8;">JavaScript Study.</h1>
            <span style="font-size:20px; margin:10px;">{!! link_to_route('signup.get', 'Sign up', [], ['id' => 'btn-signup','class'=>'btn-brackets','style'=>'text-decoration:none; color:#DADDD8;']) !!}</span>
            <span style="font-size:20px; margin:10px;">{!! link_to_route('login', 'Login', [], ['id' => 'btn-login','class'=>'btn-brackets','style'=>'text-decoration:none; color:#DADDD8;']) !!}</span>
            <div class="row">
              <div class="col-sm-10 offset-sm-1">
                <h5 class="text-center mt-5" style="color:#DADDD8;">
                  "JavaScriptの勉強も兼ねて作成致しました。サインインして頂くとTOEIC12000語を網羅した英単語のタイピングゲームがプレイできます。"<br>
                  "ツイート機能もあるので、何気ないことをつぶやいて気軽に交流を楽しめます！"
                  <small>
                    - Noaa
                  </small>
                </h5>
              </div>
            </div>
        </div>
        @endif
    </section>
</main>
@endsection
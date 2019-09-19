<header id="luxbar" class="luxbar-fixed">
    <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox"/>
    <div class="luxbar-menu luxbar-menu-right luxbar-menu-material-cyan">
        <ul class="luxbar-navigation">
            <li class="luxbar-header">
                <a href="/" class="luxbar-brand">JSstudy</a>
                <label class="luxbar-hamburger luxbar-hamburger-doublespin" 
                id="luxbar-hamburger" for="luxbar-checkbox"> <span></span> </label>
            </li>
        @if(Auth::check())
          <li class="luxbar-item">{!! link_to_route('users.index','Users',['style'=>'text-decoration:none;']) !!}</li>
          <li class="luxbar-item">{!! link_to_route('jsstudys.upload_page','File Upload',[],['style'=>'text-decoration:none;']) !!}</li>
          <li class="luxbar-item">{!! link_to_route('jsstudys.photolib','Photo Liblary',[],['style'=>'text-decoration:none;']) !!}</li>
          <li class="luxbar-item">{!! link_to_route('jsstudys.omikuji','おみくじ',[],['style'=>'text-decoration:none;']) !!}</li>
          <li class="luxbar-item">{!! link_to_route('jsstudys.typing','Typing Game',[],['style'=>'text-decoration:none;']) !!}</li>
          <li class="luxbar-item">{!! link_to_route('users.show',Auth::user()->name,['id'=>Auth::user()->id],['style'=>'text-decoration:none;']) !!}</li>
          <li class="luxbar-item">{!! link_to_route('logout.get','Logout',['style'=>'text-decoration:none;']) !!}</li>
        @else
          <li class="luxbar-item">{!! link_to_route('login','Login',['style'=>'text-decoration:none;']) !!}</li>
          <li class="luxbar-item">{!! link_to_route('signup.get','Signup',['style'=>'text-decoration:none;']) !!}</li>
        @endif
        </ul>
    </div>
</header>
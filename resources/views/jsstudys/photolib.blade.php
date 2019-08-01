@extends('layouts.app')

@section('content')
<div class="kakomi-box12">
    <h1 style="margin-top:0; margin-bottom:25px; text-align:center;">Photo Liblary</h1>
    <div class="superbox">
        @foreach($jsstudys as $jsstudy)
        <div class="superbox-list">
					<img src={{ $jsstudy->imagepath }} data-img={{ $jsstudy->imagepath }} alt="" class="superbox-img">
		</div>
		@endforeach
			</div>
			<!-- /SuperBox -->
			
			<div style="height:300px;"></div>
</div>



@endsection
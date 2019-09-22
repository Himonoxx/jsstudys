@extends('layouts.app')

@section('content')
<div class="section section-tabs col-sm-10 offset-sm-1 mb">
	<div class="col-sm-10 offset-sm-1">
	    <h1 style="margin-top:0; margin-bottom:25px; text-align:center;">Photo Liblary</h1>
	    <div class="superbox">
	        @foreach($jsstudys as $jsstudy)
	        <div class="superbox">
  				<div class="superbox-list">
    			{{-- <img src="./images/thumb1.jpg" data-img="./images/full1.jpg" alt="" class="superbox-img"> --}}
    			<img src= {{ $jsstudy->imagepath }} data-img={{ $jsstudy->imagepath }} alt="" class="superbox-img">
  			</div>
			</div>
			@endforeach
		</div>
	</div>
				<!-- /SuperBox -->
				<div style="height:300px;"></div>
</div>
		<script>
			$(function() {
				$('.superbox').SuperBox();
				
			});
		</script>
@endsection
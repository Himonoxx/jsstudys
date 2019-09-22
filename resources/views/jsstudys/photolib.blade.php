@extends('layouts.app')

@section('content')
<h2 class="category" style="text-align:center; color:#FFFFFB;">Photo Liblary</h2>
<div class="section section-tabs col-sm-10 offset-sm-1 mb">
	<div class="col-sm-10 offset-sm-1">
	    <div class="superbox">
	        @foreach($jsstudys as $jsstudy)
  			<div class="superbox-list">
    			<img src= {{ $jsstudy->imagepath }} data-img={{ $jsstudy->imagepath }} alt="" class="superbox-img">
  			</div>
			@endforeach
		</div>
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
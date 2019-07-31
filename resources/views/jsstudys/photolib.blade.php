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
            
				<div class="superbox-list">
					<img src="img/superbox-thumb-1.jpg" data-img="img/superbox-full-1.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-2.jpg" data-img="img/superbox-full-2.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox/superbox-thumb-3.jpg" data-img="img/superbox-full-3.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-4.jpg" data-img="img/superbox-full-4.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-5.jpg" data-img="img/superbox-full-5.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-6.jpg" data-img="img/superbox/superbox-full-6.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-7.jpg" data-img="img/superbox-full-7.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-8.jpg" data-img="img/superbox-full-8.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-9.jpg" data-img="img/superbox-full-9.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-10.jpg" data-img="img/superbox/superbox-full-10.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-11.jpg" data-img="img/superbox/superbox-full-11.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox/superbox-thumb-12.jpg" data-img="img/superbox-full-12.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox/superbox-thumb-13.jpg" data-img="img/superbox/superbox-full-13.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-14.jpg" data-img="img/superbox/superbox-full-14.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox/superbox-thumb-15.jpg" data-img="img/superbox-full-15.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox/superbox-thumb-16.jpg" data-img="img/superbox/superbox-full-16.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox/superbox-thumb-17.jpg" data-img="img/superbox/superbox-full-17.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-18.jpg" data-img="img/superbox/superbox-full-18.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-19.jpg" data-img="img/superbox/superbox-full-19.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-20.jpg" data-img="img/superbox/superbox-full-20.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-21.jpg" data-img="img/superbox-full-21.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-22.jpg" data-img="img/superbox-full-22.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox/superbox-thumb-23.jpg" data-img="img/superbox-full-23.jpg" alt="" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="img/superbox-thumb-24.jpg" data-img="img/superbox-full-24.jpg" alt="" class="superbox-img">
				</div>
				<div class="superbox-float"></div>
			</div>
			<!-- /SuperBox -->
			
			<div style="height:300px;"></div>
</div>



@endsection
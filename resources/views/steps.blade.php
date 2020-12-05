@extends('layouts.app', ['title' => 'Home'])
@section('content')
<div class="cc-huawei container container-fluid">
	<div class="row">
		<div class="col-12 py-2">
			<div class="owl-carousel">
				<div class="item">
					1
				</div>
				<div class="item">
					2
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
	    margin:10,
	    responsiveClass:true,
	    stagePadding: 50,
	    nav: true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3,
	            nav:false
	        },
	        1000:{
	            items:1,
	            nav:true,
	            loop:false
	        }
	    }
	})
</script>
@endsection
@extends('layouts.app', ['title' => 'Home'])
@section('content')
<div class="cc-huawei pt-5 container-fluid">
	<div class="row pt-5 pb-3 pl-lg-5">
		<div class="col-12 col-md-5 col-lg-4 py-2 pl-lg-5">
			<div class="cc pl-lg-5 h-100">
			<div class="row pl-lg-5 h-100">
				<div class="col-12 pt-3 pt-lg-5 text-uppercase page-title mt-5">
					<h1 class="title pt-md-4">{{$user->name}}</h1>
					<p class="text-uppercase mt-5" style="width: 60%;">
						PREPÁRATE PARA DISFRUTAS DE NUESTRAS EXCLUSIVAS MASTERCLASSES
					</p>
				</div>
			</div>
			</div>
		</div>
		<div class="col-12 col-md-7 col-lg-8 item-list">
			<div class="row text-center">
				<div class="col-6 item px-0">
					<div class="item-content">
						<img class="img-fluid" src="{{ asset('img/home/chico.png') }}">
						<div class="item-text text-left pb-md-5">
							<p class="text-above mb-1">Master Class Cocina con</p>
							<h4 class="item-title mb-4">
								<strong>José del Castillo</strong>
							</h4>
							<p class="pb-md-5">Básicos de la cocina peruana</p>
						</div>
					</div>
				</div>
				<div class="col-6 item px-0">
					<div class="item-content">
						<img class="img-fluid" src="{{ asset('img/home/chica.png') }}">
						<div class="item-text text-left pb-md-5">
							<p class="text-above mb-1">Master Class Gym con</p>
							<h4 class="item-title mb-4">
								<strong>Solange Barslund - "La Vikinga"</strong>
							</h4>
							<p class="pb-md-5">Entretenimiento Fullbody en casa</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
@endsection
@section('javascript')
<script type="text/javascript">
	$('.btn-s-login').on('click', function (event) {
		$('#collapseLogin').slideDown();
		$('.f-buttons').slideUp();
	})
	$('.btn-cancel').on('click', function (event) {
		$('#collapseLogin').slideUp();
		$('.f-buttons').slideDown();
	})
	$('.owl-carousel').owlCarousel({
	    margin:10,
	    responsiveClass:true,
	    stagePadding: 100,
	    nav: true,
	    dots: true,
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
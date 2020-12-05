@extends('layouts.app', ['title' => 'Home'])
@section('content')
<div class="cc-huawei pt-5 container-fluid">
	<div class="row pt-5 pb-3 pl-lg-5">
		<div class="col-12 col-md-5 col-lg-4 py-2 pl-lg-5">
			<div class="cc pl-lg-5 h-100">
			<div class="row pl-lg-5 h-100">
				<div class="col-12 pt-3 pt-lg-5 text-uppercase page-title">
					<h1 class="title pt-md-4">Gana Exclusivas</h1>
					<p class="text-uppercase">MasterClasses con <br>AppGallery y Claro Club</p>
				</div>
				<div class="col-12 bottom mt-auto pb-5">
					<div class="login-frm pr-2 pr-lg-5 pb-5">
						@if (Auth::user())
						<a class="btn btn-danger" href="/vervideo">Ver vídeos</a>
						@else
						<div class="collapse-frm" id="collapseLogin" style="display: none;">
							<form action="{{ route('ingresar') }}" method="POST" >
        					@csrf
								<div class="form-group f-group-w-icon">
									<input type="text" name="email" class="form-control" placeholder="correo electrónico" required="">
									<i class="fa fa-envelope icon"></i>
								</div>
								<div class="frm-buttons d-flex justify-content-between">
									<button class="btn btn-danger btn-cancel px-4" style="min-width: 0" type="button">Cancelar</button>
									<button class="btn btn-red-transparent btn-login px-4" style="min-width: 0" type="submit">Ingresar <i class="fa fa-play pl-2"></i></button>
								</div>
							</form>
						</div>
						<div class="f-buttons">
						<button class="btn btn-red-transparent btn-s-login mb-4" type="button">Ingresar <i class="fa fa-play pl-2"></i></button>
						<a href="{{ route('registro') }}" class="btn btn-danger btn-s-register mt-2">registrar<i class="fa fa-user pl-2"></i></a>
						<!--button class="btn btn-danger btn-s-register mt-2" type="button" data-toggle="modal" data-target="#modalRegister">Regístrate <i class="fa fa-user pl-2"></i></button-->
						</div>
						@endif
					</div>
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
							<p class="text-above mb-1">Master Class</p>
							<p class="pb-md-2">Básicos de la cocina peruana con</p>
							<h4 class="item-title mb-4">
								<strong>José del Castillo</strong>
							</h4>
							<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalSoon">Ver vídeo</button>
						</div>
					</div>
				</div>
				<div class="col-6 item px-0">
					<div class="item-content">
						<img class="img-fluid" src="{{ asset('img/home/chica.png') }}">
						<div class="item-text text-left pb-md-5">
							<p class="text-above mb-1">Master Class</p>
							<p class="pb-md-2">Entretenimiento Fullbody en casa con</p>
							<h4 class="item-title mb-4">
								<strong>Solange Barslund - "La Vikinga"</strong>
							</h4>
							<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalSoon">Ver vídeo</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="cc-huawei cc-huawei-steps py-5">
	<div class="container ow-parent">
	<div class="row pt-5">
		<div class="col-12 col-md-5 owl-content px-0">
			<div class="owl-carousel owl-steps pb-5">
				<div class="item" data-text="Descarga la app de Claro Club desde el AppGallery de HUAWEI">
					<img class="img-fluid active" src="{{ asset('img/home/d1.png') }}">
				</div>
				<div class="item" data-text="Usa la app de Claro Club desde el AppGallery de HUAWEI">
					<img class="img-fluid" src="{{ asset('img/home/d2.png') }}">
				</div>
				<div class="item" data-text="Inicia sesión">
					<img class="img-fluid" src="{{ asset('img/home/d3.png') }}">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-7 px-0">
			<div class="owl-steps-current item-content">
				<div class="d-flex align-items-center h-100 p-4">
					<div class="text col-12 col-md-7 px-md-4">
						<h4 class="step-title text-right mb-3 text-uppercase"><strong>Paso <span class="step-number">1</span></strong></h4>
						<p class="pl-5">Descarga la app de Claro Club desde el AppGallery de HUAWEI</p>
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
	var owl = $('.owl-carousel').owlCarousel({
	    margin:10,
	    responsiveClass:true,
	    //stagePadding: 100,
	    nav: true,
	    dots: true,
	    mouseDrag: false,
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

	owl.on('changed.owl.carousel', function(event) {
	    var current = event.relatedTarget.current();
	    var activeEls = $('.owl-item.active .item');
	    //var data = $('.owl-steps').find('.owl-item .item').data('text');
	    $('.owl-steps-current p').text(activeEls.data('text'));
	    $('.step-title .step-number').text(current + 1);
	  });
</script>
@endsection
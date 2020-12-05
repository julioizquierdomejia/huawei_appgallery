@extends('layouts.app', ['title' => 'Home'])
@section('content')
<div class="cc-huawei pt-5 container-fluid">
	<div class="row pt-5 pb-3 pl-lg-5">
		<div class="col-12 col-md-5 col-lg-4 py-2 pl-lg-5">
			<div class="cc pl-lg-5 h-100">
			<div class="row pl-lg-5 h-100">
				<div class="col-12 pt-3 pt-lg-5 text-uppercase page-title">
					<h1 class="title">Gana Exclusivas</h1>
					<p class="text-uppercase">MasterClasses con <br>AppGallery y Claro Club</p>
				</div>
				<div class="col-12 bottom mt-auto pb-3">
					<div class="buttons pr-2 pr-lg-5">
						<div class="collapse" id="collapseLogin">
							<form class="form-group f-group-w-icon" action="" method="POST">
								<input type="text" name="email" class="form-control" placeholder="correo electrónico" required="">
								<i class="fa fa-envelope icon"></i>
							</form>
						</div>
						<button class="btn btn-red-transparent btn-login" type="button" data-toggle="collapse" data-target="#collapseLogin">Ingresar <i class="fa fa-play pl-2"></i></button>
						<button class="btn btn-danger btn-login mt-2" type="button" data-toggle="modal" data-target="#modalRegister">Regístrate <i class="fa fa-user pl-2"></i></button>
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
<div class="cc-huawei cc-huawei-steps pt-5">
	<div class="container">
	<div class="row pt-5">
		<div class="col-12 py-4 py-md-5">
			<div class="owl-carousel px-4 px-md-5">
				<div class="item d-flex">
					<span class="col i-active"><img class="img-fluid active" src="{{ asset('img/home/chico.png') }}"></span>
					<span class="col i-inactive">
						<img class="img-fluid" src="{{ asset('img/home/chica.png') }}">
						<div class="item-content">
							<div class="d-flex align-items-center h-100 p-4">
								<div class="text px-md-4">
									<h4 class="step-title text-right mb-3 text-uppercase"><strong>Paso <span class="step-number">1</span></strong></h4>
									<p class="pl-5">Descarga la app de Claro Club desde el AppGallery de HUAWEI</p>
								</div>
							</div>
						</div>
					</span>
				</div>
				<div class="item d-flex">
					<span class="col i-active"><img class="img-fluid active" src="{{ asset('img/home/chico.png') }}"></span>
					<span class="col i-inactive">
						<img class="img-fluid" src="{{ asset('img/home/chica.png') }}">
						<div class="item-content">
							<div class="d-flex align-items-center h-100 p-4">
								<div class="text px-md-4">
									<h4 class="step-title text-right mb-3 text-uppercase"><strong>Paso <span class="step-number">2</span></strong></h4>
									<p class="pl-5">Descarga la app de Claro Club desde el AppGallery de HUAWEI</p>
								</div>
							</div>
						</div>
					</span>
				</div>
				<div class="item d-flex">
					<span class="col i-active"><img class="img-fluid active" src="{{ asset('img/home/chico.png') }}"></span>
					<span class="col i-inactive">
						<img class="img-fluid" src="{{ asset('img/home/chica.png') }}">
						<div class="item-content">
							<div class="d-flex align-items-center h-100 p-4">
								<div class="text px-md-4">
									<h4 class="step-title text-right mb-3 text-uppercase"><strong>Paso <span class="step-number">3</span></strong></h4>
									<p class="pl-5">Descarga la app de Claro Club desde el AppGallery de HUAWEI</p>
								</div>
							</div>
						</div>
					</span>
				</div>
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
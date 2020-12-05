@extends('layouts.app', ['title' => 'Home'])
@section('content')
<div class="container h-100">
	<div class="row h-100">
		<div class="col-12 col-md-4 py-2 row">
			<div class="col-12 pt-3 pt-md-5">
				<h1 class="title">Gana Exclusivas</h1>
				<p class="text-uppercase">MasterClasses con <br>AppGallery y Claro Club</p>
			</div>
			<div class="col-12 bottom mt-auto pb-3">
				<div class="buttons pr-2 pr-md-5">
					<div class="collapse" id="collapseLogin">
						<div class="form-group f-group-w-icon">
							<input type="text" name="email" class="form-control" placeholder="correo electrónico">
							<i class="fa fa-envelope icon"></i>
						</div>
					</div>
					<button class="btn btn-light btn-login btn-block" type="button" data-toggle="collapse" data-target="#collapseLogin">Ingresar <i class="fa fa-play pl-2"></i></button>
					<button class="btn btn-danger btn-login btn-block mt-2" type="button" data-toggle="modal" data-target="#modalRegister">Regístrate <i class="fa fa-user pl-2"></i></button>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-8">
			<div class="row h-100 align-items-center">
				<div class="col-6">
					<img class="img-fluid" src="{{ asset('img/home/appgallery-screen-mob.png') }}">
				</div>
				<div class="col-6">
					<img class="img-fluid" src="{{ asset('img/home/appgallery-home.png') }}">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
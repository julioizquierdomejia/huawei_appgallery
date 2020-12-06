@extends('layouts.app', ['title' => 'Registro'])
@section('content')
<div class="cc-huawei pt-5 container">
	<div class="pt-5 pb-3 mt-5">
		<form class="row" action="/register" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="col-12 col-md-6 form-group">
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombres" value="{{old('name')}}">
				@error('name')
				<p class="error-message text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-12 col-md-6 form-group">
				<input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Apellidos" value="{{old('lastname')}}">
				@error('lastname')
				<p class="error-message text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-12 col-md-6 form-group">
				<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Número celular" value="{{old(' is')}}">
				@error('phone')
				<p class="error-message text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-12 col-md-6 form-group">
				<input type="text" name="dni" class="form-control @error('dni') is-invalid @enderror" placeholder="dni" value="{{old('error')}}">
				@error('dni')
				<p class="error-message text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-12 col-md-6 form-group">
				<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="correo electronico" value="{{old(' is')}}">
				@error('email')
				<p class="error-message text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-12 col-md-6 form-group">
				<input type="text" name="code" class="form-control @error('code') is-invalid @enderror" placeholder="codigo">
				@error('code')
				<p class="error-message text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-12 form-group">
				<div class="form-check" style="line-height: 13px;">
					<input class="form-check-input align-middle" type="checkbox" value="" id="defaultCheckTerms" name="confirm_terms">
					<label class="form-check-label small align-middle" for="defaultCheckTerms" style="font-size: 13px;">
						<span>Acepto y estoy de acuerdo con los <a class="text-white" target="_blank" href="/terminos-condiciones"><u>Términos y Condiciones y Autorización de Tratamiento de Datos Personales</u></a></span>
					</label>
				</div>
				@error('confirm_terms')
				<p class="error-message text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-12 text-center">
				<button class="btn btn-danger btn-cancel px-4" style="min-width: 0" type="button">Cancelar</button>
				<button class="btn btn-red-transparent btn-login px-4" style="min-width: 0" type="submit">Ingresar <i class="fa fa-play pl-2"></i></button>
			</div>
		</form>
		
	</div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
	
</script>
@endsection
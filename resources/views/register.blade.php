@extends('layouts.app', ['title' => 'Registro'])
@section('content')

<div class="cc-huawei pt-5 container">
	<div class="row pt-5 pb-3 mt-5">

		<form action="{{ route('codes.store') }}" method="POST" style="width: 100%;">
		@csrf


		<div class="col-12 col-md-6 form-group">
			<input type="text" name="name" class="form-control" placeholder="Nombres">
		</div>
		<div class="col-12 col-md-6 form-group">
			<input type="text" name="lastname" class="form-control" placeholder="Apellidos">
		</div>
		<div class="col-12 col-md-6 form-group">
			<input type="text" name="phone" class="form-control" placeholder="Número celular">
		</div>
		<div class="col-12 col-md-6 form-group">
			<input type="text" name="dni" class="form-control" placeholder="dni">
		</div>
		<div class="col-12 col-md-6 form-group">
			<input type="text" name="email" class="form-control" placeholder="correo electronico">
		</div>
		<div class="col-12 col-md-6 form-group">
			<input type="text" name="codigo" class="form-control" placeholder="codigo">
		</div>

		<button class="btn btn-danger btn-cancel px-4" style="min-width: 0" type="button">Cancelar</button>
		<button class="btn btn-red-transparent btn-login px-4" style="min-width: 0" type="submit">Ingresar <i class="fa fa-play pl-2"></i></button>

		</form>
		
	</div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
	
</script>
@endsection
@extends('layouts.app', ['title' => 'Registro'])
@section('content')
<div class="cc-huawei pt-5 container-fluid">
	<div class="row pt-5 pb-3">
		<div class="col-12 col-md-6">
			<input type="text" name="name" class="form-control" placeholder="Nombres">
		</div>
		<div class="col-12 col-md-6">
			<input type="text" name="lastname" class="form-control" placeholder="Apellidos">
		</div>
		<div class="col-12 col-md-6">
			<input type="text" name="phone" class="form-control" placeholder="Número celular">
		</div>
		<div class="col-12 col-md-6">
			<input type="text" name="name" class="form-control" placeholder="Apellidos">
		</div>
	</div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
	
</script>
@endsection
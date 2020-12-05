@extends('layouts.app', ['title' => 'Registro'])
@section('content')
<div class="cc-huawei pt-5 container-fluid">
	<div class="row pt-5 pb-3">
		<div class="col-12 col-md-5 col-lg-4 py-2 pl-lg-5">
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
</div>
@endsection
@section('javascript')
<script type="text/javascript">
	
</script>
@endsection
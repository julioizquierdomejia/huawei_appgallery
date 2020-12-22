@extends('layouts.app', ['title' => 'Home'])
@section('content')
<div class="cc-huawei pt-5 container">
	<div class="row pt-5 pb-3 align-items-center">
		<div class="col-12 col-md-5 col-lg-4 py-2 pl-lg-5">
			<div class="cc pl-lg-5 h-100">
			<div class="row pl-lg-5 h-100">
				<div class="col-12 pt-3 pt-lg-5 page-title mt-md-5">
					<h1 class="title pt-md-4">Usuarios</h1>
				</div>
			</div>
			</div>
		</div>
		<div class="col-12 col-md-7 col-lg-8 item-list">
			<div class="table-responsive">
			<table class="table text-white small">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Email</th>
						<th>Celular</th>
						<th>DNI</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->last_name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->celular}}</td>
						<td>{{$user->dni}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
@endsection
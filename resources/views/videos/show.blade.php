@extends('layouts.app', ['title' => 'Home', 'body_class' => 'bg-dark'])
@section('content')
<div class="cc-huawei pt-5 container">
	<div class="row pt-5 pb-3">
		<div class="col-12 col-md-5 col-lg-4 py-2">
			<div class="cc h-100">
				<div class="row pl-lg-5 h-100">
					<div class="col-12 pt-3 pt-lg-5 page-title mt-md-5">
						<h1 class="title pt-md-4">{{ Auth::user()->name }}</h1>
						<p class="mt-5" style="font-size: 20px;width: 60%;">
							Prepárate para disfrutar de nuestras exclusivas MasterClasses
						</p>
						<div class="buttons mt-5 pt-md-5">
							<div class="b-content pt-md-5">
								<button class="btn btn-danger" onclick="window.history.back();"><i class="fas fa-arrow-circle-left pr-2"></i> Volver</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-7 col-lg-8 videos-list">
			<div class="item h-100">
				<div class="item-content h-100">
					<div class="embed-responsive embed-responsive-16by9">
						<video controls="" class="embed-responsive-item item-video" oncontextmenu="return false;">
							@if ($video == 'cocina-peruana')
							<source src="{{ asset('videos/huawei-masterclass-cocina-online-hd.mp4') }}" type="video/mp4">
							@else
							<source src="{{ asset('videos/huawei-masterclas-fullbody.mp4') }}" type="video/mp4">
							@endif
						</video>
					</div>
					<div class="row mt-4">
						<div class="col-12 col-md-8 item-text">
							@if ($video == 'cocina-peruana')
							<p>Aprende la mejor técnica para preparar un delicioso <strong>Lomo Saltado</strong> y un increíble ceviche como todo un chef con <strong>José del Castillo</strong>.</p>
							@else
							<p>Aprende la mejor técnica de Entrenamiento Fullbody en casa con
							<strong>Solange Barslund "La Vikinga"</strong>.</p>
							@endif
						</div>
						<div class="col-12 col-md-4 py-2">
							<div class="dropdown">
								<button class="btn btn-outline-light btn-sm px-4 py-2 dropdown-toggle" data-toggle="dropdown"><small>Compartir</small> <i class="fas fa-share-alt ml-3"></i></button>
								<ul class="dropdown-menu">
									<li><a class="btn btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://twitter.com/intent/tweet?text=Este%vídeo%20te%20encantará%20&#128154;:%20%0A{{url()->current()}}.%0A" target="_blank" class="btn twitter-share-button"><i class="fab fa-twitter"></i></a></li>
									<li><button type="button" class="btn btn-pinterest"><i class="fab fa-pinterest"></i></button></li>
									<li><a class="btn btn-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{url()->current()}}&title=Este%vídeo%20te%20encantará%20" target="_blank"><i class="fab fa-linkedin"></i></a></li>
									<li><a target="_blank" class="whatsapp-btn btn btn-whatsapp" data-text="Hola,%20te%20comparto%20nuestro%vídeo%20{{url()->current()}}" href="https://web.whatsapp.com/send?text=Hola,%20te%20comparto%20nuestro%vídeo%20%0A{{url()->current()}}"><i class="fab fa-whatsapp"></i></a></li>
									<li><a class="btn" href="mailto:?subject=Te invito a ver este vídeo&amp;body=Este vídeo te encantará &#9829;: %0A{{url()->current()}}.%0A%0A"><i class="fas fa-envelope"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					@if ($video == 'cocina-peruana')
					<div class="receta">
						<h4>Ingredientes</h4>
						<p>Ceviche:</p>
						<p>200 gr de Pescado Fresco, 1/3 de Cebolla Roja, 01 Camote, 01 Choclo, 01 Kion, Ramas de Culantro, 10 a 12 Limones, 01 Rama de Apio, Hojas de Lechuga Americana, 1/2 Aj&iacute; Limo, Cancha Chulpi, Sal y Pimienta.</p>
						<p>Lomo Saltado:</p>
						<p>200 gr de Lomo Fino, &frac12; Cebolla, 01 Tomate, 01 Papa Amarilla, 01 Aj&iacute; Amarillo, Ramas de Culantro, Aceite Vegetal, Vinagre Tinto, Sillao, Or&eacute;gano, 03 Dientes de Ajo, Sal y Pimienta.</p>
					</div>
					@else

					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.base-template')

@section('meta-description')
	<meta name="description" content="Retrouvez ici l'esemble des photos de la catégorie que vous avez sélectionné.  Notre salle, nos plats, nos séances, nos partenaires,... " />
@endsection

@section('page-title')
	<title>Life-up | Gallerie</title>
@endsection

@section('container')
		<section class="picture-panel">
		@if(!$pictures->isEmpty())
			@foreach ($pictures as $picture)
				<a href="{!!$picture->PATH!!}" data-lightbox="NUTRITION" data-title="{!!$picture->NAME!!}">
				<img src="{!!$picture->THUMB_PATH!!}" alt="{!!$picture->THUMB_NAME!!}" /></a>
			@endforeach
		@else
			<h3>Aucune image n'a été trouvée</h3>
		@endif
		</section>
@endsection
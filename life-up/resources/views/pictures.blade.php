@extends('layouts.base-template')

@section('meta-description')
	<meta name="description" content="Cette page contient une multitude de gallerie photo de notre salle, nos séances sportive, nos machines.  Mais également des photos de plats sains." />
@endsection

@section('page-title')
	<title>Life-up | Album photo</title>
@endsection

@section('container')
		<section class="picture-panel">
		@if(!$pictureCategories->isEmpty())
			@foreach ($pictureCategories as $pictureCategory)
				<div class="base-image-section">
				  <img src="{!!$pictureCategory->THUMB_PATH!!}" alt="{!!$pictureCategory->DESCRIPTION!!}">
				  <a href="{!! url('pictures/'.$pictureCategory->id); !!}">
					<button class="btn btn-style">{!!$pictureCategory->DESCRIPTION!!}</button>
				  </a>
				</div>	
			@endforeach
		@else
			<h3>Aucune catégorie n'a été trouvée</h3>
		@endif
		</section>
@endsection
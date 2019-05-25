@extends('layouts.template-news')

@section('meta-description')
	<meta name="description" content="Vous pourrez vous tenir au courant des nouveautés concernant nos activités sportives, nos partenariats.  Cette page contients une multitude d'articles intérressants nous concernant." />
@endsection

@section('page-title')
	<title>Life-up | News</title>
@endsection

@section('articles')
	@if(!$articles->isEmpty())
		@foreach ($articles as $article)
			<div class="news-panel">
				<div class="img-news-panel">
					<img class="image-rounded" src="{!!$article->LINK_THUMB!!}" alt="{!!$article->TITLE!!}">
				</div>	
			
				<div class="news-info">
				  <h3>{!!$article->TITLE!!}</h3>
				  <p>{!!$article->DESCRIPTION!!}</p>
				</div>		
			</div>
			<hr>
		@endforeach
	@else
		<h3>Aucun article n'a été trouvé</h3>
	@endif
@endsection
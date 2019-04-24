@extends('layouts.base-template')

@section('meta-description')
	<meta name="description" content="Bienvenue sur le site de Life-up, votre cabinet sportif privé qui vous aidera à surmonter vos challenge.  Envie de sport, de maigrir, d'une vie plus saine, n'hésitez pas à visiter notre site et à nous contacter" />
@endsection

@section('page-title')
	<title>Life-up | Cabinet sportif</title>
@endsection

@section('container')
	<section>
		<div class="citation">
			<cite>
				"Le sport va chercher la peur pour la dominer, la fatigue pour en triompher, la difficulté pour la vaincre."
				<article>Pierre de Coubertin</article>
			</cite>
		</div>
		<div class="cite-para">
			<p>Cabinet sportif - Sport - Nutrition - Préparation physique - Réadaptation sportive</p>
			<p><b>Life-up</b>, votre cabinet sportif privé</p>
			
			<p>
				<a href="{!! url('aboutUs'); !!}">
					<button class="btn-style">En savoir plus</button>
				</a>
			</p>
		</div>


	</section>
@endsection
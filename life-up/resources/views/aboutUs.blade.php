@extends('layouts.base-template')

@section('meta-description')
	<meta name="description" content="Vous voulez en savoir plus sur votre cabinet sportif ? N'hésitez pas à lire cette page de présentation du cabinet et de ce que nous pouvons vous offrir en terme de sport et de coaching." />
@endsection

@section('page-title')
	<title>Life-up | A propos de nous</title>
@endsection

@section('container')
		<section class="about-me-section">
			<h2>Sport - Nutrition - Préparation physique - Réadaptation sportive</h2>
			<br>
			<h1>Qui Somme-nous ?</h1>
			<br>
			
			<article>
				<img src="../images/about-us/about-us-2.jpg" class="about-us-1">
				<p>
					<b>Life Up</b> n'est pas une simple salle de fitness mais plutôt un cabinet privé muni d'un matériel
					professionnel de haute qualité, adapté pour sportif confirmé ou amateur mais aussi pour toute
					personne dont le suivi médical, post-traumatique ou pas, nécessite une prise en charge spécifique.
				</p>
			</article>
			
			<article class="reverse-article">
				<img src="../images/about-us/about-us-3.jpg" class="about-us-2">
				<p>		
					Chacun y est encadré, de manière personnalisée, par un professionnel du sport qui dispose d'une 
					maîtrise en Sciences de la Motricité et qui grâce à ses compétences, établit un programme physique, 
					voire nutritionnel, de qualité.
				</p>
			</article>
			
			<article>
				<img src="../images/about-us/about-us-1.jpg" class="about-us-1">
				<p>
					Notre concept se base sur un travail en synergie avec le médical et le para-médical, dans le respect
					de chaque individu et en toute confidentialité. Nous pouvons également travailler en collaboration avec toute
					infrastructure sportive fréquentée par le client pris en charge.
				</p>
			</article>
			<br>
			<p>
				Nos objectifs : 
					<ul>
						<li>faire du sport un <b>outil de santé</b> permettant de <b>traiter</b> ou de <b>diminuer</b> divers problèmes médicaux 
						(problèmes cardio-vasculaires, diabète , surcharge pondérale, 
						dépression, burn-out, problèmes articulaires, musculaires, dorsaux, … )
						</li>
						<li>
						répondre aux <b>attentes des sportifs</b> débutants ou confirmés en terme de préparation physique, 
						de développement ou de renforcement musculaire, … 
						</li>
						<li>
						mettre l’accent sur une <b>saine nutrition</b> et sur la qualité des produits régionaux qui peuvent y contribuer. 
						</li>
					</ul>
			</p>
			<p>N'hésitez par à nous contacter pour de plus amples informations ou pour visiter notre cabinet.</p>
			<p>
				<a href="{!! url('contact'); !!}">
					<button class="btn-style">Contactez-nous</button>
				</a>
			</p>
		</section>
@endsection
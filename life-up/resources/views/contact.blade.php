@extends('layouts.base-template')
		
@section('meta-description')
	<meta name="description" content="Des questions, des envies ? Contactez-nous pour trouver vos réponse dans les domaines du sport, de la nutrition et de notre coahcing sportif." />
@endsection		
		
@section('page-title')
	<title>Life-up | Contact</title>
@endsection	
		
@section('container')
	<section id="form-info-section">
		<div id="contact-section">
			<h2>Vous voulez en savoir plus ?</h2>
			<p> <h3>Contactez-nous, nous prendrons le temps de répondra à toutes vos questions.</h3>
			<div id="element-contact">
				<div>
					<img src="../images/contact/icon-phone.png" alt="Logo contact phone" />
					<br> GSM : 0497/37 10 61
					<br> Tel. : 085/30 39 03</div> 
				<div>
					<img src="../images/contact/icon-mail.png" alt="Logo contact mail" />
					<br>life-up@info.be
				</div>
				<div>
					<img src="../images/contact/icon-location.png" alt="Logo contact location" />
					<br>Thier de la rivière 1E 
					<br>4520 Longpré, Belgium
				</div>
			</div>
		</div>	
		
		<div class="wrap-contact100">
			{!! Form::open(['route' => 'contact.store']) !!}
				<div class="wrap-input100 validate-input {!! $errors->has('lastname') ? 'has-error' : '' !!}">
					{!! Form::text('lastname', null, ['class' => 'form-control input100', 'placeholder' => 'Votre nom (*)']) !!}
					{!! $errors->first('lastname', '<small class="help-block">:message</small>') !!}
				</div>
				
				<div class="wrap-input100 validate-input {!! $errors->has('firstname') ? 'has-error' : '' !!}">
					{!! Form::text('firstname', null, ['class' => 'form-control input100', 'placeholder' => 'Votre prénom (*)']) !!}
					{!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}
				</div>

				<div class="wrap-input100 validate-input {!! $errors->has('email') ? 'has-error' : '' !!}">
					{!! Form::email('email', null, ['class' => 'form-control input100', 'placeholder' => 'Votre email']) !!}
					{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
				</div>
				
				<div class="wrap-input100 validate-input {!! $errors->has('phoneNumber') ? 'has-error' : '' !!}">
					{!! Form::text('phoneNumber', null, ['class' => 'form-control input100', 'placeholder' => 'Votre numéro de téléphone (*)']) !!}
					{!! $errors->first('phoneNumber', '<small class="help-block">:message</small>') !!}
				</div>
				
				<div class="wrap-input100">
					{!! Form::text('address', null, ['class' => 'form-control input100', 'placeholder' => 'Votre adresse']) !!}
				</div>

				<div class="wrap-input100 validate-input {!! $errors->has('message') ? 'has-error' : '' !!}">
					{!! Form::textarea ('message', null, ['class' => 'form-control input100', 'placeholder' => 'Votre message (*)']) !!}
					{!! $errors->first('message', '<small class="help-block">:message</small>') !!}
				</div>
				
				<p>(*) Ces champs sont obligatoires</p>

				<div class="container-contact100-form-btn">
					{!! Form::submit('Envoyer !', ['class' => 'contact100-form-btn']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</section>
@endsection
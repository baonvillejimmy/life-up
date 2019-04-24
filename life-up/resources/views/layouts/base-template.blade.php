 <html>
	<head>
		<link rel="stylesheet" href="../css/style.css"/>
		<link rel="stylesheet" href="../css/form.css"/>
		<link rel="stylesheet" href="../css/base-photo.css"/>
		<link rel="stylesheet" href="../css/lightbox/lightbox.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link href="https://fonts.googleapis.com/css?family=Lato|Roboto|Charm" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" />
		@yield('meta-description')
		
		@yield('page-title')
	</head>
	<body>

		<header class="banner">
			<div class="header-logo">
				<img src="../images/logo.png" alt="Logo de LifeUp" />
			</div>
		</header>
		
		<div id="nav-bar-container">
			<nav class="header-nav" id="header-nav">
				<a href="{!! url(''); !!}">Acceuil</a>
				<a href="{!! url('service'); !!}">Services</a>
				<a href="{!! url('pictures'); !!}">Photos</a>
				<a href="{!! url('news'); !!}">Actualités</a>
				<a href="{!! url('aboutUs'); !!}">A propos</a>
				<a href="{!! url('contact'); !!}">Contact</a>
				<a href="javascript:void(0);" class="icon" onclick="myMenuFunction()">
					<i class="fa fa-bars"></i>
				</a>
			</nav>
		</div>	
		
		@yield('container')

		<footer>
			<div id="social-links">
				Suivez-nous
				<nav id="footer-nav">
					<a href="https://www.facebook.com/healthyenfamille/">
						<img src="../images/social-link/facebook.png" alt="Life-up facebook" />
					</a></li>
					<a href="https://instagram.com/lifeupnwsantesport">
						<img src="../images/social-link/instagram.png" alt="Life-up instagram" /></li>
					</a>
				</nav>
			</div>
		</footer>
	
		<script src="../js/lightbox-plus-jquery.min.js"></script>
	
		<script>
			window.onscroll = function() {myFunction()};
			var header = document.getElementById("nav-bar-container");
			var sticky = header.offsetTop;

			function myFunction() {
			  if (window.pageYOffset >= sticky-10) {
				header.classList.add("nav-fixed");
			  } else {
				header.classList.remove("nav-fixed");
			  }
			}
			
			function myMenuFunction(){
			  var x = document.getElementById("header-nav");
			  if (x.className === "header-nav") {
				x.className += " responsive";
			  } else {
				x.className = "header-nav";
			  }
			}
		</script>
	</body>
</html>
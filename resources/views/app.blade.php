<!DOCTYPE html>
<html>
<head>
	<title>Blokspecerijen</title>
	{!! Html::style('css/app.css') !!}
</head>
<body>
	<header>
		<div class="container">
			<h1 class="logo">Blokspecerijen</h1>
			<select name="" id="" class="language">
				<option value="Nederlands" selected>Nederlands</option>
				<option value="Duits">Duits</option>
				<option value="Spaans">Spaans</option>
			</select>

			<nav class="main-nav">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="#">Assortiment</a></li>
					<li><a href="#">Historie</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>	
	</header>
	
	
	<section id="main" role="main">

		<section class="slideshow">
			{!!	HTML::image('http://2.bp.blogspot.com/-T5gxyIRLBDE/UpEBr2OaLkI/AAAAAAAABsA/W4mgwzDqyxM/s1600/Lamsboutstukjes+in+verse+gember,+kentjoer+en+kruiden&specerijen+005.JPG') !!}
		</section>

		<div class="container">
			<section class="home">
			
				<h1>Welkom</h1>

				<p>Blok's Specerijen is een bekende naam in de specerijen en slagerswereld. De kennis van het malen en mengen van specerijen zijn overgenomen van de voorgaande generaties. Sinds de laatste verhuizing naar Almere beschikken wij over een modern pand wat voldoet aan de huidige eisen.</p> 

				<p>Wij kunnen diversen soorten mixen leveren volgens een recept van oudsher of juist een mix van deze tijd. Door een nauwkeurig inkoopbeleid waarbij rekening wordt gehouden met de huidige HACCP eisen zijn wij in staat om een goed product te leveren wat ten aller tijden voldoet aan de Nederlandse Warenwet. Wij vallen u niet lastig met vertegenwoordigers, wilt u een afspraak, laat dat ons dan even weten. U kunt gratis monsters aanvragen van onze specerijen en mixen.</p> 

				<p>Wij hopen u met deze site al enige informatie te geven over ons assortiment en werkwijze.</p>

			</section>

		</div>
	</section>

	<footer>
		<div class="container">
			<nav id="footer-nav">

				<ul>
					@foreach(range(1,6,1) as $index)
						<li>
							<a href="#">menu</a>
						</li>
					@endforeach
				</ul>
			</nav>
			<div id="footer-contact">
				<h3>Contact</h3>
				<p>
					Blok specerijen B.V.
					<br> 
					Keersluisweg 11 
					<br>
					1332 EE Almere 
				</p>
				<p>
					Tel:  036 - 537 2480 
					<br>
					Fax: 036 - 537 2019
				</p>
			</div>
			<div id="footer-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.8276370999797!2d5.246679!3d52.4098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c61778c58af5b5%3A0xa2029e3a89f0b4bd!2sBlok+Specerijen+B.V.!5e0!3m2!1snl!2snl!4v1429128333040" width="400" height="300" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
		<div id="copyright">
			<div class="container">
				sitemap	
			</div>
		</div>
	</footer>


	{!! Html::script('js/all.js') !!}
</body>
</html>
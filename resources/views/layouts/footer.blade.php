</main>

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
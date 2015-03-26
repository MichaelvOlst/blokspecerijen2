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
		<ul class="language">
			<li>
				<a href="">
					{!! HTML::image('images/Netherlands.png')!!}
				</a>
			</li>
			<li>
				<a href="">
					{!! HTML::image('images/Germany.png')!!}
				</a>
			</li>
			<li>
				<a href="">
					{!! HTML::image('images/Spain.png')!!}
				</a>
			</li>
		</ul>
		</div>
	</header>
	<div class="container">
	<nav class="main-nav">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Assortiment</a></li>
			<li><a href="#">Historie</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
	</div>

	{!! Html::script('js/all.js') !!}
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Blokspecerijen</title>
	{!! Html::style('css/app.css') !!}
</head>
<body>

	<header>
		<h1 class="logo">Blokspecerijen</h1>
		<select name="" id="">
			<option selected value="nl">Nederlands</option>
			<option value="de">Duits</option>
		</select>
	</header>
	
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Assortiment</a></li>
			<li><a href="#">Historie</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>

	{!! Html::script('js/all.js') !!}
</body>
</html>
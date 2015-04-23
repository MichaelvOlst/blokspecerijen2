@extends('app')

@section('content')
	<div class="container">
	<section class="assortment">
		<h1 class="header">Assortiment</h1>

		<section class="left-section">
			<nav class="nav-category">
				<ul>
					@foreach(range(1, 9, 1) as $index)
						<li>
							<a href="#">Categorie</a>

							<ul class="nav-category-children">
								@foreach(range(1, 5, 1) as $index)
									<li><a href="#">Artikelen</a></li>
								@endforeach
							</ul>
						</li>
					@endforeach
				</ul>
			</nav>
		</section>

		<section class="right-section">
			<ul class="tiles">
				@foreach(range(1, 9, 1) as $index)
					<li>
						<a href="#">
							<h3>Categorie</h3>
							{!! Html::image('http://upload.wikimedia.org/wikipedia/commons/0/07/Spices_in_an_Indian_market.jpg') !!}
						</a>
					</li>
				@endforeach
			</ul>
		</section>
	</section>
	</div>
@endsection


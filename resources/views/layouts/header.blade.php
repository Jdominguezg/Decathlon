<header>
	<div class="row">
		<div class="col-md-2 d-none d-md-block">
			<a href="{{ route('/') }}">
				<div class="principal-logo" style="background-image: url({{ asset('imgs/logo/decathlon-logo.svg') }})"></div>
			</a>
		</div>
		<div class="col-4 col-md-1 offset-md-7 text-center">
			<button class="search-button simple">
				<i class="material-icons">search</i>
			</button>
		</div>
		<div class="col-4 col-md-1 text-center">
			<a href="{{ route('/') }}">
				<button class="home-button simple">
					<i class="material-icons">home</i>
				</button>
			</a>
		</div>
		<div class="col-4 col-md-1 text-center">
			<form method="POST" action="{{ route('translate') }}">
				<button class="lang-button simple">
					<i class="material-icons">translate</i>
				</button>
				@csrf				
			</form>			
		</div>
	</div>
</header>

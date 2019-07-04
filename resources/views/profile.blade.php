@extends('layouts.principal')
@section('content')

 @if(session()->has('congrats'))
        <div class="overflow"></div>
        <div class="alert">
            <p class="">
                {{ trans('index.login-ok') }}
            </p>
            <button class="raised-button">Aceptar</button>
        </div>
    @endif   


<div class="container profile-container" style="background-image: url({{ asset('imgs/bg/profile-bg.jpg') }});">
	<div class="row">
		<div class="user-profile-content text-center">
			<div class="user-profile-name">
				{{ Auth::user()->name.' '.Auth::user()->surname}}
			</div>				
			<hr>
			<form action="{{ route('logout') }}" method="POST">
				<button class="raised-button logout-button">
					{{ trans('form.logout') }}
				</button>
				@csrf				
			</form>
		</div>
	</div>
</div>
@endsection
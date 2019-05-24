@extends('layouts.index')
@section('content')
<nav class="bread z-depth-0">
	<div class="container">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="#!" class="breadcrumb orange-text text-darken-4">{{ __('homepage.homepage') }}</a>
					<a href="#!" class="breadcrumb orange-text text-darken-4">{{ __('auth.register') }}</a>
				</div>
			</div>
		</div>
	</div>
</nav>
<section>
	<div class="container">
		<div class="row">
			<form class="col s12" method="POST" action="{{ route('register') }}">
				@csrf
				<div class="row">
					<div class="col s6">
						<div class="acount-title">
							<p>{{ __('auth.register') }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s6">
						<div class="login-title">
							<p>{{ __('auth.account_register') }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="first_name" type="text" name="first_name" class="validate" required>
						<label for="first_name">First name:</label>
						@error('first_name')
						<span class="deep-orange-text text-accent-3">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="input-field col s6">
						<input id="last_name" name="last_name"type="text" class="validate" required>
						<label for="last_name">Last name:</label>
						@error('last_name')
						<span class="deep-orange-text text-accent-3">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="password" name="password"type="password" class="validate" required>
						<label for="password">Password:</label>
						@error('password')
						<span class="deep-orange-text text-accent-3">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="input-field col s6">
						<input id="password-confirm" name="password_confirmation"type="password" class="validate" required>
						<label for="password-confirm">Confirm Password:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="email" name="email" type="email" class="validate" required>
						<label for="email">Email:</label>
						@error('email')
						<span class="deep-orange-text text-accent-3">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="col s6">
						<button class="btn waves-effect waves-light" type="submit" name="action">{{ __('auth.register') }}</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	@endsection
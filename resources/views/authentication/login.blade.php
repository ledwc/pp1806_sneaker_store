@extends('layouts.index')
@section('content')
<nav class="bread z-depth-0">
	<div class="container">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col s12">
					<a href="#!" class="breadcrumb orange-text text-darken-4">{{ __('homepage.homepage') }}</a>
					<a href="#!" class="breadcrumb orange-text text-darken-4">{{ __('auth.login') }}</a>
				</div>
			</div>
		</div>
	</div>
</nav>
<section>
	<div class="container">
		<div class="row">
			<form class="col s6" method="POST" action="{{ route('login') }}">
				@csrf
				<div class="row">
					<div class="col s12">
						<div class="acount-title">
							<p>{{ __('auth.login')}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<div class="login-title">
							<p>{{ __('auth.account')}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" name="email" type="email" class="validate">
						<label for="email">Email</label>
						@error('email')
						<span class="deep-orange-text text-accent-3">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" name="password" type="password" class="validate">
						<label for="password">Password</label>
						@error('password')
						<span class="deep-orange-text text-accent-3">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="row">
					<div class="col s12" id="btn-login">
						<button class="btn waves-effect waves-light" type="submit" name="action">{{ __('auth.login') }}</button>
					</div>
				</div>
			</form>
			<!-- <form class="col s6" method="POST" action="{{ route('login') }}">
				@csrf
				<div class="row">
					<div class="col s12">
						<div class="acount-title">
							<p>{{ __('auth.login')}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<div class="login-title">
							<p>{{ __('auth.forgot')}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email-forget" name="email_forget" type="email" class="validate">
						<label for="email-forget">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<button class="btn waves-effect waves-light" type="submit" name="action">{{ __('auth.forget') }}</button>
					</div>
				</div>
			</form> -->
		</div>
	</section>
	@endsection
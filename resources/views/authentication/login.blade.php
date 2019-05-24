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
			<form class="col s12" method="POST" action="{{ route('login') }}">
				<div class="row">
					<div class="col s6">
						<div class="acount-title">
							<p>{{ __('auth.login')}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s6">
						<div class="login-title">
							<p>{{ __('auth.account')}}</p>
						</div>
					</div>
					<div class="col s6">
						<div class="login-title">
							<p>{{ __('auth.forgot')}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
					<div class="input-field col s6">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
					<div class="col s6">
						<button class="btn waves-effect waves-light" type="submit" name="action">{{ __('auth.forget') }}</button>
					</div>
				</div>
				<div class="row">
					<div class="col offset-s1 s2" id="btn-login">
						<button class="btn waves-effect waves-light" type="submit" name="action">{{ __('auth.login') }}</button>
					</div>
					<div class="col s2">
						<button class="btn waves-effect waves-light" type="submit" name="action">{{ __('auth.register') }}</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	@endsection
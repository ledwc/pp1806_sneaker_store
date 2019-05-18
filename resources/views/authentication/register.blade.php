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
			<form class="col s12">
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
						<input id="first_name" type="text" class="validate">
						<label for="first_name">First name:</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Last name:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="email" type="email" class="validate">
						<label for="email">Email:</label>
					</div>
					<div class="input-field col s6">
						<input id="password" type="password" class="validate">
						<label for="password">Password:</label>
					</div>
				</div>
				<div class="row">
					<div class="col offset s6">
						<button class="btn waves-effect waves-light" type="submit" name="action">{{ __('auth.register') }}</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	@endsection
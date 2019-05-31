@extends('layouts.index')
@section('content')
<div class="container">
	<div class="row">
		<form class="col s12" method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
			@csrf
			@method('PUT')
			
			<div class="row">
				<div class="input-field col s12">
					<input id="brand-name" name="brand_name" type="text" class="validate">
					<label for="brand-name">{{ __('product.brand_name') }}</label>
					@error('brand_name')
						<div class="deep-orange-text text-accent-3">{{ $message }}</div>
					@enderror
				</div>
			</div>
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">{{ __('product.create') }}</button>
                </div>
            </div>
		</form>
	</div>
</div>
@endsection('content')

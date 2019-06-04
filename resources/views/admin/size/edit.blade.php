@extends('layouts.index')
@section('content')
<div class="container">
	<div class="row">
		<form class="col s12" method="POST" action="{{ route('sizes.update', ['size' => $size->id]) }}">
			@csrf
			@method('PUT')
			
			<div class="row">
				<div class="input-field col s12">
					<input id="size-name" name="size_name" type="text" class="validate">
					<label for="size-name">{{ __('size.size_name') }}</label>
					@error('size_name')
						<div class="deep-orange-text text-accent-3">{{ $message }}</div>
					@enderror
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

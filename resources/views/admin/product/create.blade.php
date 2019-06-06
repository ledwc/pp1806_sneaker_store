@extends('admin.index')

@section('content')
<div class="container">
	<div class="row">
		<form class="col s12" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
			@csrf
			
			<div class="row">
				<div class="input-field col s12">
					<input id="product-name" name="product_name" type="text" class="validate">
					<label for="product-name">Product name:</label>
					@error('product_name')
						<div class="deep-orange-text text-accent-3">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="code" name="code" type="text" class="validate">
					<label for="code">Code:</label>
				</div>
					@error('code')
						<div class="deep-orange-text text-accent-3">{{ $message }}</div>
					@enderror
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="price" name="price" type="text" class="validate">
					<label for="price">Price:</label>
					@error('price')
						<div class="deep-orange-text text-accent-3">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="status" name="status" type="text" class="validate">
					<label for="email">Status:</label>
				</div>
					@error('status')
						<div class="deep-orange-text text-accent-3">{{ $message }}</div>
					@enderror
			</div>
			<div class="row">
				<div class="file-field input-field col s12">
					<div class="btn">
						<span>Image</span>
						<input type="file" name="image">
					</div>
				</div>
					@error('image')
						<div class="deep-orange-text text-accent-3">{{ $message }}</div>
					@enderror
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="category-id" name="category_id" type="text" class="validate">
					<label for="category-id">Category ID:</label>
				</div>
					@error('category_id')
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

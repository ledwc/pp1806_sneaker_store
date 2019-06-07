@extends('admin.index')

@section('content')
<div class="container">
	<div class="row">
		<form class="col s12" method="POST" action="{{ route('orders.update', ['order' => $order->id]) }}">
			@csrf
			@method('PUT')
			
			<div class="row">
				<div class="input-field col s12">
					<input id="total-price" name="total_price" type="text" class="validate">
					<label for="total-price">{{ __('order.total_price') }}</label>
					@error('total_price')
						<div class="deep-orange-text text-accent-3">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="user-id" name="user_id" type="text" class="validate">
					<label for="user-id">{{ __('order.user_id') }}</label>
					@error('user_id')
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

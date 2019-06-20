@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-s12">
                <table>
                    <thead>
                        <tr>
                            <td>{{ __('cart.image') }}</td>
                            <td>{{ __('cart.product') }}</td>
                            <td>{{ __('cart.price') }}</td>
                            <td>{{ __('cart.quantity') }}</td>
                            <td>{{ __('cart.total_price') }}</td>
                            <td>{{ __('cart.action') }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="row_{{ $product['item']->id }}" >
                            <td><img src="{{ asset('/image/'. $product['item']->image) }}" alt="" height="70px;" width="70px;"></td>
                            <td>{{ $product['item']->product_name }}</td>
                            <td>{{ $product['item']->price }}</td>
                            <td>{{ $product['quantity'] }}</td>
                            <td>{{ $product['price'] }}</td>
                            <td><a class="waves-effect waves-light btn-small brown del-item" href="{{ route('carts.delItem', ['cart' => $product['item']->id]) }}"><i class="material-icons right">delete</i>{{ __('product.delete') }}</a></td>
                        </tr>
                        @endforeach
                        <tr><td><a class="waves-effect waves-light btn" href="{{ route('carts.index') }}">Purchase</a></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

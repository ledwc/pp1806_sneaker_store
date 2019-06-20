@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row">
        <form class="col s6" method="POST" action="{{ route('carts.store') }}">
            @csrf

            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" name="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" name="last_name" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="phone" type="text" name="phone" class="validate">
                    <label for="telephone">Telephone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="address" type="text" name="address" class="validate">
                    <label for="address">Address</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Purchase</button>
                </div>
            </div>
        </form>
        <div class="col offset-s1 s5">
            <table>
                <caption class="orange-text text-darken-4">{{ __('cart.order') }}</caption>
                <thead>
                    <tr>
                        <td class="orange-text text-darken-4">{{ __('cart.image') }}</td>
                        <td class="orange-text text-darken-4">{{ __('cart.product') }}</td>
                        <td class="orange-text text-darken-4">{{ __('cart.price') }}</td>
                        <td class="orange-text text-darken-4">{{ __('cart.quantity')}}</td>
                        <td class="orange-text text-darken-4">{{ __('cart.total_price')}}</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><img src="{{ asset('/image/'. $product['item']->image) }}" alt="" height="70px;" width="70px;"></td>
                            <td>{{ $product['item']->product_name }}</td>
                            <td>{{ $product['item']->price }}</td>
                            <td>{{ $product['quantity'] }}</td>
                            <td>{{ $product['price'] }}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="orange-text text-darken-4">Total Price:</td>
                            <td>{{ $totalPrice }}</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
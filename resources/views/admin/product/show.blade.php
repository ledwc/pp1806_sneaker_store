@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-s12">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Code</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Category ID</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="row_{{ $product->id }}">
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->status == config('products.available') ? __('product.in_stock') : __('product.out_stock') }}</td>
                            <td><img src="{{ asset('/image/'. $product->image) }}" alt="" height="70px;" width="70px;"></td>
                            <td>{{ $product->category_id }}</td>
                            <td><a class="waves-effect waves-light btn-small" href="{{ route('products.edit', ['product' => $product->id]) }}"><i class="material-icons right">edit</i>{{ __('product.edit') }}</a>
                                <a class="waves-effect waves-light btn-small brown del-product" data-product-id="{{ $product->id }}"><i class="material-icons right">delete</i>{{ __('product.delete') }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/del-product.js') }}"></script>
@endsection

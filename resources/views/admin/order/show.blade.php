@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-s12">
                <table>
                    <thead>
                        <tr>
                            <th>{{ __('order.id') }}</th>
                            <th>{{ __('order.user_id') }}</th>
                            <th>{{ __('order.total_price') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr class="row_{{ $order->id }}">
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user_id }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td><a class="waves-effect waves-light btn-small" href="{{ route('orders.edit', ['order' => $order->id]) }}"><i class="material-icons right">edit</i>{{ __('product.edit') }}</a>
                                <a class="waves-effect waves-light btn-small brown del-order" data-order-id="{{ $order->id }}"><i class="material-icons right">delete</i>{{ __('product.delete') }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/del-order.js') }}"></script>
@endsection

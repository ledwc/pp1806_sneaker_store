@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-s12">
                <table>
                    <thead>
                        <tr>
                            <th>{{ __('size.id') }}</th>
                            <th>{{ __('size.size_name') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sizes as $size)
                        <tr class="row_{{ $size->id }}">
                            <td>{{ $size->id }}</td>
                            <td>{{ $size->size_name }}</td>
                            <td><a class="waves-effect waves-light btn-small" href="{{ route('sizes.edit', ['size' => $size->id]) }}"><i class="material-icons right">edit</i>{{ __('product.edit') }}</a>
                                <a class="waves-effect waves-light btn-small brown del-size" data-size-id="{{ $size->id }}"><i class="material-icons right">delete</i>{{ __('product.delete') }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/del-size.js') }}"></script>
@endsection

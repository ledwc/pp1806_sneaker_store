@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-s12">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Brand Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr class="row_{{ $category->id }}">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->brand_name }}</td>
                            <td><a class="waves-effect waves-light btn-small" href="{{ route('categories.edit', ['category' => $category->id]) }}"><i class="material-icons right">edit</i>{{ __('product.edit') }}</a>
                                <a class="waves-effect waves-light btn-small brown del-category" data-category-id="{{ $category->id }}"><i class="material-icons right">delete</i>{{ __('product.delete') }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/del-category.js')}}"></script>
@endsection

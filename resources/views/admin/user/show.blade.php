@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-s12">
            <table>
                <thead>
                    <tr>
                        <th>{{ __('user.id') }}</th>
                        <th>{{ __('user.first_name') }}</th>
                        <th>{{ __('user.last_name') }}</th>
                        <th>{{ __('user.password') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="row_{{ $user->id }}">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            <a class="waves-effect waves-light btn-small brown del-user" data-user-id="{{ $user->id }}"><i class="material-icons right">delete</i>{{ __('product.delete') }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/del-user.js') }}"></script>
@endsection
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ __('admin.sneaker_store') }}</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/materialize.css')}}">
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#" class="brand-logo">{{ __('admin.admin') }}</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="{{ route('users.index') }}" data-target="dropdown1">{{ __('admin.users') }}</a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">{{ __('admin.products') }}<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">{{ __('admin.orders') }}<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown4">{{ __('admin.categories') }}<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown5">{{ __('admin.sizes') }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Dropdown Structure -->
        <ul id="dropdown2" class="dropdown-content">
            <li><a class="orange-text text-darken-4" href="{{ route('products.create') }}">{{ __('admin.create') }}</a></li>
            <li><a class="orange-text text-darken-4" href="{{ route('products.index') }}">{{ __('admin.show') }}</a></li>
        </ul>
        <ul id="dropdown3" class="dropdown-content">
            <li><a class="orange-text text-darken-4" href="{{ route('orders.create') }}">{{ __('admin.create') }}</a></li>
            <li><a class="orange-text text-darken-4" href="{{ route('orders.index') }}">{{ __('admin.show') }}</a></li>
        </ul>
        <ul id="dropdown4" class="dropdown-content">
            <li><a class="orange-text text-darken-4" href="{{ route('categories.create') }}">{{ __('admin.create') }}</a></li>
            <li><a class="orange-text text-darken-4" href="{{ route('categories.index') }}">{{ __('admin.show') }}</a></li>
        </ul>
        <ul id="dropdown5" class="dropdown-content">
            <li><a class="orange-text text-darken-4" href="{{ route('sizes.create') }}">{{ __('admin.create') }}</a></li>
            <li><a class="orange-text text-darken-4" href="{{ route('sizes.index') }}">{{ __('admin.show') }}</a></li>
        </ul>
        <section>
            @yield('content')
        </section>
        <!-- Import jquery.min.js and materialize.min.js -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="{{ asset('js/materialize.js') }}"></script>
        <script src="{{ asset('js/drop-down-menu.js') }}"></script>
        @yield('script')
    </body>
</html>

<header>
    <div class="container" id="header">
        <div class="row">
            <div class="col s5 offset-s7">
                @guest
                    <a  href="{{ route('login') }}" class="z-depth-0 waves-effect waves-light white lighten-5 btn orange-text text-darken-4" id="header-btn"><i class="tiny material-icons left">person_outline</i>Đăng Nhập</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="z-depth-0 waves-effect waves-light white lighten-5 btn orange-text text-darken-4" id="header-btn"><i class="material-icons left">person_add</i>Đăng Ký</a>
                    @endif
                @else
                    <a href="" class="z-depth-0 waves-effect waves-light white lighten-5 btn orange-text text-darken-4" id="header-btn">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                    <a href="{{ route('logout') }}" class="z-depth-0 waves-effect waves-light white lighten-5 btn orange-text text-darken-4" id="header-btn"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit()">Đăng Xuất</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none";>
                        @csrf
                    </form>
                @endguest
                <a href="" class="z-depth-0 waves-effect waves-light white lighten-5 btn orange-text text-darken-4" id="header-btn"><i class="material-icons left">shopping_cart</i></a>
            </div>
        </div>
    </div>
    <div class="container" id="nav">
        <nav class="z-depth-0">
            <div class="nav-wrapper">
                <a href="{{ url('/home') }}" class="brand-logo"><i class="large material-icons">store</i>Sneaker Store</a>
                <ul class="hide-on-med-and-down">
                    <li><a href="" class="orange-text text-darken-4 dropdown-trigger" id="nav-title" data-target="dropdown1" data-hover="true">Thương Hiệu <i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="" class="orange-text text-darken-4" id="nav-title">Áo</a></li>
                    <li><a href="" class="orange-text text-darken-4" id="nav-title">Hàng Order</a></li>
                    <li><a href="" class="orange-text text-darken-4" id="nav-title">Tài Khoản</a></li>
                    <li><a href="" class="orange-text text-darken-4" id="nav-title">Giỏ Hàng</a></li>
                    <li class="search"><input type="text" placeholder="Tim kiem" class="search" name="search"></li>
                    <li><a href=""><i class="material-icons">search</i></a></li>
                </ul> 
            </div>
        </nav>
    </div> 
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        @foreach($categories as $category)
        <li><a href="{{ route('categories.show', ['category' => $category->id]) }}" class="orange-text text-darken-4" id="menu-title">{{ $category->brand_name }}</a></li>
        @endforeach
    </ul>
</header>
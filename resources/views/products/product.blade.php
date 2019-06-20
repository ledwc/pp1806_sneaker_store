@extends('layouts.index')
@section('content')
<nav class="bread z-depth-0">
    <div class="container">
        <div class="nav-wrapper">
            <div class="row">
                <div class="col s12">
                    <a href="#!" class="breadcrumb orange-text text-darken-4">{{ __('homepage.homepage') }}</a>
                    <a href="#!" class="breadcrumb orange-text text-darken-4">{{ $category->brand_name }}</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="view-product">
        <div class="container">
            <div class="product">
                <div class="brand-name">
                    <div class="row">
                        <nav class="z-depth-0">
                            <div class="nav-wrapper">
                                <div class="col s12">
                                    <h5 class="orange-text text-darken-4">{{ $category->brand_name }}</h5>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        <div class="col s3">
                            <div class="row" id="price_fillter">
                                <form action="#">
                                    <div class="nav">
                                        <div class="nav-wrapper">
                                            <p class="left-align orange-text text-darken-4" id="price_id">{{ __('homepage.price') }}</p>
                                            <p class="divider"></p>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <p>
                                            <label>
                                                <input type="checkbox"/>
                                                <span><a href="" class="orange-text text-darken-4"><= 1.000.000</a></span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="checkbox"/>
                                                <span><a href="" class="orange-text text-darken-4">2.000.000đ-3.000.000đ</a></span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="checkbox"/>
                                                <span><a href="" class="orange-text text-darken-4">3.000.000đ-4.000.000đ</a></span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="checkbox"/>
                                                <span><a href="" class="orange-text text-darken-4">4.000.000đ-5.000.000đ</a></span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="checkbox"/>
                                                <span><a href="" class="orange-text text-darken-4">>= 5.000.000đ</a></span>
                                            </label>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col s9">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col s4 m4 l4 xl 4">
                                        <div class="card sticky-action">
                                            <div class="card-image">
                                                <img id="img_product" src="{{ asset('/image/'. $product->image) }}">
                                            </div>
                                            <div class="card-content">
                                                <p>{{ $product->product_name }}</p>
                                                <p>{{ $product->price }}</p>
                                            </div>
                                            <div class="card-action">
                                                <a href="{{ route('carts.addToCart', ['cart' => $product->id]) }}">{{ __('product.add_to_cart') }}</a>
                                                <a href="">{{ __('product.details') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

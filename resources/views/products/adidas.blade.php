@extends('layouts.index')
@section('content')
<nav class="bread z-depth-0">
    <div class="container">
        <div class="nav-wrapper">
            <div class="row">
                <div class="col s12">
                    <a href="#!" class="breadcrumb orange-text text-darken-4">{{ __('homepage.homepage') }}</a>
                    <a href="#!" class="breadcrumb orange-text text-darken-4">Adidas</a>
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
                                    <h5 class="orange-text text-darken-4">GIÀY ADIDAS</h5>
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
                            <div class="row" id="row_pagination">
                                <div class="col s9">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                        <li class="active"><a href="#!">1</a></li>
                                        <li class="waves-effect"><a href="#!">2</a></li>
                                        <li class="waves-effect"><a href="#!">3</a></li>
                                        <li class="waves-effect"><a href="#!">4</a></li>
                                        <li class="waves-effect"><a href="#!">5</a></li>
                                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3" id="row_product">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src={{ asset('media/1.jpg') }}>
                                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">visibility</i></a>
                                        </div>
                                        <span class="card-title">{{ __('product.card_title', ['name_brand' => 'Adidas'])}}</span>
                                        <div class="card-content">
                                            <p>{{ __('product.price', ['price' => '1.000.000'])}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s3" id="row_product">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src={{ asset('media/1.jpg') }}>
                                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">visibility</i></a>
                                        </div>
                                        <span class="card-title">{{ __('product.card_title', ['name_brand' => 'Adidas'])}}</span>
                                        <div class="card-content">
                                            <p>{{ __('product.price', ['price' => '1.000.000'])}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s3" id="row_product">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src={{ asset('media/1.jpg') }}>
                                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons" >visibility</i></a>
                                        </div>
                                        <span class="card-title">{{ __('product.card_title', ['name_brand' => 'Adidas'])}}</span>
                                        <div class="card-content">
                                            <p>{{ __('product.price', ['price' => '1.000.000'])}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s3" id="row_product">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src={{ asset('media/1.jpg') }}>
                                            <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons" >visibility</i></a>
                                        </div>
                                        <span class="card-title">{{ __('product.card_title', ['name_brand' => 'Adidas'])}}</span>
                                        <div class="card-content">
                                            <p>{{ __('product.price', ['price' => '1.000.000'])}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="row_pagination">
                                <div class="col s9">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                        <li class="active"><a href="#!">1</a></li>
                                        <li class="waves-effect"><a href="#!">2</a></li>
                                        <li class="waves-effect"><a href="#!">3</a></li>
                                        <li class="waves-effect"><a href="#!">4</a></li>
                                        <li class="waves-effect"><a href="#!">5</a></li>
                                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
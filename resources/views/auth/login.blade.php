{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="zxx">

@include('front.layouts.header')


<body class="fixed-position">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Sign In Section Begin -->
    <div class="signin">
        <div class="signin__warp">
            <div class="signin__content">
                <div class="signin__logo">
                    <a href="#"><img src="img/siign-in-logo.png" alt=""></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore
                    dolore
                    magna aliqua viverra.</p>
                <div class="signin__form">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="false">
                                Sign up
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">
                                Sign in
                            </a>
                        </li>
                        <li class="nav-item">
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane " id="tabs-1" role="tabpanel">
                            <div class="signin__form__text">
                                <p>with your social network :</p>
                                <div class="signin__form__signup__social">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                                </div>
                                <div class="divide">or</div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        {{-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

                                        {{-- <div class="col-md-6"> --}}
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="Name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- </div> --}}
                                    </div>

                                    <div class="row mb-3">
                                        {{-- <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                        {{-- <div class="col-md-6"> --}}
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- </div> --}}
                                    </div>

                                    <div class="row mb-3">
                                        {{-- <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                                        {{-- <div class="col-md-6"> --}}
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- </div> --}}
                                    </div>

                                    <div class="row mb-3">
                                        {{-- <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}

                                        {{-- <div class="col-md-6"> --}}
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Confirm Password">
                                        {{-- </div> --}}
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane active" id="tabs-2" role="tabpanel">
                            <div class="signin__form__text">
                                <p>with your social network :</p>
                                <div class="signin__form__signup__social">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                                </div>
                                <div class="divide">or</div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        {{-- <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                        {{-- <div class="col-md-6"> --}}
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- </div> --}}
                                    </div>

                                    <div class="row mb-3">
                                        {{-- <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                                        {{-- <div class="col-md-6"> --}}
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- </div> --}}
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In Section End -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="./index.html"><img src="img/humberger/humberger-logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="#">Recipes</a></li>
                <li><a href="#">Dinner</a></li>
                <li><a href="#">Desserts</a></li>
                <li><a href="#">Vegan</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__about">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>About me</h6>
            </div>
            <img src="img/humberger/humberger-about.jpg" alt="">
            <h6>Hi every one! I,m Lena Mollein.</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <div class="humberger__menu__about__social sidebar__item__follow__links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
            </div>
        </div>
        <div class="humberger__menu__subscribe">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>Subscribe</h6>
            </div>
            <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
            <form action="#">
                <input type="text" class="email-input" placeholder="Your email">
                <label for="agree-check">
                    I agree to the terms & conditions
                    <input type="checkbox" id="agree-check">
                    <span class="checkmark"></span>
                </label>
                <button type="submit" class="site-btn">Subscribe</button>
            </form>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                        <div class="header__humberger">
                            <i class="fa fa-bars humberger__open"></i>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="#">Recipes</a>
                                    <div class="header__megamenu__wrapper">
                                        <div class="header__megamenu">
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream
                                                            ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-2.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream
                                                            ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-3.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream
                                                            ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-4.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream
                                                            ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-5.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream
                                                            ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Dinner</a></li>
                                <li><a href="#">Desserts</a></li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul class="dropdown__menu">
                                        <li><a href="./categories-grid.html">Categories Grid</a></li>
                                        <li><a href="./categories-list.html">Categories List</a></li>
                                        <li><a href="./single-post.html">Single Post</a></li>
                                        <li><a href="./signin.html">Sign In</a></li>
                                        <li><a href="./404.html">404</a></li>
                                        <li><a href="./typography.html">Typography</a></li>
                                    </ul>
                                </li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        <div class="header__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        <a href="./signin.html" class="primary-btn">Subscribe</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('assets/front/img/logo.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="{{ asset('assets/front/img/hero/hero-1.jpg') }}">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h4>Vegan White Peach Mug Cobbler With CardamomVegan<br /> White Peach Mug
                                            Cobbler With Cardamom</h4>
                                        <ul class="widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6  p-0">
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="{{ asset('assets/front/img/hero/hero-2.jpg') }}">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>How to Make a Milkshake With Any <br />Ice Cream, Any Toppings...</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="{{ asset('assets/front/img/hero/hero-3.jpg') }}">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Vintage Copper Preserve Pan with <br />Brass Handles, Mid 19th Century</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6  p-0">
                            <div class="hero__inside__item set-bg"
                                data-setbg="{{ asset('assets/front/img/hero/hero-4.jpg') }}">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Marinated Lentil Salad with Zucch <br />ini and Tomatoes</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="{{ asset('assets/front/img/hero/hero-1.jpg') }}">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h4>Vegan White Peach Mug Cobbler With CardamomVegan<br /> White Peach Mug
                                            Cobbler With Cardamom</h4>
                                        <ul class="widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-0">
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="{{ asset('assets/front/img/hero/hero-3.jpg') }}">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>How to Make a Milkshake With Any <br />Ice Cream, Any Toppings...</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="{{ asset('assets/front/img/hero/hero-2.jpg') }}">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Vintage Copper Preserve Pan with <br />Brass Handles, Mid 19th Century</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-0">
                            <div class="hero__inside__item set-bg" data-setbg="img/hero/hero-4.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Marinated Lentil Salad with Zucch <br />ini and Tomatoes</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg"
                        data-setbg="{{ asset('assets/front/img/categories/cat-1.jpg') }}">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg"
                        data-setbg="{{ asset('assets/front/img/categories/cat-2.jpg') }}">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg"
                        data-setbg="{{ asset('assets/front/img/categories/cat-3.jpg') }}">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg"
                        data-setbg="{{ asset('assets/front/img/categories/cat-4.jpg') }}">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="categories__post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="categories__post__item categories__post__item--large">
                            <div class="categories__post__item__pic set-bg"
                                data-setbg="{{ asset('assets/front/img/categories/categories-post/cp-1.jpg') }}">
                                <div class="post__meta">
                                    <h4>08</h4>
                                    <span>Aug</span>
                                </div>
                            </div>
                            <div class="categories__post__item__text">
                                <ul class="post__label--large">
                                    <li>Vegan</li>
                                    <li>Desserts</li>
                                </ul>
                                <h3><a href="#">The Absolute Best Way to Cook Steak Perfectly, According to Wayyy
                                        Too
                                        Many Tests</a></h3>
                                <ul class="post__widget">
                                    <li>by <span>Admin</span></li>
                                    <li>3 min read</li>
                                    <li>20 Comment</li>
                                </ul>
                                <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    excepteur sint ...</p>
                                <a href="#" class="primary-btn">Read more</a>
                                <div class="post__social">
                                    <span>Share</span>
                                    <a href="#"><i class="fa fa-facebook"></i> <span>82</span></a>
                                    <a href="#"><i class="fa fa-twitter"></i> <span>24</span></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic small__item set-bg"
                                        data-setbg="{{ asset('assets/front/img/categories/categories-post/cp-2.jpg') }}">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Recipe</span>
                                        <h3><a href="#">The Best Weeknight Baked Potatoes, 3 Creative Ways</a>
                                        </h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic set-bg"
                                        data-setbg="{{ asset('assets/front/img/categories/categories-post/cp-4.jpg') }}">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <ul class="post__label--large">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h3><a href="#">The Best Grass Stain Remover Is Already In Your
                                                Pantry</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                                <div class="categories__post__item__plain set-bg"
                                    data-setbg="{{ asset('assets/front/img/categories/categories-post/cp-6.jpg') }}">
                                    <div class="categories__post__item__text">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                        <ul class="post__label--large">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h3><a href="#">This Summer Snacking Cake Is theSweetest Excuse to...</a>
                                        </h3>
                                        <div class="post__social">
                                            <span>Share</span>
                                            <a href="#"><i class="fa fa-facebook"></i> <span>82</span></a>
                                            <a href="#"><i class="fa fa-twitter"></i> <span>24</span></a>
                                            <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="{{ asset('assets/front/img/categories/categories-post/cp-8.jpg') }}">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Smoothie</span>
                                        <h3><a href="#">This 2-Ingredient Spread Makes Any Egg Sandwich So Much
                                                Better</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="{{ asset('assets/front/img/categories/categories-post/cp-3.jpg') }}">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Dinner</span>
                                        <h3><a href="#">17 Perfect Gifts for Your Vegan Friend Because
                                                Sometimes...</a>
                                        </h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                                <div class="categories__post__item__small">
                                    <img src="{{ asset('assets/front/img/categories/categories-post/quote.png') }}"
                                        alt="">
                                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua gravida.</p>
                                    <div class="posted__by">Elena T.Jaivy</div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="{{ asset('assets/front/img/categories/categories-post/cp-5.jpg') }}">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Drinks</span>
                                        <h3><a href="#">A 5-Minute Peach Mug Cobbler That Just So Happens
                                                to...</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic set-bg"
                                        data-setbg="{{ asset('assets/front/img/categories/categories-post/cp-7.jpg') }}">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <ul class="post__label--large">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h3><a href="#">Fresh Herb Polenta with Parsnip Chips and Maple
                                                Butter</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="load__more__btn">
                                    <a href="#">Load more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar__item">
                            <div class="sidebar__about__item">
                                <div class="sidebar__item__title">
                                    <h6>About me</h6>
                                </div>
                                <img src="{{ asset('assets/front/img/sidebar/sidebar-about.jpg') }}" alt="">
                                <h6>Hi every one! I,m <span>Lena Mollein.</span></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="primary-btn">Read more</a>
                            </div>
                            <div class="sidebar__follow__item">
                                <div class="sidebar__item__title">
                                    <h6>Follow me</h6>
                                </div>
                                <div class="sidebar__item__follow__links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                            </div>
                            <div class="sidebar__feature__item">
                                <div class="sidebar__item__title">
                                    <h6>Feature Posts</h6>
                                </div>
                                <div class="sidebar__feature__item__large set-bg"
                                    data-setbg="{{ asset('assets/front/img/sidebar/feature-post.jpg') }}">
                                    <div class="sidebar__feature__item__large--text">
                                        <span>Dinner</span>
                                        <h5><a href="#">This Japanese Way of Making Iced Coffee Is a Game...</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="sidebar__feature__item__list">
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Dinner</span>
                                            <h5><a href="#">Grilled Potato and Green Bean Salad</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>05</h4>
                                            <span>Aug</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Smoothie</span>
                                            <h5><a href="#">The $8 French Rosé I Buy in Bulk Every Summer</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>26</h4>
                                            <span>jul</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Desert</span>
                                            <h5><a href="#">Ina Garten's Skillet-Roasted Lemon Chicken</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>16</h4>
                                            <span>jul</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Vegan</span>
                                            <h5><a href="#">The Best Weeknight Baked Potatoes, 3 Creative
                                                    Ways</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__item__banner">
                                <img src="{{ asset('assets/front/img/sidebar/banner.jpg') }}" alt="">
                            </div>
                            <div class="sidebar__item__categories">
                                <div class="sidebar__item__title">
                                    <h6>Categories</h6>
                                </div>
                                <ul>
                                    <li><a href="#">Recipes <span>128</span></a></li>
                                    <li><a href="#">Dinner <span>32</span></a></li>
                                    <li><a href="#">Dessert <span>86</span></a></li>
                                    <li class="p-left"><a href="#">Smothie <span>25</span></a></li>
                                    <li class="p-left"><a href="#">Drinks <span>36</span></a></li>
                                    <li class="p-left"><a href="#">Cakes <span>15</span></a></li>
                                    <li><a href="#">Vegan <span>63</span></a></li>
                                    <li><a href="#">Weightloss <span>27</span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar__subscribe__item">
                                <div class="sidebar__item__title">
                                    <h6>Subscribe</h6>
                                </div>
                                <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                                <form action="#">
                                    <input type="text" class="email-input" placeholder="Your email">
                                    <label for="s-agree-check">
                                        I agree to the terms & conditions
                                        <input type="checkbox" id="s-agree-check">
                                        <span class="checkmark"></span>
                                    </label>
                                    <button type="submit" class="site-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="footer__instagram">
                <div class="footer__instagram__avatar">
                    <div class="footer__instagram__avatar--pic">
                        <img src="img/footer/instagram-avatar.jpg" alt="">
                    </div>
                    <div class="footer__instagram__avatar--text">
                        <h5>@ foodieblog</h5>
                        <span>23,7k follower</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-2.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-3.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-4.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-5.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-6.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer__text">
                <div class="footer__logo">
                    <a href="#"><img src="img/logo.png" alt=""></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br />
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra<br />
                    maecenas accumsan lacus vel facilisis. </p>
                <div class="footer__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div>
            </div>
            <div class="footer__copyright">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    @include('front.layouts.scripts')

</body>

</html>

<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="#"><img src="img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><ul class="single-mega cn-col-4">
                            <li class="title"><a href="{{route('index')}}">首頁</a></li>
                        </ul></li>
                        <li><a href="{{route('shop')}}">購物</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">衣服</li>
                                    <li><a href="{{route('show_longsleeve')}}">長袖</a></li>
                                    <li><a href="{{route('show_shortsleeve')}}">短袖</a></li>

                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">褲子</li>
                                    <li><a href="{{route('show_trousers')}}">長褲</a></li>
                                    <li><a href="{{route('show_shortpants')}}">短褲</a></li>

                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title"><a href="{{route('show_coat')}}">外套</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('about')}}">關於我們</a></li>
                        <li><a href="{{route('contact')}}">聯絡我們</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="{{route('search')}}" method="post">
{{csrf_field()}}
                    <input type="text" name="search" id="search" placeholder="搜尋">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>

            <!-- User Login Info -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('登入') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('註冊') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('登出') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

            <!-- Cart Area -->
            <div class="cart-area">
                <a href="{{route('checkout')}}" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
            </div>
        </div>

    </div>
</header>
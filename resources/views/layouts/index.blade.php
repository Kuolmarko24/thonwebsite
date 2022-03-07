<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dengajok Pictures">
    <meta name="keywords" content="Dengajok  Pictures, film, creative, videosgraphy,Thon, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dengajok Pictures</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nowfont.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/rockville.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('img/dengajok-logo.png')}}" alt="dengajok logo"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Me</a>
                                    <ul class="dropdown">
                                        {{-- <li><a href="{{ route('contactus') }}">Contact us</a></li> --}}
                                        <li><a href="{{ route('privacypolicy') }}">Privacy</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="#">Service menu</a>
                                    <ul class="dropdown">
                                        @foreach ($categories as $cat)
                                        <li><a href="/category/{{$cat->id}}" style="text-decoration:none">{{ $cat->name }}</a></li>
                                        
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- <li><a href="{{ route('gallary') }}">Gallery</a></li> --}}
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                            </ul>
                        </nav>
                        <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

   @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="{{ asset('img/footer-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone No</p>
                                <h6>+61410627199</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>dengajokpictures@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>Thon</h2>
                        <div class="footer__social__links">
                            <a href="https://facebook.com/DENGAJÖK PICTURES"><i class="fa fa-facebook"></i></a>
                            {{-- <a href="#"><i class="fa fa-twitter"></i></a> --}}
                            <a href="#"><i class="fa fa-instagram"></i></a>
            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Developed by <a href="https://kuolmarko24.github.io/">Kuol Lual</a></h4>
                        {{-- <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('js/jquery.barfiller.js')}}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

    <!-- Music Plugin -->
    <script src="{{ asset('js/jquery.jplayer.min.js')}}"></script>
    <script src="{{ asset('js/jplayerInit.js')}}"></script>
</body>

</html>
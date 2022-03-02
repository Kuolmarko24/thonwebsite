@extends('layouts.admin')
@section('content')
{{-- <header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{ asset('img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="./discography.html">Discography</a></li>
                            <li><a href="./tours.html">Tours</a></li>
                            <li><a href="./videos.html">Videos</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header__right__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header> --}}

    <!-- Tours Section Begin -->
    <section class="tours spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1">
                    <div class="tours__item__text">
                        <h2>ALENGO</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>8:00pm</span>
                                    <span>Dec 15, 2019</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    Funkhaus Berlin, Berlin, Germany
                                </li>
                            </ul>
                            <div class="price">$ 35.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                                hosts an impressive roster of techno artists worthy.</p>
                            <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                        </div>
                        <a href="#" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="tours__item__pic">
                        <img src="img/tours/tour-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-4">
                    <div class="tours__item__text tours__item__text--right">
                        <h2>Untold Festival 2020</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>8:00pm</span>
                                    <span>Dec 15, 2019</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    Funkhaus Berlin, Berlin, Germany
                                </li>
                            </ul>
                            <div class="price">$ 35.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                                hosts an impressive roster of techno artists worthy.</p>
                            <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                        </div>
                        <a href="#" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-3">
                    <div class="tours__item__pic tours__item__pic--left">
                        <img src="img/tours/tour-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-5">
                    <div class="tours__item__text">
                        <h2>ALENGO</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <p>Meet The Host</p>
                                    <span>Mr. GB Thon: Director/Producer</span>
                                    <span>Mr. GB Thon: Director/Producer</span>
                                    <span>Mr. GB Thon: Director/Producer</span>
                                    <span>Dec 15, 2019</span>
                                </li>
                               
                            </ul>
                            <div class="price">$ 35.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>Held in Europe’s electronic music capital on New Year’s Eve, the seminal Funkhaus Berlin
                                hosts an impressive roster of techno artists worthy.</p>
                            <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                        </div>
                        <a href="#" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Tours Section End -->
@endsection
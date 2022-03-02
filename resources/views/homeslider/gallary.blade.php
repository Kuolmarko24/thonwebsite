@extends('layouts.index')
@section('content')
<!-- Discography Section Begin -->
<section class="discography spad" style="padding-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
            <!-- Event Section Begin -->
    <section class="event spad" style="padding-top: 1px">
        <div class="container">
            
            <div class="row">
                <div class="event__slider owl-carousel">

                    @foreach ($gallery as $gal)
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="{{ $gal->image }}">
                                <div class="tag-date">
                                    <span>{{ $gal->title }}</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>{{ $gal->description }}</h4>
                                {{-- <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Event Section End -->
            <div class="row">
                @foreach ($gallery as $gal)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="{{ $gal->image }}" alt="">
                        </div>
                        <div class="discography__item__text">
                            <span>{{ $gal->title }}</span>
                            
                        </div>
                    </div>
                </div>  
                @endforeach
            </div>
        </div>
    </section>
    <!-- Discography Section End -->
@endsection
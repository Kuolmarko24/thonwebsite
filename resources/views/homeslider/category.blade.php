@extends('layouts.index')
@section('content')


<!-- Video Section Begin -->
<section class="videos spad" style="padding-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h2>{{ $categname->name }}</h2>
                    <h1>{{ $categname->name }}</h1>
                </div>
                <div class="row">
                    @foreach ($videos as $catcont)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item">
                            <div class="discography__item__pic">
                                {!! $catcont->videourl !!}
                            </div>
                            <div class="discography__item__text">
                                <span>{{ $catcont->title }}</span>
                                
                            </div>
                        </div>
                    </div>  
                    @endforeach
                    
                </div>
                {{-- <div class="row">
                    <div class="videos__slider owl-carousel">
                        
                        @foreach ($videos as $catcont)

                        <div class="col-lg-3">
                            <div class="videos__item">
                                <div class="col-sm">
                                    {!! $catcont->videourl !!}
                                </div>
                                <div class="videos__item__text">
                                    <h5>{{ $catcont->title }}</h5>
                                    
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- Video Section End -->

{{-- <div class="container">
    <div class="row">
        @foreach ($videos as $catcont)
        <div class="col-sm">
            {!! $catcont->videourl !!}
        </div>
        @endforeach
    </div>
</div> --}}

<!-- Video Section End -->
@endsection
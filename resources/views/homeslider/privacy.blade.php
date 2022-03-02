@extends('layouts.index')
@section('content')

<!-- Blog Section Begin -->
<section class="blog spad" style="padding-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>Privacy Policy</h2>
                    <h1>Privacy Policy</h1>
                </div>
                
                <div class="blog__large">
                   
                    <div class="blog__large__text">
                        {{-- <span>{{ $blogg->title }}</span> --}}
                        <h4>PRIVACY POLICY</h4>
                                
                        @foreach ($privacypol as $pp)
                            <p>{!! $pp->text !!}</p>     
                        @endforeach
                       
                    </div>
                </div>
                
                
            </div>
            <div class="col-lg-4">
                <div class="blog__sidebar">
                    
                    <div class="blog__sidebar__item">
                        <div class="blog__sidebar__title">
                            <h4>Dengajok Pictures</h4>
                        </div>
                        
                        
                            <div class="recent__item__pic">
                                <img src="{{ asset('img/denga.jpg') }}" alt="">
                            </div>
                            <div class="recent__item__text">
                                {{-- <h6>{{ $sblog->title }}</h6> --}}
                                {{-- <span>{{ \Carbon\Carbon::parse($sblog->created_at)->format('d/M/Y')}}</span> --}}
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection
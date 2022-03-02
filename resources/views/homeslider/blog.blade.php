@extends('layouts.index')
@section('content')

<!-- Blog Section Begin -->
<section class="blog spad" style="padding-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>Latest posts</h2>
                </div>
                @foreach ($blog as $blogg)
                <div class="blog__large">
                    <div class="blog__large__pic set-bg" data-setbg="{{ $blogg->image }}">
                        <a href="#"><i class="fa fa-share-alt"></i></a>
                    </div>
                    
                    <div class="blog__large__text">
                        {{-- <span>{{ $blogg->title }}</span> --}}
                        <h4>{{ $blogg->title }}</h4>
                        <p>{!! $blogg->description !!}
                        </p>
                        <div class="blog__large__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        
                                        <li>{{ \Carbon\Carbon::parse($blogg->created_at)->format('d/M/Y')}}
                                            </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="col-lg-4">
                <div class="blog__sidebar">
                    
                    <div class="blog__sidebar__item">
                        <div class="blog__sidebar__title">
                            <h4>Recent posts</h4>
                        </div>
                        @foreach ($blog as $sblog)
                        <a href="#" class="recent__item">
                            <div class="recent__item__pic">
                                <img src="{{ $sblog->image }}" alt="">
                            </div>
                            <div class="recent__item__text">
                                <h6>{{ $sblog->title }}</h6>
                                <span>{{ \Carbon\Carbon::parse($sblog->created_at)->format('d/M/Y')}}</span>
                            </div>
                        </a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
 
@endsection
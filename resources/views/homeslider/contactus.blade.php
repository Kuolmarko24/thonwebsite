@extends('layouts.index')
@section('content')
 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option" style="padding-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Map Begin -->
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
    </div>
@endif
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact__address">
                    <div class="section-title">
                        <h2>Contact info</h2>
                    </div>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.</p> --}}
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <h5>Address</h5>
                            <p>Melbourne, Australia</p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <h5>Hotline</h5>
                            <span>1-677-124-44227</span>
                            {{-- <span>1-688-356-66889</span> --}}
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <h5>Email</h5>
                            <p>dengajok@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact__form">
                    <div class="section-title">
                        <h2>Get in touch</h2>
                    </div>
                    {{-- <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                        gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p> --}}
                    <form method="post" action="{{ route('contact') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input__list">
                            <input type="text" name="name" placeholder="Name">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <textarea name="message" placeholder="Comment"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
 
@endsection
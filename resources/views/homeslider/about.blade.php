@extends('layouts.index')
@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option" style="padding-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>About</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Skills Section Begin -->
<section class="skills spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="skills__content">
                    <div class="section-title">
                        <h2>Dengajok Pictures</h2>
                        <h1>Dengajok's skill</h1>
                    </div>
                    <p>Dengajok Pictures is one of the [ heavy-weights ] South Sudanese international film, 
                        video production, and Entertainment business founded on resilience,
                         perseverance, agility, and passion for art and craft..</p>
                    <div class="skill__bar__item">
                        <p>Film</p>
                        <div id="bar1" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="95"></span>
                        </div>
                    </div>
                    <div class="skill__bar__item">
                        <p>Video Production</p>
                        <div id="bar2" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="85"></span>
                        </div>
                    </div>
                    <div class="skill__bar__item">
                        <p>Entertainment</p>
                        <div id="bar3" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="98"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="recent__item__pic">
                    <img src="{{ asset('img/denga.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Skills Section End -->

<!-- About Section Begin -->
<section class="about about--page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__pic">
                    <img src="img/about/dengabout1.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <h2>ABOUT US</h2>
                    </div>
                    <p>Dengajok Pictures is ideologically inspired and guided by the past, present and the future of the people of South Sudan. The company is named after the well renounced ancestral public figure nicknamed Dengajok. 

                        Below are the words quoted from the founder and executive director of Dengajok Pictures. “When I went back to South Sudan in 2013, I didn't know how to use any professional digital camera or passionate about filmmaking either. However, filmmaking was still a field of interest since I'm a creative minded person. 
                        
                        While I was in Juba the capital of South Sudan, the only source of entertainment and news outlet was South Sudan Television (SSTV) and currently known as South Sudan Broadcasting Cooperation (SSBC). The image quality was very poor in addition to their frequent Grammatical and human errors on screen. SSTV was still a symbol of our hard-fought independence as South Sudanese so we cling to it with the hope that it will improve with time. What we didn't perhaps thought about was “who was going to bring about that change”?
                    </p>
                    <p>
                        One day while sitting under Uncle Dan’s hut in Hai Amarat in Juba, procrastinating about our brand-new country’s future and how I can contribute to its development? At that instance, SSTV took the centre stage of my wild thoughts. I came to a realization that I was in a better position of bringing that change compared to all my other colleagues we usually whinged about the poor quality of SSTV. I happened to be an Australian citizen and have access to better opportunities needed to acquire professional training and tools needed to deliver better quality and professional creative contents to our people. 
                        The question I asked myself at that point was "Why don't I go back and study filmmaking so I can come back one day and participate in professional and better-quality creative content production in South Sudan?’’ I also don’t want to ignore that I also formulated a certain quote “it is better to be lonely than to be busy doing nothing” that I still cherished and have been using as a guideline in my life. I could have gone to play cards or sip local tea by the roadside and chat with colleagues, but I chose to stay alone that day (something I often do) to give myself time and space to dive deeper into the fountain of my thoughts. Something like that might have not crossed my sanity if I was playing cards or at the drinking joint passing time. From that trend of thoughts: Dengajok Pictures idea was born. 
                        
                        I am now a film graduate with a bachelor’s degree in film production and participating in producing professional and better-quality creative content. South Sudanese film production image quality is improving day by day and Dengajok Pictures is a proud stakeholder to such beautiful creative content evolution.
                        
                        Dengajok Pictures is thriving to become a world class film production company to bring South Sudanese stories to the world from South Sudanese perspective and to continue with its main aim of quality creative content production and South Sudan film industry development.”
                        
                        .</p>
                        <div class="row">
                            <div class="col-lg-6 order-lg-1">
                                <div class="tours__item__text">
                                    <h2>MISSION</h2>
                                    <div class="tours__text__desc">
                                        <p>”Develop and tell South Sudanese stories from South Sudanese cultural perspectives.”
                                             </p>
                                    </div>
                                   </div>
                            </div>
                            <div class="col-lg-6 order-lg-4">
                                <div class="tours__item__text tours__item__text--right">
                                    <h2>VISION</h2>
                
                                    <div class="tours__text__desc">
                                        <p>”To preserve and develop South Sudan History, and Culture and share it with the world.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
  <!-- esteem Section Begin -->
  <section class="tours spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-1">
                <div class="tours__item__text">
                    <h2>Customer Care</h2>
                    <div class="tours__text__desc">
                        <p>”Our customers are our identity out there” so you know what responsibilities 
                            come with that. We place our client’s needs at the centre of our pre-plan
                             production process because we understand that
                              some people have different tastes.  </p>
                    </div>
                    <a href="{{ route('contactus')}}" class="primary-btn border-btn">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2">
                <div class="tours__item__pic">
                    <img src="img/dengajokfilm.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-4">
                <div class="tours__item__text tours__item__text--right">
                    <h2>Peace of mind</h2>

                    <div class="tours__text__desc">
                        <p>We are easy to work-with team of professionals who are passionate 
                            about what we do and how we communicate with our clients.
                             All inquiries will always be</p>
                        <p>addressed with the creative media industry standard codes
                        of conduct and relevant media laws attached to our operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-3">
                <div class="tours__item__pic tours__item__pic--left">
                    <img src="img/denga.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-5">
                <div class="tours__item__text">
                    <h2>Artisan Noshes</h2>
                    
                    <div class="tours__text__desc">
                        <p>We understand that everyone have their own unique artistic taste.
                             Therefore, we encourage our clients to give
                             us a rough or accurate guidelines of how they  would like</p>
                        <p>their project delivered when placing the booking to 
                        avoid giving our crew unexpected adrenaline rush at the end.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 order-lg-5">
                <div class="tours__item__text">
                    <h2>Booking Terms</h2>
                    
                    <div class="tours__text__desc">
                        <p>Once your project requirements are screened, assessed, 
                            processed and a deposit payment is cleared,
                             we are straight into the production. </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- esteem Section End -->

 <!-- About Services Section Begin -->
 <section class="about-services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h2>WHY CHOOSE US</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="about__services__item">
                    <div class="about__services__item__pic set-bg" data-setbg="img/services/as-1.jpg">
                        <div class="icon">
                            <img src="img/services/as-icon-1.png" alt="">
                        </div>
                    </div>
                    <div class="about__services__item__text">
                        <h4>AUTHENTICITY || ORIGINALITY</h4>
                        <p>We do not in anyway alter or twist our clients' stories to advance our interest.
                            </p>
                            <p>Your satisfaction is our main objective at Dengajok Pictures.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="about__services__item">
                    <div class="about__services__item__pic set-bg" data-setbg="img/services/as-2.jpg">
                        <div class="icon">
                            <img src="img/services/as-icon-2.png" alt="">
                        </div>
                    </div>
                    <div class="about__services__item__text">
                        <h4>QUALITY || QUANTITY</h4>
                        <p>One of our main core values is to deliver quality creative content to our viewers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="about__services__item">
                    <div class="about__services__item__pic set-bg" data-setbg="img/services/as-3.jpg">
                        <div class="icon">
                            <img src="img/services/as-icon-3.png" alt="">
                        </div>
                    </div>
                    <div class="about__services__item__text">
                        <h4>ETHICALITY || PROFESSIONALISM</h4>
                        <p>Dengajok Pictures is committed to universal rules and regulations that guide film and creative media 
                            production. We can not share third party private material on our platform for commerical 
                            purposes without their consent.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Services Section End -->
@endsection
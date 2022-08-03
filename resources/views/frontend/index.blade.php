@extends('frontend.partials.master')
@section('content')
<!-- Welcome Area Start -->
 <section class="aubna-welcome-area">
    <!--Content before waves-->
    <div class="container">
       <div class="align-items-center justify-content-between ">
          <div class="inner-header">
             <div class="inner-content">
                <div class="row">
                   <div class="col-lg-7 col-md-6">
                      <div class="welcome-left">
                         <h1>GEREJA KRISTEN JAWA YEREMIA</h1>
                         <h3>"Menjadi Jemaat Kristus Yang Mewartakan Kerajaan Allah"</h3>
                         <a href="#" class="aubna-btn">Emergency Contact <span></span></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!--Waves Container-->
    <div>
       <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
             <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
             <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
             <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
             <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
             <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
       </svg>
    </div>
    <!--Waves end-->
 </section>
 <!-- Welcome Area End -->
  
  
 <!-- Promo Area Start -->
 <section class="aubna-promo-area section_100">
    <div class="container">
       <div class="row">
          <div class="col-lg-4">
             <div class="single-promo">
                <div class="promo-icon">
                   <img src="{{asset('aubna')}}/assets/img/promo-1.png" alt="Transmission of Coronavirus" />
                </div>
                <div class="promo-text">
                   <a href="#">
                      <h3>Transmission of Coronavirus</h3>
                   </a>
                   <p>It may be possible that a person can get COVID-19 by touching a surface or object that has the virus on it</p>
                </div>
                <div class="promo-action">
                   <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="single-promo">
                <div class="promo-icon">
                   <img src="{{asset('aubna')}}/assets/img/promo-2.png" alt="symptoms of coronavirus" />
                </div>
                <div class="promo-text">
                   <a href="#">
                      <h3>symptoms of coronavirus</h3>
                   </a>
                   <p>The most common symptoms of coronavirus disease (COVID-19) are fever, tiredness, and dry cough.</p>
                </div>
                <div class="promo-action">
                   <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="single-promo">
                <div class="promo-icon">
                   <img src="{{asset('aubna')}}/assets/img/promo-3.png" alt="How to prevention the coronavirus" />
                </div>
                <div class="promo-text">
                   <a href="#">
                      <h3>How to prevention</h3>
                   </a>
                   <p>You should wear a facemask when you are around other people and before you enter a healthcare provider’s office.</p>
                </div>
                <div class="promo-action">
                   <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="container mt-3">
      @php
         $posts = \App\Post::all();   
      @endphp
       @foreach ($posts as $p)
       <div class="row">
         <div class="card w-100 m-3">
            <div class="card-body">
              <h5 class="card-title">{{ $p -> title }}</h5>
              <p class="card-text">{{ $p -> excerpt }}</p>
              <a href="#" class="btn btn-primary mt-2">Button</a>
            </div>
          </div>
       </div>
       @endforeach
    </div>
 </section>
 <!-- Promo Area End -->


  
  
 <!-- About Area Start -->
 <section class="aubna-about-area section_100">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="about-left">
                <div class="about-heading">
                   <h4>About COVID-19</h4>
                   <h2>Coronavirus : all you need to know about (COVID-19)</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur explicabo doloremque nihil fugiat</p>
                </div>
                <ul>
                   <li><i class="fa fa-check"></i> Almost do am or limits hearts</li>
                   <li><i class="fa fa-check"></i>Jennings appetite disposed me</li>
                   <li><i class="fa fa-check"></i>Lose away off why half led have</li>
                   <li><i class="fa fa-check"></i>Resolve parties but why she shewing</li>
                   <li><i class="fa fa-check"></i>Lose away off why half led have</li>
                </ul>
             </div>
          </div>
          <div class="col-lg-6">
             <div class="about-right">
                <img src="{{asset('aubna')}}/assets/img/about-covid.png" alt="About Covid-19" />
                <div class="about-wave">
                   <img src="{{asset('aubna')}}/assets/img/about-wave.png" alt="about wave" class="corona-wave-big" />
                   <img src="{{asset('aubna')}}/assets/img/about-wave.png" alt="about wave" class="corona-wave-midium" />
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- About Area End -->
  
  
 <!-- Symtoms Area Start -->
 <section class="aubna-symtoms-area section_100">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="site-heading">
                <h4>Basic Symtoms</h4>
                <h2>Coronavirus Symtoms</h2>
                <p>Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti officia numquam optio sunt eveniet consequuntur</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-4">
             <div class="single-symtoms">
                <div class="symtom-icon">
                   <img src="{{asset('aubna')}}/assets/img/fever.png" alt="High Fever" />
                </div>
                <div class="symtom-text">
                   <h3>High Fever</h3>
                   <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="single-symtoms">
                <div class="symtom-icon">
                   <img src="{{asset('aubna')}}/assets/img/headache.png" alt="headache" />
                </div>
                <div class="symtom-text">
                   <h3>Strong Headacke</h3>
                   <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="single-symtoms">
                <div class="symtom-icon">
                   <img src="{{asset('aubna')}}/assets/img/cough.png" alt="Coughing" />
                </div>
                <div class="symtom-text">
                   <h3>Coughing And Sneezing</h3>
                   <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-4">
             <div class="single-symtoms">
                <div class="symtom-icon">
                   <img src="{{asset('aubna')}}/assets/img/sore-throat.png" alt="sore-throat" />
                </div>
                <div class="symtom-text">
                   <h3>Sore Throat</h3>
                   <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="single-symtoms">
                <div class="symtom-icon">
                   <img src="{{asset('aubna')}}/assets/img/asthma.png" alt="asthma" />
                </div>
                <div class="symtom-text">
                   <h3>Shortness Of Breath</h3>
                   <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="single-symtoms">
                <div class="symtom-icon">
                   <img src="{{asset('aubna')}}/assets/img/alzheimer.png" alt="Confusion" />
                </div>
                <div class="symtom-text">
                   <h3>Coughing And Sneezing</h3>
                   <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Symtoms Area End -->
  
 <!-- Percautions Area Start -->
 <section class="aubna-percautions-area section_100">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="site-heading">
                <h4>Stay Safe</h4>
                <h2>Prevention of Coronavirus</h2>
                <p>Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti officia numquam optio sunt eveniet consequuntur</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-4 col-md-6">
             <div class="percautions-inn">
                <h3>You Should Do</h3>
                <ul>
                   <li>Clean your hands regularly <i class="fa fa-check"></i></li>
                   <li>Work from home if possible <i class="fa fa-check"></i></li>
                   <li> Ware a face mask outside <i class="fa fa-check"></i></li>
                   <li>Check your body regulerly <i class="fa fa-check"></i></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-4 tab-hide">
             <div class="percautions-image">
                <img src="{{asset('aubna')}}/assets/img/precautions-2.png" alt="precautions" />
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <div class="percautions-inn percautions-right">
                <h3>You Should Avoid</h3>
                <ul>
                   <li><i class="fa fa-check"></i> Avoid Close Contact</li>
                   <li><i class="fa fa-check"></i> Avoid contact animals</li>
                   <li><i class="fa fa-check"></i> Avoid crowded places</li>
                   <li><i class="fa fa-check"></i> Avoid touching face</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Percautions Area End -->
  
  
 <!-- Glance Area Start -->
 <section class="aubna-glance-area section_100">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="site-heading">
                <h4>at a glance</h4>
                <h2>Confirmed 2019-nCoV Cases</h2>
                <p>Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti officia numquam optio sunt eveniet consequuntur</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12">
             <div class="glance-indicator">
                <p> -Confirmed Case(s) in country</p>
                <p> -Suspected Case(s)</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-4 col-md-5">
             <div class="glance-report">
                <div class="single-glance-report">
                   <div class="glance-report-image">
                      <img src="{{asset('aubna')}}/assets/img/infected.png" alt="Corona Infected" />
                   </div>
                   <div class="glance-report-text">
                      <h3 class="counter">221290</h3>
                      <p>Infected Case</p>
                   </div>
                </div>
                <div class="single-glance-report">
                   <div class="glance-report-image">
                      <img src="{{asset('aubna')}}/assets/img/recover.png" alt="Corona Recover" />
                   </div>
                   <div class="glance-report-text">
                      <h3 class="counter">90000</h3>
                      <p>Recovered Cases</p>
                   </div>
                </div>
                <div class="single-glance-report">
                   <div class="glance-report-image">
                      <img src="{{asset('aubna')}}/assets/img/death.png" alt="Corona Death" />
                   </div>
                   <div class="glance-report-text">
                      <h3 class="counter">14302</h3>
                      <p>Deaths</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-8 col-md-7">
             <div class="glance-map">
                <img src="{{asset('aubna')}}/assets/img/map.jpg" alt="map" />
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Glance Area End -->
  
  
 <!-- Blog Area Start -->
 <section class="aubna-blog-area section_100">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="site-heading">
                <h4>Covid-19 Blog</h4>
                <h2>Latest Update</h2>
                <p>Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti officia numquam optio sunt eveniet consequuntur</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-4">
             <div class="blog-item">
                <div class="blog_info">
                   <figure class="blog-img">
                      <a href="#">
                      <img src="{{asset('aubna')}}/assets/img/blog-2.jpg" alt="blog imag">
                      </a>
                   </figure>
                   <div class="blog-detail">
                      <h3><a href="#">Keep Work, For Safe Communities</a></h3>
                      <p class="text-length">"But I must explain to you how all this mistaken idea of denouncing pleasure and prai...</p>
                      <div class="other_info">
                         <div class="blog-meta">
                            <figure><img src="{{asset('aubna')}}/assets/img/blog_user_1.jpg" alt="bloger image"></figure>
                            <h4>John Deo</h4>
                         </div>
                         <label><i class="fa fa-calendar"></i>Jan 30, 2020</label>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="blog-item">
                <div class="blog_info">
                   <figure class="blog-img">
                      <a href="#">
                      <img src="{{asset('aubna')}}/assets/img/blog-1.jpg" alt="blog imag">
                      </a>
                   </figure>
                   <div class="blog-detail">
                      <h3><a href="#">Reporting Qouncil Arei Not Could More.</a></h3>
                      <p class="text-length">"But I must explain to you how all this mistaken idea of denouncing pleasure and prai...</p>
                      <div class="other_info">
                         <div class="blog-meta">
                            <figure><img src="{{asset('aubna')}}/assets/img/blog_user_2.jpg" alt="bloger image"></figure>
                            <h4>John Deo</h4>
                         </div>
                         <label><i class="fa fa-calendar"></i>Jan 30, 2020</label>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="blog-item">
                <div class="blog_info">
                   <figure class="blog-img">
                      <a href="#">
                      <img src="{{asset('aubna')}}/assets/img/blog-3.jpg" alt="blog imag">
                      </a>
                   </figure>
                   <div class="blog-detail">
                      <h3><a href="#">factsheet provides an coronavirus situation</a></h3>
                      <p class="text-length">"But I must explain to you how all this mistaken idea of denouncing pleasure and prai...</p>
                      <div class="other_info">
                         <div class="blog-meta">
                            <figure><img src="{{asset('aubna')}}/assets/img/blog_user_3.jpg" alt="bloger image"></figure>
                            <h4>John Deo</h4>
                         </div>
                         <label><i class="fa fa-calendar"></i> Jan 30, 2020</label>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Blog Area End -->
@endsection
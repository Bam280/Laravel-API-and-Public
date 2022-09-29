<!DOCTYPE html>
<html lang="en-US">

@include('frontend.partials.head')

<body>
    <!-- Page Loader Start -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner"></div>
    </div>
    <!-- Page Loader End -->

    @include('frontend.partials.navbar')

    @yield('content')

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
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
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
    <section class="aubna-blog-area section_100">
        <div class="container-md">
            @php
                $posts = \App\Post::all();
            @endphp
            <div class="row p-md-5">
                <div class="col-lg-8">
                    <div class="row row-cols-2 row-cols-lg-2">
                        @foreach ($posts as $p)
                            <div class="col-6">
                                <div class="blog-item">
                                    <div class="blog_info">
                                        <figure class="blog-img">
                                            <a href="#">
                                                <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" alt="blog imag">
                                            </a>
                                        </figure>
                                        <div class="blog-detail">
                                            <h3><a href="#">{{ $p->title }}</a></h3>
                                            <p class="text-length">{{ Str::limit($p->body, 30) }}</p>
                                            <div class="other_info">
                                                <div class="blog-meta">
                                                    <figure><img src="{{ asset('aubna') }}/assets/img/blog_user_1.jpg"
                                                            alt="bloger image"></figure>
                                                    <h4>Admin</h4>
                                                </div>
                                                <label><i
                                                        class="fa fa-calendar"></i>{{ $p->created_at->format('d-m-Y') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border-secondary">
                        @foreach ($posts as $p)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <figure class="blog-img">
                                            <a href="#">
                                                <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" alt="blog imag">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $p->title }}</h5>
                                            <p class="card-text">{{ Str::limit($p->body, 50) }}</p>
                                            <p class="card-text"><small class="text-muted">Last updated
                                                    {{ $p->created_at->format('d-m-Y') }}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.partials.footer')
    @include('frontend.partials.script')
    @yield('scripts')

</body>

</html>

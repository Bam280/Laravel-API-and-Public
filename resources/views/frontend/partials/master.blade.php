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

    @include('frontend.partials.footer')
    @include('frontend.partials.script')
    @yield('scripts')

</body>
</html>
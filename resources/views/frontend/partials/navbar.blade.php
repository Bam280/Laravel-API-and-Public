<!--Navbar Start-->
<nav class="navbar navbar-expand-lg">
    <div class="container">
       <!-- LOGO -->
       <a class="navbar-brand logo" href="index.html">
       <img src="{{asset('aubna')}}/assets/img/logo.png" alt="aubna" />
       </a>
       <a class="navbar-brand logo scroller" href="index.html">
       <img src="{{asset('aubna')}}/assets/img/logo-fixed.png" alt="aubna" />
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="menu-toggle"></span>
       </button>
       <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link active">Beranda</a>
             </li>
             <li class="nav-item">
               <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
            </li>
             <li class="nav-item">
                <a href="contact.html" class="nav-link">Kontak</a>
             </li>
          </ul>
       </div>
    </div>
 </nav>
 <!--Navbar End-->
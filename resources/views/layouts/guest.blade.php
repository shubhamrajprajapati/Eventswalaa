<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Events Walla') }}</title>

        <!-- Fonts --> 
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Norican&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Norican&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <!-- Scripts -->
        {{-- php -S localhost:8000 -t public/ npm run build--}}
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/fontawesome/all.min.css')}}"> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/megamenu.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
 
    </head>
    <body>
        
<header id="header" class="header headerbg-lightcolor nav-container fixed-top">
    <div class="top-search">
       <div class="container">
          <div class="input-group"><span class="input-group-addon"><i class="fas fa-search"></i></span><input
             type="text" class="form-control" placeholder="Search"><span
             class="input-group-addon close-search"><i class="fas fa-times"></i></span></div>
       </div>
    </div>
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <nav class="navbar navbar-default navbar-center bootsnav">
                <div class="navbar-header"><button type="button" class="navbar-toggle navbar-toggler"
                   data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu"
                   aria-expanded="false"><span class="hidden">MENU</span> <i
                   class="fas fa-bars"></i></button>
                   <a class="navbar-brand" href="{{ url('/') }}">
                     <img class="logo" src="{{ asset('assets/images/logo.png') }}" class="mx-auto d-block img-fluid" alt="Event wallaa">
                  </a>
                  </div>
                <div class="navbox-collapse collapse" id="navbar-menu">
                   <ul class="nav" data-in="fade-In-Down" data-out="fade-Out-Up">
                      <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}"> Home</a></li>
                      {{-- <li class="dropdown megamenu-fw">
                         <a href="#" class="dropdown-toggle"
                            data-toggle="dropdown">Venues</a>
                         <ul class="dropdown-menu megamenu-content image-menu animated fade-Out-Up"
                            role="menu">
                            <li>
                               <div class="row">
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Men's Wear</h4>
                                     <div class="content">
                                        <p><a href="#" class="menutitle">Men's Wear</a></p>
                                        <a
                                           href="#"><img src="images/product/2.jpg" class="product-cat"
                                           alt="" /></a>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Women's Wear</h4>
                                     <div class="content">
                                        <p><a href="#" class="menutitle">Women's Wear</a></p>
                                        <a
                                           href="#"><img src="images/product/4.jpg" class="product-cat"
                                           alt="" /></a>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Baby's Wear</h4>
                                     <div class="content">
                                        <p><a href="#" class="menutitle">Baby's Wear</a></p>
                                        <a
                                           href="#"><img src="images/product/3.jpg" class="product-cat"
                                           alt="" /></a>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Foot Wear</h4>
                                     <div class="content">
                                        <p><a href="#" class="menutitle">Foot Wear</a></p>
                                        <a
                                           href="#"><img src="images/product/1.jpg" class="product-cat"
                                           alt="" /></a>
                                     </div>
                                  </div>
                               </div>
                               <div class="row">
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Leather Item</h4>
                                     <div class="content">
                                        <p><a href="#" class="menutitle">Leather Item</a></p>
                                        <a
                                           href="#"><img src="images/product/5.jpg" class="product-cat"
                                           alt="" /></a>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Mobile Phone</h4>
                                     <div class="content">
                                        <p><a href="#" class="menutitle">Mobile Phone</a></p>
                                        <a
                                           href="#"><img src="images/product/6.jpg" class="product-cat"
                                           alt="" /></a>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Suits &amp; Blazer</h4>
                                     <div class="content">
                                        <p><a href="#" class="menutitle">Suits &amp; Blazer</a></p>
                                        <a
                                           href="#"><img src="images/product/7.jpg" class="product-cat"
                                           alt="" /></a>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Jewelry</h4>
                                     <div class="content">
                                        <p><a href="#" class="menutitle">Jewelry</a></p>
                                        <a href="#"><img
                                           src="images/product/8.jpg" class="product-cat"
                                           alt="" /></a>
                                     </div>
                                  </div>
                               </div>
                            </li>
                         </ul>
                      </li> --}}
                      <li class="dropdown megamenu-fw">
                         <a href="#" class="dropdown-toggle"
                            data-toggle="dropdown"> Venues</a>
                         <ul class="dropdown-menu megamenu-content animated fade-Out-Up" role="menu">
                            <li>
                               <div class="row">
                                  <div class="col-menu col-md-4">
                                     <h4 class="title">By Occasion</h4>
                                     <div class="content">
                                        <ul class="menu-col">
                                           <li><a href="{{ url('/venue/corporate-party') }}">Corporate party </a></li>
                                           <li><a href="{{ url('/venue/wedding-management') }}">Wedding management</a></li>
                                           <li><a href="{{ url('/venue/wedding-anniversary') }}">Wedding Anniversary</a></li>
                                           <li><a href="{{ url('/venue/birthday-party') }}">Birthday party</a></li>
                                           <li><a href="{{ url('/venue/engagement') }}">Engagement </a></li>
                                           {{-- <li><a href="#">Corporate Event Venues</a> </li>
                                           <li><a href="#">Kids Birthday Party</a></li> --}}
                                        </ul>
                                     </div>
                                  </div>
                                  {{-- <div class="col-menu col-md-3">
                                     <h4 class="title">By Venue Type</h4>
                                     <div class="content">
                                        <ul class="menu-col">
                                          <li><a href="#">Banquet Halls</a></li>
                                           <li><a href="#">Hotels</a></li>
                                           <li><a href="#"> Restaurants</a></li>
                                           <li><a href="#"> Party Halls</a></li>
                                           <li><a href="#">Resorts </a></li>
                                           <li><a href="#">Marriage-Halls</a> </li>
                                           <li><a href="#">Party Lawns</a></li>
                                        </ul>
                                     </div>
                                  </div> --}}
                                  {{-- <div class="col-menu col-md-3">
                                     <h4 class="title">Popular Cities</h4>
                                     <div class="content">
                                        <ul class="menu-col">
                                          <li><a href="#">Delhi NCR</a></li>
                                          <li><a href="#">Mumbai</a></li>
                                          <li><a href="#"> Pune</a></li>
                                          <li><a href="#"> Udaipur</a></li>
                                          <li><a href="#">Jodhpur </a></li>
                                          <li><a href="#">Jaipur</a> </li>
                                          <li><a href="#">Ahmedabad</a></li>
                                     </div>
                                  </div> --}}
                                  <div class="col-menu col-md-8">
                                     <h4 class="title"> New Venues</h4>
                                     <div id="mmmenuCarousel" class="mmmenuCarousel carousel slide"
                                        data-ride="carousel">
                                        <ul class="carousel-indicators">
                                           <li data-target="#mmmenuCarousel" data-slide-to="0"
                                              class="active"></li>
                                           <li data-target="#mmmenuCarousel" data-slide-to="1"></li>
                                           <li data-target="#mmmenuCarousel" data-slide-to="2"></li>
                                           <li data-target="#mmmenuCarousel" data-slide-to="3"></li>
                                        </ul>
                                        <div class="carousel-inner">
                                           <div class="carousel-item active"><a href="#"><img
                                              src="{{ asset('assets/images/menu-venue.jpg')}}"
                                              alt="Wedding Hall book" /></a></div>
                                           <div class="carousel-item"><a href="#"><img
                                              src="{{ asset('assets/images/menu-venue.jpg')}}"
                                              alt="Wedding Hall book" /></a></div>
                                           <div class="carousel-item"><a href="#"><img
                                              src="{{ asset('assets/images/menu-venue.jpg')}}"
                                              alt="Wedding Hall book" /></a></div>
                                           <div class="carousel-item"><a href="#"><img
                                              src="{{ asset('assets/images/menu-venue.jpg')}}"
                                              alt="Wedding Hall book" /></a></div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </li>
                         </ul>
                      </li>
                      {{-- <li class="dropdown megamenu-fw">
                         <a href="#" class="dropdown-toggle"
                            data-toggle="dropdown"> Vendors</a>
                         <ul class="dropdown-menu megamenu-content animated fade-Out-Up" role="menu">
                            <li>
                               <div class="row">
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Photographers</h4>
                                     <div class="content">
                                        <ul class="menu-col">
                                           <li><a href="#">Candid Photography </a></li>
                                           <li><a href="#">Cinematography</a></li>
                                           <li><a href="#">Pre-Wedding Shoots</a></li>
                                           <li><a href="#">Traditional Photography </a></li>
                                           <li><a href="#">Wedding Photography </a></li>
                                           <li><a href="#">Portfolio Shoots</a></li>
                                           <li><a href="#">Bridal Photography</a></li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Makeup Artists</h4>
                                     <div class="content">
                                        <ul class="menu-col">
                                           <li><a href="#">Bridal Makeup</a></li>
                                           <li><a href="#">Full Body Makeup </a></li>
                                           <li><a href="#">Hair Styling</a></li>
                                           <li><a href="#">Outstation Makeup</a></li>
                                          
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title">Others</h4>
                                     <div class="content">
                                        <ul class="menu-col">
                                           <li><a href="#">Decorators</a></li>
                                           <li><a href="#">DJS </a></li>
                                           <li><a href="#">Transport</a></li>
                                           <li><a href="#">Band/ Baaja/ Ghodiwala</a></li>
                                           <li><a href="#">Priest/ Pandit</a></li>
                                           <li><a href="#">Gifting </a></li>
                                           <li><a href="#">Jewellery</a></li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-menu col-sm-6 col-md-3">
                                     <h4 class="title no-dropdmenu"> New
                                        Vendors
                                     </h4>
                                     <div id="mmmenuCarousel2" class="mmmenuCarousel carousel slide"
                                        data-ride="carousel">
                                        <ul class="carousel-indicators">
                                           <li data-target="#mmmenuCarousel2" data-slide-to="0"
                                              class="active"></li>
                                           <li data-target="#mmmenuCarousel2" data-slide-to="1"></li>
                                           <li data-target="#mmmenuCarousel2" data-slide-to="2"></li>
                                           <li data-target="#mmmenuCarousel2" data-slide-to="3"></li>
                                        </ul>
                                        <div class="carousel-inner">
                                           <div class="carousel-item active"><a href="#"><img
                                              src="{{ asset('assets/images/vendor.jpg')}}"
                                              alt="New Vendor" /></a>
                                               
                                           </div>
                                           <div class="carousel-item"><a href="#"><img
                                              src="{{ asset('assets/images/vendor.jpg')}}"
                                              alt="New Vendor" /></a>
                                              
                                           </div>
                                           <div class="carousel-item"><a href="#"><img
                                              src="{{ asset('assets/images/vendor.jpg')}}"
                                              alt="New Vendor" /></a>
                                               
                                           </div>
                                           <div class="carousel-item"><a href="#"><img
                                              src="{{ asset('assets/images/vendor.jpg')}}"
                                              alt="New Vendor" /></a>
                                               
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </li>
                         </ul>
                      </li> --}}
                      {{-- <li><a href="#">Blog</a></li> --}}
                      {{-- <li><a href="{{ url('/about-us') }}" class="{{ Request::is('about-us') ? 'active' : '' }}">About Us</a></li> --}}
                      <li><a href="{{ url('/blogs') }}" class="{{ Request::is('blogs') ? 'active' : '' }}">Blogs</a></li>
                      <li><a href="{{ url('/contact-us')}}" class="{{ Request::is('contact-us') ? 'active' : '' }}">Customer support</a></li>
                      <li><a href="#" class="text-danger" data-toggle="modal" data-target="#inqueryModal">Get Free Estimatation</a></li>
                      <li class="dropdown mmmyaccount-menu">
                         <a href="#" class="dropdown-toggle"
                            data-toggle="dropdown"><i class="fa fa-user"></i> Account</a>
                         <ul class="dropdown-menu megamenu-content">
                              {{-- <li><a href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Log In</a></li>
                              <li><a href="{{ url('register') }}"><i class="fa fa-user-plus"></i> Free Sign Up</a></li>
                               --}}
                              <li><a href="{{ url('my-profile') }}"><i class="fa fa-user"></i> Profile</a></li>
                              <li><a href="{{ url('my-book') }}"><i class="fa fa-heart"></i> My Book</a></li>
                              <li><a href="{{ url('register') }}"><i class="fa fa-sign-in"></i> Register</a></li>
                              <li><a href="{{ url('login') }}"><i class="fa fa-user-plus"></i> Login</a></li>
                              {{-- @guest
                              @if (Route::has('login'))
                                  <li>
                                    <i class="fa fa-sign-in ml-2"></i><a href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                              @endif
                              @if (Route::has('register'))
                                  <li>
                                    <i class="fa fa-user-plus ml-2"></i><a href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif
                          @else
                              <li>
                                 <a href="{{ url('/my-profile') }}"><i class="fa fa-user"></i>
                                     {{ Auth::user()->name }} 
                                 </a>
                              </li>
                                  <li><i class="fa fa-sign-out ml-2" aria-hidden="true"></i><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                              </li>
                          @endguest --}}
                              {{-- <li>
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i>
                                  {{ __('Logout') }}
                              </a>
              
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>

                                 <a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
                              </li> --}}
                         </ul>
                      </li>

                   </ul>
                </div>
                <div class="attr-nav">
                   <ul>
                     <li><a href="{{ url('list-your-business') }}" class="{{ Request::is('list-your-business') ? 'active' : '' }}">List Your Bussiness</a></li>

                      {{-- <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-shopping-cart"></i><span class="badge">3</span></a>
                         <ul class="dropdown-menu cart-list">
                            <li>
                               <a href="#" class="photo"><img src="images/product/1.jpg" class="cart-thumb"
                                  alt="" /></a>
                               <h6><a href="#">Product1</a></h6>
                               <p>1 x <span class="price">$99.99</span></p>
                            </li>
                            <li>
                               <a href="#" class="photo"><img src="images/product/2.jpg" class="cart-thumb"
                                  alt="" /></a>
                               <h6><a href="#">Product2</a></h6>
                               <p>1 x <span class="price">$33.33</span></p>
                            </li>
                            <li>
                               <a href="#" class="photo"><img src="images/product/3.jpg" class="cart-thumb"
                                  alt="" /></a>
                               <h6><a href="#">Product3</a></h6>
                               <p>2 x <span class="price">$99.99</span></p>
                            </li>
                            <li class="total"><span class="pull-right"><strong>Total</strong>:
                               $333.31</span><a href="#" class="btn btn-default btn-cart">View Cart</a>
                            </li>
                         </ul>
                      </li>
                      <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                      <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li> --}}
                   </ul>
                </div>
                {{-- <div class="side">
                   <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                   <div class="widget">
                      <h4 class="title">Title Menu One</h4>
                      <div class="content side-menus">
                         <ul class="menu-col">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Pricing</a></li>
                         </ul>
                      </div>
                   </div>
                   <div class="widget">
                      <h4 class="title">Title Menu Two</h4>
                      <div class="content side-menus">
                         <ul class="menu-col">
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">FAQ</a></li>
                         </ul>
                      </div>
                   </div>
                </div> --}}
             </nav>
          </div>
       </div>
    </div>
 </header>

 

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        

    <a href="#" class="scrollup"><i class="fas fa-arrow-circle-up"></i></a>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootsnav.js')}}"></script>
    <script src="{{ asset('assets/js/megamenu.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js')}}"></script>

    {{-- <script src="{{ asset('/public/build/assets/app.87a4a3cb.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/custom.js')}}"></script>

    <script>
     $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            responsiveClass: true,
            thumbs: true,
            thumbsPrerendered: true,
            navText: ["<img src={{asset('assets/images/arrow-left.png')}}>", "<img src={{asset('assets/images/arrow-right.png')}}>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 7
                },
                1000: {
                    items: 7
                }
            }
        });

    });

   
</script>

<script>
$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
    $(e.target)
   .prev()
   .find("i:last-child")
   .toggleClass("fa-minus fa-plus");
});

</script>
<script>

$(window).on('load',function(){
    var delayMs = 10000; // 150000 delay in milliseconds

    setTimeout(function(){
        $('#inqueryModal').modal('show');
    }, delayMs);
});
</script>
@yield('scripts')
   {{-- @vite('resources/js/app.js') --}}
@livewireScripts
 
    </body>
</html>

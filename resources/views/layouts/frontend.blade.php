<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>
    {{-- <meta name="keywords" content="@yield('title')">
    <meta name="description" content="@yield('title')"> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo.png') }}" />
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Norican&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Niconne&family=Norican&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Scripts -->

    {{-- php -S localhost:8000 -t public/ npm run build --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/fontawesome/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/megamenu.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }} ">

    <link href="{{ asset('assets/exzoom/jquery.exzoom.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('assets/css/jquerysctipttop.css') }}" rel="stylesheet" type="text/css"> --}}

    {{-- <link rel="stylesheet" href="{{ asset('/public/build/assets/app.67dcdfd2.css') }}"> --}}

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    {{-- @vite('resources/js/app.css') --}}
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }} ">
    {{-- Added By Shubham --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}

    <meta name="google-site-verification" content="OEGc_ARFEeTxp3clZ39iLPCZp3foXG5dVaXJlYLSchk" />

</head>

<body>

    @include('layouts.includes.users.header')
    @yield('content')
    @include('layouts.includes.users.footer')

    <a href="#" class="scrollup"><i class="fas fa-arrow-circle-up"></i></a>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/megamenu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>

    {{-- <script src="{{ asset('/public/build/assets/app.87a4a3cb.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script> --}}
    <script src="{{ asset('assets/exzoom/jquery.exzoom.js') }}"></script>

    {{-- Added By Shubham --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script> --}}

    <script src="{{ asset('assets/js/custom.js') }}"></script>

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
                navText: ["<img src={{ asset('assets/images/arrow-left.png') }}>",
                    "<img src={{ asset('assets/images/arrow-right.png') }}>"
                ],
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
        $(window).on('load', function() {
            var delayMs = 10000; // 150000 delay in milliseconds

            setTimeout(function() {
                $('#inqueryModal').modal('show');
            }, delayMs);
        });
    </script>

    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    {{-- <script>
    $( function() {
      var availableTags = [
        "Gurgaon",
        "Delhi",
        "Noida",
        "Uttar Pradesh",
       
      ];
      $( "#tags" ).autocomplete({
        source: availableTags
      });
    } );
    </script> --}}

    <script></script>
    <script>
        $(document).ready(function() {
            $("#dam_return a").click(function() {
                var value = $(this).html();
                var input = $('#dam');
                input.val(value);
            });
        });

        // $('.h-350').hide()
        // jQuery('#dam').on('click',function(){
        //     jQuery('.h-350').toggle();
        // })

        $('#myDIV').hide()
        jQuery('#dam').on('click', function() {
            jQuery('#myDIV').toggle();
        })
    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    @yield('scripts')
    {{-- @vite('resources/js/app.js') --}}
    @livewireScripts
</body>

</html>

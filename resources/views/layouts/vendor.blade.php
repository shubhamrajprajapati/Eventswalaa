<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo.png') }}"/>
        <link rel="icon" type="image/png" sizes="32x32"	href="{{ asset('assets/images/logo.png') }}"/>
        <link rel="icon" type="image/png" sizes="16x16"	href="{{ asset('assets/images/logo.png') }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assetsold/vendors/styles/core.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assetsold/vendors/styles/icon-font.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assetsold/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assetsold/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assetsold/vendors/styles/style.css') }}" />
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap4.min.css"> --}}
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

        @livewireStyles

    </head>
    <body>

        @include('layouts.includes.vendor.navbar')
        @yield('content')
        @include('layouts.includes.vendor.footer')
        
    		<!-- js -->
		<script src="{{ asset('assetsold/vendors/scripts/core.js') }}"></script>
		<script src="{{ asset('assetsold/vendors/scripts/script.min.js') }}"></script>
		<script src="{{ asset('assetsold/vendors/scripts/process.js') }}"></script>
		<script src="{{ asset('assetsold/vendors/scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('assetsold/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
		<script src="{{ asset('assetsold/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assetsold/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('assetsold/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('assetsold/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('assetsold/vendors/scripts/dashboard3.js') }}"></script>
        
                
        <script src="{{ asset('assetsold/ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace( 'editor' );
            CKEDITOR.replace( 'editor1' );
            CKEDITOR.replace( 'editor2' );
            CKEDITOR.replace( 'editor3' );
            CKEDITOR.replace( 'editor4' );
            CKEDITOR.replace( 'editor5' );
            CKEDITOR.replace( 'editor6' );
            CKEDITOR.replace( 'editor7' );
            CKEDITOR.replace( 'editor8' );
            CKEDITOR.replace( 'editor9' );
            CKEDITOR.replace( 'editor10' );
            CKEDITOR.replace( 'editor11' );
            CKEDITOR.replace( 'editor12' );
            CKEDITOR.replace( 'editor13' );
            CKEDITOR.replace( 'editor14' );
            CKEDITOR.replace( 'editor15' );
            CKEDITOR.replace( 'editor16' );
        </script>
        <script>
            $(document).ready(function() {
            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            } );
        
            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        } );
        </script>

        @yield('scripts')
        @stack('script')

        @livewireScripts

    </body>
</html>
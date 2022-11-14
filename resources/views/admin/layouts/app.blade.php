<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>

        @stack('title')

    </title>

    {{-- Admin Panel --}}
    <link href="{{ asset('assets/admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">


    {{-- Styles --}}

    <style>

        body {
            overflow-x: hidden;
        }

    </style>


  </head>
  <body>
    
    <div class="row">

        <div class="col-12">

            @include('admin.partials.header')

        </div>

        <div class="col-3 bg-white">

            @include('admin.partials.sidebar')

        </div>

        <div class="col-9">

            @yield('main-content')

        </div>

    </div>

    {{-- Admin Panel --}}
    <script src="{{ asset('assets/admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    
    {{-- Custom --}}
    @stack('scripts')

  </body>
</html>
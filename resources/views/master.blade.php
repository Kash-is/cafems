<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">

        <!-- Icons -->
        <link href="{{asset('assets/icons/fontawesome/css/all.css')}}" rel="stylesheet" type="text/css">

        <!-- Css -->
        <link href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet">

        <style>
            .dataTables_wrapper .dataTables_length select
            {
                padding: 2px 20px;
            }
        </style>

    </head>

    <body>

        <div id="wrapper">
            @include('layouts.inc.sidebar')

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('layouts.inc.navbar')
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                 </div>
                 @include('layouts.inc.footer')
            </div>
        </div>

         <!-- Bootstrap core JavaScript-->
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <script src="{{asset('assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

        <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#myDataTable').DataTable();
            });
            // let table = new DataTable('#myDataTable');
        </script>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="{{ asset('admin_assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin_assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('admin_assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin_assets/plugins/toastr/toastr.min.css')}}">

    <link rel="stylesheet" href="{{ asset('admin_assets/css/custom.css') }}">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @yield('style')
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    @include('admin.includes.header')

    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('admin.includes.menu')

        @yield('content')

    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin_assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admin_assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });

    </script>
    <script src="{{ asset('admin_assets/js/custom.js') }}"></script>
    <script src="{{asset('admin_assets/plugins/toastr/toastr.min.js')}}"></script>

    <script>
        $(document).ready(function () {

            @if(count($errors) > 0)
            "@foreach($errors -> all() as $error)"
            toastr.error("{{ $error }}");
            @endforeach
            @endif
            @if(session('error-message'))
            toastr.error("{{ session('error-message') }}");
            @endif
            @if(session('success-message'))
            toastr.success("{{ session('success-message') }}");
            @endif
            @if(session('status'))
            toastr.success("{{ session('status') }}");
            @endif
        });

    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @yield('scripts')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->



</body>

</html>

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>SIRS | {{ $title }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/dashlite.css?ver=3.0.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/assets/css/theme.css?ver=3.0.3')}}">
    @stack('css')
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        @include('partials.sidebar')
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('partials.header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    @yield('content')
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=3.0.3') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.0.3') }}"></script>
    @stack('js')
</body>

</html>
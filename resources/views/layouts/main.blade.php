<!doctype html>
<html lang="en" dir="ltr">

<head>
@include('layouts.head')
</head>

<body class="app sidebar-mini ltr light-mode">


@include('layouts.loader')

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

        @include('layouts.header')

        @include('layouts.sidebar')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                @yield('maincontent')
                        

                </div>
            </div>
            <!--app-content close-->

        </div>

        @include('layouts.sidebarright')

        @include('layouts.footer')

    </div>
        @include('layouts.vendorscripts')
        

</body>

</html>
<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-12 text-center">
                            <div class="site-logo">
                                <a href="" class="js-logo-clone">Invest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('container')

            @include('Layout.nav')
            @include('Layout.footer')
</body>

</html>

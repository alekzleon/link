<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="enlaces, link para todo tipo de contenido, todos tus enlaces en un solo lugar, link, redes sociales">
    <title>miLink | Enlaces para redes, videos, menús y mas.</title>
    @include('resources.css')
</head>

<body class="crm_body_bg">
    @include('partials.nav')
    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                    
                        <div class="header_right d-flex justify-content-between align-items-center">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner overly_inner">
            @yield('content')
        </div>

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#">
                                    Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @include('resources.js')
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 20:14:50 GMT -->

</html>
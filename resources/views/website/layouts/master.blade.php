<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bosathemes.com/html/educator/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 22:05:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="/assets/img/educator-fabicon-300x300.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendors/bootstrap/css/bootstrap.min.css') }}" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/fontawesome/css/all.min.css">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/elementskit-icon-pack//assets/css/ekiticons.css">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/progressbar-fill-visible/css/progressBar.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/slick/slick-theme.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <title>SchoolRate TOGO</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="/assets/img/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        
        @include('website.layouts.topbar')

        <main id="content" class="site-main">
            <!-- home banner section html start -->
          @yield('content')
        </main>

        <!-- footer part -->
        @include('website.layouts.footer')
        <!-- back to top -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/vendors/jquery/jquery.js"></script>
    <script src="/assets/vendors/waypoint/jquery.waypoints.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/vendors/progressbar-fill-visible/js/progressBar.min.js"></script>
    <script src="/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="/assets/vendors/counterup/jquery.counterup.js"></script>
    <script src="/assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="/assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/vendors/slick/slick.min.js"></script>
    <script src="/assets/vendors/slick-nav/jquery.slicknav.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/main.js"></script>
<script>(function(){if (!document.body) return;var js = "window['__CF$cv$params']={r:'87912786299f047d',t:'MTcxMzkwOTkyMC4wOTYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/471dc2adc340/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v55bfa2fee65d44688e90c00735ed189a1713218998793" integrity="sha512-FIKRFRxgD20moAo96hkZQy/5QojZDAbyx0mQ17jEGHCJc/vi0G2HXLtofwD7Q3NmivvP9at5EVgbRqOaOQb+Rg==" data-cf-beacon='{"rayId":"87912786299f047d","version":"2024.3.0","r":1,"token":"2aaac9563824454ba89abdea91540009","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from demo.bosathemes.com/html/educator/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 22:05:40 GMT -->
</html>
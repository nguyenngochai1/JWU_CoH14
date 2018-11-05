
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/capstone1/public/event/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/capstone1/public/event/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/capstone1/public/event/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/capstone1/public/event/style.css">

</head>
<body>
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="{{ route('event.index.index')}}"><img src="/capstone1/public/event/images/logo.png" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="{{ route('event.index.index')}}">TRANG CHỦ</a></li>
                            <li><a href="{{ route('event.aboutus.aboutus') }}">VỀ CHÚNG TÔI</a></li>
                            <li><a href="{{ route('event.events.sukien') }}">SỰ KIỆN</a></li>
                            <li><a href="{{ route('event.news.tintuc')}}">TIN TỨC</a></li>
                            <li><a href="{{route('event.contact.contact')}}">LIÊN HỆ</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <a class="btn gradient-bg" href="{{route('event.login.login')}}">Đăng Nhập</a>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

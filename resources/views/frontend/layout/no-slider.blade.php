<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body class="tts-pre-loading">

    @php
        $info = get_info_donation();
        $cart = session('cart');
        $count_cart = 0;
        if(isset($cart)){
            $count_cart = count($cart);
        }
    @endphp

    <section class="tts-box-header-top d-none d-lg-block">
        <div class="container">
            <div class="tts-header-top-content">
                <p>Trụ Trì: {{ $info->abbot_phone }} - Văn Phòng: {{ $info->office_phone }} - Thư Ký:
                    {{ $info->secretary_phone }}</p>
            </div>
        </div>
    </section>
    
    <section class="tts-menu" id="tts-menu-sticky-top" style="background-color: rgba(255,255,255,0.5)">
        <div class="container">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg">

                <!-- Navbar brand -->
                <a href="/"><img class="tts-logo" src="/images/logo/Mask Group 6.png" alt=""></a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tts-menu"
                    aria-controls="tts-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px"
                        height="auto">
                        <path
                            d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z" />
                    </svg>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="tts-menu">

                    <!-- Links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.get.list.listbook') }}">SÁCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">LIÊN HỆ</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('frontend.public.cart') }}"><i class="fa fa-shopping-cart"></i> <i>{{ $count_cart }}</i></a>
                        </li>
                    </ul>

                </div>
                <!-- Collapsible content -->

            </nav>
            <!--/.Navbar-->
        </div>
    </section>
    <div class="clone-menu" style="height: 100px"></div>

    <main class="tts-main-content">

        @yield('main')

    </main>
    <footer class="tts-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tts-item-image">
                        <img class="img-fluid" src="/images/footer/Mask Group 42.png" alt="">
                        <h3>SC. Thích Nữ Hạnh Linh</h3>
                        <p>Trụ trì Chùa Diệu Pháp Linh Nghĩa</p>
                        <p>( Niệm Phạt Đường Diệu Pháp Cũ )</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tts-footer-info-contact">
                        <h3>LIÊN HỆ</h3>
                        <p>Trụ Trì: {{ $info->abbot_phone }}</p>
                        <p>Văn Phòng - PT Trung Thống: {{ $info->office_phone }}</p>
                        <p>Thư Ký - PT Ngọc Tiên Hương: {{ $info->secretary_phone }}</p>
                    </div>
                    <div class="tts-warp-item-footer">
                        <div class="tts-item-footer">
                            <p>{{ $info->email }}</p>
                        </div>
                        <div class="tts-item-footer">
                            <p>{{ $info->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <h3>BẢN ĐỒ</h3>
                    <div class="tts-map">
                        <iframe width="100%" height="330"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.301202240366!2d106.03659191533616!3d11.312681152158348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b6c5e0d5d7099%3A0xa33c0f567105e6e8!2zQ2jDuWEgTGluaCBOZ2jEqWEgRGnhu4d1IFBow6Fw!5e0!3m2!1svi!2s!4v1627029973295!5m2!1svi!2s"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <h3>THEO DÕI FANPAGE</h3>
                    <div class="tts-fanpage">
                        <div class="fb-page" data-href="https://www.facebook.com/chuadieuphaplinhnghia"
                            data-tabs="timeline" data-width="" data-height="330" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/chuadieuphaplinhnghia"
                                class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/chuadieuphaplinhnghia">Chùa Diệu Pháp Linh Nghĩa</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tts-copyright">
            <p>CHÙA DIỆU PHÁP LINH NGHĨA</p>
            <p>Thiết kế bởi Tuổi Trẻ Soft</p>
        </div>
    </footer>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0"
        nonce="IIGFsPQ5"></script>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/lib.min.js"></script>
    <script type="text/javascript" src="/js/app.min.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <script type="text/javascript" src="/js/custom.js"></script>
    <script type="text/javascript" src="/js/vietnamlocalselector.js"></script>
    <script>
        var localpicker = new LocalPicker({
            province: "ls_province",
            district: "ls_district",
            ward: "ls_ward"
            });
    </script>

</body>

</html>

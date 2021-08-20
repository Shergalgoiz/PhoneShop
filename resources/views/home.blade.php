<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Vietpro Shop - Home</title>
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- header -->
    <header id="header">

        @include('layout.header')

    </header><!-- /header -->
    <!-- endheader -->

    <!-- main -->
    <section id="body">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-md-3">

                    @include('layout.sidebar')

                </div>

                <div id="main" class="col-md-9">
                    <!-- main -->
                    <!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
                    <div id="slider">

                        @include('layout.slider')

                    </div>

                    <div id="banner-t" class="text-center">
                        <div class="row">
                            <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                                <a href="#"><img src="frontend/img/home/banner-t-1.png" alt=""
                                        class="img-thumbnail"></a>
                            </div>
                            <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                                <a href="#"><img src="frontend/img/home/banner-t-1.png" alt=""
                                        class="img-thumbnail"></a>
                            </div>
                        </div>
                    </div>
                    {{-- content --}}
                    <div id="wrap-inner">
                        <div class="products">
                            <h3>sản phẩm nổi bật</h3>
                            <div class="product-list row">
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-1.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-3.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-4.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-1.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-4.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-3.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="products">
                            <h3>sản phẩm mới</h3>
                            <div class="product-list row">
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-1.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-3.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-4.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-1.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-3.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="frontend/img/home/product-4.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end content --}}
                    <!-- end main -->
                </div>
            </div>
        </div>
    </section>
    <!-- endmain -->

    <!-- footer -->
    <footer id="footer">

        @include('layout.footer')

    </footer>
    <!-- endfooter -->
    <script type="text/javascript">
        $(function() {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function() {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
    <script type="text/javascript" src="{{ asset('/frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
</body>

</html>

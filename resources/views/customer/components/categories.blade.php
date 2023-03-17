<!-- Categories Section Begin -->
<section class="categories">
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center active">
                <img src="/customer/assets/img/Grimm.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Chào mừng bạn đến với <br> Fashion Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="/home-pages/shop">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="/customer/assets/img/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Chào mừng bạn đến với <br> Fashion Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="/home-pages/shop">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="/customer/assets/img/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Chào mừng bạn đến với <br> Fashion Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="/home-pages/shop">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a class="prev" href="#" role="button">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="next" href="#" role="button">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Slider -->
    <style>
        .cover-slides {
            height: 80vh;
        }

        .slides-navigation {
            margin: 0 auto;
            position: absolute;
            z-index: 3;
            top: 46%;
            width: 100%;
        }
        .slides-navigation a {
            background: #d33b33;
            position: absolute;
            height: 70px;
            width: 70px;
            top: 50%;
            font-size: 20px;
            display: block;
            color: #fff;
            line-height: 90px;
            text-align: center;
            transition: all .3s ease-in-out;
        }

        .slides-navigation a i {
            font-size: 40px;
        }

        .slides-navigation a:hover {
            background: #010101;
        }

        .cover-slides .container {
            height: 100%;
            position: relative;
            z-index: 2;
        }

        .cover-slides .container>.row {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .cover-slides .container>.row {
            height: 100%;
        }

        .overlay-background {
            background: #333;
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            opacity: 0.5;
        }

        .cover-slides h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 64px;
            color: #fff;
            margin-top: 50px;
        }

        .cover-slides p {
            font-size: 18px;
            color: #fff;
            padding-bottom: 30px;
        }

        .cover-slides p a {
            font-size: 24px;
            color: #ffffff;
            border: none;
            text-transform: uppercase;
            padding: 10px 20px;
        }

        .slides-pagination a {
            border: 2px solid #ffffff;
        }

        .slides-pagination a.current {
            background: #d33b33;
            border: 2px solid #d33b33;
        }

        .slides-navigation a {
            position: absolute;
            display: block;
        }

        .slides-navigation a.prev {
            left: 0;
        }

        .slides-navigation a.next {
            right: 0;
        }

        .slides-pagination {
            position: absolute;
            z-index: 3;
            bottom: 0;
            text-align: center;
            width: 100%;
        }

        .slides-pagination a {
            border: 2px solid rgb(249, 247, 247);
            border-radius: 0px;
            width: 30px;
            height: 30px;
            display: -moz-inline-stack;
            display: inline-block;
            vertical-align: middle;
            *vertical-align: auto;
            zoom: 1;
            *display: inline;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=");
            margin: 2px;
            overflow: hidden;
            text-indent: -99999px;
            text-align: center;
        }
        /* .slides-pagination a.current {
            background: #222;
        } */

        .hvr-hover {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            position: relative;
            background: #d33b33;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            border-radius: 0;
            box-shadow: none;
            font-weight: 600;
        }

        .hvr-hover::after {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
             bottom: 0;
            left: 0;
            right: 0;
            background: #010101;
            -webkit-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
         }
        .hvr-hover:hover::after {
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
            color: #ffffff;
         }
    </style>
</section>
<!-- Categories Section End -->

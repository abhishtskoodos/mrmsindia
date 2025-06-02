<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tune</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="include/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="include/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="include/css/fontawesome.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <!--============================== Header Start ==============================-->
    @include('include.nav')
    <!--============================== Header End ==============================-->

    <!--============================== Content Start ==============================-->
    <div class="inner-hero">
        <div class="inner-bg"> <img src="include/images/ineer-hero.jpg" alt=""> </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-text">
                        <h4> Sponsers </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content-End ==============================-->

    <!--============================== Content-Container Start==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h4 class="heading"> Media Coverage </h4>

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                            @if (!empty($medias) && count($medias) > 0)
                                @foreach ($medias as $media)
                                    <div class="swiper-slide card-item">
                                        <div class="mib-box">
                                            <div class="mb-img"><img src="{{ $media->image }}" alt="{{ $media->alt }}"></div>
                                            <div class="mb-text">{{ $media->name }}</div>
                                        </div>
                                    </div>
                                @endforeach
                                @else
                                <div class="swiper-slide card-item">
                                    <div class="mib-box">
                                        <div class="mb-img"><img src="include/images/sl1.jpg" alt=""></div>
                                        <div class="mb-text">NATELIE JOHN</div>
                                    </div>
                                </div>
                                <div class="swiper-slide card-item">
                                    <div class="mib-box">
                                        <div class="mb-img"><img src="include/images/sl2.jpg" alt=""></div>
                                        <div class="mb-text">NATELIE JOHN</div>
                                    </div>
                                </div>
                                <div class="swiper-slide card-item">
                                    <div class="mib-box">
                                        <div class="mb-img"><img src="include/images/sl3.jpg" alt=""></div>
                                        <div class="mb-text">NATELIE JOHN</div>
                                    </div>
                                </div>
                                <div class="swiper-slide card-item">
                                    <div class="mib-box">
                                        <div class="mb-img"><img src="include/images/sl3.jpg" alt=""></div>
                                        <div class="mb-text">NATELIE JOHN</div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="card-main-box">
                            <div class="swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74"
                                    viewBox="0 0 74 74" fill="none">
                                    <rect x="74" width="74" height="74" rx="37"
                                        transform="rotate(90 74 0)" fill="url(#paint0_linear_830_1132)" />
                                    <path
                                        d="M34.4841 49.284L46.7681 37L34.4841 24.716L36.5561 22.644L50.9121 37L36.5561 51.356L34.4841 49.284Z"
                                        fill="#131313" />
                                    <path d="M48.8398 35.52V38.48H23.6798V35.52H48.8398Z" fill="#131313" />
                                    <defs>
                                        <linearGradient id="paint0_linear_830_1132" x1="74" y1="37.0003"
                                            x2="148" y2="37.0003" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#BD7905" />
                                            <stop offset="1" stop-color="#FFDD55" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74"
                                    viewBox="0 0 74 74" fill="none">
                                    <rect y="74" width="74" height="74" rx="37"
                                        transform="rotate(-90 0 74)" fill="url(#paint0_linear_830_1136)" />
                                    <path
                                        d="M39.5159 24.716L27.2319 37L39.5159 49.284L37.4439 51.356L23.0879 37L37.4439 22.644L39.5159 24.716Z"
                                        fill="#131313" />
                                    <path d="M25.1602 38.48V35.52H50.3202V38.48L25.1602 38.48Z" fill="#131313" />
                                    <defs>
                                        <linearGradient id="paint0_linear_830_1136" x1="0" y1="111"
                                            x2="74" y2="111" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#BD7905" />
                                            <stop offset="1" stop-color="#FFDD55" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="swiper mySwiper2 mt-5">
                        <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                            <div class="swiper-slide card-item">
                                <div class="mib-box">
                                    <div class="mb-img"><img src="include/images/sl1.jpg" alt=""></div>
                                    <div class="mb-text">NATELIE JOHN</div>
                                </div>
                            </div>
                            <div class="swiper-slide card-item">
                                <div class="mib-box">
                                    <div class="mb-img"><img src="include/images/sl2.jpg" alt=""></div>
                                    <div class="mb-text">NATELIE JOHN</div>
                                </div>
                            </div>
                            <div class="swiper-slide card-item">
                                <div class="mib-box">
                                    <div class="mb-img"><img src="include/images/sl3.jpg" alt=""></div>
                                    <div class="mb-text">NATELIE JOHN</div>
                                </div>
                            </div>
                            <div class="swiper-slide card-item">
                                <div class="mib-box">
                                    <div class="mb-img"><img src="include/images/sl3.jpg" alt=""></div>
                                    <div class="mb-text">NATELIE JOHN</div>
                                </div>
                            </div>
                        </div>

                        <div class="card-main-box">
                            <div class="swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74"
                                    viewBox="0 0 74 74" fill="none">
                                    <rect x="74" width="74" height="74" rx="37"
                                        transform="rotate(90 74 0)" fill="url(#paint0_linear_830_1132)" />
                                    <path
                                        d="M34.4841 49.284L46.7681 37L34.4841 24.716L36.5561 22.644L50.9121 37L36.5561 51.356L34.4841 49.284Z"
                                        fill="#131313" />
                                    <path d="M48.8398 35.52V38.48H23.6798V35.52H48.8398Z" fill="#131313" />
                                    <defs>
                                        <linearGradient id="paint0_linear_830_1132" x1="74" y1="37.0003"
                                            x2="148" y2="37.0003" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#BD7905" />
                                            <stop offset="1" stop-color="#FFDD55" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74"
                                    viewBox="0 0 74 74" fill="none">
                                    <rect y="74" width="74" height="74" rx="37"
                                        transform="rotate(-90 0 74)" fill="url(#paint0_linear_830_1136)" />
                                    <path
                                        d="M39.5159 24.716L27.2319 37L39.5159 49.284L37.4439 51.356L23.0879 37L37.4439 22.644L39.5159 24.716Z"
                                        fill="#131313" />
                                    <path d="M25.1602 38.48V35.52H50.3202V38.48L25.1602 38.48Z" fill="#131313" />
                                    <defs>
                                        <linearGradient id="paint0_linear_830_1136" x1="0" y1="111"
                                            x2="74" y2="111" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#BD7905" />
                                            <stop offset="1" stop-color="#FFDD55" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--============================== Content-Container Start==============================-->

    <!--============================== Content-Container Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading mb-5"> Branding and Marketing </h4>
                </div>
            </div>
        </div>
        <div class="ch-img"> <img src="include/images/ineer-hero.jpg" alt=""> </div>
    </div>
    <!--============================== Content-Container End ==============================-->

    <!--============================== Content-Container Start==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading mb-5"> Media Coverage </h4>

                    <ul class="person-list">
                        <li class="person-item">
                            <div class="pi-box">
                                <div class="pi-img"> <img src="include/images/sl1.jpg" alt=""> </div>
                                <div class="pi-text">
                                    <h4> Lorem Ipsum </h4>
                                    <p> Lorem Ipsum </p>
                                    <div class="pi-button"> Lorem Ipsum
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="78"
                                            viewBox="0 0 75 78" fill="none">
                                            <rect x="38.5156" width="54.8316" height="54.8316" rx="27.4158"
                                                transform="rotate(43.8944 38.5156 0)" fill="black"
                                                fill-opacity="0.7" />
                                            <path
                                                d="M26.3389 52.199C18.9106 45.0519 18.6831 33.2675 25.8302 25.8391C32.9773 18.4107 44.7618 18.1833 52.1902 25.3304C59.6186 32.4775 59.846 44.262 52.6989 51.6903C45.5518 59.1187 33.7673 59.3461 26.3389 52.199ZM50.6695 26.9109C44.1104 20.6002 33.7215 20.8007 27.4107 27.3598C21.1 33.9189 21.3005 44.3078 27.8596 50.6185C34.4187 56.9293 44.8076 56.7288 51.1184 50.1697C57.4291 43.6106 57.2286 33.2217 50.6695 26.9109Z"
                                                fill="black" fill-opacity="0.7" />
                                            <path
                                                d="M44.531 46.4187L44.2826 33.5489L31.4128 33.7972L31.3709 31.6264L46.4116 31.3361L46.7018 46.3768L44.531 46.4187Z"
                                                fill="white" />
                                            <path
                                                d="M44.5566 31.6821L46.1371 33.2028L33.2115 46.6371L31.631 45.1164L44.5566 31.6821Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="person-item">
                            <div class="pi-box">
                                <div class="pi-img"> <img src="include/images/sl2.jpg" alt=""> </div>
                                <div class="pi-text">
                                    <h4> Lorem Ipsum </h4>
                                    <p> Lorem Ipsum </p>
                                    <div class="pi-button"> Lorem Ipsum
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="78"
                                            viewBox="0 0 75 78" fill="none">
                                            <rect x="38.5156" width="54.8316" height="54.8316" rx="27.4158"
                                                transform="rotate(43.8944 38.5156 0)" fill="black"
                                                fill-opacity="0.7" />
                                            <path
                                                d="M26.3389 52.199C18.9106 45.0519 18.6831 33.2675 25.8302 25.8391C32.9773 18.4107 44.7618 18.1833 52.1902 25.3304C59.6186 32.4775 59.846 44.262 52.6989 51.6903C45.5518 59.1187 33.7673 59.3461 26.3389 52.199ZM50.6695 26.9109C44.1104 20.6002 33.7215 20.8007 27.4107 27.3598C21.1 33.9189 21.3005 44.3078 27.8596 50.6185C34.4187 56.9293 44.8076 56.7288 51.1184 50.1697C57.4291 43.6106 57.2286 33.2217 50.6695 26.9109Z"
                                                fill="black" fill-opacity="0.7" />
                                            <path
                                                d="M44.531 46.4187L44.2826 33.5489L31.4128 33.7972L31.3709 31.6264L46.4116 31.3361L46.7018 46.3768L44.531 46.4187Z"
                                                fill="white" />
                                            <path
                                                d="M44.5566 31.6821L46.1371 33.2028L33.2115 46.6371L31.631 45.1164L44.5566 31.6821Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="person-item">
                            <div class="pi-box">
                                <div class="pi-img"> <img src="include/images/sl3.jpg" alt=""> </div>
                                <div class="pi-text">
                                    <h4> Lorem Ipsum </h4>
                                    <p> Lorem Ipsum </p>
                                    <div class="pi-button"> Lorem Ipsum
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="78"
                                            viewBox="0 0 75 78" fill="none">
                                            <rect x="38.5156" width="54.8316" height="54.8316" rx="27.4158"
                                                transform="rotate(43.8944 38.5156 0)" fill="black"
                                                fill-opacity="0.7" />
                                            <path
                                                d="M26.3389 52.199C18.9106 45.0519 18.6831 33.2675 25.8302 25.8391C32.9773 18.4107 44.7618 18.1833 52.1902 25.3304C59.6186 32.4775 59.846 44.262 52.6989 51.6903C45.5518 59.1187 33.7673 59.3461 26.3389 52.199ZM50.6695 26.9109C44.1104 20.6002 33.7215 20.8007 27.4107 27.3598C21.1 33.9189 21.3005 44.3078 27.8596 50.6185C34.4187 56.9293 44.8076 56.7288 51.1184 50.1697C57.4291 43.6106 57.2286 33.2217 50.6695 26.9109Z"
                                                fill="black" fill-opacity="0.7" />
                                            <path
                                                d="M44.531 46.4187L44.2826 33.5489L31.4128 33.7972L31.3709 31.6264L46.4116 31.3361L46.7018 46.3768L44.531 46.4187Z"
                                                fill="white" />
                                            <path
                                                d="M44.5566 31.6821L46.1371 33.2028L33.2115 46.6371L31.631 45.1164L44.5566 31.6821Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--============================== Content-Container End ==============================-->

    <!--============================== Footer Start ==============================-->
    @include('include.footer')
    <!--============================== Footer End ==============================-->
    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script src="include/js/plugins.js"></script>
    <script src="include/js/custom.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>


<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
            480: {
                slidesPerView: 2,
            }
        }
    });


    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
            480: {
                slidesPerView: 2,
            }
        }
    });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.header')
</head>


<body>

    @include('include.nav')
    <div class="hero">
        <div class="hero-bg"> <img src="include/images/hero.jpg" alt=""> </div>
        <div class="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="hero-text">
                            <h4> Step Into the Spotlight </h4>
                            <p> Mr & Miss Glam India </br> Talent Hunt 2025 </p>
                            <small> Presented by Glam Events | Est. 2024 </small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============================== Content-Container Start==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h5 class="heading"> All Events and Activities </h5>

                    <div class="swiper mySwiper4">
                        @if ($events)
                            @foreach ($events as $event)
                                <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                                    <div class="swiper-slide article-item">
                                        <div class="article-box">
                                            <div class="ab-img"><img src="{{ $event->image }}"
                                                    alt="{{ $event->alt }}">
                                            </div>
                                            <div class="ab-text">{{ $event->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                                <div class="swiper-slide article-item">
                                    <div class="article-box">
                                        <div class="ab-img"><img src="include/images/articale.jpg" alt=""></div>
                                        <div class="ab-text">Mr. & Miss Glam India</div>
                                    </div>
                                </div>
                                <div class="swiper-slide article-item">
                                    <div class="article-box">
                                        <div class="ab-img"><img src="include/images/articale.jpg" alt=""></div>
                                        <div class="ab-text">Mr. & Miss Glam India</div>
                                    </div>
                                </div>
                                <div class="swiper-slide article-item">
                                    <div class="article-box">
                                        <div class="ab-img"><img src="include/images/articale.jpg" alt=""></div>
                                        <div class="ab-text">Mr. & Miss Glam India</div>
                                    </div>
                                </div>
                                <div class="swiper-slide article-item">
                                    <div class="article-box">
                                        <div class="ab-img"><img src="include/images/articale.jpg" alt=""></div>
                                        <div class="ab-text">Mr. & Miss Glam India</div>
                                    </div>
                                </div>
                            </div>
                        @endif

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

    <div class="content-container gannd-finnal p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gand-text">
                        <ul class="gt-list">
                            <li class="gt-item"> Mr. &amp; Miss Glam India Talent Hunt Grand Final OCT - DEC 2025 </li>
                            <li class="gt-item"> Mr. &amp; Miss Glam India Talent Hunt Grand Final OCT - DEC 2025 </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============================== Content-Container Start==============================-->
    <div class="content-container bg-black">

        <h5 class="heading"> Explore 11 categories </h5>
        <h5 class="heading"> Talent Hunt </h5>

        <div class="swiper mySwiper5">
            <div class="swiper-wrapper deco-list" style="margin-bottom:90px;">
                @if (!empty($categories))
                    @foreach ($categories as $category)
                        <div class="swiper-slide deco-item">
                            <div class="deco-box">
                                <div class="deco-img"><img src="{{ $category->image }}" alt="{{ $category->alt }}">
                                </div>
                                <div class="deco-text">
                                    <div class="dtb">
                                        <h4> Female pageant </h4>
                                        <p> {{ $category->name }}</p>
                                    </div>
                                    <div class="deco-btn"> Register Now </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="swiper-slide deco-item">
                        <div class="deco-box">
                            <div class="deco-img"><img src="include/images/pa1.jpg" alt=""></div>
                            <div class="deco-text">
                                <div class="dtb">
                                    <h4> Female pageant </h4>
                                    <p> Category 1 </p>
                                </div>
                                <div class="deco-btn"> Register Now </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide deco-item">
                        <div class="deco-box">
                            <div class="deco-img"><img src="include/images/pa2.jpg" alt=""></div>
                            <div class="deco-text">
                                <div class="dtb">
                                    <h4> Female pageant </h4>
                                    <p> Category 1 </p>
                                </div>
                                <div class="deco-btn"> Register Now </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide deco-item">
                        <div class="deco-box">
                            <div class="deco-img"><img src="include/images/pa3.jpg" alt=""></div>
                            <div class="deco-text">
                                <div class="dtb">
                                    <h4> Female pageant </h4>
                                    <p> Category 1 </p>
                                </div>
                                <div class="deco-btn"> Register Now </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide deco-item">
                        <div class="deco-box">
                            <div class="deco-img"><img src="include/images/pa1.jpg" alt=""></div>
                            <div class="deco-text">
                                <div class="dtb">
                                    <h4> Female pageant </h4>
                                    <p> Category 1 </p>
                                </div>
                                <div class="deco-btn"> Register Now </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="card-main-box">
                <div class="swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74"
                        fill="none">
                        <rect x="74" width="74" height="74" rx="37" transform="rotate(90 74 0)"
                            fill="url(#paint0_linear_830_1132)" />
                        <path
                            d="M34.4841 49.284L46.7681 37L34.4841 24.716L36.5561 22.644L50.9121 37L36.5561 51.356L34.4841 49.284Z"
                            fill="#131313" />
                        <path d="M48.8398 35.52V38.48H23.6798V35.52H48.8398Z" fill="#131313" />
                        <defs>
                            <linearGradient id="paint0_linear_830_1132" x1="74" y1="37.0003" x2="148"
                                y2="37.0003" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#BD7905" />
                                <stop offset="1" stop-color="#FFDD55" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74"
                        fill="none">
                        <rect y="74" width="74" height="74" rx="37" transform="rotate(-90 0 74)"
                            fill="url(#paint0_linear_830_1136)" />
                        <path
                            d="M39.5159 24.716L27.2319 37L39.5159 49.284L37.4439 51.356L23.0879 37L37.4439 22.644L39.5159 24.716Z"
                            fill="#131313" />
                        <path d="M25.1602 38.48V35.52H50.3202V38.48L25.1602 38.48Z" fill="#131313" />
                        <defs>
                            <linearGradient id="paint0_linear_830_1136" x1="0" y1="111" x2="74"
                                y2="111" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#BD7905" />
                                <stop offset="1" stop-color="#FFDD55" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>

    </div>
    <!--============================== Content-Container Start==============================-->

    <!--============================== Content-Container Start==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h5 class="heading"> Celebrities and Jury Members </h5>

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                            @if (!empty($celebritys) && count($celebritys) > 0)
                                @foreach ($celebritys as $celebrity)
                                    <div class="swiper-slide card-item">
                                        <div class="mib-box">
                                            <div class="mb-img"><img src="{{ $celebrity->image }}"
                                                    alt="{{ $celebrity->alt }}"></div>
                                            <div class="mb-text">{{ $celebrity->name }}</div>
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

                </div>
            </div>
        </div>
    </div>
    <!--============================== Content-Container Start==============================-->

    <!--============================== Content-Container End ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h5 class="heading"> Guests and Invites </h5>

                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                            @if (!empty($guests) && count($guests) > 0)
                                @foreach ($guests as $guest)
                                    <div class="swiper-slide card-item">
                                        <div class="mib-box">
                                            <div class="mb-img"><img src="include/images/sl1.jpg" alt="">
                                            </div>
                                            <div class="mb-text">NATELIE JOHN</div>
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

                </div>
            </div>
        </div>
    </div>
    <!--============================== Content-Container End ==============================-->


    <div class="content-container bg-black" style="position: relative;">
        <div class="star-bg"> <img src="include/images/star-bg.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="right-logo"> <img src="include/images/right-logo.png" alt=""> </div>
                    <h5 class="heading"> Pageant Titles </h5>

                    <ul class="ad-list mt-5 pt-5">
                        <li class="ad-item">
                            <div class="ad-box">
                                <div class="ad-img"> <img src="include/images/second.png" alt=""> </div>
                                <div class="ad-text" style="border-radius: 100px 2px 2px 2px;">
                                    <h3> 1st Runner Up </h3>
                                    <p> {{ $value->value_6 }} </p>
                                </div>
                            </div>
                        </li>
                        <li class="ad-item">
                            <div class="ad-box">
                                <div class="ad-img"> <img src="include/images/first.png" alt=""> </div>
                                <div class="ad-text" style="border-radius: 2px; height:150px;">
                                    <h3> Winner </h3>
                                    <p> {{ $value->value_5 }} </p>
                                </div>
                            </div>
                        </li>
                        <li class="ad-item">
                            <div class="ad-box">
                                <div class="ad-img"> <img src="include/images/thired.png" alt=""> </div>
                                <div class="ad-text" style="border-radius: 2px 100px 2px 2px;">
                                    <h3> 2nd Runner Up </h3>
                                    <p> {{ $value->value_7 }} </p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!-- ============================== Gender Dropdown ============================== -->
    <div class="container mb-4 mt-4">
        <label for="genderFilter"><strong>Select Gender:</strong></label>
        <select id="genderFilter" class="form-control" style="width: 200px;">
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>
    </div>

    <!-- ============================== Female Section ============================== -->
    <div id="femaleSection" class="content-container gg" style="background-color:#FFFADA; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="right-logo"> <img src="include/images/right-logo.png" alt=""> </div>
                    <h5 class="heading">Pageant Subtitles</h5>
                    <p>Female</p>

                    <div class="award-list">
                        @if (!empty($pageantsubtitlefs) && count($pageantsubtitlefs) > 0)
                            @foreach ($pageantsubtitlefs as $pageantsubtitlef)
                                <div class="award-item">
                                    <div class="ai-box">
                                        <div class="ai-img"><img src="include/images/am.png" alt=""></div>
                                        <div class="ai-text">{{ $pageantsubtitlef->title ?? 'Miss Catwalk' }}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Miss catwalk </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Miss Beautiful body </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Miss Talented </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Miss Photogenic</div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Miss Beautiful hair </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Miss Best Personality  </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Miss Gorgeous </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text">Miss Best confidence  </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text">Miss Beautiful skin </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text">Miss Beautiful eyes</div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text">Miss Beautiful smile</div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================== Male Section ============================== -->
    <div id="maleSection" class="content-container gg type"
        style="background-color:#FFFADA; position: relative; display: none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="right-logo"> <img src="include/images/right-logo.png" alt=""> </div>
                    <h5 class="heading">Pageant Subtitles</h5>
                    <p>Male</p>

                    <div class="award-list">
                        @if (!empty($pageantsubtitlems) && count($pageantsubtitlems) > 0)
                            @foreach ($pageantsubtitlems as $pageantsubtitlem)
                                <div class="award-item">
                                    <div class="ai-box">
                                        <div class="ai-img"><img src="include/images/am.png" alt=""></div>
                                        <div class="ai-text">{{ $pageantsubtitlem->title ?? 'Mr. Catwalk' }}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Mr. Strut walk</div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Mr. Physique</div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text">Mr. Talented </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Mr. Photogenic </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Mr. Best hair</div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text">Mr. Best Personality </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Mr. Best smart </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Mr. Best Confidence </div>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="ai-box">
                                    <div class="ai-img"> <img src="include/images/am.png" alt=""> </div>
                                    <div class="ai-text"> Mr. Handsome</div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================== Toggle Script ============================== -->
    <script>
        document.getElementById('genderFilter').addEventListener('change', function() {
            const selected = this.value;

            const femaleSection = document.getElementById('femaleSection');
            const maleSection = document.getElementById('maleSection');

            if (selected === 'male') {
                femaleSection.style.display = 'none';
                maleSection.style.display = 'block';
            } else {
                femaleSection.style.display = 'block';
                maleSection.style.display = 'none';
            }
        });
    </script>

    <!--============================== Content-Container End ==============================-->

    <!--============================== Content-Container Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="col-lg-12">

                <div class="right-logo"> <img src="include/images/right-logo.png" alt=""> </div>

                <h5 class="heading"> Pageant Titles </h5>

                <div class="frame-box-list">
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-main">
                                    <div class="ft-ll">
                                        <h4> BEST ACTOR </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                    <div class="ft-ll">
                                        <h4> BEST ACTRESS </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-main">
                                    <div class="ft-ll">
                                        <h4> BEST ACTOR </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                    <div class="ft-ll">
                                        <h4> BEST ACTRESS </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-main">
                                    <div class="ft-ll">
                                        <h4> BEST ACTOR </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                    <div class="ft-ll">
                                        <h4> BEST ACTRESS </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-main">
                                    <div class="ft-ll">
                                        <h4> BEST ACTOR </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                    <div class="ft-ll">
                                        <h4> BEST ACTRESS </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-main">
                                    <div class="ft-ll">
                                        <h4> BEST ACTOR </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                    <div class="ft-ll">
                                        <h4> BEST ACTRESS </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="frame-box-list">
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-main">
                                    <div class="ft-ll">
                                        <h4> BEST ACTOR </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                    <div class="ft-ll">
                                        <h4> BEST ACTRESS </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-main">
                                    <div class="ft-ll">
                                        <h4> BEST ACTOR </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                    <div class="ft-ll">
                                        <h4> BEST ACTRESS </h4>
                                        <p> 1ST RUNNER UP </p>
                                        <p> 2ND RUNNER UP </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text type2">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-maintt">
                                    <p> Best male photographer </p>
                                    <p> Best female photographer </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text type2">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-maintt">
                                    <p> Best male photographer </p>
                                    <p> Best female photographer </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fbi-item">
                        <div class="fbi-box">
                            <div class="fbi-img"> <img src="include/images/frame.png" alt=""> </div>
                            <div class="fb-text type2">
                                <div class="ft-heading"> Acting </div>
                                <div class="ft-maintt">
                                    <p> Best male photographer </p>
                                    <p> Best female photographer </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--============================== Content-Container Start ==============================-->

    <!--============================== Content-Container End ==============================-->
    <div class="award-seaction bg-black">
        <div class="award-bg"> <img src="include/images/award-bg.png" alt=""> </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h5 class="heading"> Awards & Benefits </h5>

                    <div class="award-box">
                        <div class="ab-left">
                            <div class="abl-img"> <img src="include/images/award.png" alt=""> </div>
                            <div class="abl-text">
                                <h4> Winner Categories </h4>
                                <p> Winner </p>
                                <p> 1st Runner up </p>
                                <p> 2nd Runner up </p>
                            </div>
                        </div>
                        <div class="ab-right">
                            <div class="ab-list">
                                <div class="ab-item">
                                    <div class="ab-box">
                                        <h4> Award Prizes </h4>
                                        <ul>
                                            <li> Rs 1.0 lakh each to the winners of Mr & Miss Glam </li>
                                            <li> Gift Hampers from various Brands & Corporates </li>
                                            <li> Winners Crown </li>
                                            <li> Trophies </li>
                                            <li> Winners Sash </li>
                                            <li> Certificates </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ab-item">
                                    <div class="ab-box">
                                        <h4> Winner Benefits </h4>
                                        <ul>
                                            <li> Web series roles </li>
                                            <li> One-year modeling contracts </li>
                                            <li> Brand & corporate photoshoots </li>
                                            <li> E-commerce product shoots </li>
                                            <li> Showstopper opportunities </li>
                                            <li> Participation in fashion weeks </li>
                                            <li> Magazine & video shoots </li>
                                            <li> Press coverage </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--============================== Content-Container End ==============================-->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="model-box">
                        <div class="model-heading">
                            <h4> filter </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="search">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Search by Name">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21.0002 21.0002L16.6572 16.6572M16.6572 16.6572C17.4001 15.9143 17.9894 15.0324 18.3914 14.0618C18.7935 13.0911 19.0004 12.0508 19.0004 11.0002C19.0004 9.9496 18.7935 8.90929 18.3914 7.93866C17.9894 6.96803 17.4001 6.08609 16.6572 5.34321C15.9143 4.60032 15.0324 4.01103 14.0618 3.60898C13.0911 3.20693 12.0508 3 11.0002 3C9.9496 3 8.90929 3.20693 7.93866 3.60898C6.96803 4.01103 6.08609 4.60032 5.34321 5.34321C3.84288 6.84354 3 8.87842 3 11.0002C3 13.122 3.84288 15.1569 5.34321 16.6572C6.84354 18.1575 8.87842 19.0004 11.0002 19.0004C13.122 19.0004 15.1569 18.1575 16.6572 16.6572Z"
                                    stroke="#FFCC60" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="d-flex">
                            <div class="input-box">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Male</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Female</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Nationality</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>State</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>City</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Language</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Height</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Weight</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Bust</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Waist</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Hips</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Body type</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Eye color</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Hair colour</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Hair length</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Eye color</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-box">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Skills</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="from-btn"> Skills </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--============================== Content-Container Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h5 class="heading"> Models </h5>

                    <button type="button" class="mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="background:none; border: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                            fill="none">
                            <path d="M9 14H39M14 24H34M20 34H28" stroke="white" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>


                    <div class="swiper mySwiper3">
                        <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                            @if (!empty($modals) && count($modals) > 0)
                                @foreach ($modals as $modal)
                                    <div class="swiper-slide card-item">
                                        <div class="mib-box">
                                            <div class="mb-img"><img src="{{ $modal->image }}"
                                                    alt="{{ $modal->alt }}"></div>
                                            <div class="mb-text">{{ $modal->name }}</div>
                                            <div class="mb-hover">
                                                <p> Height - 174 cm </p>
                                                <p> Weight - 56 kg </p>
                                                <p> Bust - 88 cm </p>
                                                <p> Weist - 64 cm </p>
                                                <p> Hips - 91 cm </p>
                                                <p> Body type - 91 cm </p>
                                                <p> Hair colour - Black </p>
                                                <p> Eye colour - Brown </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide card-item">
                                    <div class="mib-box">
                                        <div class="mb-img"><img src="include/images/sl1.jpg" alt=""></div>
                                        <div class="mb-text">NATELIE JOHN</div>
                                        <div class="mb-hover">
                                            <p> Height - 174 cm </p>
                                            <p> Weight - 56 kg </p>
                                            <p> Bust - 88 cm </p>
                                            <p> Weist - 64 cm </p>
                                            <p> Hips - 91 cm </p>
                                            <p> Body type - 91 cm </p>
                                            <p> Hair colour - Black </p>
                                            <p> Eye colour - Brown </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide card-item">
                                    <div class="mib-box">
                                        <div class="mb-img"><img src="include/images/sl2.jpg" alt=""></div>
                                        <div class="mb-text">NATELIE JOHN</div>
                                        <div class="mb-hover">
                                            <p> Height - 174 cm </p>
                                            <p> Weight - 56 kg </p>
                                            <p> Bust - 88 cm </p>
                                            <p> Weist - 64 cm </p>
                                            <p> Hips - 91 cm </p>
                                            <p> Body type - 91 cm </p>
                                            <p> Hair colour - Black </p>
                                            <p> Eye colour - Brown </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide card-item">
                                    <div class="mib-box">
                                        <div class="mb-img"><img src="include/images/sl3.jpg" alt=""></div>
                                        <div class="mb-text">NATELIE JOHN</div>
                                        <div class="mb-hover">
                                            <p> Height - 174 cm </p>
                                            <p> Weight - 56 kg </p>
                                            <p> Bust - 88 cm </p>
                                            <p> Weist - 64 cm </p>
                                            <p> Hips - 91 cm </p>
                                            <p> Body type - 91 cm </p>
                                            <p> Hair colour - Black </p>
                                            <p> Eye colour - Brown </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide card-item">
                                    <div class="mib-box">
                                        <div class="mb-img"><img src="include/images/sl3.jpg" alt=""></div>
                                        <div class="mb-text">NATELIE JOHN</div>
                                        <div class="mb-hover">
                                            <p> Height - 174 cm </p>
                                            <p> Weight - 56 kg </p>
                                            <p> Bust - 88 cm </p>
                                            <p> Weist - 64 cm </p>
                                            <p> Hips - 91 cm </p>
                                            <p> Body type - 91 cm </p>
                                            <p> Hair colour - Black </p>
                                            <p> Eye colour - Brown </p>
                                        </div>
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

                </div>
            </div>
        </div>
    </div>
    <!--============================== Content-Container End ==============================-->


    @include('include.footer')
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

    var swiper = new Swiper(".mySwiper3", {
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

    var swiper = new Swiper(".mySwiper4", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            991: {
                slidesPerView: 3,
            },
            767: {
                slidesPerView: 2,
            }
        }
    });


    var swiper = new Swiper(".mySwiper5", {
        slidesPerView: 1,
        spaceBetween: 80,
        loop: true,
        centeredSlides: true, // This makes the active slide centered
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                centeredSlides: true // Keep centered in larger views too
            },
            480: {
                slidesPerView: 2,
                centeredSlides: true // Keep centered in medium views
            }
        }
    });
</script>

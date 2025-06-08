@extends('include.master')
@section('content')
    <!--============================== Content Start ==============================-->
    <div class="inner-hero">
        <div class="inner-bg"> <img src="include/images/ineer-hero.jpg" alt=""> </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-text">
                        <h4> Show </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <!--============================== Content Start ==============================-->
    <div class="content-container gannd-finnal p-0">
        <img src="{{ $value->value_4 }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gand-text">
                        <ul class="gt-list">
                            <li class="gt-item"> Mr. & Miss Glam India Talent Hunt Grand Final OCT - DEC 2025 </li>
                            <li class="gt-item"> Mr. & Miss Glam India Talent Hunt Grand Final OCT - DEC 2025 </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <!--============================== Content Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="heading mb-5"> About Auditions </h5>
                </div>
            </div>
        </div>
        <div class="cc-list-box">
            <div class="col-lg-6">
                <div class="cibb-main">
                    <div class="cib-icon"> <img src="include/images/band.png" alt=""> </div>
                    <p> <span> 30 finalist </span> from each <span> 11 different categories </span> will be chosen through
                        nation wide auditions to compete in Grand Finale </p>
                    <h4> AUG 2025 -DEC 2025 </h4>
                </div>
            </div>
            <div class="clb-img"> <img src="include/images/right-img.jpg" alt=""> </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->


    <!--============================== Content Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="heading mb-5"> Audition Cities </h5>


                    <div class="swiper mySwiper3">
                        <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                            @foreach ($citys as $city)
                                <div class="swiper-slide card-item">
                                    <li class="person-item w-100">
                                        <div class="pi-box">
                                            <div class="pi-img">
                                                @if ($city->image)
                                                    <img src="{{ asset($city->image) }}"
                                                        alt="{{ $city->alt ?? 'city image' }}">
                                                @else
                                                    <img src="{{ asset('images/default.jpg') }}" alt="default">
                                                @endif
                                            </div>
                                            <div class="pi-text">
                                                <h4>{{ $city->name }}</h4>
                                                <p>{{ $city->description }}</p>
                                                <div class="pi-button">
                                                    {{ $city->title }}
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
                                </div>
                            @endforeach
                        </div>

                        <!-- Swiper Navigation Buttons -->
                        <div class="card-main-box">
                            <div class="swiper-button-next">
                                <!-- Your right arrow SVG -->
                            </div>
                            <div class="swiper-button-prev">
                                <!-- Your left arrow SVG -->
                            </div>
                        </div>
                    </div>


                    {{-- <div class="swiper mySwiper4 mt-5">
                        <div class="swiper-wrapper card-list" style="margin-bottom:90px;">
                            <div class="swiper-slide card-item">
                                <li class="person-item w-100"> 
                                    <div class="pi-box">
                                        <div class="pi-img"> <img src="include/images/place1.jpg" alt=""> </div>
                                        <div class="pi-text">
                                            <h4> Lorem Ipsum </h4>
                                            <p> Lorem Ipsum  </p>
                                            <div class="pi-button"> Lorem Ipsum 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="78" viewBox="0 0 75 78" fill="none">
                                                    <rect x="38.5156" width="54.8316" height="54.8316" rx="27.4158" transform="rotate(43.8944 38.5156 0)" fill="black" fill-opacity="0.7"/>
                                                    <path d="M26.3389 52.199C18.9106 45.0519 18.6831 33.2675 25.8302 25.8391C32.9773 18.4107 44.7618 18.1833 52.1902 25.3304C59.6186 32.4775 59.846 44.262 52.6989 51.6903C45.5518 59.1187 33.7673 59.3461 26.3389 52.199ZM50.6695 26.9109C44.1104 20.6002 33.7215 20.8007 27.4107 27.3598C21.1 33.9189 21.3005 44.3078 27.8596 50.6185C34.4187 56.9293 44.8076 56.7288 51.1184 50.1697C57.4291 43.6106 57.2286 33.2217 50.6695 26.9109Z" fill="black" fill-opacity="0.7"/>
                                                    <path d="M44.531 46.4187L44.2826 33.5489L31.4128 33.7972L31.3709 31.6264L46.4116 31.3361L46.7018 46.3768L44.531 46.4187Z" fill="white"/>
                                                    <path d="M44.5566 31.6821L46.1371 33.2028L33.2115 46.6371L31.631 45.1164L44.5566 31.6821Z" fill="white"/>
                                                </svg> 
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide card-item">
                                <li class="person-item w-100"> 
                                    <div class="pi-box">
                                        <div class="pi-img"> <img src="include/images/place2.jpg" alt=""> </div>
                                        <div class="pi-text">
                                            <h4> Lorem Ipsum </h4>
                                            <p> Lorem Ipsum  </p>
                                            <div class="pi-button"> Lorem Ipsum 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="78" viewBox="0 0 75 78" fill="none">
                                                    <rect x="38.5156" width="54.8316" height="54.8316" rx="27.4158" transform="rotate(43.8944 38.5156 0)" fill="black" fill-opacity="0.7"/>
                                                    <path d="M26.3389 52.199C18.9106 45.0519 18.6831 33.2675 25.8302 25.8391C32.9773 18.4107 44.7618 18.1833 52.1902 25.3304C59.6186 32.4775 59.846 44.262 52.6989 51.6903C45.5518 59.1187 33.7673 59.3461 26.3389 52.199ZM50.6695 26.9109C44.1104 20.6002 33.7215 20.8007 27.4107 27.3598C21.1 33.9189 21.3005 44.3078 27.8596 50.6185C34.4187 56.9293 44.8076 56.7288 51.1184 50.1697C57.4291 43.6106 57.2286 33.2217 50.6695 26.9109Z" fill="black" fill-opacity="0.7"/>
                                                    <path d="M44.531 46.4187L44.2826 33.5489L31.4128 33.7972L31.3709 31.6264L46.4116 31.3361L46.7018 46.3768L44.531 46.4187Z" fill="white"/>
                                                    <path d="M44.5566 31.6821L46.1371 33.2028L33.2115 46.6371L31.631 45.1164L44.5566 31.6821Z" fill="white"/>
                                                </svg> 
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide card-item">
                                <li class="person-item w-100"> 
                                    <div class="pi-box">
                                        <div class="pi-img"> <img src="include/images/place3.jpg" alt=""> </div>
                                        <div class="pi-text">
                                            <h4> Lorem Ipsum </h4>
                                            <p> Lorem Ipsum  </p>
                                            <div class="pi-button"> Lorem Ipsum 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="78" viewBox="0 0 75 78" fill="none">
                                                    <rect x="38.5156" width="54.8316" height="54.8316" rx="27.4158" transform="rotate(43.8944 38.5156 0)" fill="black" fill-opacity="0.7"/>
                                                    <path d="M26.3389 52.199C18.9106 45.0519 18.6831 33.2675 25.8302 25.8391C32.9773 18.4107 44.7618 18.1833 52.1902 25.3304C59.6186 32.4775 59.846 44.262 52.6989 51.6903C45.5518 59.1187 33.7673 59.3461 26.3389 52.199ZM50.6695 26.9109C44.1104 20.6002 33.7215 20.8007 27.4107 27.3598C21.1 33.9189 21.3005 44.3078 27.8596 50.6185C34.4187 56.9293 44.8076 56.7288 51.1184 50.1697C57.4291 43.6106 57.2286 33.2217 50.6695 26.9109Z" fill="black" fill-opacity="0.7"/>
                                                    <path d="M44.531 46.4187L44.2826 33.5489L31.4128 33.7972L31.3709 31.6264L46.4116 31.3361L46.7018 46.3768L44.531 46.4187Z" fill="white"/>
                                                    <path d="M44.5566 31.6821L46.1371 33.2028L33.2115 46.6371L31.631 45.1164L44.5566 31.6821Z" fill="white"/>
                                                </svg> 
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide card-item">
                                <li class="person-item w-100"> 
                                    <div class="pi-box">
                                        <div class="pi-img"> <img src="include/images/place1.jpg" alt=""> </div>
                                        <div class="pi-text">
                                            <h4> Lorem Ipsum </h4>
                                            <p> Lorem Ipsum  </p>
                                            <div class="pi-button"> Lorem Ipsum 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="78" viewBox="0 0 75 78" fill="none">
                                                    <rect x="38.5156" width="54.8316" height="54.8316" rx="27.4158" transform="rotate(43.8944 38.5156 0)" fill="black" fill-opacity="0.7"/>
                                                    <path d="M26.3389 52.199C18.9106 45.0519 18.6831 33.2675 25.8302 25.8391C32.9773 18.4107 44.7618 18.1833 52.1902 25.3304C59.6186 32.4775 59.846 44.262 52.6989 51.6903C45.5518 59.1187 33.7673 59.3461 26.3389 52.199ZM50.6695 26.9109C44.1104 20.6002 33.7215 20.8007 27.4107 27.3598C21.1 33.9189 21.3005 44.3078 27.8596 50.6185C34.4187 56.9293 44.8076 56.7288 51.1184 50.1697C57.4291 43.6106 57.2286 33.2217 50.6695 26.9109Z" fill="black" fill-opacity="0.7"/>
                                                    <path d="M44.531 46.4187L44.2826 33.5489L31.4128 33.7972L31.3709 31.6264L46.4116 31.3361L46.7018 46.3768L44.531 46.4187Z" fill="white"/>
                                                    <path d="M44.5566 31.6821L46.1371 33.2028L33.2115 46.6371L31.631 45.1164L44.5566 31.6821Z" fill="white"/>
                                                </svg> 
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>

                        <div class="card-main-box">
                            <div class="swiper-button-next"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                                    <rect x="74" width="74" height="74" rx="37" transform="rotate(90 74 0)" fill="url(#paint0_linear_830_1132)"/>
                                    <path d="M34.4841 49.284L46.7681 37L34.4841 24.716L36.5561 22.644L50.9121 37L36.5561 51.356L34.4841 49.284Z" fill="#131313"/>
                                    <path d="M48.8398 35.52V38.48H23.6798V35.52H48.8398Z" fill="#131313"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_830_1132" x1="74" y1="37.0003" x2="148" y2="37.0003" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD7905"/>
                                        <stop offset="1" stop-color="#FFDD55"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                                    <rect y="74" width="74" height="74" rx="37" transform="rotate(-90 0 74)" fill="url(#paint0_linear_830_1136)"/>
                                    <path d="M39.5159 24.716L27.2319 37L39.5159 49.284L37.4439 51.356L23.0879 37L37.4439 22.644L39.5159 24.716Z" fill="#131313"/>
                                    <path d="M25.1602 38.48V35.52H50.3202V38.48L25.1602 38.48Z" fill="#131313"/>
                                    <defs>
                                    <linearGradient id="paint0_linear_830_1136" x1="0" y1="111" x2="74" y2="111" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD7905"/>
                                        <stop offset="1" stop-color="#FFDD55"/>
                                    </linearGradient>
                                    </defs>
                                </svg> 
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <!--============================== Content Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-area">


                        <h5 class="heading mb-5"> Registration </h5>

                        <p> Online facilities are available on this website. <br />
                            Offline facilities are also available and the interested one can apply at our corporate office
                            at the address given in the website. <br />
                            By Agents / Agencies appointed by us from time to time.
                        </p>

                        <h5> ELIGIBILITY CRITERIA </h5>

                        <ul class="dd-list">
                            <li class="dd-item"> Applicant should be an Indian Citizen including NRI and must be Male or
                                Female gender by birth with Sound Mind. </li>
                            <li class="dd-item"> Minimum age to participate is 16 to 36 according to category. </li>
                            <li class="dd-item"> Relaxation in age as a special case will be subject to approval from Jury.
                            </li>
                            <li class="dd-item"> Applicant must have age proof and should provide the same at the time of
                                registration. </li>
                            <li class="dd-item"> Valid Photo ID such as Aadhaar Card, Passport, Driving License etc. is
                                mandatory for age & address. </li>
                            <li class="dd-item"> If you are living at different address as mentioned in ID proof, than you
                                are required to give the address of the property where you are staying.
                            </li>
                            <li class="dd-item"> However, non-residential Indians are also eligible, if you are born in
                                India or abroad, either of the parents should be from India.
                            </li>
                            <li class="dd-item"> Participants must have minimum 5’4″ height for females & 5’8” height for
                                males without footwear for the Beauty Pageant Ramp Show.
                            </li>
                        </ul>

                        <h5> REGISTRATION PROCESS </h5>
                        <p> Please read the process carefully before filling out the form :</p>
                        <ul class="dd-list">
                            <li class="dd-item"> Step 1: Keep 4 pictures ready : close-up, mid-length, full length & no
                                make-up. </li>
                            <li class="dd-item"> Step 2 : Videos of the Talent to be uploaded by you. </li>
                            <li class="dd-item"> Step 3 : Keep the scanned copies of the documents mentioned below for
                                Eligibility Proof: </li>
                            <p> A. Nationality Proof / Address Proof / Date of Birth : Aadhar Card or Passport Copy or
                                Driving License. In the case of OCI applicant, we will require an oci card. </p>
                            <li class="dd-item"> Step 4 : Sign In with your email ID or Mobile Number </li>
                            <li class="dd-item"> VStep 5 : Upload 2 separate audition videos : Introduction Video & Ramp
                                walk Video. Please note each video limit should be of 60 seconds only. </li>
                            <li class="dd-item"> Step 6 : Fill in all your credentials, your Instagram handle & your
                                physical attributes along with your contact details. All fields are mandatory.
                            </li>
                            <li class="dd-item"> Step 7 : Upload your pictures & necessary documents as mentioned in the
                                first three steps.
                            </li>
                            <li class="dd-item"> Step 8 : One time registration fee Rs 1999 inclusive of all taxes. Register
                                on the payment link with the same email ID as your application form.
                            </li>
                            <li class="dd-item"> Step 9 : Enter the unique code received on your registered email id /
                                mobile no. </li>
                            <li class="dd-item"> Step 10 : Once all the fields are completed, click on accept T&Cs & submit
                                the form. </li>
                            <li class="dd-item"> Step 11 : You will receive an automated email upon successful submission of
                                the form. </li>
                            <p class="mt-5"> Hope you have understood the steps to register. </p>
                            <p> For further clarity, kindly call the helpline numbers between 11 am to 7 pm.
                                Contact: +91 xxxxxxxxx/ +91 xxxxxxx or kindly write to us on auditions@glamevents.in
                            </p>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <!--============================== Content Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form action="{{ url()->current() }}" method="post">
                        @csrf
                        <div class="enquire-box">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h4 class="heading "> Registration </h4>
                            <div class="form-box">
                                <div class="form-list">
                                    <div class="form-item">
                                        <label for=""> Enter Your Name </label>
                                        <input type="text" name="name" required />
                                    </div>
                                    <div class="form-item">
                                        <label for=""> Email </label>
                                        <input type="text" name="email" required />
                                    </div>
                                    <div class="form-item mt-md-4">
                                        <label for=""> Contact No. </label>
                                        <input type="text" name="contact_no" required/>
                                    </div>
                                    <div class="form-item mt-md-4">
                                        <label for=""> City of Audition </label>
                                        <input type="text" name="city" required/>
                                    </div>
                                    <div class="form-item mt-md-4">
                                        <label for=""> Enter OTP </label>
                                        <input type="text" name="otp" required/>
                                    </div>
                                    <div class="form-item mt-md-4">
                                        <label for="category">Category Applying For</label>
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-center">
                                    <button class="form-button py-3" type="submit">Register Now</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <!--============================== Content Start ==============================-->
    <div class="content-container deco-box-inner bg-black">
        <h5 class="heading mb-5"> Registration </h5>

        <div class="deco-img">
            <div class="deco-left"> <img src="include/images/deco.jpg" alt=""> </div>
            <div class="deco-right">
                <h4> 3 Days Grooming and Training </h4>
                <p> Each finalist will undergo an elite preparation program, crafted
                    by celebrated experts from the beauty and fashion industry which include
                    training on ramp walk, posture & physical appeal, dress trials, fitness sessions, make-up, dental & hair
                    care, stage presence and self-confidence. </p>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <!--============================== Content Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta">
                        <h4> Selected Candidates </h4>
                        <div class="button"> Download PDF Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="106" height="106" viewBox="0 0 106 106"
                                fill="none">
                                <path
                                    d="M34.7476 70.5501C24.8495 60.652 24.8495 44.6465 34.7476 34.7485C44.6457 24.8504 60.6511 24.8504 70.5492 34.7485C80.4473 44.6465 80.4473 60.652 70.5492 70.5501C60.6511 80.4482 44.6457 80.4482 34.7476 70.5501ZM68.4433 36.8544C59.7035 28.1146 45.5934 28.1146 36.8536 36.8544C28.1138 45.5942 28.1138 59.7043 36.8536 68.4441C45.5934 77.1839 59.7035 77.1839 68.4433 68.4441C77.1831 59.7043 77.1831 45.5942 68.4433 36.8544Z"
                                    fill="white" />
                                <path
                                    d="M59.5977 63.1791L59.5977 45.6995L42.118 45.6995L42.118 42.7511L62.546 42.7511L62.546 63.1791L59.5977 63.1791Z"
                                    fill="white" />
                                <path d="M60.0195 43.1729L62.1255 45.2788L44.2247 63.1796L42.1187 61.0737L60.0195 43.1729Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <script src="include/js/plugins.js"></script>
    <script src="include/js/custom.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper3", {
            slidesPerView: 1,
            spaceBetween: 0,
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
            spaceBetween: 0,
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
@endsection

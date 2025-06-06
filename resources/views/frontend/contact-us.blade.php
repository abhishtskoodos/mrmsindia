@extends('include.master')
@section('content')
    <!--============================== Content Start ==============================-->
    <div class="inner-hero">
        <div class="inner-bg"> <img src="include/images/ineer-hero.jpg" alt=""> </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-text">
                        <h4> Conntact Us </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Content End ==============================-->

    <!--============================== Contact form Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="from-box">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="form-list">
                                <div class="form-item">
                                    <label for=""> Enter Your Name </label>
                                    <input type="text" name="name" value="{{ old('name') }}" required />
                                    @error('name')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-item">
                                    <label for=""> Email </label>
                                    <input type="email" name="email" value="{{ old('email') }}" required />
                                    @error('email')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-item mt-4">
                                    <label for=""> Contact No. </label>
                                    <input type="text" name="contact_no" value="{{ old('contact_no') }}" required />
                                    @error('contact_no')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-item mt-4">
                                    <label for=""> City of Audition </label>
                                    <input type="text" name="city" value="{{ old('city') }}" required />
                                    @error('city')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-item mt-4">
                                    <label for=""> Your Query </label>
                                    <textarea name="query" required>{{ old('query') }}</textarea>
                                    @error('query')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-button">
                                <button type="submit"
                                    style="background: none; border: none; padding: 0; display: flex; align-items: center; gap: 8px;">
                                    Submit
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        viewBox="0 0 106 106" fill="none">
                                        <path
                                            d="M34.7476 70.5502C24.8495 60.6522 24.8495 44.6467 34.7476 34.7486C44.6457 24.8506 60.6511 24.8506 70.5492 34.7486C80.4473 44.6467 80.4473 60.6522 70.5492 70.5502C60.6511 80.4483 44.6457 80.4483 34.7476 70.5502ZM68.4433 36.8546C59.7035 28.1148 45.5934 28.1148 36.8536 36.8546C28.1138 45.5944 28.1138 59.7045 36.8536 68.4443C45.5934 77.1841 59.7035 77.1841 68.4433 68.4443C77.1831 59.7045 77.1831 45.5944 68.4433 36.8546Z"
                                            fill="black" />
                                        <path
                                            d="M59.5977 63.1793L59.5977 45.6997L42.118 45.6997L42.118 42.7513L62.546 42.7513L62.546 63.1793L59.5977 63.1793Z"
                                            fill="black" />
                                        <path
                                            d="M60.0195 43.1725L62.1255 45.2785L44.2247 63.1793L42.1187 61.0733L60.0195 43.1725Z"
                                            fill="black" />
                                    </svg>
                                </button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--============================== Contact form End ==============================-->

    <!--============================== faq Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h4 class="heading"> FAQs </h4>

                    <div class="faq-box">

                        <div class="faq-list">
                            @if(!empty($faqs) && $faqs->count() > 0)
                                @foreach($faqs as $faq)
                                    <div class="faq-item">
                                        <h4>{{ $faq->question }}</h4>
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                @endforeach
                            @else
                               
                            <div class="faq-item">
                                <h4> What is the glam event & talent hunt ? </h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            <div class="faq-item">
                                <h4> Benefits </h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            <div class="faq-item">
                                <h4> Benefits </h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            <div class="faq-item">
                                <h4> Benefits </h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            <div class="faq-item">
                                <h4> Benefits </h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            <div class="faq-item">
                                <h4> Benefits </h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            <div class="faq-item">
                                <h4> Benefits</h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            <div class="faq-item">
                                <h4> Benefits </h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            <div class="faq-item">
                                <h4> Benefits </h4>
                                <p> A brief mention of customization, attention to detail, and client satisfaction </p>
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--============================== faq End ==============================-->

    <!--============================== Address Start ==============================-->
    <div class="content-container bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="as-lable">
                        <div class="as-list">
                            <div class="as-item">
                                <div class="asi-box">
                                    <h4> Address </h4>
                                    <p>{{ $value->value_1 }}</p>
                                </div>
                            </div>
                            <div class="as-item">
                                <div class="asi-box">
                                    <h4> Contact Details </h4>
                                    <p>{{ $value->value_2 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Address End ==============================-->
@endsection

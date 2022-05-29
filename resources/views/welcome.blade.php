<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Learning</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" >
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" >
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('frontend/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>
    <body class="antialiased">
{{-- nav Section --}}
@include('layouts.homepage.header')
{{-- Nav Section End --}}

{{-- Header Section --}}
<div class="container-fluid jumbotron mt-5 ">
    <div class="row">
        <div class="col-md-6 justify-content-center">
            <div class="m-lg-5 m-md-5 p-lg-5 m-sm-3 p-sm-3 p-md-5">
                <h1 class="top-banner-title text-justify">সার্ভিস্ নিন আপনার সময় মত </h1>
                <h1 class="top-banner-subtitle text-justify">প্রফেশনালদের কাছে শিখুন, প্রজেক্ট ভিত্তিক সোর্স কোড সংগ্রহ করুন </h1>
                <h1 class="top-banner-subtitle2 text-justify">মোট সার্ভিস নিয়েছে ২০০ জন </h1>
                 <a target="_blank" href="https://www.youtube.com/channel/UCSMFY8_rooijS-Zv43tKCrQ"><img class="" src="{{ asset('frontend/images/playbtn.svg') }}"></a>
            </div>
        </div>
        <div class="col-md-6">
          <img  class="top-banner-img pt-5 animated fadeIn" src="{{ asset('frontend/images/bannerImg1.svg') }}"> 
        </div>
    </div>
</div>

{{-- Header Section --}}

{{-- Service Area --}}
<div class="container section-marginTop text-center">
    <h1 class="section-title">সার্ভিস সমূহ </h1>
    <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
    <div class="row">
      @foreach($serviceSection as $list)
        <div class="col-md-3 p-2 ">
            <div class="card service-card text-center w-100">
                <div class="card-body">
                    <img class="service-card-logo " src="{{ asset('uploads/service/'. $list->service_img) }}" alt="Card image cap">
                    <h5 class="service-card-title mt-3">{{ $list->service_name }}</h5>
                    <h6 class="service-card-subTitle p-0 m-0">{{ $list->service_des }}</h6>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
{{-- Service Area --}}


{{-- Course Area --}}
<div class="container section-marginTop text-center">
    <h1 class="section-title">কোর্স সমূহ </h1>
    <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
    <div class="row">
     @foreach($courseSection as $courseSection)
        <div class="col-md-4 thumbnail-container">
            <img src="{{ asset('uploads/course/'.$courseSection->course_img) }}" alt="Avatar" class="thumbnail-image ">
                <div class="thumbnail-middle">
                    <h1 class="thumbnail-title">{{ $courseSection->course_name }} </h1>
                    <h1 class="thumbnail-subtitle">{{ $courseSection->course_des }}</h1>
                    <h1 class="thumbnail-subtitle fw-bold">{{ $courseSection->course_fee }} TK</h1>
                    <button class="normal-btn btn">শুরু করুন</button>
                </div>
        </div>
        @endforeach
    </div>
</div>
{{-- Course Area --}}

{{-- Projects Area--}}
    <div class="container section-marginTop text-center">
        <h1 class="section-title">প্রজেক্ট</h1>
        <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
        <div class="row">

            <div id="one"  class="owl-carousel mb-4 owl-theme">
                @foreach($projectSection as $projectSection)
                <div class="item m-1 card">
                    <div class="text-center">
                        <img class="w-100" src="{{ asset('uploads/project/'.$projectSection->project_img) }}" alt="Card image cap">
                        <h5 class="service-card-title mt-4">{{ $projectSection->project_name }}</h5>
                        <h6 class="service-card-subTitle p-0 m-0">{{ $projectSection->project_des }} </h6>
                        <button class="normal-btn-outline mt-2 mb-4 btn">বিস্তারিত</button>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="d-inline ml-2">
            <i id="customPrevBtn" class="btn normal-btn"><</i>
            <i id="customNextBtn" class="btn normal-btn">></i>
            <button class="normal-btn  btn">সব গুলো </button>
        </div>
    </div>
{{-- Projects Area--}}

{{-- Contact Area  --}}
<div class="container-fluid section-marginTop parallax text-center" id="contact">
    <div class="row pb-5 " style="
    background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(https://images.pexels.com/photos/414628/pexels-photo-414628.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2);
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
">
        <div class="col-md-6 contact-form" >
            <img  class="top-banner-img animated fadeIn" src="{{ asset('frontend/images/contact1.svg') }}">
        </div>

        <div class="col-md-1"></div>
{{-- contact Form --}}

        <div class="col-md-4 contact-form pt-5">
                <h5 class="service-card-title ">যোগাযোগ করুন </h5>
            <form action="{{ route('contact.all') }}" method="post">
                        @csrf
                <div class="form-group ">
                    <input type="text" name="name" class="form-control w-100" placeholder="আপনার নাম">
                </div>
                <div class="form-group">
                    <input type="tel" name="phn" class="form-control  w-100" placeholder="মোবাইল নং ">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control  w-100" placeholder="ইমেইল ">
                </div>
                <div class="form-group">
                    <textarea type="text" name="message" class="form-control  w-100" placeholder="মেসেজ "></textarea>
                </div>
                <button type="submit" class="btn btn-block normal-btn w-100">পাঠিয়ে দিন </button>
            </form> 
        </div>  
     
     {{-- contact Form --}}
    </div>
</div>
{{-- Contact Area  --}}


{{-- Blog Area --}}
<div class="container section-marginTop text-center">
    <h1 class="section-title">সাম্প্রতিক ব্লগ </h1>
    <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
    <div class="row">
        <div class="col-md-4  p-2 ">
            <div class="card">
                <img class="w-100" src="{{ asset('frontend/images/blog.jpg') }}" alt="Card image cap">
                <div class="w-100 p-4">
                    <h5 class="blog-card-title text-justify  mt-2">ফ্লাটার কেনো শিখবেন, কেনো শিখবেন না </h5>
                    <h6 class="blog-card-subtitle text-justify p-0 ">মোবাইল স্ক্রিনের বিবর্তন হলো যেভাবে. আইবিএম সায়মন: প্রথম মোবাইল ফোন যারা টাচস্ক্রীন প্রযুক্তি এনেছিল। তবে ফোনটির ব্যাটারি মাত্র এক ঘণ্টা স্থায়ী হতো।</h6>
                    <h6 class="blog-card-date text-justify "> <i class="far fa-clock"></i> ২৪/০৫/২০২০</h6>
                    <button class="normal-btn-outline float-left mt-2 mb-4 btn">আরো পড়ুন </button>
                </div>
            </div>
        </div>

        <div class="col-md-4  p-2 ">
            <div class="card">
                <img class="w-100" src="{{ asset('frontend/images/blog.jpg') }}" alt="Card image cap">
                <div class="w-100 p-4">
                    <h5 class="blog-card-title text-justify  mt-2">ফ্লাটার কেনো শিখবেন, কেনো শিখবেন না </h5>
                    <h6 class="blog-card-subtitle text-justify p-0 ">মোবাইল স্ক্রিনের বিবর্তন হলো যেভাবে. আইবিএম সায়মন: প্রথম মোবাইল ফোন যারা টাচস্ক্রীন প্রযুক্তি এনেছিল। তবে ফোনটির ব্যাটারি মাত্র এক ঘণ্টা স্থায়ী হতো।</h6>
                    <h6 class="blog-card-date text-justify "> <i class="far fa-clock"></i> ২৪/০৫/২০২০</h6>
                    <button class="normal-btn-outline float-left mt-2 mb-4 btn">আরো পড়ুন </button>
                </div>
            </div>
        </div>

        <div class="col-md-4  p-2 ">
            <div class="card">
                <img class="w-100" src="{{ asset('frontend/images/blog.jpg') }}" alt="Card image cap">
                <div class="w-100 p-4">
                    <h5 class="blog-card-title text-justify  mt-2">ফ্লাটার কেনো শিখবেন, কেনো শিখবেন না </h5>
                    <h6 class="blog-card-subtitle text-justify p-0 ">মোবাইল স্ক্রিনের বিবর্তন হলো যেভাবে. আইবিএম সায়মন: প্রথম মোবাইল ফোন যারা টাচস্ক্রীন প্রযুক্তি এনেছিল। তবে ফোনটির ব্যাটারি মাত্র এক ঘণ্টা স্থায়ী হতো।</h6>
                    <h6 class="blog-card-date text-justify "> <i class="far fa-clock"></i> ২৪/০৫/২০২০</h6>
                    <button class="normal-btn-outline float-left mt-2 mb-4 btn">আরো পড়ুন </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Blog Area --}}



{{-- Review Area --}}
<div class="container section-marginTop text-center">
    <div class="row d-flex justify-content-center">
            <div class="col-md-6 text-center">
                <div id="two" class="owl-carousel mb-4 owl-theme">
                <div class="item m-1 text-center ">
                        <img class="review-img text-center" src="{{ asset('frontend/images/bill.jpg') }}" alt="Card image cap">
                        <h5 class="service-card-title mt-3">বিল গেটস </h5>
                        <h6 class="service-card-subTitle p-0 m-0">মাইক্রোসফটের প্রতিষ্ঠাতা বিল গেটসের জীবন কেটেছে নানা ঘটনার মধ্য দিয়ে। হার্ভার্ড বিশ্ববিদ্যালয়ে লেখাপড়া শেষ না করেই মাইক্রোসফট প্রতিষ্ঠা করা</h6>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Review Area --}}

{{-- Footer Area --}}
<script type="text/javascript" src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/axios.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

                            {!! Toastr::message() !!}

@include('layouts.homepage.footer')
{{-- Footer Area --}}
    </body>
</html>

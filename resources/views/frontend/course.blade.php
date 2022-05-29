<title>E-Learning ☠️ Course</title>
@include('layouts.homepage.header')

{{-- Course Header --}}
<div class="container-fluid jumbotron mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
                <img class=" page-top-img fadeIn" src="{{ asset('frontend/images/knowledge.svg') }}">
                <h1 class="page-top-title mt-3">~#~#~ অনলাইন কোর্স সমূহ ~#~#~</h1>
        </div>
    </div>
</div>
{{-- Course Header --}}

{{-- Course Card --}}
<div class="container mt-5">
    <div class="row">
    	@foreach($courses as $course)
        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="{{ asset('uploads/course/'. $course->course_img) }}" alt="Card image cap">
                    <h5 class="service-card-title mt-4">{{ $course->course_name }}</h5>
                    <h6 class="service-card-subTitle p-0 ">{{ $course->course_des }} </h6>
                    <h6 class="service-card-subTitle p-0 "> রেজিঃ{{ $course->course_fee }} /- | মোট ক্লাসঃ {{ $course->course_totalclass }} টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div>
        @endforeach

{{--         <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="images/react.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">আইটি কোর্স</h5>
                    <h6 class="service-card-subTitle p-0 ">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div>

        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="images/react.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">আইটি কোর্স</h5>
                    <h6 class="service-card-subTitle p-0 ">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div>


        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="images/react.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">আইটি কোর্স</h5>
                    <h6 class="service-card-subTitle p-0 ">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div>


        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="images/react.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">আইটি কোর্স</h5>
                    <h6 class="service-card-subTitle p-0 ">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div>


        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="images/react.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">আইটি কোর্স</h5>
                    <h6 class="service-card-subTitle p-0 ">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div>

        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="images/react.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">আইটি কোর্স</h5>
                    <h6 class="service-card-subTitle p-0 ">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div>


        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="images/react.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">আইটি কোর্স</h5>
                    <h6 class="service-card-subTitle p-0 ">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div>


        <div class="col-md-4 p-1 text-center">
            <div class="card">
                <div class="text-center">
                    <img class="w-100" src="images/react.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">আইটি কোর্স</h5>
                    <h6 class="service-card-subTitle p-0 ">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <h6 class="service-card-subTitle p-0 ">রেজিঃ ১০০০/- মোট ক্লাসঃ ১২০ টি </h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                </div>
            </div>
        </div> --}}
    </div>
</div>
{{-- Course Card --}}

@include('layouts.homepage.footer')
<title>E-Learning ☠️ Project</title>
@include('layouts.homepage.header')

<div class="container-fluid jumbotron mt-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
            <img class=" page-top-img fadeIn" src="{{ asset('frontend/images/code.svg') }}">
            <h1 class="page-top-title mt-3">- প্রজেক্টস সমূহ -</h1>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
      @foreach($projects as $project)
        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="{{ asset('uploads/project/'. $project->project_img) }}" alt="Card image cap">
                    <h5 class="service-card-title mt-4">{{ $project->project_name }} </h5>
                    <h6 class="service-card-subTitle p-0 m-0">{{ $project->project_des }}</h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div>
     @endforeach

{{--         <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="images/poject.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">প্রজেক্টস </h5>
                    <h6 class="service-card-subTitle p-0 m-0">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="images/poject.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">প্রজেক্টস </h5>
                    <h6 class="service-card-subTitle p-0 m-0">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div>


        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="images/poject.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">প্রজেক্টস </h5>
                    <h6 class="service-card-subTitle p-0 m-0">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div>


        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="images/poject.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">প্রজেক্টস </h5>
                    <h6 class="service-card-subTitle p-0 m-0">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="images/poject.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">প্রজেক্টস </h5>
                    <h6 class="service-card-subTitle p-0 m-0">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="images/poject.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">প্রজেক্টস </h5>
                    <h6 class="service-card-subTitle p-0 m-0">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="images/poject.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">প্রজেক্টস </h5>
                    <h6 class="service-card-subTitle p-0 m-0">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-1 text-center">
            <div class=" m-1 card">
                <div class="text-center">
                    <img class="w-100" src="images/poject.jpg" alt="Card image cap">
                    <h5 class="service-card-title mt-4">প্রজেক্টস </h5>
                    <h6 class="service-card-subTitle p-0 m-0">মোবাইল  এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট </h6>
                    <button class="normal-btn mt-2 mb-4 btn">বিস্তারিত</button>
                </div>
            </div>
        </div> --}}

    </div>
</div>




@include('layouts.homepage.footer')
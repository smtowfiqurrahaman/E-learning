
{{-- Navvvv Section --}}
 <nav class="navbar fixed-top nav-before navbar-expand-lg navbar-light bg-light px-5">
    <a class="navbar-brand" href="/"><img class="nav-logo" src="{{ asset('frontend/images/logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-3 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link nav-font" href="/">হোম </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="/course">কোর্স সমুহ </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="/project">প্রোজেক্ট </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link nav-font" href="blog.html">ব্লগ</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link nav-font" href="#contact">যোগাযোগ</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
           <a href="{{ route('login') }}" class="normal-btn btn"> সাইন ইন</a>
        </form>
    </div>
</nav>
{{-- Navvvv Section --}}
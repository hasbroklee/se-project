<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.css')
</head>
<body class="d-flex flex-column" style="background: #404258;width: 100%;height: 100%;">
    <header class="d-xl-flex flex-row justify-content-between align-items-xl-center" style="height: 135px;background: #50577A;transform: skewY(-2deg);position: relative;width: 100%;">
        <div class="d-xl-flex justify-content-xl-start" id="header_logo" style="width: 60%;transform: skewY(2deg);transform-origin: top left;margin-top: 0px;padding-top: 15px;">
        <img style="width: 139px;height: 89px;" src="{{ asset('assets/img/CSE_logo-removebg-preview.png') }}">
            <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-start" style="width: 100%;margin-left: 17px;"><span class="header-text" style="font-family: Inter, sans-serif;font-weight: bold;--bs-body-font-weight: 700;"><span style="color: rgb(13, 61, 127);">KHOA CÔNG NGHỆ THÔNG TIN</span><br></span><span class="header-text" style="font-family: Inter, sans-serif;font-weight: bold;--bs-body-font-weight: 700;"><span style="color: rgb(255, 255, 255);">Faculty of Computer Science and Engineering</span><br></span></div>
        </div>
    </header>


    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto" style="color: rgb(255,255,255);font-family: Inter, sans-serif;background: #474E68;border-radius: 22px;width: 520px;">
                    <h2 style="font-weight: bold;font-size: 28px;">@yield('title', $title)</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5" style="background: #474E68;border-radius: 20px;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: #6B728E;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('frontend.footer')    
@include('backend.js')
</body>
</html>
<header class="d-xl-flex flex-row justify-content-between align-items-xl-center" style="height: 135px;background: #50577A;transform: skewY(-2deg);position: relative;width: 100%;">
    
    <div class="d-xl-flex justify-content-xl-start" id="header_logo" style="width: 60%;transform: skewY(2deg);transform-origin: top left;margin-top: 0px;padding-top: 15px;">
        <img style="width: 139px;height: 89px;" src="{{ asset('assets/img/CSE_logo-removebg-preview.png') }}">
        <div class="d-xl-flex flex-column justify-content-xl-center align-items-xl-start" style="width: 100%;margin-left: 17px;">
        <span class="header-text" style="font-family: Inter, sans-serif;font-weight: bold;--bs-body-font-weight: 700;">
        <span style="color: rgb(13, 61, 127);">KHOA CÔNG NGHỆ THÔNG TIN</span><br></span>
        <span class="header-text" style="font-family: Inter, sans-serif;font-weight: bold;--bs-body-font-weight: 700;">
        <span style="color: rgb(255, 255, 255);">Faculty of Computer Science and Engineering</span><br></span></div>
    </div>


    <div class="d-xl-flex flex-row justify-content-xl-end align-items-xl-center" style="width: 40%;transform: skewY(2deg);transform-origin: top left;margin-top: 45px;padding-top: 15px;">
        <div class="d-xl-flex flex-column align-items-xl-center" style="margin-right: 30px;">
            <i class="far fa-user-circle" style="font-size: 42px;color: rgb(255,255,255);"></i>
            <a href="#"></a>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="margin-top: 10px;font-family: Inter, sans-serif;background: #474E68;border-style: none;">
                    Admin
                </button>
                <div class="dropdown-menu" style="background: #6B728E;">
                    <a class="dropdown-item" href="{{ route('password') }}" style="font-family: Inter, sans-serif;color: var(--bs-dropdown-bg);">Đổi mật khẩu</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" style="font-family: Inter, sans-serif;color: var(--bs-dropdown-bg);">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
    
</header>
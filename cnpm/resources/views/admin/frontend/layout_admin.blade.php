<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.css')
</head>

<body class="d-flex flex-column" style="background: #404258;width: 100%;height: 100%;">
    @include('admin.frontend.header')

    <div class="card" style="margin-top: 20px;margin-right: 27px;margin-left: 27px;border-radius: 10px;border-color: #474E68;">
        @include('admin.frontend.tag_admin')

        <div class="card-body" style="background: #474E68;">
            <div id="nav-tabContent" class="tab-content">
            @yield('content')
            </div>
        </div>  
        
    </div>  

    @include('frontend.footer')
    @include('backend.js')

</body>

</html>
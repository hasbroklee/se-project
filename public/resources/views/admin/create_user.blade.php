<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.css')
</head>

<body class="d-flex flex-column" style="background: #404258;width: 100%;height: 100%;">
    @include('frontend.header')

    <div class="card" style="margin-top: 20px;margin-right: 27px;margin-left: 27px;border-radius: 10px;border-color: #474E68;">
        @include('frontend.tag_admin')
        <div class="card-body" style="background: #474E68;">
            <div id="nav-tabContent" class="tab-content">

                <!-- thêm sinh viên -->
                <div id="item-1-2" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-2-tab">
                    <div class="container d-xxl-flex justify-content-xxl-center align-items-xxl-end" style="background: #404258;padding: 0px;border-radius: 20px;">
                        <form method="post" action="/admin/create_user" class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="width: 73%;">
                            @csrf
                            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Tên học sinh</label>
                                <input class="form-control" type="text" name="name_user" required></div>
                            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Mã sinh viên</label>
                                <input class="form-control" type="text" name="id_msv" required></div>
                            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Mật khẩu</label>
                                <input class="form-control" type="password" name="password_user" required></div>
                            <div><button class="btn btn-primary" type="submit" style="margin-top: 20px;margin-bottom: 10px;background: #50577A;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Tạo</button></div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>  

    @include('frontend.footer')
    @include('backend.js')

</body>

</html>
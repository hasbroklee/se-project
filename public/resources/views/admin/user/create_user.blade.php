@extends('admin.frontend.layout_admin')

@section('content')
<!-- thêm sinh viên -->
<div id="item-1-2" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-2-tab">
    <div class="container d-xxl-flex justify-content-xxl-center align-items-xxl-end" style="background: #404258;padding: 0px;border-radius: 20px;">
        
        <form method="post" action="/admin/create_user" class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="width: 73%;">
            @csrf
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class = 'alert alert-danger'>{{ $err }}</p>
            @endforeach
            @endif  
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Tên học sinh</label>
                <input class="form-control" type="text" name="name" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Tên đăng nhập</label>
                <input class="form-control" type="text" name="user_name" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Mật khẩu</label>
                <input class="form-control" type="text" name="password_user" required></div>
            <div><button class="btn btn-success" type="submit" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Tạo</button>
            <a href="/admin/user" class="btn btn-danger" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Hủy</a></div>                               
            
        </form>
    </div>
</div>
@endsection

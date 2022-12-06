@extends('admin.frontend.layout_admin')

@section('content')
<!-- thêm bài viết -->
<div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
    <div class="container d-xxl-flex justify-content-xxl-center align-items-xxl-end" style="background: #404258;padding: 0px;border-radius: 20px;">
        
        <form method="post" action="/admin/posts/update/{{ $posts->id }}" class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="width: 100%;">
        @method('PATCH')
        @csrf
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Tiêu đề bài đăng</label>
                <input class="form-control" type="text" name="title_posts" value="{{ $posts->title_posts }}" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Nguồn ảnh thumbnail</label>
                <input class="form-control" type="text" name="img_posts" value="{{ $posts->img_posts }}" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Nội dung bài đăng</label>
                <textarea class="form-control" style="height: 150px;" name="content_posts" value="" required>{{ $posts->content_posts }}</textarea></div>
            <div><button class="btn btn-success" type="submit" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Sửa</button>
            <a href="/admin/posts" class="btn btn-danger" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Hủy</a></div>     
        </form>
        
    </div>
</div>
@endsection
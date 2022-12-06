@extends('admin.frontend.layout_admin')

@section('content')
<div class="container text-center d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="background: #474E68;font-family: Inter, sans-serif;color: rgb(255,255,255);border-radius: 15px;margin-top: 30px;">
    <h1 style="max-width: 70%;font-weight: bold;margin-top: 15px; font-size: 28px;">{{ $posts->title_posts }}</h1>
    <img src="{{ $posts->img_posts }}" style="width: auto;margin-top: 15px;max-width: 60%;margin-bottom: 30px;">
    <div style="width: 100%;">
        <p class="text-start d-xxl-flex" style="max-width: 100%;margin-left: 20px;font-size: 18px;">{{ $posts->content_posts }}</p>
    </div>
    <a href="/admin/posts" style="text-decoration: none;"><button class="btn btn-primary" type="button" style="background: #404258;border-style: none;margin-bottom: 16px;">Quay lại trang chủ</button></a>
</div>
@endsection
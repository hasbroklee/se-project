@extends('admin.layout')
@section('content')
    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $err)
        <p class = 'alert alert-danger'>{{ $err }}</p>
        @endforeach
    @endif
    <form class="text-center" action="{{ route('password.action') }}" method="POST">
        @csrf
        <div class="mb-3"><input class="form-control" type="text" name="old_password" placeholder="Mật khẩu cũ" style="font-family: Inter, sans-serif;" required></div>
        <div class="mb-3"><input class="form-control" type="text" name="new_password" placeholder="Mật khẩu mới" style="font-family: Inter, sans-serif;" required></div>
        <div class="mb-3"><input class="form-control" type="text" name="new_password_cofirmation" placeholder="Xác nhận mật khẩu mới" style="font-family: Inter, sans-serif;" required></div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: #6B728E;border-style: none;">Đổi</button></div>
        <a href="{{ route('admin.posts') }}" class="btn btn-danger d-block w-100" style="border-style: none;">Quay lại</a>
    </form>
@endsection
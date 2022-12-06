<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.css')
</head>

@extends('admin.frontend.layout_admin')

@section('content')
<!-- danh sách sinh viên -->
<div id="item-1-4" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-4-tab">
    <div>
        <table class="table table-striped table-bordered" id="example" cellspacing="0" width="100%">
            <thead>
                <tr style="color: var(--bs-card-bg);background: #50577A;">
                    <th class="text-center" style="width: 60px;">ID</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Mã sinh viên</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Họ và tên</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Mật khẩu</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Role</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Nút</th>
                </tr>
            </thead>
            <tbody style="color: var(--bs-card-bg);background: #6B728E;">

            @foreach($user as $row)
                <tr style="font-family: Inter, sans-serif;color: #ffffff;">
                    <td class="text-center" style="color: var(--bs-card-bg);width: 20px;max-width: 20px;">{{ $row->id }}</td>
                    <td class="text-start" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">{{ $row->user_name }}</td>
                    <td class="text-start" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">{{ $row->name }}</td>
                    <td class="text-start" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">{{ $row->password }}</td>
                    <td class="text-start" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">{{ $row->role }}</td>
                    @if ($row->role == '1')
                    <td class="text-center" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">
                    </td>
                    @else 
                    <td class="text-center" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">
                        <form method="post" action="/admin/user/delete/{{ $row->id }}" onsubmit="return ConfirmDelete( this )">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Xóa</button>
                        </form>
                    </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
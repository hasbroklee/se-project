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

                <!-- danh sách bài viết -->
                <div id="item-1-3" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-3-tab">
                    <div>
                        <table class="table table-striped table-bordered" id="example" cellspacing="0" width="100%">
                            <thead>
                                <tr style="color: var(--bs-card-bg);background: #50577A;">
                                    <th class="text-center" style="width: 60px;">ID</th>
                                    <th class="text-center" style="width: 200px;">Ảnh</th>
                                    <th class="text-center" style="width: 300px;max-width: 300px;">Tên bài đăng</th>
                                    <th class="text-center">Nội dung</th>
                                    <th class="text-center">Nút</th>
                                </tr>
                            </thead>
                            <tbody style="color: var(--bs-card-bg);background: #6B728E;">

                            @foreach($posts->reverse() as $row)
                                <tr style="font-family: Inter, sans-serif;color: #ffffff;">
                                    <td class="text-center" style="color: var(--bs-card-bg);width: 20px;max-width: 20px;">{{ $row->id }}</td>
                                    <td class="text-center" style="color: var(--bs-card-bg);max-width: 400px;width: 200px;">
                                        <picture><img style="width: 100px;height: 80px;" src="{{ $row->img_posts }}"></picture>
                                    </td>
                                    <td class="text-start" style="color: var(--bs-card-bg);width: 300px;max-width: 300px;">{{ $row->title_posts }}</td>
                                    <td class="text-start" style="color: var(--bs-card-bg);width: 480px;max-width: 480px;">{{ $row->content_posts }}</td>
                                    <td class="text-center" style="color: var(--bs-card-bg);max-width: 400px;width: 50px;">
                                        <a href="/admin/posts/edit/{{ $row->id }}" ><button class="btn btn-success" style="margin-bottom: 7px;">Sửa</button></a>    
                                        <form method="post" action="/admin/posts/delete/{{ $row->id }}" onsubmit="return ConfirmDelete( this )">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger" type="submit">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
         
            </div>
        </div>
    </div>  

    @include('frontend.footer')
    @include('backend.js')

</body>

</html>
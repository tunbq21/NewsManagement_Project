@extends('newsLayout')


@section('newsManagement')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý tin tức</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('news.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('thongbao'))
                        <div class="alert alert-success">
                            {{ Session::get('thongbao') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th style="">Nội dung</th>
                                <th>Đường dẫn</th>
                                <th>Tên ảnh</th>
                                <th>Mã Img</th>
                                <th>Tác giả</th>
                                <th>Email</th>
                                <th>Url</th>
                                <th>Tương tác</th>
      
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $n )
                                <tr>
                                    <td>{{ $n->Id }}</td>
                                    <td>{{ $n->Title }}</td>
                                    <td style="">{{ $n->Content }}</td>
                                    <td>{{ $n->News_Url }}</td>                     
                                    <td>{{ $n->Img_Name }}</td>
                                    <td>{{ $n->Img_Url }}</td>
                                    <td>{{ $n->author_name}}</td>
                                    <td>{{ $n->author_email}}</td>
                                    <td>{{ $n->author_url}}</td>
                                    <td>
                                        <form action="{{route('news.destroy',$n->Id)}}" method="POST">
                                            <a href="{{route('news.edit',$n->Id)}}" class="btn btn-info">Sửa</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Xóa</button>
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
@endsection

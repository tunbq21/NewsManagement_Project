@extends('newsLayout')


@section('newsManagement')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý ảnh</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('image.create')}}" class="btn btn-primary float-end">Thêm mới</a>
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
                                <th>Tên ảnh </th>
                                <th>Url</th>
                                <th>Tương tác</th>
      
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($image as $n )
                                <tr>
                                    <td>{{ $n->Id }}</td>
                                    <td>{{ $n->Img_Name}}</td>
                                    <td>{{ $n->Img_Url}}</td>
                                    <td>
                                        <form action="{{route('image.destroy', $n->Id)}}" method="POST">
                                            <a href="{{route('image.edit', $n->Id)}}" class="btn btn-info">Sửa</a>
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
